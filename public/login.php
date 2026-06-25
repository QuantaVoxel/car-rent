<?php
require_once __DIR__ . '/../backend/bootstrap.php';
?>

<!DOCTYPE html>
<html lang="id">

<!-- Mirrored from dreamlayout.mnsithub.com/html/gorent/main-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 May 2026 03:20:20 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Go Rent - Masuk</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Go Rent - Sewa Mobil Terbaik" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/custom-animate.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-all.css" />
    <link rel="stylesheet" href="assets/css/jarallax.css" />
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/timePicker.css" />

    <link rel="stylesheet" href="assets/css/module-css/slider.css" />
    <link rel="stylesheet" href="assets/css/module-css/footer.css" />
    <link rel="stylesheet" href="assets/css/module-css/sliding-text.css" />
    <link rel="stylesheet" href="assets/css/module-css/services.css" />
    <link rel="stylesheet" href="assets/css/module-css/about.css" />
    <link rel="stylesheet" href="assets/css/module-css/booking.css" />
    <link rel="stylesheet" href="assets/css/module-css/counter.css" />
    <link rel="stylesheet" href="assets/css/module-css/listing.css" />
    <link rel="stylesheet" href="assets/css/module-css/video.css" />
    <link rel="stylesheet" href="assets/css/module-css/pricing.css" />
    <link rel="stylesheet" href="assets/css/module-css/popular-car.css" />
    <link rel="stylesheet" href="assets/css/module-css/testimonial.css" />
    <link rel="stylesheet" href="assets/css/module-css/faq.css" />
    <link rel="stylesheet" href="assets/css/module-css/team.css" />
    <link rel="stylesheet" href="assets/css/module-css/call.css" />
    <link rel="stylesheet" href="assets/css/module-css/download-app.css" />
    <link rel="stylesheet" href="assets/css/module-css/brand.css" />
    <link rel="stylesheet" href="assets/css/module-css/blog.css" />
    <link rel="stylesheet" href="assets/css/module-css/lets-talk.css" />
    <link rel="stylesheet" href="assets/css/module-css/process.css" />
    <link rel="stylesheet" href="assets/css/module-css/why-choose.css" />
    <link rel="stylesheet" href="assets/css/module-css/gallery.css" />
    <link rel="stylesheet" href="assets/css/module-css/page-header.css" />
    <link rel="stylesheet" href="assets/css/module-css/error.css" />
    <link rel="stylesheet" href="assets/css/module-css/shop.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body class="custom-cursor">
<div class="body-bg-shape" style="background-image: url(assets/images/shapes/body-bg-shape.html);"></div>
<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<!--Start Preloader-->
<div class="loader js-preloader">
    <div></div>
    <div></div>
    <div></div>
</div>
<!--End Preloader-->

<div class="page-wrapper">
    <!--Start Login One-->
    <section class="login-one">
        <div class="container">
            <div class="login-one__form">
                <div class="inner-title text-center">
                    <h2>Masuk</h2>
                </div>

                <?php if (has_flash('success')): ?>
                    <div class="alert alert-success">
                        <?= get_flash('success') ?>
                    </div>
                <?php endif; ?>

                <?php if (has_flash('error')): ?>
                    <div class="alert alert-danger">
                        <?= get_flash('error') ?>
                    </div>
                <?php endif; ?>

                <form id="login-one__form" name="Login-one_form" action="process/auth/login.php" method="post">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="email" name="email" id="formEmail" placeholder="Email..."
                                           required="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="password" name="password" id="formPassword"
                                           placeholder="Kata Sandi..." required="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <button class="thm-btn" type="submit" data-loading-text="Mohon tunggu...">Masuk
                                    <span class="fas fa-arrow-right"></span>
                                </button>
                            </div>
                        </div>

                        <div class="create-account text-center">
                            <p>Belum punya akun? <a href="registrasi.php">Daftar</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Login One-->
</div><!-- /.page-wrapper -->

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jarallax.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.circle-progress.min.js"></script>
<script src="assets/js/knob.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/wNumb.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery-sidebar-content.js"></script>
<script src="assets/js/gsap/gsap.js"></script>
<script src="assets/js/gsap/ScrollTrigger.js"></script>
<script src="assets/js/gsap/SplitText.js"></script>
<script src="assets/js/marquee.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/timePicker.js"></script>
<script src="assets/js/typed-2.0.11.js"></script>
<script src="assets/js/aos.js"></script>

<!-- template js -->
<script src="assets/js/script.js"></script>
</body>

</html>
