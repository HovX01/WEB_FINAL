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

            <div class="card border-0 mb-4">
                <div class="card-header h6 mb-0 bg-none p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <i class="fa fa-plus-square fa-lg fa-fw text-dark text-opacity-50 me-1"></i>
                            Add
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/admin/product/create" method="post">
                        <div class="row mb-3">
                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Product name">
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control" name="slug"
                                           placeholder="Enter product slug">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="category">Category</label>
                                    <select id="category" class="default-select2 form-control">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-check form-switch">
                            <label class="form-label" for="available">Available</label>
                            <input type="checkbox" class="form-check-input" id="available">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <div class="form-control p-0 overflow-hidden">
                            <textarea class="textarea form-control" id="wysihtml5" placeholder="Enter text ..."
                                      rows="12"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card border-0 mb-4">
                <div class="card-header h6 mb-0 bg-none p-3">
                    <i class="fa fa-file-image fa-lg fa-fw @@if(context.theme != 'transparent'){text-dark}@@if(context.theme == 'transparent'){text-white} text-opacity-50 me-1"></i> Media
                </div>
                <div class="card-body">
                    <div id="dropzone">
                        <form action="/file/upload" class="dropzone needsclick" id="fileUploader">
                            <div class="dz-message needsclick">
                                Drop files <b>here</b> or <b>click</b> to upload.<br />
                                <span class="dz-note needsclick">
											(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)
										</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
    "/admin-asset/plugins/dropzone/dist/min/dropzone.min.js",
    "/admin-asset/plugins/jquery-migrate/dist/jquery-migrate.min.js",
    "/admin-asset/plugins/tag-it/js/tag-it.min.js",
    "/admin-asset/js/demo/product-details.demo.js",
    '/admin-asset/plugins/select2/dist/js/select2.min.js',
    '/admin-asset/js/dropzone.js'
];
require base_path('views/admin/partial/script.php')
?>