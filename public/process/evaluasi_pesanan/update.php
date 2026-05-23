<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\EvaluasiPesanan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        EvaluasiPesanan::update($_POST['id_evaluasi'], array_diff_key($_POST, ['id_evaluasi' => '']));
        set_flash('success', 'Berhasil mengubah evaluasi.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal mengubah evaluasi: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
