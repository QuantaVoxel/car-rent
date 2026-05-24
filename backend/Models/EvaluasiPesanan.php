<?php

namespace Backend\CarRent\Models;

class EvaluasiPesanan extends BaseModel
{
    public static function all(array $with = [])
    {
        $db = database();
        $selects = ["e.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('pesanan', $with)) {
            $selects[] = "p.kode_pesanan AS pesanan__kode_pesanan, p.status_pesanan AS pesanan__status_pesanan";
            $joins[] = "LEFT JOIN pesanan p ON e.id_pesanan = p.id_pesanan";
            $withTypes['pesanan'] = 'one';
        }

        if (in_array('pengguna', $with)) {
            $selects[] = "u.nama_lengkap AS pengguna__nama_lengkap, u.email AS pengguna__email";
            $joins[] = "LEFT JOIN pengguna u ON e.id_pengguna = u.id_pengguna";
            $withTypes['pengguna'] = 'one';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM evaluasi_pesanan e " . implode(' ', $joins);
        $stmt = $db->query($sql);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $result = self::mapRows($rows, 'id_evaluasi', $withTypes);
        return new \Bag\Collection($result);
    }

    public static function find($id, array $with = [])
    {
        $db = database();
        $selects = ["e.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('pesanan', $with)) {
            $selects[] = "p.kode_pesanan AS pesanan__kode_pesanan, p.status_pesanan AS pesanan__status_pesanan";
            $joins[] = "LEFT JOIN pesanan p ON e.id_pesanan = p.id_pesanan";
            $withTypes['pesanan'] = 'one';
        }

        if (in_array('pengguna', $with)) {
            $selects[] = "u.nama_lengkap AS pengguna__nama_lengkap, u.email AS pengguna__email";
            $joins[] = "LEFT JOIN pengguna u ON e.id_pengguna = u.id_pengguna";
            $withTypes['pengguna'] = 'one';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM evaluasi_pesanan e " . implode(' ', $joins) . " WHERE e.id_evaluasi = ?";
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
        $stmt = $db->prepare("INSERT INTO evaluasi_pesanan ($columns) VALUES ($placeholders)");
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
        $stmt = $db->prepare("UPDATE evaluasi_pesanan SET $setStr WHERE id_evaluasi = ?");
        $values = array_values($data);
        $values[] = $id;
        return $stmt->execute($values);
    }

    public static function delete($id)
    {
        $db = database();
        $stmt = $db->prepare("DELETE FROM evaluasi_pesanan WHERE id_evaluasi = ?");
        return $stmt->execute([$id]);
    }
}
