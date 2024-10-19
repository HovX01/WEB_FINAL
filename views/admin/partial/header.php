<?php
    $user = $_SESSION['user'];
?>
<div id="header" class="app-header">
    <!-- BEGIN navbar-header -->
    <div class="navbar-header">
        <a href="/admin" class="navbar-brand"><span class="navbar-logo"></span> <b>Furniture</b>&nbsp; Admin</a>
        <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- END navbar-header -->

    <!-- BEGIN header-nav -->
    <div class="navbar-nav">
<!--        <div class="navbar-item navbar-form">-->
<!--            <form action="" method="POST" name="search">-->
<!--                <div class="form-group">-->
<!--                    <input type="text" class="form-control" placeholder="Enter keyword"/>-->
<!--                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
        <div class="navbar-item dropdown">
            <a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle fs-14px">
                <i class="fa fa-bell"></i>
                <span class="badge">0</span>
            </a>
            <div class="dropdown-menu media-list dropdown-menu-end">
                <div class="dropdown-header">NOTIFICATIONS (0)</div>
                <div class="text-center w-300px py-3">
                    No notification found
                </div>
            </div>
        </div>
        <div class="navbar-item navbar-user dropdown">
            <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="image image-icon bg-gray-800 text-gray-600">
                    <i class="fa fa-user"></i>
                </div>
                <span class="d-none d-md-inline">
                    <?php echo $user['username'] ?? 'Unknown'; ?>
                </span>
<!--                <b class="caret ms-10px"></b>-->
            </a>
            <?php //include('header/dropdown-profile.php'); ?>
        </div>
    </div>
    <!-- END header-nav -->
</div>
