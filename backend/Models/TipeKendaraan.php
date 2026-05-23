<?php

namespace Backend\CarRent\Models;

class TipeKendaraan
{
    public static function all()
    {
        $db = database();
        $stmt = $db->query("SELECT * FROM tipe_kendaraan");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $db = database();
        $stmt = $db->prepare("SELECT * FROM tipe_kendaraan WHERE id_tipe = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create(array $data)
    {
        $db = database();
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $stmt = $db->prepare("INSERT INTO tipe_kendaraan ($columns) VALUES ($placeholders)");
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
        $stmt = $db->prepare("UPDATE tipe_kendaraan SET $setStr WHERE id_tipe = ?");
        $values = array_values($data);
        $values[] = $id;
        return $stmt->execute($values);
    }

    public static function delete($id)
    {
        $db = database();
        $stmt = $db->prepare("DELETE FROM tipe_kendaraan WHERE id_tipe = ?");
        return $stmt->execute([$id]);
    }
}
