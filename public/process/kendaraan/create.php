<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Kendaraan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Kendaraan::create($_POST);
        set_flash('success', 'Berhasil menambahkan kendaraan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menambahkan kendaraan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
