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
<!--Listing Single Start-->
<section class="listing-single">
    <div class="container">
        <div class="listing-single__top">
            <div class="listing-single__top-left">
                <h3 class="listing-single__title"><?= htmlspecialchars($kendaraan['nama_kendaraan']) ?></h3>
                <p class="listing-single__sub-title"><?= htmlspecialchars($kendaraan['nama_tipe']) ?> - <?= htmlspecialchars($kendaraan['warna']) ?></p>
                <div class="listing-single__car-details-box">
                    <ul class="list-unstyled listing-single__car-details">
                        <li>
                            <span class="icon-date"></span>
                            <p><?= $kendaraan['tahun'] ?></p>
                        </li>
                        <li>
                            <span class="icon-manual"></span>
                            <p><?= $kendaraan['is_manual'] ? 'Manual' : 'Otomatis' ?></p>
                        </li>
                        <li>
                            <span class="icon-fuel-type"></span>
                            <p><?= ucfirst($kendaraan['jenis_bahan_bakar']) ?></p>
                        </li>
                        <li>
                            <span class="icon-seat"></span>
                            <p><?= $kendaraan['kapasitas_penumpang'] ?> Kursi</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="listing-single__top-right">
                <div class="listing-single__tag">
                    <a href="#">Bagi <span class="icon-arrow-up-from"></span> </a>
                    <a href="#">Simpan <span class="icon-bookmark"></span> </a>
                </div>
                <h2 class="listing-single__price">Rp <?= number_format($kendaraan['harga_perhari'], 0, ',', '.') ?></h2>
                <div class="listing-single__offer-price">
                    <div class="icon">
                        <span class="icon-tag-2"></span>
                    </div>
                    <div class="text">
                        <p>Harga Sewa per Hari</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="listing-single__inner">
            <div class="listing-single__main-content">
                <div class="listing-single__main-content-inner">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="listing-single__left">
                                <div class="listing-single__img text-center">
                                    <img src="<?= $kendaraan['foto_kendaraan'] ? '/uploads/' . $kendaraan['foto_kendaraan'] : 'assets/images/listing/listing-single-1-1.jpg' ?>" alt="<?= htmlspecialchars($kendaraan['nama_kendaraan']) ?>" class="rounded mw-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="listing-single__bottom">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="listing-single__bottom-left">
                        <div class="listing-single__car-overview">
                            <h3 class="listing-single__car-overview-title">Informasi Kendaraan</h3>
                            <div class="listing-single__car-overview-points-box">
                                <ul class="list-unstyled listing-single__car-overview-point">
                                    <li>
                                        <div class="listing-single__car-overview-point-left">
                                            <i class="icon-car1"></i>
                                            <p>Tipe</p>
                                        </div>
                                        <div class="listing-single__car-overview-point-right">
                                            <p><?= htmlspecialchars($kendaraan['nama_tipe']) ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing-single__car-overview-point-left">
                                            <i class="icon-fuel-type"></i>
                                            <p>Fuel Tipe</p>
                                        </div>
                                        <div class="listing-single__car-overview-point-right">
                                            <p><?= ucfirst($kendaraan['jenis_bahan_bakar']) ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing-single__car-overview-point-left">
                                            <i class="icon-date"></i>
                                            <p>Tahun</p>
                                        </div>
                                        <div class="listing-single__car-overview-point-right">
                                            <p><?= $kendaraan['tahun'] ?></p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-single__car-overview-point">
                                    <li>
                                        <div class="listing-single__car-overview-point-left">
                                            <i class="icon-Carrier"></i>
                                            <p>Transmisi</p>
                                        </div>
                                        <div class="listing-single__car-overview-point-right">
                                            <p><?= $kendaraan['is_manual'] ? 'Manual' : 'Otomatis' ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing-single__car-overview-point-left">
                                            <i class="icon-color"></i>
                                            <p>Warna</p>
                                        </div>
                                        <div class="listing-single__car-overview-point-right">
                                            <p><?= htmlspecialchars($kendaraan['warna']) ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing-single__car-overview-point-left">
                                            <i class="icon-seat"></i>
                                            <p>Kursi</p>
                                        </div>
                                        <div class="listing-single__car-overview-point-right">
                                            <p><?= $kendaraan['kapasitas_penumpang'] ?></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="listing-single__description">
                            <h3 class="listing-single__description-title">Deskripsi</h3>
                            <p class="listing-single__description-text-1"><?= nl2br(htmlspecialchars($kendaraan['tipe_deskripsi'])) ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="listing-single__sidebar">
                        <div class="listing-single__rent-car-daily-price listing-single__single-box">
                            <p>Tarif per Hari</p>
                            <h3>Rp <?= number_format($kendaraan['harga_perhari'], 0, ',', '.') ?></h3>
                        </div>
                        <div class="listing-single__rent-car listing-single__single-box">
                            <h3 class="listing-single__rent-car-title">Sewa Kendaraan Ini</h3>
                            <div class="listing-single__rent-car-content">
                                <p>Silakan login untuk melakukan pemesanan.</p>
                            </div>
                            <div class="listing-single__btn-box-2">
                                <button type="button" onclick="addToCart(<?= htmlspecialchars(json_encode([
                                    'id' => $kendaraan['id_kendaraan'],
                                    'nama' => $kendaraan['nama_kendaraan'],
                                    'harga' => $kendaraan['harga_perhari'],
                                    'foto' => $kendaraan['foto_kendaraan'],
                                    'id_tipe' => $kendaraan['id_tipe'],
                                    'nama_tipe' => $kendaraan['nama_tipe']
                                ])) ?>)" class="thm-btn w-100">Sewa Sekarang<span class="fas fa-arrow-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Listing Single End-->

<script>
function addToCart(car) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Check if car already in cart
    let existing = cart.find(item => item.id === car.id);
    if (existing) {
        alert('Kendaraan ini sudah ada di dalam cart.');
        window.location.href = 'cart.php';
        return;
    }

    cart.push(car);
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Update header count if function exists
    if (typeof updateHeaderCartCount === 'function') {
        updateHeaderCartCount();
    }
    
    alert('Berhasil menambahkan ke cart!');
    window.location.href = 'cart.php';
}
</script>
<?= layout('footer') ?>