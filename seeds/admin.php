<?php
// Ensure this script is run from the command line
if (PHP_SAPI !== 'cli') {
    die("This script must be run from the command line.\n");
}

require_once __DIR__ . '/../backend/bootstrap.php';

use Backend\CarRent\Models\Pengguna;

echo "--- Admin Seeder ---\n";

function input($prompt) {
    echo $prompt . ": ";
    return trim(fgets(STDIN));
}

$nama_lengkap = input("Nama Lengkap");
$email = input("Email");
$no_telepon = input("Nomor Telepon");
$password = input("Password");

if (empty($nama_lengkap) || empty($email) || empty($no_telepon) || empty($password)) {
    die("Semua field harus diisi.\n");
}

try {
    // Check if email already exists
    if (Pengguna::findByEmail($email)) {
        die("Error: Email '$email' sudah terdaftar.\n");
    }

    $data = [
        'nama_lengkap' => $nama_lengkap,
        'email' => $email,
        'no_telepon' => $no_telepon,
        'password' => $password,
        'role' => 'admin',
        'status_akun' => 'aktif'
    ];

    Pengguna::create($data);

    echo "Success: Admin '$email' berhasil dibuat.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
