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
    use Core\Session;
    use Core\App;
    use Core\Database;
    $db = App::resolve(Database::class);
    $cart = Session::get('cart', []);
    $productIds = array_keys($cart);
    $products = count($productIds) > 0 ? $db->query('SELECT * FROM products WHERE id IN ('.implode(',', $productIds).')')->get() : [];
    $total = 0;
?>
<!-- BEGIN #checkout-cart -->
<div class="section-container" id="checkout-cart">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN checkout -->
        <div class="checkout">
            <div>
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
                            <?php foreach($products ?? [] as $product): ?>
                            <tr>
                                <td class="cart-product">
                                    <div class="d-flex">
                                        <div class="product-img h-150px w-100px d-flex align-items-center justify-content-center">
                                            <img src="<?php echo $product['image'] ?>" class="mw-100 mh-100" alt="" />
                                        </div>
                                        <div class="product-info ms-3 text-center">
                                            <div class="title"><?php echo $product['title'] ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart-price text-center"><?php echo number_format($product['price'], 2) ?>$</td>
                                <td class="cart-qty text-center">
                                    <div class="cart-qty-input">
                                        <form class="d-flex" action="/card-remove" method="POST">
                                            <button name="qty_minus" type="submit" class="qty-control left disabled border-0 outline-none"><i class="fa fa-minus"></i></button>
                                            <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>" />
                                            <input type="text" name="qty" value="<?php echo $cart[$product['id']] ?? 1 ?>" class="form-control" />
                                            <button name="qty_plus" type="submit" class="qty-control right disabled border-0 outline-none"><i class="fa fa-plus"></i></button>
                                        </form>
                                    </div>
                                    <div class="qty-desc">1 to max order</div>
                                </td>
                                <td class="cart-total text-center">
                                    <?php
                                        $total += $product['price'] * $cart[$product['id']] ?? 1;
                                        echo (number_format($product['price'] * $cart[$product['id']] ?? 1, 2)).'$';
                                    ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td class="cart-summary" colspan="4">
                                    <div class="summary-container">
                                        <div class="summary-row">
                                            <div class="field">Cart Subtotal</div>
                                            <div class="value"><?php echo number_format($total, 2) ?>$</div>
                                        </div>
                                        <div class="summary-row text-danger">
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
                <form action="/checkout" method="post" class="checkout-footer d-flex">
                    <a href="/" class="btn btn-white btn-lg me-auto btn-theme w-250px">CONTINUE SHOPPING</a>
                    <button type="submit" class="btn btn-dark btn-lg btn-theme w-250px">CHECKOUT</button>
                </form>
                <!-- END checkout-footer -->
            </div>
        </div>
        <!-- END checkout -->
    </div>
    <!-- END container -->
</div>
<!-- END #checkout-cart -->
<?php require('partials/footer.php') ?>