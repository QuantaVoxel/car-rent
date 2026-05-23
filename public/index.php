<?php
require_once __DIR__ . '/../backend/bootstrap.php';
?>

<?= layout('header') ?>

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
                    <p class="banner-one__sub-title">100% Trusted car rental platform in the World</p>
                    <h2 class="banner-one__title">Find Your Best Dream <br> <span> Car
                                for</span> <span class="typed-effect" id="type-1" data-strings="Rental, Booking"></span>
                    </h2>
                    <p class="banner-one__text">Lorem ipsum is simply ipun txns mane so dummy text of free
                        available in market <br> the printing and typesetting industry has been the industry's
                        standard dummy <br> text ever. Open multipy a green form lesser their from in made herb
                        multiply.</p>
                    <div class="banner-one__btn-box">
                        <a href="about.html" class="thm-btn">Read More<span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
                <div class="banner-one__img-one" data-aos="slide-left" data-aos-duration="2000">
                    <img src="assets/images/resources/banner-one-img-1.png" alt="" class="float-bob-y">
                </div>
            </div>
        </div>
    </section>
    <!--Banner One End -->

    <!--Search Car Start -->
    <section class="search-car">
        <div class="search-car__shape-1"></div>
        <div class="search-car__shape-2"></div>
        <div class="container">
            <div class="search-car__inner">
                <div class="search-car__tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#usedcar" class="tab-btn active-btn"><span>Used car</span></li>
                        <li data-tab="#newcars" class="tab-btn"><span>New Cars</span></li>
                        <li data-tab="#sportscars" class="tab-btn"><span>Sports Cars</span></li>
                        <li data-tab="#luxurycars" class="tab-btn"><span>Luxury Sedans</span></li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="usedcar">
                            <div class="tabs-content__inner">
                                <form class="contact-form-validated search-car__form"
                                      action="https://dreamlayout.mnsithub.com/html/gorent/main-html/assets/inc/sendemail.php"
                                      method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"><span class="icon-pin-2"></span>
                                                    Pickup</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Enter a Location</option>
                                                        <option>Enter a Location 01</option>
                                                        <option>Enter a Location 02</option>
                                                        <option>Enter a Location 03</option>
                                                        <option>Enter a Location 04</option>
                                                        <option>Enter a Location 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-date"></span>Pickup
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date"
                                                       id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-clock"></span>Pickup
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"><span class="icon-pin-2"></span>
                                                    Drop of</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Enter a Location</option>
                                                        <option>Enter a Location 01</option>
                                                        <option>Enter a Location 02</option>
                                                        <option>Enter a Location 03</option>
                                                        <option>Enter a Location 04</option>
                                                        <option>Enter a Location 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-date"></span>Drop of
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date"
                                                       id="datepicker-2">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-clock"></span>Drop of
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="search-car__btn-box">
                                                <button type="submit" class="thm-btn">Find a Vehicle
                                                    <span class="fas fa-search"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                        <!--tab-->
                        <!--tab-->
                        <div class="tab" id="newcars">
                            <div class="tabs-content__inner">
                                <form class="contact-form-validated search-car__form"
                                      action="https://dreamlayout.mnsithub.com/html/gorent/main-html/assets/inc/sendemail.php"
                                      method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"><span class="icon-pin-2"></span>
                                                    Pickup</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Enter a Location</option>
                                                        <option>Enter a Location 01</option>
                                                        <option>Enter a Location 02</option>
                                                        <option>Enter a Location 03</option>
                                                        <option>Enter a Location 04</option>
                                                        <option>Enter a Location 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-date"></span>Pickup
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date"
                                                       id="datepicker-3">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-clock"></span>Pickup
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"><span class="icon-pin-2"></span>
                                                    Drop of</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Enter a Location</option>
                                                        <option>Enter a Location 01</option>
                                                        <option>Enter a Location 02</option>
                                                        <option>Enter a Location 03</option>
                                                        <option>Enter a Location 04</option>
                                                        <option>Enter a Location 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-date"></span>Drop of
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date"
                                                       id="datepicker-4">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-clock"></span>Drop of
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="search-car__btn-box">
                                                <button type="submit" class="thm-btn">Find a Vehicle
                                                    <span class="fas fa-search"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                        <!--tab-->
                        <!--tab-->
                        <div class="tab" id="sportscars">
                            <div class="tabs-content__inner">
                                <form class="contact-form-validated search-car__form"
                                      action="https://dreamlayout.mnsithub.com/html/gorent/main-html/assets/inc/sendemail.php"
                                      method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"><span class="icon-pin-2"></span>
                                                    Pickup</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Enter a Location</option>
                                                        <option>Enter a Location 01</option>
                                                        <option>Enter a Location 02</option>
                                                        <option>Enter a Location 03</option>
                                                        <option>Enter a Location 04</option>
                                                        <option>Enter a Location 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-date"></span>Pickup
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date"
                                                       id="datepicker-5">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-clock"></span>Pickup
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"><span class="icon-pin-2"></span>
                                                    Drop of</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Enter a Location</option>
                                                        <option>Enter a Location 01</option>
                                                        <option>Enter a Location 02</option>
                                                        <option>Enter a Location 03</option>
                                                        <option>Enter a Location 04</option>
                                                        <option>Enter a Location 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-date"></span>Drop of
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date"
                                                       id="datepicker-6">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-clock"></span>Drop of
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="search-car__btn-box">
                                                <button type="submit" class="thm-btn">Find a Vehicle
                                                    <span class="fas fa-search"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                        <!--tab-->
                        <!--tab-->
                        <div class="tab" id="luxurycars">
                            <div class="tabs-content__inner">
                                <form class="contact-form-validated search-car__form"
                                      action="https://dreamlayout.mnsithub.com/html/gorent/main-html/assets/inc/sendemail.php"
                                      method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"><span class="icon-pin-2"></span>
                                                    Pickup</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Enter a Location</option>
                                                        <option>Enter a Location 01</option>
                                                        <option>Enter a Location 02</option>
                                                        <option>Enter a Location 03</option>
                                                        <option>Enter a Location 04</option>
                                                        <option>Enter a Location 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-date"></span>Pickup
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date"
                                                       id="datepicker-7">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-clock"></span>Pickup
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"><span class="icon-pin-2"></span>
                                                    Drop of</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Enter a Location</option>
                                                        <option>Enter a Location 01</option>
                                                        <option>Enter a Location 02</option>
                                                        <option>Enter a Location 03</option>
                                                        <option>Enter a Location 04</option>
                                                        <option>Enter a Location 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-date"></span>Drop of
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date"
                                                       id="datepicker-8">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span
                                                            class="icon-clock"></span>Drop of
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="search-car__btn-box">
                                                <button type="submit" class="thm-btn">Find a Vehicle
                                                    <span class="fas fa-search"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                        <!--tab-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Search Car End -->

    <!-- Process One Start -->
    <section class="process-one process-three">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style2">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="assets/images/shapes/section-title-tagline-shape-1.png" alt="">
                    </div>
                    <span class="section-title__tagline">Steps</span>
                </div>
                <h2 class="section-title__title title-animation">Car Rental Process</h2>
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
                        <h3 class="process-one__title">Choose A Car</h3>
                        <p class="process-one__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
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
                        <h3 class="process-one__title">Come In Contact</h3>
                        <p class="process-one__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
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
                        <h3 class="process-one__title">Pick-Up Locations</h3>
                        <p class="process-one__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
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
                        <h3 class="process-one__title">Enjoy Driving</h3>
                        <p class="process-one__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
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
                    <span class="section-title__tagline">Checkout our new cars</span>
                </div>
                <h2 class="section-title__title title-animation">Explore Most Popular Cars</h2>
            </div>
            <div class="listing-three__carousel owl-carousel owl-theme">
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="assets/images/listing/listing-3-1.jpg" alt="">
                            <div class="listing-three__brand-name">
                                <p>Acura</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="listing-single.html">Acura
                                    Sport Version</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>25 KM</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Diesel</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Basic</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 25</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="listing-single.html" class="listing-three__btn"><span
                                                class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="assets/images/listing/listing-3-2.jpg" alt="">
                            <div class="listing-three__brand-name">
                                <p>Acura</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="listing-single.html">Kia Soul
                                    2025</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>25 KM</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Diesel</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Basic</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 25</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="listing-single.html" class="listing-three__btn"><span
                                                class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="assets/images/listing/listing-3-3.jpg" alt="">
                            <div class="listing-three__brand-name">
                                <p>Acura</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="listing-single.html">Audi A3
                                    2025 New</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>25 KM</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Diesel</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Basic</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 25</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="listing-single.html" class="listing-three__btn"><span
                                                class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="assets/images/listing/listing-3-4.jpg" alt="">
                            <div class="listing-three__brand-name">
                                <p>Acura</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="listing-single.html">Ferrari
                                    458 MM Speciale</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>25 KM</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Diesel</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Basic</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 25</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="listing-single.html" class="listing-three__btn"><span
                                                class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="assets/images/listing/listing-3-5.jpg" alt="">
                            <div class="listing-three__brand-name">
                                <p>Acura</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="listing-single.html">Audi Sport
                                    Version</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>25 KM</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Diesel</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Basic</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 25</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="listing-single.html" class="listing-three__btn"><span
                                                class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="assets/images/listing/listing-1-6.jpg" alt="">
                            <div class="listing-three__brand-name">
                                <p>Acura</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="listing-single.html">Toyota
                                    Tacoma 4WD</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>25 KM</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Diesel</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Basic</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 25</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="listing-single.html" class="listing-three__btn"><span
                                                class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
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
                            <h3 class="feature-one__inner-title">Are You Looking <br>For a Car ?</h3>
                            <p class="feature-one__inner-text">Lorem ipsum is simply ipun txns mane so dummy text of
                                free available in market the printing and typesetting industry</p>
                            <div class="feature-one__inner-btn-box">
                                <a href="contact.html" class="thm-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="feature-one__inner-single feature-one__inner-single--two wow slideInRight"
                             data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="feature-one__inner-single-bg"
                                 style="background-image: url(assets/images/backgrounds/feature-one-bg-2.jpg);">
                            </div>
                            <h3 class="feature-one__inner-title">Do You Want to <br> Rent a Car ?</h3>
                            <p class="feature-one__inner-text">Lorem ipsum is simply ipun txns mane so dummy text of
                                free available in market the printing and typesetting industry</p>
                            <div class="feature-one__inner-btn-box">
                                <a href="car-list-v-1.html" class="thm-btn">Rent Now</a>
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