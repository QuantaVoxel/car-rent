<?php

namespace Backend\CarRent\Models;

class LogPesanan extends BaseModel
{
    public static function all(array $with = [])
    {
        $db = database();
        $selects = ["l.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('pesanan', $with)) {
            $selects[] = "p.kode_pesanan AS pesanan__kode_pesanan, p.status_pesanan AS pesanan__status_pesanan";
            $joins[] = "LEFT JOIN pesanan p ON l.id_pesanan = p.id_pesanan";
            $withTypes['pesanan'] = 'one';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM log_pesanan l " . implode(' ', $joins);
        $stmt = $db->query($sql);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $result = self::mapRows($rows, 'id_log', $withTypes);
        return new \Bag\Collection($result);
    }

    public static function find($id, array $with = [])
    {
        $db = database();
        $selects = ["l.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('pesanan', $with)) {
            $selects[] = "p.kode_pesanan AS pesanan__kode_pesanan, p.status_pesanan AS pesanan__status_pesanan";
            $joins[] = "LEFT JOIN pesanan p ON l.id_pesanan = p.id_pesanan";
            $withTypes['pesanan'] = 'one';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM log_pesanan l " . implode(' ', $joins) . " WHERE l.id_log = ?";
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
        $stmt = $db->prepare("INSERT INTO log_pesanan ($columns) VALUES ($placeholders)");
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
        $stmt = $db->prepare("UPDATE log_pesanan SET $setStr WHERE id_log = ?");
        $values = array_values($data);
        $values[] = $id;
        return $stmt->execute($values);
    }

    public static function delete($id)
    {
        $db = database();
        $stmt = $db->prepare("DELETE FROM log_pesanan WHERE id_log = ?");
        return $stmt->execute([$id]);
    }
}
