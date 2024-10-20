<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Furniture Store</h1>
            <span>.</span>
        </a>

        <!-- NavBar-->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" <?php if ($_SERVER['REQUEST_URI'] == '/') echo 'class="active"'; ?>>Home</a></li>
                <li><a href="/#menu" <?php if ($_SERVER['REQUEST_URI'] == '/#menu') echo 'class="active"'; ?>>Menu</a></li>
                <li>
                    <a href="/checkout" <?php if ($_SERVER['REQUEST_URI'] == '/checkout') echo 'class="active"'; ?>>Cart
                        <?php
                        $allProductCount = 0;
                        if (isset($_SESSION['cart']) && $_SESSION['cart']) {
                            foreach ($_SESSION['cart'] as $productId => $productCount) {
                                $allProductCount += $productCount;
                            }
                        }
                        echo '<span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">' . $allProductCount . '</span>';
                        ?>
                    </a>
                </li>
                <?php
                if (isset($_SESSION['user']) && $_SESSION['user']) {
                    echo '<li><a href="/logout">Logout</a></li>';
                } else {
                    echo '<li><a href="/register">Login/Register</a></li>';
                }
                ?>

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!--END NavBar-->
    </div>
</header>