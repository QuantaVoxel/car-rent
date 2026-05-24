<?php

namespace Backend\CarRent\Models;

class Kendaraan extends BaseModel
{
    public static function all(array $with = [])
    {
        $db = database();
        $selects = ["k.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('tipe_kendaraan', $with)) {
            $selects[] = "t.nama_tipe AS tipe_kendaraan__nama_tipe, t.deskripsi AS tipe_kendaraan__deskripsi, t.kapasitas AS tipe_kendaraan__kapasitas, t.tarif_per_km AS tipe_kendaraan__tarif_per_km, t.tarif_base AS tipe_kendaraan__tarif_base, t.icon_url AS tipe_kendaraan__icon_url";
            $joins[] = "LEFT JOIN tipe_kendaraan t ON k.id_tipe = t.id_tipe";
            $withTypes['tipe_kendaraan'] = 'one';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM kendaraan k " . implode(' ', $joins);
        $stmt = $db->query($sql);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $result = self::mapRows($rows, 'id_kendaraan', $withTypes);
        return new \Bag\Collection($result);
    }

    public static function find($id, array $with = [])
    {
        $db = database();
        $selects = ["k.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('tipe_kendaraan', $with)) {
            $selects[] = "t.nama_tipe AS tipe_kendaraan__nama_tipe, t.deskripsi AS tipe_kendaraan__deskripsi, t.kapasitas AS tipe_kendaraan__kapasitas, t.tarif_per_km AS tipe_kendaraan__tarif_per_km, t.tarif_base AS tipe_kendaraan__tarif_base, t.icon_url AS tipe_kendaraan__icon_url";
            $joins[] = "LEFT JOIN tipe_kendaraan t ON k.id_tipe = t.id_tipe";
            $withTypes['tipe_kendaraan'] = 'one';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM kendaraan k " . implode(' ', $joins) . " WHERE k.id_kendaraan = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $row ? self::mapSingleRow($row, $withTypes) : null;
    }

    public static function create(array $data)
    {
        $db = database();
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $stmt = $db->prepare("INSERT INTO kendaraan ($columns) VALUES ($placeholders)");
        $stmt->execute(array_values($data));
        return $db->lastInsertId();
    }

    public static function update($id, array $data)
    {
        $db = database();
        $sets = [];
        foreach (array_keys($data) as $column) {
            $sets[] = "$column = ?";
        }
        $setStr = implode(', ', $sets);
        $stmt = $db->prepare("UPDATE kendaraan SET $setStr WHERE id_kendaraan = ?");
        $values = array_values($data);
        $values[] = $id;
        return $stmt->execute($values);
    }

    public static function delete($id)
    {
        $db = database();
        $stmt = $db->prepare("DELETE FROM kendaraan WHERE id_kendaraan = ?");
        return $stmt->execute([$id]);
    }
}
