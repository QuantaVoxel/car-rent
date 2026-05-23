<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\EvaluasiPesanan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        EvaluasiPesanan::create($_POST);
        set_flash('success', 'Berhasil menambahkan evaluasi.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menambahkan evaluasi: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
