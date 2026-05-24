<?php
$auth = auth()->user()->toArray();
?>
<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <title>GoRent Admin - Booking Kendaraan Online</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png"/>
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest"/>

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/><!--end::Fonts-->

    <link href="/assets/admin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="/assets/admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-header" data-kt-app-header-fixed="true"
      data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;

    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->


<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


        <!--begin::Header-->
        <div id="kt_app_header" class="app-header "

             data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
             data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}"
             data-kt-sticky-animation="false">

            <!--begin::Header container-->
            <div class="app-container  container-xxl d-flex align-items-stretch justify-content-between "
                 id="kt_app_header_container">


                <!--begin::Logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                    <a href="/admin">
                        <img alt="Logo" src="/assets/images/resources/logo-2.png"
                             class="h-25px h-lg-35px app-sidebar-logo-default"/>
                    </a>
                </div>
                <!--end::Logo-->

                <!--begin::Header wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                     id="kt_app_header_wrapper">

                    <!--begin::Menu wrapper-->
                    <div
                            class="
        app-header-menu
        app-header-mobile-drawer
        align-items-stretch
    "

                            data-kt-drawer="true"
                            data-kt-drawer-name="app-header-menu"
                            data-kt-drawer-activate="{default: true, lg: false}"
                            data-kt-drawer-overlay="true"
                            data-kt-drawer-width="250px"
                            data-kt-drawer-direction="end"
                            data-kt-drawer-toggle="#kt_app_header_menu_toggle"

                            data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
                    >
                        <!--begin::Menu-->
                        <div
                                class="
            menu
            menu-rounded
            menu-column
            menu-lg-row
            my-5
            my-lg-0
            align-items-stretch
            fw-semibold
            px-2 px-lg-0
        "

                                id="kt_app_header_menu"
                                data-kt-menu="true"
                        >
                            <!--begin:Menu item-->
                            <div class="menu-item me-0 me-lg-2">
                                <a href="/admin/index.php" class="menu-link">
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item me-0 me-lg-2">
                                <a href="/admin/pesanan.php" class="menu-link">
                                    <span class="menu-title">Pesanan</span>
                                </a>
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item me-0 me-lg-2">
                                <a href="/admin/kendaraan.php" class="menu-link">
                                    <span class="menu-title">Kendaraan</span>
                                </a>
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item me-0 me-lg-2">
                                <a href="/admin/tipe_kendaraan.php" class="menu-link">
                                    <span class="menu-title">Tipe Kendaraan</span>
                                </a>
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item me-0 me-lg-2">
                                <a href="/admin/pengguna.php" class="menu-link">
                                    <span class="menu-title">Pengguna</span>
                                </a>
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item me-0 me-lg-2">
                                <a href="/admin/pembayaran.php" class="menu-link">
                                    <span class="menu-title">Pembayaran</span>
                                </a>
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item me-0 me-lg-2">
                                <a href="/admin/evaluasi_pesanan.php" class="menu-link">
                                    <span class="menu-title">Evaluasi</span>
                                </a>
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item me-0 me-lg-2">
                                <a href="/admin/log_pesanan.php" class="menu-link">
                                    <span class="menu-title">Log Pesanan</span>
                                </a>
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->


                    <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0">

                        <!--begin::Theme mode-->
                        <div class="app-navbar-item ms-1 ms-md-4">

                            <!--begin::Menu toggle-->
                            <a href="#"
                               class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                               data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                               data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-night-day theme-light-show fs-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span
                                            class="path4"></span><span class="path5"></span><span
                                            class="path6"></span><span
                                            class="path7"></span><span class="path8"></span><span
                                            class="path9"></span><span
                                            class="path10"></span></i> <i
                                        class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span
                                            class="path2"></span></i></a>
                            <!--begin::Menu toggle-->

                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                 data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span><span class="path4"></span><span class="path5"></span><span
                            class="path6"></span><span class="path7"></span><span class="path8"></span><span
                            class="path9"></span><span class="path10"></span></i>            </span>
                                        <span class="menu-title">
                Light
            </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
                                        <span class="menu-title">
                Dark
            </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="system">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span><span class="path4"></span></i>            </span>
                                        <span class="menu-title">
                System
            </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->

                        </div>
                        <!--end::Theme mode-->

                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-35px"
                                 data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-attach="parent"
                                 data-kt-menu-placement="bottom-end">
                                <img src="/assets/admin/media/avatars/300-3.jpg" class="rounded-3" alt="user"/>
                            </div>

                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                 data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="/assets/admin/media/avatars/300-3.jpg"/>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">
                                                <?= $auth['nama_lengkap'] ?>
                                            </div>

                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                <?= $auth['email'] ?>
                                            </a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="/logout.php"
                                       class="menu-link px-5">
                                        Sign Out
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->

                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->

                        <!--begin::Header menu toggle-->
                        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                                 id="kt_app_header_menu_toggle">
                                <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span
                                            class="path2"></span></i></div>
                        </div>
                        <!--end::Header menu toggle-->

                        <!--begin::Aside toggle-->
                        <!--end::Header menu toggle-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header wrapper-->
            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">



