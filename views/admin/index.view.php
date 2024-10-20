<?php
require base_path('views/admin/partial/head.php');
$title = 'Dashboard';
$dashboardClass = 'active';
?>

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed app-with-light-sidebar">
        <?php require base_path('views/admin/partial/sidebar.php') ?>
        <?php require base_path('views/admin/partial/header.php') ?>

        <!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Library</a></li>
				<li class="breadcrumb-item active">Data</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Dashboard</h1>
			<!-- END page-header -->
			
			<!-- BEGIN panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Widget Stats</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
                    <!-- BEGIN row -->
                    <div class="row gx-2 mb-20px">
                        <!-- BEGIN col-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-stats bg-blue mb-7px">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">TOTAL REVENUE</div>
                                    <div class="stats-number">$<span data-animation="number" data-value="<?= number_format($totalRevenue) ?>">0.00</span></div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 40.5%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (40.5%)</div>
                                </div>
                            </div>
                        </div>
                        <!-- END col-4 -->
                        <!-- BEGIN col-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-stats bg-teal mb-7px">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">TOTAL PRODUCTS</div>
                                    <div class="stats-number"><span data-animation="number" data-value="<?= $productCount ?>">0</span></div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 71.4%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (71.4%%)</div>
                                </div>
                            </div>
                        </div>
                        <!-- END col-4 -->
                        <!-- BEGIN col-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-stats bg-purple mb-7px">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">TOTAL ORDERS</div>
                                    <div class="stats-number"><span data-animation="number" data-value="<?= $ordersCount ?>">0</span></div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 76.3%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (76.3%)</div>
                                </div>
                            </div>
                        </div>
                        <!-- END col-4 -->
                        <!-- BEGIN col-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-stats bg-dark mb-7px">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">PAID ORDERS</div>
                                    <div class="stats-number"><span data-animation="number" data-value="<?= $paidOrdersCount ?>">0</span></div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 54.9%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (54.9%)</div>
                                </div>
                            </div>
                        </div>
                        <!-- END col-4 -->
                        <!-- BEGIN col-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-stats bg-orange mb-7px">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-file-alt fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">PENDING ORDERS</div>
                                    <div class="stats-number"><span data-animation="number" data-value="<?= $pendingOrdersCount ?>">0</span></div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 23.5%;"></div>
                                    </div>
                                    <div class="stats-desc">More than last week (23.5%)</div>
                                </div>
                            </div>
                        </div>
                        <!-- END col-4 -->
                        <!-- BEGIN col-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-stats bg-pink mb-7px">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-exclamation-triangle fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">CANCELLED ORDERS</div>
                                    <div class="stats-number"><span data-animation="number" data-value="<?= $cancelledOrdersCount ?>">0</span></div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 10.5%;"></div>
                                    </div>
                                    <div class="stats-desc">More than last week (10.5%)</div>
                                </div>
                            </div>
                        </div>
                        <!-- END col-4 -->
                    </div>
				</div>
			</div>
			<!-- END panel -->

            <!-- BEGIN panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Top</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-4 -->
                        <div class="col-xl-6 col-lg-6">
                            <!-- BEGIN card -->
                            <div class="card border-0 mb-3 bg-gray-900 text-white d-flex flex-column" style="height: 100%;">
                                <!-- BEGIN card-body -->
                                <div class="card-body flex-grow-1" style="background: no-repeat bottom right; background-image: url(/admin-asset/img/svg/img-4.svg); background-size: auto 60%;">
                                    <!-- BEGIN title -->
                                    <div class="mb-3 text-gray-500 ">
                                        <b>TOP CATEGORIES BY REVENUE</b>
                                        <span class="text-gray-500 ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Sales by social source" data-bs-placement="top" data-bs-content="Total online store sales that came from a social referrer source."></i></span>
                                    </div>
                                    <!-- END title -->
                                    <!-- BEGIN sales -->
                                    <h3 class="mb-10px">
                                        <a class="text-white text-decoration-none" href="/admin/product?category=<?= $topCategoriesByRevenue[0]['id'] ?>"><?= $topCategoriesByRevenue[0]['title'] ?></a>
                                    </h3>
                                    <!-- END sales -->
                                    <!-- BEGIN percentage -->
                                    <div class="text-gray-500 mb-1px">$<span data-animation="number" data-value="<?= $topCategoriesByRevenue[0]['revenue'] ?>">0.00</span></div>
                                    <!-- END percentage -->
                                </div>
                                <!-- END card-body -->
                                <!-- BEGIN widget-list -->
                                <div class="widget-list rounded-bottom " data-bs-theme="dark">
                                    <?php foreach (array_splice($topCategoriesByRevenue, 1, 5) as $category): ?>
                                        <a href="/admin/product?category=<?= $category['id'] ?>" class="widget-list-item">
                                            <div class="widget-list-content">
                                                <div class="widget-list-title"><?= $category['title'] ?></div>
                                            </div>
                                            <div class="widget-list-action text-nowrap text-gray-500">
                                                $<span data-animation="number" data-value="<?= $category['revenue'] ?>">0.00</span>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                    <!-- END widget-list-item -->
                                </div>
                                <!-- END widget-list -->
                            </div>
                            <!-- END card -->
                        </div>
                        <!-- END col-4 -->
                        <!-- END col-4 -->
                        <!-- BEGIN col-4 -->
                        <div class="col-xl-6 col-lg-6">
                            <!-- BEGIN card -->
                            <div class="card border-0 bg-gray-800 text-white">
                                <!-- BEGIN card-body -->
                                <div class="card-body">
                                    <!-- BEGIN title -->
                                    <div class="mb-3 text-gray-500">
                                        <b>TOP PRODUCTS BY UNITS SOLD</b>
                                        <span class="ms-2 "><i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Top products with units sold" data-bs-placement="top" data-bs-content="Products with the most individual units sold. Includes orders from all sales channels."></i></span>
                                    </div>
                                    <!-- END product -->
                                    <?php foreach ($topProductsByUnitsSold as $product): ?>
                                        <div class="d-flex align-items-center mb-15px">
                                            <div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
                                                <div class="h-100 w-100" style="background: url('<?= $product['image'] ?>') center no-repeat; background-size: auto 100%;"></div>
                                            </div>
                                            <a class="text-truncate text-white text-decoration-none" href="/admin/product/<?= $product['slug'] ?>">
                                                <div ><?= $product['title'] ?></div>
                                                <div class="text-gray-500">$<?= $product['price'] ?></div>
                                            </a>
                                            <div class="ms-auto text-center">
                                                <div class="fs-13px"><span data-animation="number" data-value="<?= $product['units_sold'] ?>">0</span></div>
                                                <div class="text-gray-500 fs-10px">sold</div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- END card-body -->
                            </div>
                            <!-- END card -->
                        </div>
                        <!-- END col-4 -->
                    </div>
                    <!-- END row -->
                </div>
            </div>
            <!-- END panel -->
		</div>
		<!-- END #content -->

        <?php require base_path('views/admin/partial/scroll-top-btn.php') ?>
	</div>
	<!-- END #app -->

<?php require base_path('views/admin/partial/script.php') ?>