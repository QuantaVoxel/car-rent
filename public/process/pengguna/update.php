<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Pengguna;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Pengguna::update($_POST['id_pengguna'], array_diff_key($_POST, ['id_pengguna' => '']));
        set_flash('success', 'Berhasil mengubah pengguna.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal mengubah pengguna: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
