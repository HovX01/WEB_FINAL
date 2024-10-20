<?php
view('admin/partial/head.php', [
    'title' => 'Order Details',
    'style' => [
    ]
]);
$orderClass = 'active';
$errors = session('errors', []);
?>
    <!-- BEGIN #app -->
    <div id="app" class="app app-header-fixed app-sidebar-fixed app-with-light-sidebar">
        <?php require base_path('views/admin/partial/header.php'); ?>
        <?php require base_path('views/admin/partial/sidebar.php'); ?>

        <!-- BEGIN #content -->
        <div id="content" class="app-content checkout-page">
            <div class="row gx-4">
                <div class="col-xl-8 mb-xl-0 mb-4">
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-none p-3 h6 m-0 d-flex align-items-center">
                            <i class="fa fa-shopping-bag fa-lg me-2 text-gray text-opacity-50"></i>
                            Products (<?= count($order['products']) ?>)
                            <!--                            <a href="#" class="ms-auto text-decoration-none text-gray-500"><i class="fa fa-truck fa-lg me-1"></i> Add Tracking Link</a>-->
                        </div>
                        <div class="card-body p-3 text-dark fw-bold">
                            <?php foreach ($order['products'] ?? [] as $index => $product): ?>
                                <div class="row">
                                    <div class="col-lg-8 d-flex align-items-center">
                                        <div class="h-65px w-65px d-flex align-items-center justify-content-center position-relative">
                                            <img src="<?= $product['image'] ?>" class="mw-100 mh-100"/>
                                            <span class="w-20px h-20px p-0 d-flex align-items-center justify-content-center badge bg-primary text-white position-absolute end-0 top-0 fw-bold fs-12px rounded-pill mt-n2 me-n2"><?= $product['quantity'] ?></span>
                                        </div>
                                        <div class="ps-3 flex-1">
                                            <div class=""><a href="#"
                                                             class="text-decoration-none text-dark"><?= $product['title'] ?></a>
                                            </div>
                                            <div class="text-dark text-opacity-50 small fw-bold">
                                                SKU: <?= $product['slug'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 m-0 ps-lg-3">
                                        $<?= number_format($product['price'], 2) ?> x <?= $product['quantity'] ?>
                                    </div>
                                    <div class="col-lg-2 text-dark fw-bold m-0 text-end">
                                        $<?= number_format($product['price'] * $product['quantity'], 2) ?>
                                    </div>
                                </div>
                                <?php if ($index != count($order['products']) - 1): ?>
                                    <hr class="my-4"/>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="card-footer bg-none d-flex p-3">
                            <a href="/admin/product?order=<?= $order['id'] ?>" class="btn btn-primary ms-auto">View All Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-none p-3 h6 m-0 d-flex align-items-center">
                            <i class="fa fa-credit-card fa-lg me-2 text-gray text-opacity-50"></i>
                            Payment Records
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless table-sm fw-bold m-0">
                                <tbody>
                                <tr>
                                    <td class="w-150px">Subtotal</td>
                                    <td>
                                        <?= count($order['products']) ?> items
                                    </td>
                                    <td class="text-end">$<?= number_format($order['total'], 2) ?></td>
                                </tr>
                                <!--                                <tr>-->
                                <!--                                    <td>Tax</td>-->
                                <!--                                    <td>GST 5%</td>-->
                                <!--                                    <td class="text-end">$174.80</td>-->
                                <!--                                </tr>-->
                                <tr>
                                    <td>Shipping Fee</td>
                                    <td><u class="text-success">Free</u>
                                        (<strike>$<?= number_format(($order['total'] * 0.1), 2) ?></strike>)
                                    </td>
                                    <td class="text-end">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="pb-2" colspan="2"><b>Total</b></td>
                                    <td class="text-end pb-2 text-decoration-underline">
                                        <b>$<?= number_format($order['total'], 2) ?></b></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr class="m-0"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pt-2 pb-2" nowrap>
                                        Paid by customer
                                    </td>
                                    <td class="pt-2 pb-2">
                                        via <a href="#" class="text-primary text-decoration-none">On Cash Payment</a>
                                    </td>
                                    <td class="pt-2 pb-2 text-end">$<?= number_format($order['total'], 2) ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-none d-flex p-3">
                            <?php if ($order['status'] == 'pending'): ?>
                                <form action="/admin/order/<?= $order['id'] ?>/action" method="post"
                                      class="ms-auto">
                                    <button type="submit" class="btn btn-danger ms-auto" name="action" value="cancel">Cancel</button>
                                </form>
                                <form action="/admin/order/<?= $order['id'] ?>/action" method="post"
                                      class="ms-2">
                                    <button type="submit" class="btn btn-primary ms-auto" name="action" value="mark-as-paid">Mark as paid</button>
                                </form>
                            <?php else: ?>
                                <form action="/admin/order/<?= $order['id'] ?>/action" method="post"
                                      class="ms-auto">
                                    <button type="submit" class="btn btn-warning ms-auto" name="action" value="mark-as-pending">Mark as pending</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-none p-3 h6 m-0 d-flex align-items-center">
                            Notes
                            <a href="#" class="ms-auto text-decoration-none text-gray-500">Edit</a>
                        </div>
                        <div class="card-body">
                            No notes from customer
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-none p-3 h6 m-0 d-flex align-items-center">
                            Customer
                            <a href="#" class="ms-auto text-decoration-none text-gray-500">Edit</a>
                        </div>
                        <div class="card-body fw-bold">
                            <div class="d-flex align-items-center">
                                <a href="#" class="d-block"><img src="<?= get_avatar_by_user_id($order['created_by']) ?>" width="45"
                                                                 class="rounded-pill"/></a>
                                <div class="flex-1 ps-3">
                                    <a href="#" class="d-block text-decoration-none">
                                        <?= $order['customer']['username'] ?>
                                    </a>
                                    <?= $order['customer']['email'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <div class="card border-0 mb-4">-->
<!--                        <div class="card-header bg-none p-3 h6 m-0 d-flex align-items-center">-->
<!--                            Shipping Information-->
<!--                            <a href="#" class="ms-auto text-decoration-none text-gray-500">Edit</a>-->
<!--                        </div>-->
<!--                        <div class="card-body fw-bold">-->
<!--                            <i class="fa fa-phone fa-fw"></i> +916-663-4289<br/><br/>-->
<!--                            867 Highland View Drive<br/>-->
<!--                            Newcastle, CA<br/>-->
<!--                            California<br/>-->
<!--                            95658<br/>-->
<!--                            <br/>-->
<!--                            <a href="#" class="text-decoration-none text-gray-600"><i-->
<!--                                        class="fa fa-location-dot fa-fw"></i> View map</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="card border-0 mb-4">-->
<!--                        <div class="card-header bg-none p-3 h6 m-0 d-flex align-items-center">-->
<!--                            Billing Information-->
<!--                            <a href="#" class="ms-auto text-decoration-none text-gray-500">Edit</a>-->
<!--                        </div>-->
<!--                        <div class="card-body fw-bold">-->
<!--                            867 Highland View Drive<br/>-->
<!--                            Newcastle, CA<br/>-->
<!--                            California<br/>-->
<!--                            95658<br/>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
        <!-- END #content -->
        <?php require base_path('views/admin/partial/scroll-top-btn.php') ?>
    </div>
    <!-- END #app -->

    <script>
    </script>


<?php
require base_path('views/admin/partial/script.php')
?>