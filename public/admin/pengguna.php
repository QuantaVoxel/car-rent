<?php
require_once __DIR__ . '/../../backend/bootstrap.php';

use Backend\CarRent\Models\Pengguna;

$items = Pengguna::all();
?>
<?= layout('admin/header') ?>
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
                <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Pengguna
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="/admin/index.php" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Master Data</li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Pengguna</li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <button class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_item">
                            Tambah Pengguna
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
                                           placeholder="Cari Pengguna..."/>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable">
                                <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px">ID</th>
                                    <th class="min-w-150px">Nama Lengkap</th>
                                    <th class="min-w-150px">Email</th>
                                    <th class="min-w-100px">No. Telepon</th>
                                    <th class="min-w-70px">Role</th>
                                    <th class="min-w-70px">Status</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                <?php foreach ($items as $item): ?>
                                    <tr>
                                        <td><?= $item['id_pengguna'] ?></td>
                                        <td><?= htmlspecialchars($item['nama_lengkap']) ?></td>
                                        <td><?= htmlspecialchars($item['email']) ?></td>
                                        <td><?= htmlspecialchars($item['no_telepon']) ?></td>
                                        <td>
                                            <?php if ($item['role'] === 'admin'): ?>
                                                <div class="badge badge-light-primary">Admin</div>
                                            <?php else: ?>
                                                <div class="badge badge-light-info">Pengguna</div>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($item['status_akun'] === 'aktif'): ?>
                                                <div class="badge badge-light-success">Aktif</div>
                                            <?php elseif ($item['status_akun'] === 'nonaktif'): ?>
                                                <div class="badge badge-light-warning">Nonaktif</div>
                                            <?php else: ?>
                                                <div class="badge badge-light-danger">Suspend</div>
                                            <?php endif; ?>
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
                                                       data-bs-target="#kt_modal_edit_item_<?= $item['id_pengguna'] ?>">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3 text-danger"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#kt_modal_delete_item_<?= $item['id_pengguna'] ?>">
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!--begin::Modal - Edit Item-->
                                    <div class="modal fade" id="kt_modal_edit_item_<?= $item['id_pengguna'] ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <div class="modal-content">
                                                <form class="form" action="/process/pengguna/update.php" method="POST">
                                                    <input type="hidden" name="id_pengguna" value="<?= $item['id_pengguna'] ?>">
                                                    <div class="modal-header">
                                                        <h2 class="fw-bold">Edit Pengguna</h2>
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body py-10 px-lg-17">
                                                        <div class="fv-row mb-7">
                                                            <label class="required fs-6 fw-semibold mb-2">Nama Lengkap</label>
                                                            <input type="text" class="form-control form-control-solid" name="nama_lengkap" value="<?= htmlspecialchars($item['nama_lengkap']) ?>" required />
                                                        </div>
                                                        <div class="fv-row mb-7">
                                                            <label class="required fs-6 fw-semibold mb-2">Email</label>
                                                            <input type="email" class="form-control form-control-solid" name="email" value="<?= htmlspecialchars($item['email']) ?>" required />
                                                        </div>
                                                        <div class="fv-row mb-7">
                                                            <label class="required fs-6 fw-semibold mb-2">No. Telepon</label>
                                                            <input type="text" class="form-control form-control-solid" name="no_telepon" value="<?= htmlspecialchars($item['no_telepon']) ?>" required />
                                                        </div>
                                                        <div class="row g-9 mb-7">
                                                            <div class="col-md-6 fv-row">
                                                                <label class="required fs-6 fw-semibold mb-2">Role</label>
                                                                <select class="form-select form-select-solid" name="role">
                                                                    <option value="pengguna" <?= $item['role'] === 'pengguna' ? 'selected' : '' ?>>Pengguna</option>
                                                                    <option value="admin" <?= $item['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 fv-row">
                                                                <label class="required fs-6 fw-semibold mb-2">Status Akun</label>
                                                                <select class="form-select form-select-solid" name="status_akun">
                                                                    <option value="aktif" <?= $item['status_akun'] === 'aktif' ? 'selected' : '' ?>>Aktif</option>
                                                                    <option value="nonaktif" <?= $item['status_akun'] === 'nonaktif' ? 'selected' : '' ?>>Nonaktif</option>
                                                                    <option value="suspend" <?= $item['status_akun'] === 'suspend' ? 'selected' : '' ?>>Suspend</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="fv-row mb-7">
                                                            <label class="fs-6 fw-semibold mb-2">Password (Kosongkan jika tidak ingin diubah)</label>
                                                            <input type="password" class="form-control form-control-solid" name="password" />
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer flex-center">
                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                                        <button type="submit" class="btn btn-primary">
                                                            <span class="indicator-label">Submit</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal - Edit Item-->

                                    <!--begin::Modal - Delete Item-->
                                    <div class="modal fade" id="kt_modal_delete_item_<?= $item['id_pengguna'] ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-400px">
                                            <div class="modal-content">
                                                <form action="/process/pengguna/delete.php" method="POST">
                                                    <input type="hidden" name="id_pengguna" value="<?= $item['id_pengguna'] ?>">
                                                    <div class="modal-header">
                                                        <h2 class="fw-bold">Hapus Pengguna</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus pengguna <strong><?= htmlspecialchars($item['nama_lengkap']) ?></strong>?
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
                <form class="form" action="/process/pengguna/create.php" method="POST">
                    <div class="modal-header">
                        <h2 class="fw-bold">Tambah Pengguna</h2>
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                    </div>
                    <div class="modal-body py-10 px-lg-17">
                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-semibold mb-2">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-solid" name="nama_lengkap" placeholder="Masukkan nama lengkap" required />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-semibold mb-2">Email</label>
                            <input type="email" class="form-control form-control-solid" name="email" placeholder="email@example.com" required />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-semibold mb-2">No. Telepon</label>
                            <input type="text" class="form-control form-control-solid" name="no_telepon" placeholder="08xxxx" required />
                        </div>
                        <div class="row g-9 mb-7">
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Role</label>
                                <select class="form-select form-select-solid" name="role">
                                    <option value="pengguna" selected>Pengguna</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Status Akun</label>
                                <select class="form-select form-select-solid" name="status_akun">
                                    <option value="aktif" selected>Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                    <option value="suspend">Suspend</option>
                                </select>
                            </div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-semibold mb-2">Password</label>
                            <input type="password" class="form-control form-control-solid" name="password" required />
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
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
                order: [[0, 'asc']],
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
