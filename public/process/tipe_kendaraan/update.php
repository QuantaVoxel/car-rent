<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\TipeKendaraan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        TipeKendaraan::update($_POST['id_tipe'], array_diff_key($_POST, ['id_tipe' => '']));
        set_flash('success', 'Berhasil mengubah tipe kendaraan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal mengubah tipe kendaraan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
