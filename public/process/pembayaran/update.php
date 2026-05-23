<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Pembayaran;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Pembayaran::update($_POST['id_pembayaran'], array_diff_key($_POST, ['id_pembayaran' => '']));
        set_flash('success', 'Berhasil mengubah pembayaran.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal mengubah pembayaran: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
