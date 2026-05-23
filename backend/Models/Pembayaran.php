<?php

namespace Backend\CarRent\Models;

class Pembayaran
{
    public static function all()
    {
        $db = database();
        $stmt = $db->query("SELECT * FROM pembayaran");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $db = database();
        $stmt = $db->prepare("SELECT * FROM pembayaran WHERE id_pembayaran = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create(array $data)
    {
        $db = database();
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $stmt = $db->prepare("INSERT INTO pembayaran ($columns) VALUES ($placeholders)");
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
