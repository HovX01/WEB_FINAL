<?php
$style = [
    '/admin-asset/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
    '/admin-asset/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css',
];
$title = 'Category';
require base_path('views/admin/partial/head.php');
$categoryClass = 'active';
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
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                    <h1 class="page-header mb-0">Categories</h1>
                </div>
                <div class="ms-auto">
                    <a href="/admin/category/create" class="btn btn-success btn-rounded px-4 rounded-pill">
                        <i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i>
                        Add Category
                    </a>
                </div>
            </div>

            <div class="card border-0">
                <div class="tab-content p-3">
                    <div class="tab-pane fade show active" id="allTab">
                        <!-- BEGIN table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th class="pt-0 pb-2">Name</th>
                                    <th class="pt-0 pb-2">Products</th>
                                    <th class="pt-0 pb-2">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($categories as $category): ?>
                                    <tr>
                                        <td class="align-middle"><?= $category['title'] ?></td>
                                        <td class="align-middle" data-orderable="false">
                                            <a href="/admin/product?category=<?= $category['id'] ?>">
                                                <?= $category['products_count'] ?> product(s)
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="/admin/category/<?= $category['id'] ?>/edit"
                                               class="btn btn-sm btn-outline-warning">
                                                <i class="fa fa-edit"></i>
                                                Edit
                                            </a>
                                            <form action="/admin/category/<?= $category['id'] ?>/delete" method="post"
                                                  class="d-inline">
                                                <button
                                                        type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Are you sure you want to delete this product?')"
                                                >
                                                    <i class="fa fa-trash"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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