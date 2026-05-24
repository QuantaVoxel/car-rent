<?php
require_once __DIR__ . '/../backend/bootstrap.php';

use Backend\CarRent\Models\Pesanan;
use Backend\CarRent\Models\Pembayaran;

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: /index.php');
    exit;
}

$pesanan = Pesanan::find($id, ['pengguna', 'kendaraan', 'tipe_kendaraan', 'pembayaran']);

if (!$pesanan) {
    header('Location: /index.php');
    exit;
}

$pembayaran = $pesanan['pembayaran'];

?>

<?= layout('header', ['title' => 'Pembayaran']) ?>

<section class="payment-page py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5 text-center">
                        <h2 class="mb-4">Pembayaran QRIS</h2>
                        <p class="text-muted mb-4">Silakan scan kode QR di bawah ini menggunakan aplikasi pembayaran pilihan Anda (GoPay, OVO, Dana, dll.)</p>
                        
                        <div class="mb-4">
                            <span class="badge badge-light-warning p-3 fs-6 text-warning border border-warning">
                                Status: <?= strtoupper($pembayaran['status_pembayaran']) ?>
                            </span>
                        </div>

                        <div class="qris-image mb-4 p-3 bg-white d-inline-block border rounded">
                            <!-- Using a real QR code API to render the dummy string -->
                            <img src="<?= config('payment.qris_url') ?>" alt="QRIS" class="img-fluid">
                        </div>

                        <div class="order-summary bg-light p-4 rounded text-start mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Kode Pesanan:</span>
                                <span><?= $pesanan['kode_pesanan'] ?></span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Kendaraan:</span>
                                <span><?= $pesanan['kendaraan']['nama_kendaraan'] ?> (<?= $pesanan['tipe_kendaraan']['nama_tipe'] ?>)</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Total Bayar:</span>
                                <span class="fs-4 fw-bold text-primary">Rp <?= number_format($pembayaran['jumlah'], 0, ',', '.') ?></span>
                            </div>
                        </div>

                        <?php if ($pembayaran['status_pembayaran'] === 'menunggu'): ?>
                            <div class="alert alert-info py-2 small mb-4">
                                <i class="fas fa-info-circle me-2"></i> Klik tombol di bawah untuk simulasi pembayaran berhasil.
                            </div>
                            <a href="process/simulate-payment.php?id=<?= $pembayaran['id_pembayaran'] ?>" class="thm-btn w-100 py-3">
                                Konfirmasi Pembayaran Selesai <span class="fas fa-check-circle"></span>
                            </a>
                        <?php else: ?>
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i> Pembayaran Berhasil Dikonfirmasi!
                            </div>
                            <a href="index.php" class="thm-btn w-100">Kembali ke Beranda</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= layout('footer') ?>