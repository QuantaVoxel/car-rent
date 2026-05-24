<?php
require_once __DIR__ . '/../../backend/bootstrap.php';

use Backend\CarRent\Models\Pesanan;
use Backend\CarRent\Models\Pembayaran;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!auth()->check()) {
        set_flash('error', 'Silakan login terlebih dahulu.');
        header('Location: /login.php');
        exit;
    }

    $user = auth()->user();
    $cart = json_decode($_POST['cart_data'], true);
    
    if (empty($cart)) {
        set_flash('error', 'Cart Anda kosong.');
        header('Location: /kendaraan.php');
        exit;
    }

    $db = database();
    $db->beginTransaction();

    try {
        $first_pesanan_id = null;

        foreach ($cart as $item) {
            $pesanan_id = Pesanan::create([
                'id_pengguna' => $user['id_pengguna'],
                'id_tipe_kendaraan' => $item['id_tipe'],
                'id_kendaraan' => $item['id'],
                'lokasi_jemput' => $_POST['lokasi_jemput'],
                'lokasi_tujuan' => $_POST['lokasi_tujuan'],
                'jarak_km' => $_POST['jarak_km'],
                'catatan_pengguna' => $_POST['catatan_pengguna'],
                'status_pesanan' => 'menunggu_konfirmasi'
            ]);

            if (!$first_pesanan_id) $first_pesanan_id = $pesanan_id;

            // Fetch the calculated total_tarif from the database (since Pesanan::create does calculation)
            $stmt = $db->prepare("SELECT total_tarif FROM pesanan WHERE id_pesanan = ?");
            $stmt->execute([$pesanan_id]);
            $total = $stmt->fetchColumn();

            // Create Payment record
            Pembayaran::create([
                'id_pesanan' => $pesanan_id,
                'kode_transaksi' => 'QRIS-' . time() . '-' . $pesanan_id,
                'metode' => 'QRIS',
                'jumlah' => $total,
                'status_pembayaran' => 'menunggu',
                'qris_string' => '00020101021126570011ID.ESPAY.WWW011800000000000' // Dummy QRIS
            ]);
        }

        $db->commit();
        
        // Success: Clear cart on client side via script then redirect
        echo "<script>
            localStorage.removeItem('cart');
            window.location.href = '/payment.php?id=" . $first_pesanan_id . "';
        </script>";
        exit;

    } catch (\Exception $e) {
        $db->rollBack();
        set_flash('error', 'Gagal memproses checkout: ' . $e->getMessage());
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
