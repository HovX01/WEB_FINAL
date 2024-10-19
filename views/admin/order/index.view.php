<?php
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
                <div class="tab-pane fade show active" id="allTab">
                    <!-- BEGIN input-group -->
                    <div class="input-group mb-3">
                        <div class="flex-fill position-relative">
                            <div class="input-group">
                                <div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0 start-0" style="z-index: 1;">
                                    <i class="fa fa-search opacity-5"></i>
                                </div>
                                <input type="text" class="form-control px-35px bg-light" placeholder="Search orders..." />
                            </div>
                        </div>
                    </div>
                    <!-- END input-group -->

                    <!-- BEGIN table -->
                    <div class="table-responsive mb-3">
                        <table class="table table-hover table-panel text-nowrap align-middle mb-0">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Items</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="w-10px align-middle">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="product1">
                                        <label class="form-check-label" for="product1"></label>
                                    </div>
                                </td>
                                <td><a href="extra_order_details.html" class="fw-bold">#1950</a></td>
                                <td>Thu 26 Nov, 12:23pm</td>
                                <td>Amanda Lee</td>
                                <td>$398.00</td>
                                <td>3 items</td>
                            </tr>
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
    </div>
    <!-- END #content -->

    <?php require base_path('views/admin/partial/scroll-top-btn.php') ?>
</div>
<!-- END #app -->

<?php require base_path('views/admin/partial/script.php') ?>