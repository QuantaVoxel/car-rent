<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\LogPesanan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        LogPesanan::delete($_POST['id_log']);
        set_flash('success', 'Berhasil menghapus log pesanan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menghapus log pesanan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
