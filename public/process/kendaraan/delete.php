<?php
require_once __DIR__ . '/../../../backend/bootstrap.php';

use Backend\CarRent\Models\Kendaraan;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $id = $_POST['id_kendaraan'];
        
        // Delete photo file
        $upload_dir = __DIR__ . '/../../uploads/';
        $car = Kendaraan::find($id);
        if ($car && $car['foto_kendaraan']) {
            $file = $upload_dir . $car['foto_kendaraan'];
            if (file_exists($file)) {
                unlink($file);
            }
        }

        Kendaraan::delete($id);
        set_flash('success', 'Berhasil menghapus kendaraan.');
    } catch (\Exception $e) {
        set_flash('error', 'Gagal menghapus kendaraan: ' . $e->getMessage());
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
