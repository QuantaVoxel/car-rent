<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

// Middleware for admin access
if (strpos($_SERVER['SCRIPT_NAME'], '/admin/') !== false) {
    if (!auth()->check() || !auth()->isAdmin()) {
        header('Location: /index.php');
        exit;
    }
}