<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\EvaluasiPesanan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        EvaluasiPesanan::delete($_POST['id_evaluasi']);
        set_flash('success', 'Berhasil menghapus evaluasi.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menghapus evaluasi: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
