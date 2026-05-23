<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Pembayaran;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Pembayaran::create($_POST);
        set_flash('success', 'Berhasil menambahkan pembayaran.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menambahkan pembayaran: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
