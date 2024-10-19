<?php
$title = 'Create Category';
require base_path('views/admin/partial/head.php');
$categoryClass = 'active';
$errors =  session('errors', []);
?>
    <!-- BEGIN #app -->
    <div id="app" class="app app-header-fixed app-sidebar-fixed app-with-light-sidebar">
        <?php require base_path('views/admin/partial/header.php'); ?>
        <?php require base_path('views/admin/partial/sidebar.php'); ?>

        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            <div class="d-flex align-items-center mb-3">
                <div>
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="/admin;">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/category">Category</a></li>
                        <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Create</li>
                    </ol>
                    <h1 class="page-header mb-0">Create Category</h1>
                </div>
            </div>
            <form action="/admin/category/store" method="post">
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <div class="mb-3 form-group required <?php if (isset($errors['title'])) : ?>text-danger<?php endif; ?>">
                            <label class="form-label">Title *</label>
                            <input type="text" class="form-control <?php if (isset($errors['title'])) : ?>is-invalid<?php endif; ?>" name="title" placeholder="Category name" value="<?php old('title') ?>">
                            <?php if (isset($errors['title'])) : ?>
                                <div class="invalid-feedback"><?= $errors['title'] ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <a href="/admin/category" class="btn btn-secondary">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </form>
        </div>
        <!-- END #content -->
        <?php require base_path('views/admin/partial/scroll-top-btn.php') ?>
    </div>

<?php
require base_path('views/admin/partial/script.php')
?>