<?php
require_once __DIR__ . '/../../backend/bootstrap.php';
$db = database();

// Statistics
$total_pesanan = $db->query("SELECT COUNT(*) FROM pesanan")->fetchColumn();
$total_kendaraan = $db->query("SELECT COUNT(*) FROM kendaraan WHERE status = 'tersedia'")->fetchColumn();
$total_pengguna = $db->query("SELECT COUNT(*) FROM pengguna WHERE role = 'pengguna'")->fetchColumn();
$total_pendapatan = $db->query("SELECT SUM(jumlah) FROM pembayaran WHERE status_pembayaran = 'berhasil'")->fetchColumn() ?? 0;

$recent_orders = $db->query("
    SELECT p.*, u.nama_lengkap as nama_pelanggan 
    FROM pesanan p 
    JOIN pengguna u ON p.id_pengguna = u.id_pengguna 
    ORDER BY p.created_at DESC 
    LIMIT 5
")->fetchAll(PDO::FETCH_ASSOC);

?>
<?= layout('admin/header') ?>
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
                <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Dashboard
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="/admin/index.php" class="text-muted text-hover-primary">Beranda</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Dashboards</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end::Toolbar-->

            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <div class="card-header pt-5">
                                    <div class="card-title d-flex flex-column">
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"><?= $total_pesanan ?></span>
                                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Pesanan</span>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-end pt-0">
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                            <span class="fw-bold white fs-6">Detail Pesanan</span>
                                        </div>
                                        <a href="/admin/pesanan.php" class="btn btn-sm btn-light-primary w-100">Lihat Semua</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <div class="card-header pt-5">
                                    <div class="card-title d-flex flex-column">
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"><?= $total_kendaraan ?></span>
                                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Kendaraan Tersedia</span>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-end pt-0">
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <a href="/admin/kendaraan.php" class="btn btn-sm btn-light-success w-100">Kelola Kendaraan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <div class="card-header pt-5">
                                    <div class="card-title d-flex flex-column">
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"><?= $total_pengguna ?></span>
                                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Pelanggan</span>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-end pt-0">
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <a href="/admin/pengguna.php" class="btn btn-sm btn-light-info w-100">Data Pengguna</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <div class="card-header pt-5">
                                    <div class="card-title d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <span class="fs-4 fw-semibold text-gray-500 me-1">Rp</span>
                                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"><?= number_format($total_pendapatan, 0, ',', '.') ?></span>
                                        </div>
                                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Pendapatan</span>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-end pt-0">
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <a href="/admin/pembayaran.php" class="btn btn-sm btn-light-warning w-100">Riwayat Pembayaran</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-10">
                            <div class="card card-flush h-xl-100">
                                <div class="card-header pt-7">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Pesanan Terbaru</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">5 Transaksi Terakhir</span>
                                    </h3>
                                </div>
                                <div class="card-body pt-6">
                                    <div class="table-responsive">
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                    <th class="p-0 pb-3 min-w-100px text-start">KODE</th>
                                                    <th class="p-0 pb-3 min-w-100px text-end">PELANGGAN</th>
                                                    <th class="p-0 pb-3 min-w-100px text-end">TOTAL</th>
                                                    <th class="p-0 pb-3 min-w-100px text-end">STATUS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($recent_orders as $order): ?>
                                                <tr>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold"><?= $order['kode_pesanan'] ?></span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bold"><?= htmlspecialchars($order['nama_pelanggan']) ?></span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bold">Rp <?= number_format($order['total_tarif'], 0, ',', '.') ?></span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-primary"><?= str_replace('_', ' ', $order['status_pesanan']) ?></span>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php if (empty($recent_orders)): ?>
                                                <tr>
                                                    <td colspan="4" class="text-center text-muted">Belum ada pesanan</td>
                                                </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end::Content-->
        </div>

        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer ">
            <div class="app-container  container-xxl d-flex flex-column flex-md-row flex-stack py-3 ">
                <div class="text-gray-900 order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2026&copy;</span>
                    <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Car Rent</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
<?= layout('admin/footer') ?>
