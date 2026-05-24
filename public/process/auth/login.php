<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (auth()->attempt($email, $password)) {
        set_flash('success', 'Login berhasil. Selamat datang!');

        if (auth()->isAdmin()) {
            header('Location: ../../admin/index.php');
        } else {
            header('Location: ../../index.php');
        }
        exit;
    } else {
        set_flash('error', 'Login gagal. Email atau password salah.');
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
