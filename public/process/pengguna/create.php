<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Pengguna;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Pengguna::create($_POST);
        set_flash('success', 'Berhasil menambahkan pengguna.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menambahkan pengguna: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
