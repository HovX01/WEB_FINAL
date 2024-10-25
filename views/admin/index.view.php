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
				<li class="breadcrumb-item"><a href="/admin">Home</a></li>
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
                                    <div class="stats-number">$<span data-animation="number" data-value="<?= $totalRevenue ?>">0.00</span></div>
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
		</div>
		<!-- END #content -->

        <?php require base_path('views/admin/partial/scroll-top-btn.php') ?>
	</div>
	<!-- END #app -->

<?php require base_path('views/admin/partial/script.php') ?>