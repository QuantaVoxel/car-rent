<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Kendaraan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Kendaraan::delete($_POST['id_kendaraan']);
        set_flash('success', 'Berhasil menghapus kendaraan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menghapus kendaraan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
