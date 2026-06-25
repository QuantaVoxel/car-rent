<?php
require_once __DIR__ . '/../../backend/bootstrap.php';

use Backend\CarRent\Models\Pembayaran;
use Backend\CarRent\Models\Pesanan;

$items = Pembayaran::all(['pesanan']);
$pesanans = Pesanan::all();
?>
<?= layout('admin/header') ?>
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
                <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Pembayaran
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="/admin/index.php" class="text-muted text-hover-primary">Beranda</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Transaksi</li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Pembayaran</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end::Toolbar-->

            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <?php if (has_flash('success')): ?>
                        <div class="alert alert-success d-flex align-items-center p-5 mb-10">
                            <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span class="path1"></span><span class="path2"></span></i>
                            <div class="d-flex flex-column">
                                <h4 class="mb-1 text-success">Berhasil</h4>
                                <span><?= get_flash('success') ?></span>
                            </div>
                            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                <i class="ki-duotone ki-cross fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                            </button>
                        </div>
                    <?php endif; ?>

                    <?php if (has_flash('error')): ?>
                        <div class="alert alert-danger d-flex align-items-center p-5 mb-10">
                            <i class="ki-duotone ki-shield-cross fs-2hx text-danger me-4"><span class="path1"></span><span class="path2"></span></i>
                            <div class="d-flex flex-column">
                                <h4 class="mb-1 text-danger">Gagal</h4>
                                <span><?= get_flash('error') ?></span>
                            </div>
                            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                <i class="ki-duotone ki-cross fs-1 text-danger"><span class="path1"></span><span class="path2"></span></i>
                            </button>
                        </div>
                    <?php endif; ?>

                    <?php
                    $counts = [];
                    foreach($items as $item) {
                        $counts[$item['status_pembayaran']] = ($counts[$item['status_pembayaran']] ?? 0) + 1;
                    }
                    ?>
                    <div class="row g-5 g-xl-10 mb-5">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card card-flush">
                                <div class="card-header pt-5">
                                    <div class="card-title d-flex flex-column">
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"><?= count($items) ?></span>
                                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Pembayaran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php foreach(['menunggu', 'berhasil', 'gagal', 'expired', 'refund'] as $status): ?>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card card-flush">
                                <div class="card-header pt-5">
                                    <div class="card-title d-flex flex-column">
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"><?= $counts[$status] ?? 0 ?></span>
                                        <span class="text-gray-500 pt-1 fw-semibold fs-6 text-capitalize"><?= $status ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    <input type="text" data-kt-filter="search"
                                           class="form-control form-control-solid w-250px ps-12"
                                           placeholder="Cari..."/>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable">
                                <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px">ID Bayar</th>
                                    <th class="min-w-100px">Kode Pesanan</th>
                                    <th class="min-w-150px">Kode Transaksi</th>
                                    <th class="text-end min-w-100px">Jumlah</th>
                                    <th class="text-end min-w-100px">Status</th>
                                    <th class="text-end min-w-100px">Waktu Bayar</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                <?php foreach ($items as $item): ?>
                                    <tr>
                                        <td><?= $item['id_pembayaran'] ?></td>
                                        <td>
                                            <span class="text-gray-800 fw-bold"><?= htmlspecialchars($item['pesanan']['kode_pesanan'] ?? 'N/A') ?></span>
                                        </td>
                                        <td><?= htmlspecialchars($item['kode_transaksi']) ?></td>
                                        <td class="text-end">
                                            <span class="text-gray-800 fw-bold">Rp <?= number_format($item['jumlah'], 0, ',', '.') ?></span>
                                        </td>
                                        <td class="text-end">
                                            <?php 
                                            $status_class = [
                                                'menunggu' => 'warning',
                                                'berhasil' => 'success',
                                                'gagal' => 'danger',
                                                'expired' => 'secondary',
                                                'refund' => 'info'
                                            ][$item['status_pembayaran']] ?? 'secondary';
                                            ?>
                                            <div class="badge badge-light-<?= $status_class ?>"><?= ucfirst($item['status_pembayaran']) ?></div>
                                        </td>
                                        <td class="text-end">
                                            <?= $item['waktu_bayar'] ? date('d M Y H:i', strtotime($item['waktu_bayar'])) : '-' ?>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                            </a>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                 data-kt-menu="true">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#kt_modal_edit_item_<?= $item['id_pembayaran'] ?>">
                                                        Update
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!--begin::Modal - Edit Item-->
                                    <div class="modal fade" id="kt_modal_edit_item_<?= $item['id_pembayaran'] ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-450px">
                                            <div class="modal-content">
                                                <form class="form" action="/process/pembayaran/update.php" method="POST">
                                                    <input type="hidden" name="id_pembayaran" value="<?= $item['id_pembayaran'] ?>">
                                                    <div class="modal-header">
                                                        <h2 class="fw-bold">Update Status Pembayaran</h2>
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body py-10 px-lg-17">
                                                        <div class="fv-row mb-7">
                                                            <label class="required fs-6 fw-semibold mb-2">Status Pembayaran</label>
                                                            <select class="form-select form-select-solid" name="status_pembayaran">
                                                                <option value="menunggu" <?= $item['status_pembayaran'] === 'menunggu' ? 'selected' : '' ?>>Menunggu</option>
                                                                <option value="berhasil" <?= $item['status_pembayaran'] === 'berhasil' ? 'selected' : '' ?>>Berhasil</option>
                                                                <option value="gagal" <?= $item['status_pembayaran'] === 'gagal' ? 'selected' : '' ?>>Gagal</option>
                                                                <option value="expired" <?= $item['status_pembayaran'] === 'expired' ? 'selected' : '' ?>>Expired</option>
                                                                <option value="refund" <?= $item['status_pembayaran'] === 'refund' ? 'selected' : '' ?>>Refund</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer flex-center">
                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                                        <button type="submit" class="btn btn-primary">
                                                            <span class="indicator-label">Update</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal - Edit Item-->

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
                columnDefs: [
                    { orderable: false, targets: 6 },
                ]
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
