<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Kendaraan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Kendaraan::update($_POST['id_kendaraan'], array_diff_key($_POST, ['id_kendaraan' => '']));
        set_flash('success', 'Berhasil mengubah kendaraan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal mengubah kendaraan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
