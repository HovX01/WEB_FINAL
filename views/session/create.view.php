<?php require base_path('views/partials/head.php') ?>

<!-- BEGIN #app -->
<div id="app" class="app">
    <!-- BEGIN register -->
    <div class="register register-with-news-feed">
        <!-- BEGIN news-feed -->
        <div class="news-feed">
            <div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-15.jpg)"></div>
            <div class="news-caption">
                <h4 class="caption-title">Furniture</h4>
            </div>
        </div>
        <!-- END news-feed -->

        <!-- BEGIN register-container -->
        <div class="register-container">
            <!-- BEGIN register-header -->
            <div class="register-header mb-25px h1">
                <div class="mb-1">Sign Up</div>
            </div>
            <!-- END register-header -->

            <!-- BEGIN register-content -->
            <div class="register-content">
                <form action="/session" method="POST" class="fs-13px" data-parsley-validate="true">
                    <ul>
                        <?php if (isset($errors['email'])) : ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></li>
                        <?php endif; ?>

                        <?php if (isset($errors['password'])) : ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                        <?php endif; ?>
                    </ul>
                    <div class="mb-3">
                        <label class="mb-2">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control fs-13px" data-parsley-required="true" placeholder="Email address" />
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control fs-13px" data-parsley-required="true" placeholder="Password" />
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-theme d-block w-100 btn-lg h-45px fs-13px">Login</button>
                    </div>
                    <div class="mb-4 pb-5">
                        Don't Have a account? Click <a href="/register">here</a> to Register.
                    </div>
                </form>
            </div>
            <!-- END register-content -->
        </div>
        <!-- END register-container -->
    </div>
    <!-- END register -->

    <!-- BEGIN scroll-top-btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- END scroll-top-btn -->
</div>
<!-- END #app -->
<?php require base_path('views/partials/footer.php') ?>
