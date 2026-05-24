<?php
require_once __DIR__ . '/../../backend/bootstrap.php';

use Backend\CarRent\Models\LogPesanan;

$items = LogPesanan::all(['pesanan']);
?>
<?= layout('admin/header') ?>
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
                <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Log Pesanan
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="/admin/index.php" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Audit</li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Log Pesanan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end::Toolbar-->

            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    <input type="text" data-kt-filter="search"
                                           class="form-control form-control-solid w-250px ps-12"
                                           placeholder="Cari Log..."/>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable">
                                <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px">Waktu</th>
                                    <th class="min-w-100px">Kode Pesanan</th>
                                    <th class="min-w-150px">Status</th>
                                    <th class="min-w-200px">Keterangan</th>
                                    <th class="text-end min-w-100px">Oleh</th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                <?php foreach ($items as $item): ?>
                                    <tr>
                                        <td>
                                            <?= date('d M Y H:i', strtotime($item['created_at'])) ?>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-bold"><?= htmlspecialchars($item['pesanan']['kode_pesanan'] ?? 'N/A') ?></span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="badge badge-light-secondary fs-8"><?= $item['status_lama'] ? str_replace('_', ' ', $item['status_lama']) : '-' ?></span>
                                                <i class="ki-duotone ki-arrow-right fs-6 mx-2"></i>
                                                <?php 
                                                $status_class = [
                                                    'menunggu_konfirmasi' => 'warning',
                                                    'dikonfirmasi' => 'primary',
                                                    'kendaraan_dikirim' => 'info',
                                                    'dalam_perjalanan' => 'info',
                                                    'selesai' => 'success',
                                                    'dibatalkan' => 'danger'
                                                ][$item['status_baru']] ?? 'secondary';
                                                ?>
                                                <span class="badge badge-light-<?= $status_class ?> fs-8"><?= str_replace('_', ' ', $item['status_baru']) ?></span>
                                            </div>
                                        </td>
                                        <td><?= htmlspecialchars($item['keterangan'] ?? '-') ?></td>
                                        <td class="text-end">
                                            <?php 
                                            $actor_class = [
                                                'admin' => 'primary',
                                                'pengguna' => 'info',
                                                'sistem' => 'secondary'
                                            ][$item['dibuat_oleh']] ?? 'secondary';
                                            ?>
                                            <div class="badge badge-<?= $actor_class ?>"><?= ucfirst($item['dibuat_oleh']) ?></div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
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
<script>
    "use strict";
    var KTDatatables = function () {
        var dt;
        var initDatatable = function () {
            dt = $("#kt_datatable").DataTable({
                searchDelay: 500,
                processing: true,
                order: [[0, 'desc']],
            });
        };

        var handleSearchDatatable = function () {
            const filterSearch = document.querySelector('[data-kt-filter="search"]');
            filterSearch.addEventListener('keyup', function (e) {
                dt.search(e.target.value).draw();
            });
        };

        return {
            init: function () {
                initDatatable();
                handleSearchDatatable();
            }
        };
    }();

    KTUtil.onDOMContentLoaded(function () {
        KTDatatables.init();
    });
</script>
