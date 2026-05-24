<?php

namespace Backend\CarRent\Models;

class Pengguna extends BaseModel
{
    public static function all(array $with = [])
    {
        $db = database();
        $selects = ["u.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('pesanan', $with)) {
            $selects[] = "p.id_pesanan AS pesanan__id_pesanan, p.kode_pesanan AS pesanan__kode_pesanan, p.status_pesanan AS pesanan__status_pesanan";
            $joins[] = "LEFT JOIN pesanan p ON u.id_pengguna = p.id_pengguna";
            $withTypes['pesanan'] = 'many';
        }

        if (in_array('evaluasi', $with)) {
            $selects[] = "e.id_evaluasi AS evaluasi__id_evaluasi, e.rating AS evaluasi__rating, e.komentar AS evaluasi__komentar";
            $joins[] = "LEFT JOIN evaluasi_pesanan e ON u.id_pengguna = e.id_pengguna";
            $withTypes['evaluasi'] = 'many';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM pengguna u " . implode(' ', $joins);
        $stmt = $db->query($sql);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $result = self::mapRows($rows, 'id_pengguna', $withTypes);
        return new \Bag\Collection($result);
    }

    public static function find($id, array $with = [])
    {
        $db = database();
        $selects = ["u.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('pesanan', $with)) {
            $selects[] = "p.id_pesanan AS pesanan__id_pesanan, p.kode_pesanan AS pesanan__kode_pesanan, p.status_pesanan AS pesanan__status_pesanan";
            $joins[] = "LEFT JOIN pesanan p ON u.id_pengguna = p.id_pengguna";
            $withTypes['pesanan'] = 'many';
        }

        if (in_array('evaluasi', $with)) {
            $selects[] = "e.id_evaluasi AS evaluasi__id_evaluasi, e.rating AS evaluasi__rating, e.komentar AS evaluasi__komentar";
            $joins[] = "LEFT JOIN evaluasi_pesanan e ON u.id_pengguna = e.id_pengguna";
            $withTypes['evaluasi'] = 'many';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM pengguna u " . implode(' ', $joins) . " WHERE u.id_pengguna = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if (empty($rows)) return null;

        $mapped = self::mapRows($rows, 'id_pengguna', $withTypes);
        return $mapped[0] ?? null;
    }

    public static function findByEmail($email)
    {
        $db = database();
        $stmt = $db->prepare("SELECT * FROM pengguna WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create(array $data)
    {
        $db = database();
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $stmt = $db->prepare("INSERT INTO pengguna ($columns) VALUES ($placeholders)");
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
        $stmt = $db->prepare("UPDATE pengguna SET $setStr WHERE id_pengguna = ?");
        $values = array_values($data);
        $values[] = $id;
        return $stmt->execute($values);
    }

    public static function delete($id)
    {
        $db = database();
        $stmt = $db->prepare("DELETE FROM pengguna WHERE id_pengguna = ?");
        return $stmt->execute([$id]);
    }
}
