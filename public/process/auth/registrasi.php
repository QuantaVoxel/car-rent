<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Pengguna;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Simple validation to ensure email doesn't exist
        if (Pengguna::findByEmail($_POST['email'])) {
            throw new Exception("Email sudah terdaftar.");
        }

        Pengguna::create($_POST);
        set_flash('success', 'Registrasi berhasil. Silahkan login.');
        header('Location: ../../login.php');
        exit;
    } catch (Exception $e) {
        set_flash('error', 'Registrasi gagal: ' . $e->getMessage());
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
