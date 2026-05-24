<?php
require_once __DIR__ . '/../../backend/bootstrap.php';

use Backend\CarRent\Models\Pesanan;
use Backend\CarRent\Models\Pengguna;
use Backend\CarRent\Models\TipeKendaraan;
use Backend\CarRent\Models\Kendaraan;

$items = Pesanan::all();
$penggunas = Pengguna::all();
$tipes = TipeKendaraan::all();
$kendaraans = Kendaraan::all();
?>
<?= layout('admin/header') ?>
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
                <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Pesanan
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="/admin/index.php" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Transaksi</li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Pesanan</li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <button class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_item">
                            Tambah Pesanan
                        </button>
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

                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    <input type="text" data-kt-filter="search"
                                           class="form-control form-control-solid w-250px ps-12"
                                           placeholder="Cari Pesanan..."/>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable">
                                <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px">Kode</th>
                                    <th class="min-w-150px">Pelanggan</th>
                                    <th class="min-w-150px">Rute</th>
                                    <th class="text-end min-w-100px">Total Tarif</th>
                                    <th class="text-end min-w-100px">Status</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                <?php foreach ($items as $item): ?>
                                    <tr>
                                        <td>
                                            <span class="text-gray-800 fw-bold"><?= htmlspecialchars($item['kode_pesanan']) ?></span>
                                            <div class="text-muted fs-7"><?= date('d M Y H:i', strtotime($item['waktu_pesan'])) ?></div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="text-gray-800 fw-bold"><?= htmlspecialchars($item['nama_pelanggan'] ?? 'N/A') ?></span>
                                                <span class="text-muted fs-7"><?= htmlspecialchars($item['nama_tipe'] ?? 'N/A') ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <div class="text-gray-800 fs-7"><i class="ki-duotone ki-geolocation fs-7 text-success"></i> <?= htmlspecialchars($item['lokasi_jemput']) ?></div>
                                                <div class="text-gray-800 fs-7"><i class="ki-duotone ki-geolocation fs-7 text-danger"></i> <?= htmlspecialchars($item['lokasi_tujuan']) ?></div>
                                                <span class="badge badge-light-info fs-8 mt-1 w-fit-content"><?= $item['jarak_km'] ?> KM</span>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <span class="text-gray-800 fw-bold">Rp <?= number_format($item['total_tarif'], 0, ',', '.') ?></span>
                                        </td>
                                        <td class="text-end">
                                            <?php 
                                            $status_class = [
                                                'menunggu_konfirmasi' => 'warning',
                                                'dikonfirmasi' => 'primary',
                                                'kendaraan_dikirim' => 'info',
                                                'dalam_perjalanan' => 'info',
                                                'selesai' => 'success',
                                                'dibatalkan' => 'danger'
                                            ][$item['status_pesanan']] ?? 'secondary';
                                            ?>
                                            <div class="badge badge-light-<?= $status_class ?>"><?= str_replace('_', ' ', ucfirst($item['status_pesanan'])) ?></div>
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
                                                       data-bs-target="#kt_modal_edit_item_<?= $item['id_pesanan'] ?>">
                                                        Manage
                                                    </a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3 text-danger"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#kt_modal_delete_item_<?= $item['id_pesanan'] ?>">
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!--begin::Modal - Edit Item (Management)-->
                                    <div class="modal fade" id="kt_modal_edit_item_<?= $item['id_pesanan'] ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <div class="modal-content">
                                                <form class="form" action="/process/pesanan/update.php" method="POST">
                                                    <input type="hidden" name="id_pesanan" value="<?= $item['id_pesanan'] ?>">
                                                    <div class="modal-header">
                                                        <h2 class="fw-bold">Manage Pesanan</h2>
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body py-10 px-lg-17">
                                                        <div class="row g-9 mb-7">
                                                            <div class="col-md-6 fv-row">
                                                                <label class="required fs-6 fw-semibold mb-2">Status Pesanan</label>
                                                                <select class="form-select form-select-solid" name="status_pesanan">
                                                                    <option value="menunggu_konfirmasi" <?= $item['status_pesanan'] === 'menunggu_konfirmasi' ? 'selected' : '' ?>>Menunggu Konfirmasi</option>
                                                                    <option value="dikonfirmasi" <?= $item['status_pesanan'] === 'dikonfirmasi' ? 'selected' : '' ?>>Dikonfirmasi</option>
                                                                    <option value="kendaraan_dikirim" <?= $item['status_pesanan'] === 'kendaraan_dikirim' ? 'selected' : '' ?>>Kendaraan Dikirim</option>
                                                                    <option value="dalam_perjalanan" <?= $item['status_pesanan'] === 'dalam_perjalanan' ? 'selected' : '' ?>>Dalam Perjalanan</option>
                                                                    <option value="selesai" <?= $item['status_pesanan'] === 'selesai' ? 'selected' : '' ?>>Selesai</option>
                                                                    <option value="dibatalkan" <?= $item['status_pesanan'] === 'dibatalkan' ? 'selected' : '' ?>>Dibatalkan</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 fv-row">
                                                                <label class="fs-6 fw-semibold mb-2">Pilih Kendaraan</label>
                                                                <select class="form-select form-select-solid" name="id_kendaraan">
                                                                    <option value="">Belum Ditentukan</option>
                                                                    <?php foreach ($kendaraans as $ken): ?>
                                                                        <option value="<?= $ken['id_kendaraan'] ?>" <?= $ken['id_kendaraan'] == $item['id_kendaraan'] ? 'selected' : '' ?>><?= htmlspecialchars($ken['nama_kendaraan']) ?> (<?= htmlspecialchars($ken['plat_nomor']) ?>)</option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="fv-row mb-7">
                                                            <label class="fs-6 fw-semibold mb-2">Catatan Admin</label>
                                                            <textarea class="form-control form-control-solid" name="catatan_admin" rows="3"><?= htmlspecialchars($item['catatan_admin'] ?? '') ?></textarea>
                                                        </div>
                                                        <div class="separator separator-dashed my-5"></div>
                                                        <div class="row g-9 mb-7">
                                                            <div class="col-md-4 fv-row">
                                                                <label class="fs-7 text-muted mb-1">Total Jarak</label>
                                                                <div class="fs-6 fw-bold"><?= $item['jarak_km'] ?> KM</div>
                                                            </div>
                                                            <div class="col-md-4 fv-row">
                                                                <label class="fs-7 text-muted mb-1">Tarif Base</label>
                                                                <div class="fs-6 fw-bold">Rp <?= number_format($item['tarif_base'], 0, ',', '.') ?></div>
                                                            </div>
                                                            <div class="col-md-4 fv-row">
                                                                <label class="fs-7 text-muted mb-1">Tarif Jarak</label>
                                                                <div class="fs-6 fw-bold">Rp <?= number_format($item['tarif_jarak'], 0, ',', '.') ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer flex-center">
                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                                        <button type="submit" class="btn btn-primary">
                                                            <span class="indicator-label">Update Status</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal - Edit Item-->

                                    <!--begin::Modal - Delete Item-->
                                    <div class="modal fade" id="kt_modal_delete_item_<?= $item['id_pesanan'] ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-400px">
                                            <div class="modal-content">
                                                <form action="/process/pesanan/delete.php" method="POST">
                                                    <input type="hidden" name="id_pesanan" value="<?= $item['id_pesanan'] ?>">
                                                    <div class="modal-header">
                                                        <h2 class="fw-bold">Hapus Pesanan</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus pesanan <strong><?= htmlspecialchars($item['kode_pesanan']) ?></strong>?
                                                    </div>
                                                    <div class="modal-footer flex-center">
                                                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal - Delete Item-->

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

    <!--begin::Modal - Add Item-->
    <div class="modal fade" id="kt_modal_add_item" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <form class="form" action="/process/pesanan/create.php" method="POST">
                    <div class="modal-header">
                        <h2 class="fw-bold">Input Pesanan Baru (Manual)</h2>
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                    </div>
                    <div class="modal-body py-10 px-lg-17">
                        <div class="row g-9 mb-7">
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Pelanggan</label>
                                <select class="form-select form-select-solid" name="id_pengguna" data-control="select2" data-dropdown-parent="#kt_modal_add_item" required>
                                    <option value="">Pilih Pelanggan</option>
                                    <?php foreach ($penggunas as $p): ?>
                                        <option value="<?= $p['id_pengguna'] ?>"><?= htmlspecialchars($p['nama_lengkap']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Tipe Kendaraan</label>
                                <select class="form-select form-select-solid" name="id_tipe_kendaraan" data-control="select2" data-dropdown-parent="#kt_modal_add_item" required>
                                    <option value="">Pilih Tipe</option>
                                    <?php foreach ($tipes as $tipe): ?>
                                        <option value="<?= $tipe['id_tipe'] ?>"><?= htmlspecialchars($tipe['nama_tipe']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-semibold mb-2">Lokasi Jemput</label>
                            <input type="text" class="form-control form-control-solid" name="lokasi_jemput" required />
                            <input type="hidden" name="latitude_jemput" value="0" />
                            <input type="hidden" name="longitude_jemput" value="0" />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-semibold mb-2">Lokasi Tujuan</label>
                            <input type="text" class="form-control form-control-solid" name="lokasi_tujuan" required />
                            <input type="hidden" name="latitude_tujuan" value="0" />
                            <input type="hidden" name="longitude_tujuan" value="0" />
                        </div>
                        <div class="row g-9 mb-7">
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Jarak (KM)</label>
                                <input type="number" step="0.01" class="form-control form-control-solid" name="jarak_km" required />
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Total Tarif</label>
                                <input type="number" class="form-control form-control-solid" name="total_tarif" required />
                            </div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-semibold mb-2">Catatan Pengguna</label>
                            <textarea class="form-control form-control-solid" name="catatan_pengguna" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Create Order</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end::Modal - Add Item-->

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
                    { orderable: false, targets: 5 },
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
