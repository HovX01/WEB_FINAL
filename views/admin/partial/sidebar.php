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
                        <img src="<?= get_avatar_by_user_id($_SESSION['user']['id'] ?? 1) ?>" class="rounded-circle" width="45" height="45"/>
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
            <div class="menu-item <?= $dashboardClass ?? '' ?>">
                <a href="/admin" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-tachometer-alt"></i>
                    </div>
                    <div class="menu-text">Home</div>
                </a>
            </div>

            <div class="menu-item <?= $productClass ?? '' ?>">
                <a href="/admin/pet" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-paw"></i>
                    </div>
                    <div class="menu-text">Pet</div>
                </a>
            </div>

            <div class="menu-item <?= $categoryClass ?? '' ?>">
                <a href="/admin/food" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-tooth"></i>
                    </div>
                    <div class="menu-text">Food</div>
                </a>
            </div>

            <div class="menu-item <?= $serviceClass ?? '' ?>">
                <a href="/admin/service" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div class="menu-text">Services</div>
                </a>
            </div>
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