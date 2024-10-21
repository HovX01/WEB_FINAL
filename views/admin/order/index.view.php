<?php
$style = [
    '/admin-asset/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
    '/admin-asset/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css',
];
$title = 'Orders';
require base_path('views/admin/partial/head.php');
$orderClass = 'active';
?>
    <!-- BEGIN #app -->
    <div id="app" class="app app-header-fixed app-sidebar-fixed app-with-light-sidebar">
        <?php require base_path('views/admin/partial/header.php'); ?>
        <?php require base_path('views/admin/partial/sidebar.php'); ?>

        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            <div class="d-flex align-items-center mb-3">
                <div>
                    <ul class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ul>
                    <h1 class="page-header mb-0">Orders</h1>
                </div>
            </div>

            <div class="card border-0">
                <div class="tab-content p-3">

                    <!-- BEGIN table -->
                    <div class="table-responsive mb-3">
                        <table id="data-table" class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <!--                                <th></th>-->
                                <th>Order</th>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Items</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($orders as $order): ?>
                                <tr>
                                    <!--                                    <td class="w-10px align-middle">-->
                                    <!--                                        <div class="form-check">-->
                                    <!--                                            <input type="checkbox" class="form-check-input" id="product1">-->
                                    <!--                                            <label class="form-check-label" for="product1"></label>-->
                                    <!--                                        </div>-->
                                    <!--                                    </td>-->
                                    <td><a href="/admin/order/<?= $order['id'] ?>"
                                           class="fw-bold">#<?= $order['id'] ?></a></td>
                                    <td><?= $order['created_at'] ?></td>
                                    <td><?= $order['customer'] ?></td>
                                    <td>
                                        <?php if ($order['status'] == 'paid'): ?>
                                            <span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center">
                                                <i class="fa fa-circle fs-9px fa-fw me-5px"></i>
                                                Paid
                                            </span>
                                        <?php elseif ($order['status'] == 'pending'): ?>
                                            <span class="badge border border-warning text-warning px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center">
                                                <i class="fa fa-circle fs-9px fa-fw me-5px"></i>
                                                Pending
                                            </span>
                                        <?php else: ?>
                                            <span class="badge border border-danger text-danger px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center">
                                                <i class="fa fa-circle fs-9px fa-fw me-5px"></i>
                                                Cancelled
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td>$<?= number_format($order['total'], 2) ?></td>
                                    <td><?= count($order['products']) ?> items</td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END table -->
                    <!--                    <div class="d-md-flex align-items-center">-->
                    <!--                        <div class="me-md-auto text-md-left text-center mb-2 mb-md-0">-->
                    <!--                            Showing 1 to 10 of 57 entries-->
                    <!--                        </div>-->
                    <!--                        <ul class="pagination mb-0 justify-content-center">-->
                    <!--                            <li class="page-item disabled"><a class="page-link">Previous</a></li>-->
                    <!--                            <li class="page-item"><a class="page-link" href="#">1</a></li>-->
                    <!--                            <li class="page-item active"><a class="page-link" href="#">2</a></li>-->
                    <!--                            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                    <!--                            <li class="page-item"><a class="page-link" href="#">4</a></li>-->
                    <!--                            <li class="page-item"><a class="page-link" href="#">5</a></li>-->
                    <!--                            <li class="page-item"><a class="page-link" href="#">6</a></li>-->
                    <!--                            <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
        <!-- END #content -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                $('#data-table').DataTable({
                    autoWidth: false,
                    responsive: true,
                    ordering: false
                });
            });
        </script>

        <?php require base_path('views/admin/partial/scroll-top-btn.php') ?>
    </div>
    <!-- END #app -->

<?php
$script = [
    '/admin-asset/plugins/datatables.net/js/jquery.dataTables.min.js',
    '/admin-asset/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js',
    '/admin-asset/plugins/datatables.net-responsive/js/dataTables.responsive.min.js',
    '/admin-asset/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js',
];
require base_path('views/admin/partial/script.php')
?>