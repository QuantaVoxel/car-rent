<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Pesanan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Pesanan::create($_POST);
        set_flash('success', 'Berhasil menambahkan pesanan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menambahkan pesanan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
