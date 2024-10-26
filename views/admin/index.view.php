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

<!--                    view('admin/index.view.php', [-->
<!--                    'serviceCount' => $serviceCount['count'],-->
<!--                    'petCount' => $petCount['count'],-->
<!--                    'foodCount' => $foodCount['count'],-->
<!--                    'teamMembers' => $teamMembers,-->
<!--                    ]);-->
                    <div class="row gx-2 mb-20px">
                        <div class="col-lg-6 col-sm-12">
                            <div class="widget widget-stats bg-blue mb-7px">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-people-group fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">TOTAL MEMBERS</div>
                                    <div class="stats-number"><span data-animation="number" data-value="<?= $teamMembers ?>">0</span></div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 100%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (100%)</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="widget widget-stats bg-purple mb-7px">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">TOTAL SERVICES</div>
                                    <div class="stats-number"><span data-animation="number" data-value="<?= $serviceCount ?>">0</span></div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 76.3%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (76.3%)</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="widget widget-stats bg-teal mb-7px">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-paw fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">TOTAL PET PRODUCTS</div>
                                    <div class="stats-number"><span data-animation="number" data-value="<?= $petCount ?>">0</span></div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 71.4%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (71.4%)</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="widget widget-stats bg-teal mb-7px">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-tooth fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">TOTAL FOOD PRODUCTS</div>
                                    <div class="stats-number"><span data-animation="number" data-value="<?= $foodCount ?>">0</span></div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 71.4%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (71.4%)</div>
                                </div>
                            </div>
                        </div>
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