<?php
require_once __DIR__ . '/../backend/bootstrap.php';

auth()->logout();
set_flash('success', 'Anda telah berhasil logout.');
header('Location: login.php');
exit;
