<?php

namespace Backend\CarRent\Models;

class Pesanan extends BaseModel
{
    public static function all(array $with = [])
    {
        $db = database();
        $selects = ["p.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('pengguna', $with)) {
            $selects[] = "u.nama_lengkap AS pengguna__nama_lengkap, u.email AS pengguna__email, u.no_telepon AS pengguna__no_telepon";
            $joins[] = "LEFT JOIN pengguna u ON p.id_pengguna = u.id_pengguna";
            $withTypes['pengguna'] = 'one';
        }

        if (in_array('tipe_kendaraan', $with)) {
            $selects[] = "t.nama_tipe AS tipe_kendaraan__nama_tipe, t.tarif_per_km AS tipe_kendaraan__tarif_per_km";
            $joins[] = "LEFT JOIN tipe_kendaraan t ON p.id_tipe_kendaraan = t.id_tipe";
            $withTypes['tipe_kendaraan'] = 'one';
        }

        if (in_array('kendaraan', $with)) {
            $selects[] = "k.nama_kendaraan AS kendaraan__nama_kendaraan, k.plat_nomor AS kendaraan__plat_nomor";
            $joins[] = "LEFT JOIN kendaraan k ON p.id_kendaraan = k.id_kendaraan";
            $withTypes['kendaraan'] = 'one';
        }

        if (in_array('pembayaran', $with)) {
            $selects[] = "pm.kode_transaksi AS pembayaran__kode_transaksi, pm.status_pembayaran AS pembayaran__status_pembayaran, pm.jumlah AS pembayaran__jumlah";
            $joins[] = "LEFT JOIN pembayaran pm ON p.id_pesanan = pm.id_pesanan";
            $withTypes['pembayaran'] = 'one';
        }

        if (in_array('evaluasi', $with)) {
            $selects[] = "e.rating AS evaluasi__rating, e.komentar AS evaluasi__komentar";
            $joins[] = "LEFT JOIN evaluasi_pesanan e ON p.id_pesanan = e.id_pesanan";
            $withTypes['evaluasi'] = 'one';
        }

        if (in_array('log', $with)) {
            $selects[] = "l.status_lama AS log__status_lama, l.status_baru AS log__status_baru, l.keterangan AS log__keterangan, l.created_at AS log__created_at";
            $joins[] = "LEFT JOIN log_pesanan l ON p.id_pesanan = l.id_pesanan";
            $withTypes['log'] = 'many';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM pesanan p " . implode(' ', $joins);
        $stmt = $db->query($sql);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $result = self::mapRows($rows, 'id_pesanan', $withTypes);
        return new \Bag\Collection($result);
    }

    public static function find($id, array $with = [])
    {
        $db = database();
        $selects = ["p.*"];
        $joins = [];
        $withTypes = [];

        if (in_array('pengguna', $with)) {
            $selects[] = "u.nama_lengkap AS pengguna__nama_lengkap, u.email AS pengguna__email, u.no_telepon AS pengguna__no_telepon";
            $joins[] = "LEFT JOIN pengguna u ON p.id_pengguna = u.id_pengguna";
            $withTypes['pengguna'] = 'one';
        }

        if (in_array('tipe_kendaraan', $with)) {
            $selects[] = "t.nama_tipe AS tipe_kendaraan__nama_tipe, t.tarif_per_km AS tipe_kendaraan__tarif_per_km";
            $joins[] = "LEFT JOIN tipe_kendaraan t ON p.id_tipe_kendaraan = t.id_tipe";
            $withTypes['tipe_kendaraan'] = 'one';
        }

        if (in_array('kendaraan', $with)) {
            $selects[] = "k.nama_kendaraan AS kendaraan__nama_kendaraan, k.plat_nomor AS kendaraan__plat_nomor";
            $joins[] = "LEFT JOIN kendaraan k ON p.id_kendaraan = k.id_kendaraan";
            $withTypes['kendaraan'] = 'one';
        }

        if (in_array('pembayaran', $with)) {
            $selects[] = "pm.kode_transaksi AS pembayaran__kode_transaksi, pm.status_pembayaran AS pembayaran__status_pembayaran, pm.jumlah AS pembayaran__jumlah";
            $joins[] = "LEFT JOIN pembayaran pm ON p.id_pesanan = pm.id_pesanan";
            $withTypes['pembayaran'] = 'one';
        }

        if (in_array('evaluasi', $with)) {
            $selects[] = "e.rating AS evaluasi__rating, e.komentar AS evaluasi__komentar";
            $joins[] = "LEFT JOIN evaluasi_pesanan e ON p.id_pesanan = e.id_pesanan";
            $withTypes['evaluasi'] = 'one';
        }

        if (in_array('log', $with)) {
            $selects[] = "l.status_lama AS log__status_lama, l.status_baru AS log__status_baru, l.keterangan AS log__keterangan, l.created_at AS log__created_at";
            $joins[] = "LEFT JOIN log_pesanan l ON p.id_pesanan = l.id_pesanan";
            $withTypes['log'] = 'many';
        }

        $sql = "SELECT " . implode(', ', $selects) . " FROM pesanan p " . implode(' ', $joins) . " WHERE p.id_pesanan = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if (empty($rows)) return null;

        $mapped = self::mapRows($rows, 'id_pesanan', $withTypes);
        return $mapped[0] ?? null;
    }

    public static function create(array $data)
    {
        $db = database();
        
        // Generate kode_pesanan if not provided
        if (!isset($data['kode_pesanan'])) {
            $prefix = 'ORD-' . date('Ymd') . '-';
            $stmt = $db->prepare("SELECT COUNT(*) FROM pesanan WHERE kode_pesanan LIKE ?");
            $stmt->execute([$prefix . '%']);
            $count = $stmt->fetchColumn();
            $data['kode_pesanan'] = $prefix . str_pad($count + 1, 3, '0', STR_PAD_LEFT);
        }

        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $stmt = $db->prepare("INSERT INTO pesanan ($columns) VALUES ($placeholders)");
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
        $stmt = $db->prepare("UPDATE pesanan SET $setStr WHERE id_pesanan = ?");
        $values = array_values($data);
        $values[] = $id;
        return $stmt->execute($values);
    }

    public static function delete($id)
    {
        $db = database();
        $stmt = $db->prepare("DELETE FROM pesanan WHERE id_pesanan = ?");
        return $stmt->execute([$id]);
    }
}
