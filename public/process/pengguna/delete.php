<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Pengguna;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Pengguna::delete($_POST['id_pengguna']);
        set_flash('success', 'Berhasil menghapus pengguna.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menghapus pengguna: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
