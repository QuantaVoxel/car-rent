<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\TipeKendaraan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        TipeKendaraan::create($_POST);
        set_flash('success', 'Berhasil menambahkan tipe kendaraan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menambahkan tipe kendaraan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
