<?php
require_once __DIR__ . '/../backend/bootstrap.php';

$db = database();
// Fetch latest 6 active vehicles for the popular cars section
$sql = "SELECT k.*, t.nama_tipe, t.kapasitas 
        FROM kendaraan k 
        LEFT JOIN tipe_kendaraan t ON k.id_tipe = t.id_tipe 
        WHERE k.status != 'nonaktif' 
        ORDER BY k.created_at DESC 
        LIMIT 6";
$stmt = $db->query($sql);
$popular_cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?= layout('header', ['title' => 'Beranda']) ?>

    <!-- Banner One Start -->
    <section class="banner-one">
        <div class="banner-one__shape-bg"
             style="background-image: url(assets/images/shapes/banner-one-shape-bg.png);"></div>
        <div class="banner-one__shape-1">
            <div class="banner-one__shape-1-bg"
                 style="background-image: url(assets/images/backgrounds/banner-one-shape-1-bg.jpg);"></div>
        </div>
        <div class="banner-one__shape-2"></div>
        <div class="container">
            <div class="banner-one__inner">
                <div class="banner-one__content">
                    <p class="banner-one__sub-title">Platform Sewa Mobil Terpercaya & Profesional</p>
                    <h2 class="banner-one__title">Solusi Transportasi Terbaik <br> <span> Untuk</span> <span class="typed-effect" id="type-1" data-strings="Perjalanan, Bisnis, Liburan"></span>
                    </h2>
                    <p class="banner-one__text">Nikmati kemudahan menyewa kendaraan dengan layanan prima dan armada terbaru. <br> Kami menyediakan berbagai pilihan kendaraan untuk mendukung mobilitas Anda <br> dengan proses yang cepat, aman, dan harga yang kompetitif.</p>
                    <div class="banner-one__btn-box">
                        <a href="kendaraan.php" class="thm-btn">Cari Kendaraan<span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
                <div class="banner-one__img-one" data-aos="slide-left" data-aos-duration="2000">
                    <img src="assets/images/resources/banner-one-img-1.png" alt="" class="float-bob-y">
                </div>
            </div>
        </div>
    </section>
    <!--Banner One End -->

    <!-- Process One Start -->
    <section class="process-one process-three">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style2">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="assets/images/shapes/section-title-tagline-shape-1.png" alt="">
                    </div>
                    <span class="section-title__tagline">Prosedur</span>
                </div>
                <h2 class="section-title__title title-animation">Proses Sewa Mudah & Cepat</h2>
            </div>
            <div class="row">
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                     data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <div class="process-one__single-bg"
                             style="background-image: url(assets/images/backgrounds/process-one-single-bg-1.jpg);">
                        </div>
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-car-wash"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Pilih Armada</h3>
                        <p class="process-one__text">Pilih kendaraan yang sesuai dengan kebutuhan perjalanan Anda dari katalog kami.</p>
                    </div>
                </div>
                <!-- Process One Single End -->
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms"
                     data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <div class="process-one__single-bg"
                             style="background-image: url(assets/images/backgrounds/process-one-single-bg-2.jpg);">
                        </div>
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-in-person"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Pesan & Bayar</h3>
                        <p class="process-one__text">Lakukan pemesanan online dan selesaikan pembayaran dengan metode QRIS yang praktis.</p>
                    </div>
                </div>
                <!-- Process One Single End -->
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="500ms"
                     data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <div class="process-one__single-bg"
                             style="background-image: url(assets/images/backgrounds/process-one-single-bg-3.jpg);">
                        </div>
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-car-insurance"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Konfirmasi Admin</h3>
                        <p class="process-one__text">Tim kami akan memverifikasi pesanan Anda dan menyiapkan kendaraan tepat waktu.</p>
                    </div>
                </div>
                <!-- Process One Single End -->
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="700ms"
                     data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <div class="process-one__single-bg"
                             style="background-image: url(assets/images/backgrounds/process-one-single-bg-4.jpg);">
                        </div>
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-steering-wheel"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Mulai Perjalanan</h3>
                        <p class="process-one__text">Ambil kendaraan atau tunggu pengantaran, dan nikmati perjalanan Anda dengan tenang.</p>
                    </div>
                </div>
                <!-- Process One Single End -->
            </div>
        </div>
    </section>
    <!-- Process One End -->

    <!-- Listing Three Start -->
    <section class="listing-three">
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape">
                        <img src="assets/images/shapes/section-title-tagline-shape-1.png" alt="">
                    </div>
                    <span class="section-title__tagline">Katalog Utama</span>
                </div>
                <h2 class="section-title__title title-animation">Pilihan Armada Terpopuler</h2>
            </div>
            <div class="listing-three__carousel owl-carousel owl-theme">
                <?php foreach ($popular_cars as $kendaraan): ?>
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="<?= $kendaraan['foto_kendaraan'] ? '/uploads/' . $kendaraan['foto_kendaraan'] : 'assets/images/listing/listing-3-1.jpg' ?>" alt="<?= htmlspecialchars($kendaraan['nama_kendaraan']) ?>" style="height: 250px; object-fit: cover;">
                            <div class="listing-three__brand-name">
                                <p><?= htmlspecialchars($kendaraan['nama_tipe']) ?></p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="kendaraan-detail.php?id=<?= $kendaraan['id_kendaraan'] ?>"><?= htmlspecialchars($kendaraan['nama_kendaraan']) ?></a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p><?= $kendaraan['is_manual'] ? 'Manual' : 'Automatic' ?></p>
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                                            <p><?= $kendaraan['kapasitas_penumpang'] ?> Persons</p>
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>Rp <?= number_format($kendaraan['harga_perhari'], 0, ',', '.') ?>/</span> Hari</p>
                                <div class="listing-three__btn-box">
                                    <a href="kendaraan-detail.php?id=<?= $kendaraan['id_kendaraan'] ?>" class="listing-three__btn"><span
                                                class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Listing Three End -->

    <!-- Video One Start -->
    <section class="video-one">
        <div class="video-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url(assets/images/backgrounds/video-one-bg.jpg);"></div>
        <div class="container">
            <div class="video-one__inner">
                <h2 class="video-one__title">Want To Know More About? <br> Play Our Promotional Video Now!</h2>
                <div class="video-one__video-link">
                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                        <div class="video-one__video-icon">
                            <span class="icon-play"></span>
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Video One End -->

    <!-- Feature One Start -->
    <section class="feature-one feature-two">
        <div class="container">
            <div class="feature-one__inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="feature-one__inner-single wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="feature-one__inner-single-bg"
                                 style="background-image: url(assets/images/backgrounds/feature-one-bg-1.jpg);">
                            </div>
                            <h3 class="feature-one__inner-title">Butuh Kendaraan <br>Untuk Perjalanan Anda?</h3>
                            <p class="feature-one__inner-text">Temukan armada terbaik yang sesuai dengan gaya dan kebutuhan anggaran Anda hanya dalam beberapa klik.</p>
                            <div class="feature-one__inner-btn-box">
                                <a href="kendaraan.php" class="thm-btn">Lihat Semua</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="feature-one__inner-single feature-one__inner-single--two wow slideInRight"
                             data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="feature-one__inner-single-bg"
                                 style="background-image: url(assets/images/backgrounds/feature-one-bg-2.jpg);">
                            </div>
                            <h3 class="feature-one__inner-title">Layanan Sewa Mobil <br> Lepas Kunci?</h3>
                            <p class="feature-one__inner-text">Nikmati kebebasan berkendara dengan layanan lepas kunci kami yang fleksibel dan terjangkau.</p>
                            <div class="feature-one__inner-btn-box">
                                <a href="kendaraan.php" class="thm-btn">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature One End -->

    <!--Brand One Start -->
    <section class="brand-one brand-three">
        <div class="container">
            <div class="brand-one__carousel owl-theme owl-carousel">
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="assets/images/brand/brand-1-1.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="assets/images/brand/brand-1-2.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="assets/images/brand/brand-1-3.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="assets/images/brand/brand-1-4.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="assets/images/brand/brand-1-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="assets/images/brand/brand-1-6.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
            </div>
        </div>
    </section>
    <!--Brand One End -->

<?= layout('footer') ?>