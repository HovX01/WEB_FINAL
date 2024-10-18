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
                <li><a href="#hero" class="active">Home<br></a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <?php
                    if(isset($_SESSION['user']) && $_SESSION['user']){
                        echo '<li><a href="/logout">Logout</a></li>';
                    }else{
                        echo '<li><a href="/register">Login/Register</a></li>';
                    }
                ?>

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!--END NavBar-->


    </div>
</header>