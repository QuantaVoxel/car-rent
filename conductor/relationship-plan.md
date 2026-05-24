# Plan: Relationship Calls via JOINs in Models

## Objective
Enhance the existing PHP Models in `backend/Models/` to support fetching related data through eager loading via SQL `JOIN`s.

## Strategy: Eager Loading via JOINs
The user requested "Eager Loading via JOINs". Since PHP associative arrays do not support nested properties natively without manual mapping, and doing manual mapping for dynamic JOINs across all models is highly complex and error-prone, we will adopt a specific approach to handle `JOIN` queries.

We will modify the `all()` and `find()` methods to accept a `$with` array parameter.

### Example Signature:
```php
public static function all(array $with = [])
public static function find($id, array $with = [])
```

### Implementation Details for JOINs:
Since doing dynamic `SELECT *` from multiple tables in a `JOIN` leads to column name collisions (e.g., `id_pesanan` in `pesanan` and `id_pesanan` in `pembayaran`), we will manually define the `JOIN` clauses and alias the selected columns for requested relationships in each model. 

For each model, we will:
1.  Define a map of allowed relations.
2.  If a relation is requested in `$with`, append the specific `JOIN` clause to the SQL query.
3.  Select specific columns from the related table using aliases (e.g., `tipe_kendaraan.nama_tipe AS tipe_kendaraan_nama_tipe`).
4.  After fetching the results from `PDO`, we will iterate through the rows and nest the aliased columns into a nested array representing the relationship (e.g., creating a `['tipe_kendaraan' => ['nama_tipe' => ...]]` key in the parent array).

### Example Modification (Kendaraan.php)
```php
public static function find($id, array $with = [])
{
    $db = database();
    
    $selects = ["k.*"];
    $joins = [];
    
    if (in_array('tipe_kendaraan', $with)) {
        $selects[] = "t.nama_tipe AS tipe_kendaraan__nama_tipe, t.tarif_per_km AS tipe_kendaraan__tarif_per_km";
        $joins[] = "LEFT JOIN tipe_kendaraan t ON k.id_tipe = t.id_tipe";
    }
    
    $selectString = implode(', ', $selects);
    $joinString = implode(' ', $joins);
    
    $stmt = $db->prepare("SELECT $selectString FROM kendaraan k $joinString WHERE k.id_kendaraan = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch(\PDO::FETCH_ASSOC);
    
    if ($row) {
        return self::mapRelations($row, $with);
    }
    return false;
}

private static function mapRelations($row, $with) {
    // Logic to extract keys containing '__' and nest them into arrays
    // e.g. tipe_kendaraan__nama_tipe -> ['tipe_kendaraan']['nama_tipe']
}
```

## Abstracting the Logic (Base Model)
To prevent code duplication, we will introduce a `BaseModel` class (or trait) that handles the `mapRelations` formatting, and potentially standardizes the `all()` and `find()` query builders.

Wait, given the constraint of simple static methods, we can just add a `mapRelations` helper in `backend/Database.php` or `backend/Models/BaseModel.php`.

## Step-by-Step Execution
1.  **Create a `BaseModel` class** in `backend/Models/` with a static method `mapRelations(array $row)` that parses `__` separated keys into nested arrays.
2.  **Update `Kendaraan`**: Add `$with` parameter, `JOIN` logic for `tipe_kendaraan`.
3.  **Update `Pesanan`**: Add `$with` parameter, `JOIN` logic for `pengguna`, `tipe_kendaraan`, `kendaraan`, `pembayaran`, `evaluasi`.
4.  **Update `EvaluasiPesanan`**: Add `$with` parameter, `JOIN` logic for `pengguna`, `pesanan`.
5.  **Update `LogPesanan`**: Add `$with` parameter, `JOIN` logic for `pesanan`.
6.  **Update `Pembayaran`**: Add `$with` parameter, `JOIN` logic for `pesanan`.
7.  **Update `Pengguna`**: Add `$with` parameter, `JOIN` logic for `pesanan`, `evaluasi` (hasMany).
8.  **Update `TipeKendaraan`**: Add `$with` parameter, `JOIN` logic for `kendaraan`, `pesanan` (hasMany).

## Handling `hasMany` Grouping
Since a `LEFT JOIN` on a `hasMany` relationship returns multiple rows for a single parent record, the `BaseModel::mapRelations` (or equivalent method) will process the raw PDO result array:
1. It will group rows by the parent's primary key.
2. It will extract parent attributes into the grouped array once.
3. It will extract the prefixed relationship attributes (e.g., `pesanan__id_pesanan`) for each row and append them to a nested array (e.g., `$parent['pesanan'][] = [...]`).
4. This ensures that the result format remains clean: `[['id_pengguna' => 1, 'pesanan' => [['id_pesanan' => 1], ['id_pesanan' => 2]]]]`.