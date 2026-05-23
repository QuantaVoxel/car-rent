<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Pesanan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Pesanan::update($_POST['id_pesanan'], array_diff_key($_POST, ['id_pesanan' => '']));
        set_flash('success', 'Berhasil mengubah pesanan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal mengubah pesanan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
