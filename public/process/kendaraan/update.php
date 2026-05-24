<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Kendaraan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $id = $_POST['id_kendaraan'];
        $data = array_diff_key($_POST, ['id_kendaraan' => '', 'avatar_remove' => '']);
        
        // Handle photo removal
        if (isset($_POST['avatar_remove']) && $_POST['avatar_remove'] == '1') {
            $upload_dir = __DIR__ . '/../../uploads/';
            $old_car = Kendaraan::find($id);
            if ($old_car && $old_car['foto_kendaraan']) {
                $old_file = $upload_dir . $old_car['foto_kendaraan'];
                if (file_exists($old_file)) {
                    unlink($old_file);
                }
            }
            $data['foto_kendaraan'] = null;
        }

        // Handle file upload
        if (isset($_FILES['foto_kendaraan']) && $_FILES['foto_kendaraan']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = __DIR__ . '/../../uploads/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            
            // Delete old file
            $old_car = Kendaraan::find($id);
            if ($old_car && $old_car['foto_kendaraan']) {
                $old_file = $upload_dir . $old_car['foto_kendaraan'];
                if (file_exists($old_file)) {
                    unlink($old_file);
                }
            }
            
            $file_extension = pathinfo($_FILES['foto_kendaraan']['name'], PATHINFO_EXTENSION);
            $filename = uniqid('car_', true) . '.' . $file_extension;
            $target_file = $upload_dir . $filename;
            
            if (move_uploaded_file($_FILES['foto_kendaraan']['tmp_name'], $target_file)) {
                $data['foto_kendaraan'] = $filename;
            }
        }

        Kendaraan::update($id, $data);
        set_flash('success', 'Berhasil mengubah kendaraan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal mengubah kendaraan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
