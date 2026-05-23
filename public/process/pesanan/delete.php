<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Pesanan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Pesanan::delete($_POST['id_pesanan']);
        set_flash('success', 'Berhasil menghapus pesanan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menghapus pesanan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
