<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Pembayaran;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Pembayaran::delete($_POST['id_pembayaran']);
        set_flash('success', 'Berhasil menghapus pembayaran.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menghapus pembayaran: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
