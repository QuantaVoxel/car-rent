<?php
require_once __DIR__ . '/../backend/bootstrap.php';

use Backend\CarRent\Models\Kendaraan;

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: kendaraan.php');
    exit;
}

$db = database();
$sql = "SELECT k.*, t.nama_tipe, t.deskripsi as tipe_deskripsi, t.kapasitas, t.tarif_per_km, t.tarif_base 
        FROM kendaraan k 
        LEFT JOIN tipe_kendaraan t ON k.id_tipe = t.id_tipe 
        WHERE k.id_kendaraan = ? AND k.status != 'nonaktif'";
$stmt = $db->prepare($sql);
$stmt->execute([$id]);
$kendaraan = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$kendaraan) {
    header('Location: kendaraan.php');
    exit;
}
?>

<?= layout('header', ['title' => 'Detail Kendaraan']) ?>

<section class="listing-single py-5">
    <div class="container">
        <!-- Header Detail -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-8">
                <h1 class="display-5 fw-bold mb-2"><?= htmlspecialchars($kendaraan['nama_kendaraan']) ?></h1>
                <p class="text-muted fs-5 mb-0"><?= htmlspecialchars($kendaraan['nama_tipe']) ?> &bull; <?= htmlspecialchars($kendaraan['warna']) ?></p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <h2 class="text-primary fw-bold mb-0">Rp <?= number_format($kendaraan['harga_perhari'], 0, ',', '.') ?></h2>
                <p class="text-muted small">per hari</p>
            </div>
        </div>

        <div class="row">
            <!-- Gambar Utama -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                    <img src="<?= $kendaraan['foto_kendaraan'] ? '/uploads/' . $kendaraan['foto_kendaraan'] : 'assets/images/listing/listing-single-1-1.jpg' ?>" 
                         alt="<?= htmlspecialchars($kendaraan['nama_kendaraan']) ?>" 
                         class="img-fluid w-100" style="max-height: 500px; object-fit: cover;">
                </div>

                <!-- Deskripsi & Info -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                    <h3 class="fw-bold mb-4">Tentang Mobil Ini</h3>
                    <p class="text-secondary"><?= nl2br(htmlspecialchars($kendaraan['tipe_deskripsi'])) ?></p>
                    
                    <hr class="my-4">
                    
                    <h4 class="fw-bold mb-4">Spesifikasi</h4>
                    <div class="row g-4">
                        <?php 
                        $specs = [
                            ['Tahun', $kendaraan['tahun'], 'icon-date'],
                            ['Transmisi', $kendaraan['is_manual'] ? 'Manual' : 'Otomatis', 'icon-manual'],
                            ['Bahan Bakar', ucfirst($kendaraan['jenis_bahan_bakar']), 'icon-fuel-type'],
                            ['Kapasitas', $kendaraan['kapasitas_penumpang'] . ' Kursi', 'icon-seat']
                        ];
                        foreach ($specs as $s): ?>
                        <div class="col-6 col-md-3">
                            <div class="d-flex align-items-center">
                                <span class="<?= $s[2] ?> fs-4 me-3 text-primary"></span>
                                <div>
                                    <small class="d-block text-muted"><?= $s[0] ?></small>
                                    <span class="fw-semibold"><?= $s[1] ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 sticky-top" style="top: 100px;">
                    <h4 class="fw-bold mb-3">Sewa Sekarang</h4>
                    <p class="text-muted small mb-4">Siap untuk perjalanan Anda berikutnya? Pastikan Anda sudah login untuk memesan.</p>
                    
                    <button type="button" 
                            onclick="addToCart(<?= htmlspecialchars(json_encode([
                                'id' => $kendaraan['id_kendaraan'],
                                'nama' => $kendaraan['nama_kendaraan'],
                                'harga' => $kendaraan['harga_perhari'],
                                'foto' => $kendaraan['foto_kendaraan'],
                                'id_tipe' => $kendaraan['id_tipe'],
                                'nama_tipe' => $kendaraan['nama_tipe']
                            ])) ?>)" 
                            class="thm-btn w-100 py-3 rounded-pill d-flex align-items-center justify-content-center gap-2">
                        <i class="fas fa-shopping-cart"></i> Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function addToCart(car) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Check if car already in cart
    let existing = cart.find(item => item.id === car.id);
    if (existing) {
        alert('Kendaraan ini sudah ada di dalam keranjang.');
        window.location.href = 'cart.php';
        return;
    }

    cart.push(car);
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Update header count if function exists
    if (typeof updateHeaderCartCount === 'function') {
        updateHeaderCartCount();
    }
    
    alert('Berhasil menambahkan ke keranjang!');
    window.location.href = 'cart.php';
}
</script>

<?= layout('footer') ?>
