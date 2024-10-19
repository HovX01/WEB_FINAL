<?php
$style = [
    '/admin-asset/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
    '/admin-asset/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css',
];
require base_path('views/admin/partial/head.php');
$productClass = 'active';
?>
    <!-- BEGIN #app -->
    <div id="app" class="app app-header-fixed app-sidebar-fixed app-with-light-sidebar">
        <?php require base_path('views/admin/partial/header.php'); ?>
        <?php require base_path('views/admin/partial/sidebar.php'); ?>

        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            <div class="d-flex align-items-center mb-3">
                <div>
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                    <h1 class="page-header mb-0">Products</h1>
                </div>
                <div class="ms-auto">
                    <a href="/admin/product/create" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                                class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Product</a>
                </div>
            </div>

            <div class="card border-0">
                <div class="tab-content p-3">
                    <div class="tab-pane fade show active" id="allTab">
                        <!-- BEGIN table -->
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th class="pt-0 pb-2">Product</th>
                                    <th class="pt-0 pb-2">Availability</th>
                                    <th class="pt-0 pb-2">Category</th>
                                    <th class="pt-0 pb-2" data-orderable="false">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
                                                <img alt="" class="mw-100 mh-100"
                                                     src="/admin-asset/img/product/product-6.jpg"/>
                                            </div>
                                            <div class="ms-3">
                                                <a href="extra_product_details.html"
                                                   class="text-dark text-decoration-none">Force Majeure White T
                                                    Shirt</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                    class="fa fa-circle fs-9px fa-fw me-5px"></i> Available</span>
                                    </td>
                                    <td class="align-middle">Cotton</td>
                                    <td class="align-middle">
                                        <a href="/admin/product/edit/1" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="/admin/product/delete/1" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END #content -->
        <?php require base_path('views/admin/partial/scroll-top-btn.php') ?>
    </div>
    <!-- END #app -->
    <script>
       document.addEventListener('DOMContentLoaded', function () {
           $('#data-table').DataTable({
               autoWidth: false,
               responsive: true
           });
       });
    </script>

<?php

$script = [
    '/admin-asset/plugins/datatables.net/js/jquery.dataTables.min.js',
    '/admin-asset/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js',
    '/admin-asset/plugins/datatables.net-responsive/js/dataTables.responsive.min.js',
    '/admin-asset/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js',
];
require base_path('views/admin/partial/script.php')
?>