<?php

namespace Backend\CarRent\Models;

class TipeKendaraan extends BaseModel
{
    public static function all(array $with = [])
    {
        $db = database();
        $selects = ["t.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('kendaraan', $with)) {
            $selects[] = "k.id_kendaraan AS kendaraan__id_kendaraan, k.nama_kendaraan AS kendaraan__nama_kendaraan, k.plat_nomor AS kendaraan__plat_nomor";
            $joins[] = "LEFT JOIN kendaraan k ON t.id_tipe = k.id_tipe";
            $withTypes['kendaraan'] = 'many';
        }

        if (in_array('pesanan', $with)) {
            $selects[] = "p.id_pesanan AS pesanan__id_pesanan, p.kode_pesanan AS pesanan__kode_pesanan, p.status_pesanan AS pesanan__status_pesanan";
            $joins[] = "LEFT JOIN pesanan p ON t.id_tipe = p.id_tipe_kendaraan";
            $withTypes['pesanan'] = 'many';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM tipe_kendaraan t " . implode(' ', $joins);
        $stmt = $db->query($sql);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $result = self::mapRows($rows, 'id_tipe', $withTypes);
        return new \Bag\Collection($result);
    }

    public static function find($id, array $with = [])
    {
        $db = database();
        $selects = ["t.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('kendaraan', $with)) {
            $selects[] = "k.id_kendaraan AS kendaraan__id_kendaraan, k.nama_kendaraan AS kendaraan__nama_kendaraan, k.plat_nomor AS kendaraan__plat_nomor";
            $joins[] = "LEFT JOIN kendaraan k ON t.id_tipe = k.id_tipe";
            $withTypes['kendaraan'] = 'many';
        }

        if (in_array('pesanan', $with)) {
            $selects[] = "p.id_pesanan AS pesanan__id_pesanan, p.kode_pesanan AS pesanan__kode_pesanan, p.status_pesanan AS pesanan__status_pesanan";
            $joins[] = "LEFT JOIN pesanan p ON t.id_tipe = p.id_tipe_kendaraan";
            $withTypes['pesanan'] = 'many';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM tipe_kendaraan t " . implode(' ', $joins) . " WHERE t.id_tipe = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if (empty($rows)) return null;

        $mapped = self::mapRows($rows, 'id_tipe', $withTypes);
        return $mapped[0] ?? null;
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
