<?php
    $style = [
      "/css/app.min.css",
      "/css/main.css"
    ];
?>
<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<!--<main>-->
<!--    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">-->
<!--        <p>Hello, --><?php //= $_SESSION['user']['email'] ?? 'Guest' ?><!--. Welcome to the home page.</p>-->
<!--    </div>-->
<!--</main>-->
<!--END Header-->
<main class="main">

    <!-- Hero Section -->
    <?php
    require_once ('components/hero.view.php')
    ?>
    <!-- /Hero Section -->


    <!-- Stats Section -->
    <?php
    require_once ('components/stats.view.php')
    ?>
    <!-- /Stats Section -->

    <!-- Menu Section -->
    <?php
    require_once ('components/menu.hero.php')
    ?>
    <!-- /Menu Section -->


</main>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>


<?php require('partials/footer.php') ?>
