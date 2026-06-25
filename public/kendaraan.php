<?php
require_once __DIR__ . '/../backend/bootstrap.php';

// Fetch all available vehicles with their types
$db = database();
$sql = "SELECT k.*, t.nama_tipe, t.kapasitas 
        FROM kendaraan k 
        LEFT JOIN tipe_kendaraan t ON k.id_tipe = t.id_tipe 
        WHERE k.status != 'nonaktif' 
        ORDER BY k.created_at DESC";
$stmt = $db->query($sql);
$kendaraans = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?= layout('header', ['title' => 'Listing Kendaraan']) ?>
<!--Cars Page Start -->
<section class="cars-page">
    <div class="container">
        <div class="row">
            <?php foreach ($kendaraans as $kendaraan): ?>
            <!-- Listing One Single Start -->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="listing-one__single">
                    <div class="listing-one__img">
                        <img src="<?= $kendaraan['foto_kendaraan'] ? '/uploads/' . $kendaraan['foto_kendaraan'] : 'assets/images/listing/listing-1-1.jpg' ?>" alt="<?= htmlspecialchars($kendaraan['nama_kendaraan']) ?>" style="height: 250px; object-fit: cover;">
                        <div class="listing-one__brand-name">
                            <p><?= htmlspecialchars($kendaraan['nama_tipe']) ?></p>
                        </div>
                    </div>
                    <div class="listing-one__content">
                        <h3 class="listing-one__title"><a href="kendaraan-detail.php?id=<?= $kendaraan['id_kendaraan'] ?>"><?= htmlspecialchars($kendaraan['nama_kendaraan']) ?></a></h3>
                        <div class="listing-one__meta-box-info">
                            <ul class="list-unstyled listing-one__meta">
                                <li>
                                    <div class="icon">
                                        <span class="icon-manual"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= $kendaraan['is_manual'] ? 'Manual' : 'Otomatis' ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-test-drive"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= $kendaraan['tahun'] ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-fuel-type"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= ucfirst($kendaraan['jenis_bahan_bakar']) ?></p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                <li>
                                    <div class="icon">
                                        <span class="icon-paint"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= htmlspecialchars($kendaraan['warna']) ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-in-person"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= $kendaraan['kapasitas_penumpang'] ?> Orang</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-shield"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= ucfirst($kendaraan['status']) ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="listing-one__car-rent-box">
                            <p class="listing-one__car-rent">Mulai dari
                                <span>Rp <?= number_format($kendaraan['harga_perhari'], 0, ',', '.') ?>/</span> Hari</p>
                        </div>
                        <div class="listing-one__btn-box">
                            <a href="kendaraan-detail.php?id=<?= $kendaraan['id_kendaraan'] ?>" class="thm-btn">Lihat Detail<span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Listing One Single End -->
            <?php endforeach; ?>
            <?php if (empty($kendaraans)): ?>
                <div class="col-12 text-center py-5">
                    <h3>Belum ada kendaraan yang tersedia.</h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--Cars Page End -->
<?= layout('footer') ?>
