<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Kendaraan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $data = array_diff_key($_POST, ['avatar_remove' => '']);
        
        // Handle file upload
        if (isset($_FILES['foto_kendaraan']) && $_FILES['foto_kendaraan']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = __DIR__ . '/../../uploads/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            
            $file_extension = pathinfo($_FILES['foto_kendaraan']['name'], PATHINFO_EXTENSION);
            $filename = uniqid('car_', true) . '.' . $file_extension;
            $target_file = $upload_dir . $filename;
            
            if (move_uploaded_file($_FILES['foto_kendaraan']['tmp_name'], $target_file)) {
                $data['foto_kendaraan'] = $filename;
            }
        }

        Kendaraan::create($data);
        set_flash('success', 'Berhasil menambahkan kendaraan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menambahkan kendaraan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
