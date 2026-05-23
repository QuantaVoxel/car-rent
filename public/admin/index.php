<?php
require_once __DIR__ . '/../../backend/bootstrap.php';
?>
<?= layout('admin/header') ?>
<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 "

        >

            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">


                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        Products
                    </h1>
                    <!--end::Title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../../index708f.html?page=index"
                               class="text-muted text-hover-primary">
                                Home </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            eCommerce
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            Catalog
                        </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold"
                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-filter fs-6 text-muted me-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                            Filter
                        </a>
                        <!--end::Menu toggle-->


                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                             id="kt_menu_69efdfb93f529">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->


                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple
                                                data-kt-select2="true" data-close-on-select="false"
                                                data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_69efdfb93f529"
                                                data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->

                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1"/>
                                            <span class="form-check-label">
                        Author
                    </span>
                                        </label>
                                        <!--end::Options-->

                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                   checked="checked"/>
                                            <span class="form-check-label">
                        Customer
                    </span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->

                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                               name="notifications" checked/>
                                        <label class="form-check-label">
                                            Enabled
                                        </label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset
                                    </button>

                                    <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->        </div>
                    <!--end::Filter menu-->


                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->

                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_create_app">
                        Create </a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">


            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span
                                        class="path1"></span><span class="path2"></span></i> <input
                                    type="text" data-kt-ecommerce-product-filter="search"
                                    class="form-control form-control-solid w-250px ps-12"
                                    placeholder="Search Product"/>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2"
                                        data-hide-search="true" data-placeholder="Status"
                                        data-kt-ecommerce-product-filter="status">
                                    <option></option>
                                    <option value="all">All</option>
                                    <option value="published">Published</option>
                                    <option value="scheduled">Scheduled</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <!--end::Select2-->
                            </div>

                            <!--begin::Add product-->
                            <a href="../../../index5b94.html?page=apps/ecommerce/catalog/add-product"
                               class="btn btn-primary">
                                Add Product
                            </a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">

                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5"
                               id="kt_ecommerce_products_table">
                            <thead>
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                               data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                               value="1"/>
                                    </div>
                                </th>
                                <th class="min-w-200px">Product</th>
                                <th class="text-end min-w-100px">SKU</th>
                                <th class="text-end min-w-70px">Qty</th>
                                <th class="text-end min-w-100px">Price</th>
                                <th class="text-end min-w-100px">Rating</th>
                                <th class="text-end min-w-100px">Status</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/1.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04418004</span>
                                </td>
                                <td class="text-end pe-0" data-order="17">
                                    <span class="fw-bold ms-3">17</span>
                                </td>
                                <td class="text-end pe-0">
                                    162
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/2.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02833008</span>
                                </td>
                                <td class="text-end pe-0" data-order="28">
                                    <span class="fw-bold ms-3">28</span>
                                </td>
                                <td class="text-end pe-0">
                                    95
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/3.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product 3</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04318003</span>
                                </td>
                                <td class="text-end pe-0" data-order="18">
                                    <span class="fw-bold ms-3">18</span>
                                </td>
                                <td class="text-end pe-0">
                                    299
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/4.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02865006</span>
                                </td>
                                <td class="text-end pe-0" data-order="39">
                                    <span class="fw-bold ms-3">39</span>
                                </td>
                                <td class="text-end pe-0">
                                    16
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/5.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product 5</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02357009</span>
                                </td>
                                <td class="text-end pe-0" data-order="2">
                                    <span class="badge badge-light-warning">Low stock</span>
                                    <span class="fw-bold text-warning ms-3">2</span>
                                </td>
                                <td class="text-end pe-0">
                                    227
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/6.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01867001</span>
                                </td>
                                <td class="text-end pe-0" data-order="37">
                                    <span class="fw-bold ms-3">37</span>
                                </td>
                                <td class="text-end pe-0">
                                    276
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/7.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01805003</span>
                                </td>
                                <td class="text-end pe-0" data-order="0">
                                    <span class="badge badge-light-danger">Sold out</span>
                                    <span class="fw-bold text-danger ms-3">0</span>
                                </td>
                                <td class="text-end pe-0">
                                    208
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/8.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product 8</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01765006</span>
                                </td>
                                <td class="text-end pe-0" data-order="36">
                                    <span class="fw-bold ms-3">36</span>
                                </td>
                                <td class="text-end pe-0">
                                    291
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/9.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product 9</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03280004</span>
                                </td>
                                <td class="text-end pe-0" data-order="24">
                                    <span class="fw-bold ms-3">24</span>
                                </td>
                                <td class="text-end pe-0">
                                    292
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/10.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                10</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01624001</span>
                                </td>
                                <td class="text-end pe-0" data-order="22">
                                    <span class="fw-bold ms-3">22</span>
                                </td>
                                <td class="text-end pe-0">
                                    262
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/11.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                11</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02987007</span>
                                </td>
                                <td class="text-end pe-0" data-order="33">
                                    <span class="fw-bold ms-3">33</span>
                                </td>
                                <td class="text-end pe-0">
                                    197
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/12.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                12</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01325004</span>
                                </td>
                                <td class="text-end pe-0" data-order="13">
                                    <span class="fw-bold ms-3">13</span>
                                </td>
                                <td class="text-end pe-0">
                                    72
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/13.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                13</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03117002</span>
                                </td>
                                <td class="text-end pe-0" data-order="13">
                                    <span class="fw-bold ms-3">13</span>
                                </td>
                                <td class="text-end pe-0">
                                    176
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/14.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                14</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02601006</span>
                                </td>
                                <td class="text-end pe-0" data-order="36">
                                    <span class="fw-bold ms-3">36</span>
                                </td>
                                <td class="text-end pe-0">
                                    32
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/15.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                15</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02361003</span>
                                </td>
                                <td class="text-end pe-0" data-order="10">
                                    <span class="fw-bold ms-3">10</span>
                                </td>
                                <td class="text-end pe-0">
                                    296
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/16.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                16</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02525009</span>
                                </td>
                                <td class="text-end pe-0" data-order="50">
                                    <span class="fw-bold ms-3">50</span>
                                </td>
                                <td class="text-end pe-0">
                                    202
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/17.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                17</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04315003</span>
                                </td>
                                <td class="text-end pe-0" data-order="40">
                                    <span class="fw-bold ms-3">40</span>
                                </td>
                                <td class="text-end pe-0">
                                    104
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/18.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                18</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03453007</span>
                                </td>
                                <td class="text-end pe-0" data-order="29">
                                    <span class="fw-bold ms-3">29</span>
                                </td>
                                <td class="text-end pe-0">
                                    238
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/19.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                19</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03440006</span>
                                </td>
                                <td class="text-end pe-0" data-order="7">
                                    <span class="badge badge-light-warning">Low stock</span>
                                    <span class="fw-bold text-warning ms-3">7</span>
                                </td>
                                <td class="text-end pe-0">
                                    134
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/20.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                20</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01547007</span>
                                </td>
                                <td class="text-end pe-0" data-order="44">
                                    <span class="fw-bold ms-3">44</span>
                                </td>
                                <td class="text-end pe-0">
                                    201
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/21.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                21</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04925007</span>
                                </td>
                                <td class="text-end pe-0" data-order="8">
                                    <span class="badge badge-light-warning">Low stock</span>
                                    <span class="fw-bold text-warning ms-3">8</span>
                                </td>
                                <td class="text-end pe-0">
                                    273
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/22.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                22</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02793007</span>
                                </td>
                                <td class="text-end pe-0" data-order="30">
                                    <span class="fw-bold ms-3">30</span>
                                </td>
                                <td class="text-end pe-0">
                                    270
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/23.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                23</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04556003</span>
                                </td>
                                <td class="text-end pe-0" data-order="31">
                                    <span class="fw-bold ms-3">31</span>
                                </td>
                                <td class="text-end pe-0">
                                    46
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/24.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                24</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03978004</span>
                                </td>
                                <td class="text-end pe-0" data-order="48">
                                    <span class="fw-bold ms-3">48</span>
                                </td>
                                <td class="text-end pe-0">
                                    129
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/25.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                25</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04585006</span>
                                </td>
                                <td class="text-end pe-0" data-order="46">
                                    <span class="fw-bold ms-3">46</span>
                                </td>
                                <td class="text-end pe-0">
                                    219
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/26.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                26</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03550004</span>
                                </td>
                                <td class="text-end pe-0" data-order="16">
                                    <span class="fw-bold ms-3">16</span>
                                </td>
                                <td class="text-end pe-0">
                                    147
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/27.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                27</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03821009</span>
                                </td>
                                <td class="text-end pe-0" data-order="7">
                                    <span class="badge badge-light-warning">Low stock</span>
                                    <span class="fw-bold text-warning ms-3">7</span>
                                </td>
                                <td class="text-end pe-0">
                                    149
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/28.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                28</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02862004</span>
                                </td>
                                <td class="text-end pe-0" data-order="18">
                                    <span class="fw-bold ms-3">18</span>
                                </td>
                                <td class="text-end pe-0">
                                    177
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/29.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                29</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01290009</span>
                                </td>
                                <td class="text-end pe-0" data-order="2">
                                    <span class="badge badge-light-warning">Low stock</span>
                                    <span class="fw-bold text-warning ms-3">2</span>
                                </td>
                                <td class="text-end pe-0">
                                    159
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/30.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                30</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02653009</span>
                                </td>
                                <td class="text-end pe-0" data-order="44">
                                    <span class="fw-bold ms-3">44</span>
                                </td>
                                <td class="text-end pe-0">
                                    143
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/31.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                31</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02972005</span>
                                </td>
                                <td class="text-end pe-0" data-order="25">
                                    <span class="fw-bold ms-3">25</span>
                                </td>
                                <td class="text-end pe-0">
                                    300
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/32.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                32</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01593004</span>
                                </td>
                                <td class="text-end pe-0" data-order="45">
                                    <span class="fw-bold ms-3">45</span>
                                </td>
                                <td class="text-end pe-0">
                                    181
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/33.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                33</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01413004</span>
                                </td>
                                <td class="text-end pe-0" data-order="1">
                                    <span class="badge badge-light-warning">Low stock</span>
                                    <span class="fw-bold text-warning ms-3">1</span>
                                </td>
                                <td class="text-end pe-0">
                                    72
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/34.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                34</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01428003</span>
                                </td>
                                <td class="text-end pe-0" data-order="50">
                                    <span class="fw-bold ms-3">50</span>
                                </td>
                                <td class="text-end pe-0">
                                    233
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/35.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                35</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02405003</span>
                                </td>
                                <td class="text-end pe-0" data-order="47">
                                    <span class="fw-bold ms-3">47</span>
                                </td>
                                <td class="text-end pe-0">
                                    45
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/36.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                36</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02671006</span>
                                </td>
                                <td class="text-end pe-0" data-order="34">
                                    <span class="fw-bold ms-3">34</span>
                                </td>
                                <td class="text-end pe-0">
                                    276
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/37.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                37</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04610003</span>
                                </td>
                                <td class="text-end pe-0" data-order="45">
                                    <span class="fw-bold ms-3">45</span>
                                </td>
                                <td class="text-end pe-0">
                                    186
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/38.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                38</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03628007</span>
                                </td>
                                <td class="text-end pe-0" data-order="17">
                                    <span class="fw-bold ms-3">17</span>
                                </td>
                                <td class="text-end pe-0">
                                    287
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/39.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                39</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04871003</span>
                                </td>
                                <td class="text-end pe-0" data-order="5">
                                    <span class="badge badge-light-warning">Low stock</span>
                                    <span class="fw-bold text-warning ms-3">5</span>
                                </td>
                                <td class="text-end pe-0">
                                    283
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/40.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                40</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04381007</span>
                                </td>
                                <td class="text-end pe-0" data-order="0">
                                    <span class="badge badge-light-danger">Sold out</span>
                                    <span class="fw-bold text-danger ms-3">0</span>
                                </td>
                                <td class="text-end pe-0">
                                    142
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/41.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                41</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04115006</span>
                                </td>
                                <td class="text-end pe-0" data-order="20">
                                    <span class="fw-bold ms-3">20</span>
                                </td>
                                <td class="text-end pe-0">
                                    45
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/42.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                42</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03412007</span>
                                </td>
                                <td class="text-end pe-0" data-order="30">
                                    <span class="fw-bold ms-3">30</span>
                                </td>
                                <td class="text-end pe-0">
                                    43
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/43.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                43</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03402003</span>
                                </td>
                                <td class="text-end pe-0" data-order="9">
                                    <span class="badge badge-light-warning">Low stock</span>
                                    <span class="fw-bold text-warning ms-3">9</span>
                                </td>
                                <td class="text-end pe-0">
                                    252
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/44.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                44</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04149005</span>
                                </td>
                                <td class="text-end pe-0" data-order="45">
                                    <span class="fw-bold ms-3">45</span>
                                </td>
                                <td class="text-end pe-0">
                                    162
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/45.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                45</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01340001</span>
                                </td>
                                <td class="text-end pe-0" data-order="9">
                                    <span class="badge badge-light-warning">Low stock</span>
                                    <span class="fw-bold text-warning ms-3">9</span>
                                </td>
                                <td class="text-end pe-0">
                                    45
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/46.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                46</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04451009</span>
                                </td>
                                <td class="text-end pe-0" data-order="21">
                                    <span class="fw-bold ms-3">21</span>
                                </td>
                                <td class="text-end pe-0">
                                    177
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/47.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                47</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03193001</span>
                                </td>
                                <td class="text-end pe-0" data-order="47">
                                    <span class="fw-bold ms-3">47</span>
                                </td>
                                <td class="text-end pe-0">
                                    136
                                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/48.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                48</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03116005</span>
                                </td>
                                <td class="text-end pe-0" data-order="25">
                                    <span class="fw-bold ms-3">25</span>
                                </td>
                                <td class="text-end pe-0">
                                    61
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/49.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                49</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01413004</span>
                                </td>
                                <td class="text-end pe-0" data-order="43">
                                    <span class="fw-bold ms-3">43</span>
                                </td>
                                <td class="text-end pe-0">
                                    28
                                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Inactive</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                           class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                              style="background-image:url(../../../assets/media/stock/ecommerce/50.png);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                               data-kt-ecommerce-product-filter="product_name">Product
                                                50</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03696002</span>
                                </td>
                                <td class="text-end pe-0" data-order="28">
                                    <span class="fw-bold ms-3">28</span>
                                </td>
                                <td class="text-end pe-0">
                                    51
                                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i></div>
                                    </div>
                                </td>
                                <td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Published</div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../../indexde00.html?page=apps/ecommerce/catalog/edit-product"
                                               class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--end::Table-->    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->        </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Content wrapper-->


    <!--begin::Footer-->
    <div id="kt_app_footer" class="app-footer ">


        <!--begin::Footer container-->
        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
            <!--begin::Copyright-->
            <div class="text-gray-900 order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2026&copy;</span>
                <a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
            </div>
            <!--end::Copyright-->

            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item"><a href="https://keenthemes.com/" target="_blank"
                                         class="menu-link px-2">About</a></li>

                <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank"
                                         class="menu-link px-2">Support</a></li>

                <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank"
                                         class="menu-link px-2">Purchase</a></li>
            </ul>
            <!--end::Menu-->        </div>
        <!--end::Footer container-->
    </div>
    <!--end::Footer-->                            </div>

<?= layout('admin/footer') ?>
