<?php
require_once __DIR__ . '/../backend/bootstrap.php';

use Backend\CarRent\Models\Pengguna;
use Backend\CarRent\Models\TipeKendaraan;
use Backend\CarRent\Models\Kendaraan;
use Backend\CarRent\Models\Pesanan;
use Backend\CarRent\Models\Pembayaran;
use Backend\CarRent\Models\EvaluasiPesanan;

$db = database();

echo "Memulai seeding data development...\n";

// Matikan constraint sementara untuk truncate
$db->exec("SET FOREIGN_KEY_CHECKS = 0;");
$db->exec("TRUNCATE TABLE log_pesanan;");
$db->exec("TRUNCATE TABLE evaluasi_pesanan;");
$db->exec("TRUNCATE TABLE pembayaran;");
$db->exec("TRUNCATE TABLE pesanan;");
$db->exec("TRUNCATE TABLE kendaraan;");
$db->exec("TRUNCATE TABLE tipe_kendaraan;");
// Bersihkan pengguna dummy sebelumnya
$db->exec("DELETE FROM pengguna WHERE email LIKE 'dummy%';");
$db->exec("SET FOREIGN_KEY_CHECKS = 1;");

echo "1. Seeding Tipe Kendaraan (10)...\n";
$tipe_names = ['City Car', 'MPV', 'SUV', 'Hatchback', 'Sedan', 'Sport', 'Minibus', 'Pickup', 'Double Cabin', 'Motor Matic'];
$inserted_tipes = [];
for ($i = 0; $i < 10; $i++) {
    $id = TipeKendaraan::create([
        'nama_tipe' => $tipe_names[$i],
        'deskripsi' => 'Kategori kendaraan ' . $tipe_names[$i] . ' yang nyaman dan terawat.',
        'kapasitas' => rand(2, 8),
        'tarif_per_km' => rand(20, 50) * 100,
        'tarif_base' => rand(100, 300) * 1000,
        'is_active' => 1
    ]);
    $inserted_tipes[] = $id;
}

echo "2. Seeding Kendaraan (20)...\n";
$kendaraan_names = ['Avanza', 'Xenia', 'Innova', 'Pajero', 'Fortuner', 'Brio', 'Jazz', 'Yaris', 'HR-V', 'CR-V'];
$colors = ['Hitam', 'Putih', 'Silver', 'Abu-abu', 'Merah'];
$inserted_kendaraans = [];
for ($i = 0; $i < 20; $i++) {
    $id = Kendaraan::create([
        'id_tipe' => $inserted_tipes[array_rand($inserted_tipes)],
        'nama_kendaraan' => 'Toyota ' . $kendaraan_names[array_rand($kendaraan_names)],
        'plat_nomor' => 'B ' . rand(1000, 9999) . ' ' . chr(rand(65, 90)) . chr(rand(65, 90)),
        'warna' => $colors[array_rand($colors)],
        'tahun' => rand(2018, 2024),
        'harga_perhari' => rand(300, 800) * 1000,
        'is_manual' => rand(0, 1),
        'jenis_bahan_bakar' => ['bensin', 'diesel', 'listrik'][rand(0, 2)],
        'kapasitas_penumpang' => rand(4, 7),
        'status' => 'tersedia'
    ]);
    $inserted_kendaraans[] = $id;
}

echo "3. Seeding Pengguna (5)...\n";
$inserted_penggunas = [];
for ($i = 1; $i <= 5; $i++) {
    $id = Pengguna::create([
        'nama_lengkap' => 'Pelanggan Dummy ' . $i,
        'email' => 'dummy' . $i . '@example.com',
        'no_telepon' => '0812345678' . str_pad($i, 2, '0', STR_PAD_LEFT),
        'password' => password_hash('password123', PASSWORD_DEFAULT),
        'role' => 'pengguna',
        'status_akun' => 'aktif'
    ]);
    $inserted_penggunas[] = $id;
}

echo "4. Seeding Pesanan (20) & Otomatis Log...\n";
$final_statuses = ['dikonfirmasi', 'kendaraan_dikirim', 'dalam_perjalanan', 'selesai', 'selesai', 'selesai', 'dibatalkan', 'menunggu_konfirmasi'];
$inserted_pesanans = [];

for ($i = 1; $i <= 20; $i++) {
    $jarak = rand(5, 50) + (rand(0, 99) / 100);
    $tarif_base = rand(50, 100) * 1000;
    $tarif_jarak = $jarak * 5000;
    $total = $tarif_base + $tarif_jarak;
    
    $final_status = $final_statuses[array_rand($final_statuses)];
    $id_kendaraan = in_array($final_status, ['menunggu_konfirmasi', 'dibatalkan']) ? null : $inserted_kendaraans[array_rand($inserted_kendaraans)];
    
    // Step 1: Create as 'menunggu_konfirmasi' (memicu log 'Pesanan dibuat')
    $pesanan_data = [
        'id_pengguna' => $inserted_penggunas[array_rand($inserted_penggunas)],
        'id_tipe_kendaraan' => $inserted_tipes[array_rand($inserted_tipes)],
        'id_kendaraan' => null,
        'lokasi_jemput' => 'Jalan Jemput No ' . rand(1, 100),
        'latitude_jemput' => -6.200000 + (rand(-100, 100) / 10000),
        'longitude_jemput' => 106.816666 + (rand(-100, 100) / 10000),
        'lokasi_tujuan' => 'Jalan Tujuan No ' . rand(1, 100),
        'latitude_tujuan' => -6.200000 + (rand(-100, 100) / 10000),
        'longitude_tujuan' => 106.816666 + (rand(-100, 100) / 10000),
        'jarak_km' => $jarak,
        'tarif_base' => $tarif_base,
        'tarif_jarak' => $tarif_jarak,
        'total_tarif' => $total,
        'status_pesanan' => 'menunggu_konfirmasi',
        'catatan_pengguna' => 'Tolong tepat waktu',
        'waktu_pesan' => date('Y-m-d H:i:s', strtotime('-' . rand(1, 30) . ' days'))
    ];
    
    $id_pesanan = Pesanan::create($pesanan_data);
    
    // Step 2: Simulasi lifecycle via update (memicu log status_pesanan diupdate)
    if ($final_status !== 'menunggu_konfirmasi') {
        if ($final_status === 'dibatalkan') {
            Pesanan::update($id_pesanan, ['status_pesanan' => 'dibatalkan', 'catatan_admin' => 'Dibatalkan oleh sistem']);
        } else {
            // Konfirmasi
            Pesanan::update($id_pesanan, ['status_pesanan' => 'dikonfirmasi', 'id_kendaraan' => $id_kendaraan]);
            
            if (in_array($final_status, ['kendaraan_dikirim', 'dalam_perjalanan', 'selesai'])) {
                Pesanan::update($id_pesanan, ['status_pesanan' => 'kendaraan_dikirim']);
            }
            if (in_array($final_status, ['dalam_perjalanan', 'selesai'])) {
                Pesanan::update($id_pesanan, ['status_pesanan' => 'dalam_perjalanan']);
            }
            if ($final_status === 'selesai') {
                Pesanan::update($id_pesanan, ['status_pesanan' => 'selesai']);
            }
        }
    }

    $inserted_pesanans[] = [
        'id' => $id_pesanan,
        'status' => $final_status,
        'total' => $total,
        'id_pengguna' => $pesanan_data['id_pengguna']
    ];
}

echo "5. Seeding Pembayaran (15)...\n";
$pembayaran_count = 0;
foreach ($inserted_pesanans as $pesanan) {
    if (in_array($pesanan['status'], ['dibatalkan', 'menunggu_konfirmasi'])) {
        continue;
    }
    
    Pembayaran::create([
        'id_pesanan' => $pesanan['id'],
        'kode_transaksi' => 'QRIS-' . time() . '-' . rand(100, 999),
        'metode' => 'QRIS',
        'jumlah' => $pesanan['total'],
        'qris_string' => '00020101021126570011ID.ESPAY.WWW011800000000000...',
        'status_pembayaran' => $pesanan['status'] === 'selesai' ? 'berhasil' : 'menunggu',
        'waktu_bayar' => $pesanan['status'] === 'selesai' ? date('Y-m-d H:i:s') : null
    ]);
    
    $pembayaran_count++;
    if ($pembayaran_count >= 15) break;
}

echo "6. Seeding Evaluasi Pesanan (15)...\n";
$evaluasi_count = 0;
foreach ($inserted_pesanans as $pesanan) {
    if ($pesanan['status'] === 'selesai') {
        try {
            EvaluasiPesanan::create([
                'id_pesanan' => $pesanan['id'],
                'id_pengguna' => $pesanan['id_pengguna'],
                'rating' => rand(3, 5),
                'komentar' => 'Pelayanan sangat ' . (rand(0, 1) ? 'baik' : 'memuaskan') . '!'
            ]);
            $evaluasi_count++;
        } catch (\Exception $e) {}
    }
    if ($evaluasi_count >= 15) break;
}

// Tambah evaluasi paksa jika selesai < 15
if ($evaluasi_count < 15) {
    foreach ($inserted_pesanans as $pesanan) {
        if ($evaluasi_count >= 15) break;
        try {
            EvaluasiPesanan::create([
                'id_pesanan' => $pesanan['id'],
                'id_pengguna' => $pesanan['id_pengguna'],
                'rating' => rand(1, 5),
                'komentar' => 'Komentar dummy tambahan.'
            ]);
            $evaluasi_count++;
        } catch (\Exception $e) {}
    }
}

echo "Selesai! Database berhasil di-seed.\n";
