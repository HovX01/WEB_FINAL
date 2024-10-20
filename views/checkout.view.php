<?php
$style = [
    "/css/app.min.css",
    "/css/main.css",
    "/css/e-commerce/app.min.css"
];
?>
<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);
$cart = Session::get('cart', []);
$productIds = array_keys($cart);
$products = count($productIds) > 0 ? $db->query('SELECT * FROM products WHERE id IN (' . implode(',', $productIds) . ')')->get() : [];
$total = 0;
?>
    <!-- BEGIN #checkout-cart -->
    <div class="section-container" id="checkout-cart">
        <!-- BEGIN container -->
        <div class="container">
            <!-- BEGIN checkout -->
            <div class="checkout card">
                <?php if (count($products) > 0): ?>
                    <div>
                        <!-- BEGIN checkout-header -->
                        <div class="checkout-header"
                             style="background-color: rgb(243 244 246)!important; padding: 10px 15px;">
                            <!-- BEGIN row -->
                            <h1> Your Shopping Cart </h1>
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
                                    <?php foreach ($products ?? [] as $product): ?>
                                        <tr>
                                            <td class="cart-product">
                                                <div class="d-flex">
                                                    <div class="product-img w-100px d-flex align-items-center justify-content-center">
                                                        <img
                                                                src="<?php echo $product['image'] ?>"
                                                                class="mw-100 mh-100"
                                                                alt=""
                                                        />
                                                    </div>
                                                    <div class="product-info ms-3 text-center">
                                                        <div class="title"><?php echo $product['title'] ?></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart-price text-center">
                                                <?php echo number_format($product['price'], 2) ?>
                                                $
                                            </td>
                                            <td class="cart-qty text-center">
                                                <div class="cart-qty-input">
                                                    <form class="d-flex align-content-center align-items-center"
                                                          action="/card-remove" method="POST">
                                                        <button name="qty_minus" type="submit"
                                                                class="qty-control left disabled border-0 outline-none">
                                                            <i class="fa fa-minus"></i></button>
                                                        <input type="hidden" name="product_id"
                                                               value="<?php echo $product['id'] ?>"/>
                                                        <input type="text" name="qty"
                                                               value="<?php echo $cart[$product['id']] ?? 1 ?>"
                                                               class="form-control"/>
                                                        <button name="qty_plus" type="submit"
                                                                class="qty-control right disabled border-0 outline-none">
                                                            <i class="fa fa-plus"></i></button>
                                                    </form>
                                                </div>
                                                <div class="qty-desc">1 to max order</div>
                                            </td>
                                            <td class="cart-total text-center">
                                                <?php
                                                $total += $product['price'] * $cart[$product['id']] ?? 1;
                                                echo (number_format($product['price'] * $cart[$product['id']] ?? 1, 2)) . '$';
                                                ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td class="cart-summary" colspan="4">
                                            <div class="summary-container">
                                                <div class="summary-row mb-3">
                                                    <div class="field">Cart Subtotal</div>
                                                    <div class="value"><?php echo number_format($total, 2) ?>$</div>
                                                </div>
                                                <div class="summary-row text-danger mb-3">
                                                    <div class="field">Free Shipping</div>
                                                    <div class="value">$0.00</div>
                                                </div>
                                                <div class="summary-row total">
                                                    <div class="field">Total</div>
                                                    <div class="value"><?php echo number_format($total, 2) ?>$</div>
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
                        <form action="/checkout" method="post" class="card-footer bg-light d-flex justify-content-between" style="padding: 20px;">
                            <a href="/#menu" class="btn btn-outline-secondary d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="mr-2">
                                    <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path>
                                    <path d="M3 6h18"></path>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                                Continue Shopping
                            </a>
                            <button type="submit" class="btn btn-dark btn-lg btn-theme w-250px">
                                Checkout
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="ml-2">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </button>
                        </form>
                        <!-- END checkout-footer -->
                    </div>
                <?php else: ?>
                    <div class="text-center p-5">
                        <h2 style="margin-top: 100px; margin-bottom: 50px;">Your cart is empty</h2>
                        <a href="/#menu" class="btn btn-outline-secondary" style="margin-bottom: 100px;">Continue Shopping</a>
                    </div>
                <?php endif; ?>
            </div>
            <!-- END checkout -->
        </div>
        <!-- END container -->
    </div>
    <!-- END #checkout-cart -->
<?php require('partials/footer.php') ?>