<?php
view('admin/partial/head.php', [
    'title' => 'Products Details',
    'style' => [
        "/admin-asset/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css",
        "/admin-asset/plugins/dropzone/dist/min/dropzone.min.css",
        "/admin-asset/plugins/tag-it/css/jquery.tagit.css",
        '/admin-asset/plugins/select2/dist/css/select2.min.css'
    ]
]);
$productClass = 'active';
$errors = session('errors', []);
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
                        <li class="breadcrumb-item"><a href="/admin/product">Product</a></li>
                        <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Create</li>
                    </ol>
                    <h1 class="page-header mb-0">Add Product</h1>
                </div>
            </div>

            <form id="product-create" action="/admin/product/store" method="post" enctype="multipart/form-data">
                <div class="card border-0 mb-4">
                    <div class="card-header h6 mb-0 bg-none p-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <i class="fa fa-store fa-lg fa-fw text-dark text-opacity-50 me-1"></i>
                                Product Information
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="form-group mb-3 <?php if (isset($errors['title'])) : ?>text-danger<?php endif; ?>">
                                    <label class="form-label" for="title">Title * </label>
                                    <input
                                            type="text"
                                            class="form-control <?php if (isset($errors['title'])) : ?>is-invalid<?php endif; ?>"
                                            id="title" name="title"
                                            placeholder="Enter Product Title"
                                            value="<?= old('title', null) ?>"
                                            oninput="document.getElementById('slug').value = this.value.toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-');"
                                    />
                                    <?php if (isset($errors['title'])) : ?>
                                        <div class="invalid-feedback"><?= $errors['title'] ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3 <?php if (isset($errors['slug'])) : ?>text-danger<?php endif; ?>">
                                    <label class="form-label" for="slug">Slug *</label>
                                    <input
                                            id="slug" name="slug"
                                            type="text"
                                            class="form-control <?php if (isset($errors['slug'])) : ?>is-invalid<?php endif; ?>"
                                            placeholder="Enter product slug"
                                            value="<?= old('slug', null) ?>"
                                    />
                                    <?php if (isset($errors['slug'])) : ?>
                                        <div class="invalid-feedback"><?= $errors['slug'] ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="form-group mb-3 <?php if (isset($errors['category_id'])) : ?>text-danger<?php endif; ?>">
                                    <label class="form-label" for="category" >Category</label>
                                    <select
                                            id="category"
                                            class="default-select2 form-control <?php if (isset($errors['category_id'])) : ?>is-invalid<?php endif; ?>"
                                            name="category_id"
                                    >
                                        <option value="">Select Category</option>
                                        <?php foreach ($categories ?? [] as $category): ?>
                                            <option value="<?= $category['id'] ?>" <?php if (old('category_id', null) == $category['id']) echo 'selected' ?> ><?= $category['title'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($errors['category_id'])) : ?>
                                        <div class="invalid-feedback"><?= $errors['category_id'] ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 form-group">
                                    <label class="form-label" for="price">Price</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input
                                                id="price" type="number" class="form-control" name="price"
                                                placeholder="Product price"
                                                value="<?= old('price', 0) ?>"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 form-check form-switch">
                            <label class="form-label" for="available">Available</label>
                            <input
                                    id="available" name="available"
                                    type="checkbox"
                                    class="form-check-input"
                                    <?php if (old('available', true)) echo 'checked' ?>
                            />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="wysihtml5">Description</label>
                            <div class="form-control p-0 overflow-hidden">
                            <textarea
                                    class="textarea form-control"
                                    name="description"
                                    id="wysihtml5" placeholder="Enter text ..."
                                    rows="12"
                            >
                                <?= old('description', null) ?>
                            </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-4">
                    <div class="card-header h6 mb-0 bg-none p-3">
                        <i class="fa fa-file-image fa-lg fa-fw @@if(context.theme != 'transparent'){text-dark}@@if(context.theme == 'transparent'){text-white} text-opacity-50 me-1"></i>
                        Image
                    </div>
                    <div class="card-body">
                        <div id="dropzone">
                            <div action="/file/upload" class="dropzone needsclick" id="fileUploader">
                                <div class="dz-message needsclick">
                                    Drop files <b>here</b> or <b>click</b> to upload.<br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <a href="/admin/product" class="btn btn-secondary">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                    <button
                            type="submit"
                            class="btn btn-primary"
                            onclick="$('form#product-create').submit()"
                    >
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </form>
        </div>
        <!-- END #content -->
        <?php require base_path('views/admin/partial/scroll-top-btn.php') ?>
    </div>
    <!-- END #app -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#category').select2();
        });
    </script>


<?php

$script = [
    "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js",
    "/admin-asset/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js",
    "/admin-asset/plugins/jquery-migrate/dist/jquery-migrate.min.js",
    "/admin-asset/plugins/tag-it/js/tag-it.min.js",
    "/admin-asset/js/demo/product-details.demo.js",
    '/admin-asset/plugins/select2/dist/js/select2.min.js',
    "/admin-asset/plugins/dropzone/dist/min/dropzone.min.js",
    '/admin-asset/js/dropzone.js'
];
require base_path('views/admin/partial/script.php')
?>