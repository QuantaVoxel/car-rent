<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\LogPesanan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        LogPesanan::create($_POST);
        set_flash('success', 'Berhasil menambahkan log pesanan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menambahkan log pesanan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
