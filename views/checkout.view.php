<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<!-- BEGIN #checkout-cart -->
<div class="section-container" id="checkout-cart">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN checkout -->
        <div class="checkout">
            <form action="checkout_info.html" method="GET" name="form_checkout">
                <!-- BEGIN checkout-header -->
                <div class="checkout-header">
                    <!-- BEGIN row -->
                    <!-- END row -->
                </div>
                <!-- END checkout-header -->
                <!-- BEGIN checkout-body -->
                <div class="checkout-body">
                    <div class="table-responsive">
                        <table class="table table-cart">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="cart-product">
                                    <div class="d-flex">
                                        <div class="product-img h-150px w-100px d-flex align-items-center justify-content-center">
                                            <img src="../assets/img/product/product-iphone-12.png" class="mw-100 mh-100" alt="" />
                                        </div>
                                        <div class="product-info ms-3">
                                            <div class="title">iPhone 12 Pro Max 128GB (Blue)</div>
                                            <div class="desc">Delivers Tue 26/04/2023 - Free</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart-price text-center">$999.00</td>
                                <td class="cart-qty text-center">
                                    <div class="cart-qty-input">
                                        <a href="#" class="qty-control left disabled" data-click="decrease-qty" data-target="#qty"><i class="fa fa-minus"></i></a>
                                        <input type="text" name="qty" value="1" class="form-control" id="qty" />
                                        <a href="#" class="qty-control right disabled" data-click="increase-qty" data-target="#qty"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <div class="qty-desc">1 to max order</div>
                                </td>
                                <td class="cart-total text-center">
                                    $999.00
                                </td>
                            </tr>
                            <tr>
                                <td class="cart-summary" colspan="4">
                                    <div class="summary-container">
                                        <div class="summary-row">
                                            <div class="field">Cart Subtotal</div>
                                            <div class="value">$999.00</div>
                                        </div>
                                        <div class="summary-row text-danger">
                                            <div class="field">Free Shipping</div>
                                            <div class="value">$0.00</div>
                                        </div>
                                        <div class="summary-row total">
                                            <div class="field">Total</div>
                                            <div class="value">$999.00</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END checkout-body -->
                <!-- BEGIN checkout-footer -->
                <div class="checkout-footer d-flex">
                    <a href="#" class="btn btn-white btn-lg me-auto btn-theme w-250px">CONTINUE SHOPPING</a>
                    <button type="submit" class="btn btn-dark btn-lg btn-theme w-250px">CHECKOUT</button>
                </div>
                <!-- END checkout-footer -->
            </form>
        </div>
        <!-- END checkout -->
    </div>
    <!-- END container -->
</div>
<!-- END #checkout-cart -->
<?php require('partials/footer.php') ?>