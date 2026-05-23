<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\LogPesanan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        LogPesanan::update($_POST['id_log'], array_diff_key($_POST, ['id_log' => '']));
        set_flash('success', 'Berhasil mengubah log pesanan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal mengubah log pesanan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
