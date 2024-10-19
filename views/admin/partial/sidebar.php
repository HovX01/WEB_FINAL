<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-profile">
                <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile"
                   data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-image menu-profile-image-icon bg-gray-900 text-gray-600">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="menu-profile-info">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <?php echo $_SESSION['user']['username'] ?? ''; ?>
                            </div>
                        </div>
                        <small>
                            <?php echo $_SESSION['user']['role'] ?? ''; ?>
                        </small>
                    </div>
                </a>
            </div>
            <div class="menu-header">Navigation</div>
            <div class="menu-item">
                <a href="/" class="menu-link">
                    <div class="menu-icon">
                        <?php
                        $icon ??= '';
                        if ($icon == 'ionicons') {
                            echo '<ion-icon name="tv-outline"></ion-icon>';
                        } else if ($icon == 'lineicons') {
                            echo '<i class="icon-screen-desktop"></i>';
                        } else {
                            echo '<i class="fa fa-sitemap"></i>';
                        }
                        ?>
                    </div>
                    <div class="menu-text">Home</div>
                </a>
            </div>
            <div class="menu-item <?= $dashboardClass ?? '' ?>">
                <a href="/admin" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-tachometer-alt"></i>
                    </div>
                    <div class="menu-text">Dashboard</div>
                </a>
            </div>
            <div class="menu-item <?= $productClass ?? '' ?>">
                <a href="/admin/product" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-store"></i>
                    </div>
                    <div class="menu-text">Product</div>
                </a>
            </div>

            <div class="menu-item <?= $categoryClass ?? '' ?>">
                <a href="/admin/category" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-tag"></i>
                    </div>
                    <div class="menu-text">Category</div>
                </a>
            </div>
            <div class="menu-item <?= $orderClass ?? '' ?>">
                <a href="/admin/order" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="menu-text">Order</div>
                </a>
            </div>
<!--            <div class="menu-item has-sub">-->
<!--                <a href="javascript:;" class="menu-link">-->
<!--                    <div class="menu-icon">-->
<!--                        --><?php
//                        $icon ??= '';
//                        if ($icon == 'ionicons') {
//                            echo '<ion-icon name="git-branch-outline"></ion-icon>';
//                        } else if ($icon == 'lineicons') {
//                            echo '<i class="icon-list"></i>';
//                        } else {
//                            echo '<i class="fa fa-align-left"></i>';
//                        }
//                        ?>
<!--                    </div>-->
<!--                    <div class="menu-text">Menu Level</div>-->
<!--                    <div class="menu-caret"></div>-->
<!--                </a>-->
<!--                <div class="menu-submenu">-->
<!--                    <div class="menu-item has-sub">-->
<!--                        <a href="javascript:;" class="menu-link">-->
<!--                            <div class="menu-text">Menu 1.1</div>-->
<!--                            <div class="menu-caret"></div>-->
<!--                        </a>-->
<!--                        <div class="menu-submenu">-->
<!--                            <div class="menu-item has-sub">-->
<!--                                <a href="javascript:;" class="menu-link">-->
<!--                                    <div class="menu-text">Menu 2.1</div>-->
<!--                                    <div class="menu-caret"></div>-->
<!--                                </a>-->
<!--                                <div class="menu-submenu">-->
<!--                                    <div class="menu-item"><a href="javascript:;" class="menu-link">-->
<!--                                            <div class="menu-text">Menu 3.1</div>-->
<!--                                        </a></div>-->
<!--                                    <div class="menu-item"><a href="javascript:;" class="menu-link">-->
<!--                                            <div class="menu-text">Menu 3.2</div>-->
<!--                                        </a></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="menu-item"><a href="javascript:;" class="menu-link">-->
<!--                                    <div class="menu-text">Menu 2.2</div>-->
<!--                                </a></div>-->
<!--                            <div class="menu-item"><a href="javascript:;" class="menu-link">-->
<!--                                    <div class="menu-text">Menu 2.3</div>-->
<!--                                </a></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="menu-item"><a href="javascript:;" class="menu-link">-->
<!--                            <div class="menu-text">Menu 1.2</div>-->
<!--                        </a></div>-->
<!--                    <div class="menu-item"><a href="javascript:;" class="menu-link">-->
<!--                            <div class="menu-text">Menu 1.3</div>-->
<!--                        </a></div>-->
<!--                </div>-->
<!--            </div>-->

            <!-- BEGIN minify-button -->
            <div class="menu-item d-flex">
                <a href="javascript:;"
                   class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none"
                   data-toggle="app-sidebar-minify">
                    <?php
                    $icon ??= '';
                    if ($icon == 'ionicons') {
                        echo '<ion-icon name="arrow-back" class="me-1"></ion-icon> <div class="menu-text">Collapse</div>';
                    } else if ($icon == 'lineicons') {
                        echo '<i class="icon-arrow-left"></i> <div class="menu-text">Collapse</div>';
                    } else {
                        echo '<i class="fa fa-angle-double-left"></i>';
                    }
                    ?>
                </a>
            </div>
            <!-- END minify-button -->
        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
<!-- END #sidebar -->