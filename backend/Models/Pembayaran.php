<?php

namespace Backend\CarRent\Models;

class Pembayaran extends BaseModel
{
    public static function all(array $with = [])
    {
        $db = database();
        $selects = ["pm.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('pesanan', $with)) {
            $selects[] = "p.kode_pesanan AS pesanan__kode_pesanan, p.status_pesanan AS pesanan__status_pesanan, p.total_tarif AS pesanan__total_tarif";
            $joins[] = "LEFT JOIN pesanan p ON pm.id_pesanan = p.id_pesanan";
            $withTypes['pesanan'] = 'one';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM pembayaran pm " . implode(' ', $joins);
        $stmt = $db->query($sql);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $result = self::mapRows($rows, 'id_pembayaran', $withTypes);
        return new \Bag\Collection($result);
    }

    public static function find($id, array $with = [])
    {
        $db = database();
        $selects = ["pm.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('pesanan', $with)) {
            $selects[] = "p.kode_pesanan AS pesanan__kode_pesanan, p.status_pesanan AS pesanan__status_pesanan, p.total_tarif AS pesanan__total_tarif";
            $joins[] = "LEFT JOIN pesanan p ON pm.id_pesanan = p.id_pesanan";
            $withTypes['pesanan'] = 'one';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM pembayaran pm " . implode(' ', $joins) . " WHERE pm.id_pembayaran = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $row ? self::mapSingleRow($row, $withTypes) : null;
    }

    public static function create(array $data)
    {
        $db = database();

        // Sanitize data: convert empty strings to null
        foreach ($data as $key => $value) {
            if ($value === '') {
                $data[$key] = null;
            }
        }

        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $stmt = $db->prepare("INSERT INTO pembayaran ($columns) VALUES ($placeholders)");
        $stmt->execute(array_values($data));
        return $db->lastInsertId();
    }

    public static function update($id, array $data)
    {
        $db = database();

        // Sanitize data: convert empty strings to null
        foreach ($data as $key => $value) {
            if ($value === '') {
                $data[$key] = null;
            }
        }

        $sets = [];
        foreach (array_keys($data) as $column) {
            $sets[] = "$column = ?";
        }
        $setStr = implode(', ', $sets);
        $stmt = $db->prepare("UPDATE pembayaran SET $setStr WHERE id_pembayaran = ?");
        $values = array_values($data);
        $values[] = $id;
        return $stmt->execute($values);
    }

    public static function delete($id)
    {
        $db = database();
        $stmt = $db->prepare("DELETE FROM pembayaran WHERE id_pembayaran = ?");
        return $stmt->execute([$id]);
    }
}
