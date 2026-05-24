<?php
require_once __DIR__ . '/../../backend/bootstrap.php';

use Backend\CarRent\Models\Pembayaran;
use Backend\CarRent\Models\Pesanan;

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: /index.php');
    exit;
}

$pembayaran = Pembayaran::find($id, ['pesanan']);

if (!$pembayaran) {
    header('Location: /index.php');
    exit;
}

try {
    $db = database();
    $db->beginTransaction();

    // 1. Update Pembayaran
    Pembayaran::update($id, [
        'status_pembayaran' => 'berhasil',
        'waktu_bayar' => date('Y-m-d H:i:s')
    ]);

    // 2. Update Pesanan Status to 'dikonfirmasi'
    Pesanan::update($pembayaran['id_pesanan'], [
        'status_pesanan' => 'dikonfirmasi',
        'waktu_konfirmasi' => date('Y-m-d H:i:s')
    ]);

    $db->commit();
    set_flash('success', 'Pembayaran berhasil dikonfirmasi! Pesanan Anda sedang diproses.');
    header('Location: /payment.php?id=' . $pembayaran['id_pesanan']);
    exit;

} catch (\Exception $e) {
    $db->rollBack();
    set_flash('error', 'Gagal memproses konfirmasi pembayaran: ' . $e->getMessage());
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
