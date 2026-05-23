<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\TipeKendaraan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        TipeKendaraan::delete($_POST['id_tipe']);
        set_flash('success', 'Berhasil menghapus tipe kendaraan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menghapus tipe kendaraan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
