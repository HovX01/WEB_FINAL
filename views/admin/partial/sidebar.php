<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-profile">
                <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile"
                   data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-image menu-profile-image-icon bg-gray-900 text-gray-600">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="menu-profile-info">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                John Smith
                            </div>
                            <div class="menu-caret ms-auto"></div>
                        </div>
                        <small>Front end developer</small>
                    </div>
                </a>
            </div>
            <div id="appSidebarProfileMenu" class="collapse">
                <div class="menu-item pt-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                            <?php
                            $icon ??= '';
                            if ($icon == 'ionicons') {
                                echo '<ion-icon name="settings-outline"></ion-icon>';
                            } else if ($icon == 'lineicons') {
                                echo '<i class="icon-settings"></i>';
                            } else {
                                echo '<i class="fa fa-cog"></i>';
                            }
                            ?>
                        </div>
                        <div class="menu-text">Settings</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                            <?php
                            $icon ??= '';
                            if ($icon == 'ionicons') {
                                echo '<ion-icon name="paper-plane-outline"></ion-icon>';
                            } else if ($icon == 'lineicons') {
                                echo '<i class="icon-pencil"></i>';
                            } else {
                                echo '<i class="fa fa-pencil-alt"></i>';
                            }
                            ?>
                        </div>
                        <div class="menu-text"> Send Feedback</div>
                    </a>
                </div>
                <div class="menu-item pb-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                            <?php
                            $icon ??= '';
                            if ($icon == 'ionicons') {
                                echo '<ion-icon name="help-circle-outline"></ion-icon>';
                            } else if ($icon == 'lineicons') {
                                echo '<i class="icon-question"></i>';
                            } else {
                                echo '<i class="fa fa-question-circle"></i>';
                            }
                            ?>
                        </div>
                        <div class="menu-text"> Helps</div>
                    </a>
                </div>
                <div class="menu-divider m-0"></div>
            </div>
            <div class="menu-header">Navigation</div>
            <div class="menu-item">
                <a href="/admin" class="menu-link">
                    <div class="menu-icon">
                        <?php
                        $icon ??= '';
                        if ($icon == 'ionicons') {
                            echo '<ion-icon name="tv-outline"></ion-icon>';
                        } else if ($icon == 'lineicons') {
                            echo '<i class="icon-screen-desktop"></i>';
                        } else {
                            echo '<i class="fa fa-sitemap"></i>';
                        }
                        ?>
                    </div>
                    <div class="menu-text">Home</div>
                </a>
            </div>

            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <?php
                        $icon ??= '';
                        if ($icon == 'ionicons') {
                            echo '<ion-icon name="git-branch-outline"></ion-icon>';
                        } else if ($icon == 'lineicons') {
                            echo '<i class="icon-list"></i>';
                        } else {
                            echo '<i class="fa fa-align-left"></i>';
                        }
                        ?>
                    </div>
                    <div class="menu-text">Menu Level</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-text">Menu 1.1</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item has-sub">
                                <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.1</div>
                                    <div class="menu-caret"></div>
                                </a>
                                <div class="menu-submenu">
                                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                                            <div class="menu-text">Menu 3.1</div>
                                        </a></div>
                                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                                            <div class="menu-text">Menu 3.2</div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="menu-item"><a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.2</div>
                                </a></div>
                            <div class="menu-item"><a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.3</div>
                                </a></div>
                        </div>
                    </div>
                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                            <div class="menu-text">Menu 1.2</div>
                        </a></div>
                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                            <div class="menu-text">Menu 1.3</div>
                        </a></div>
                </div>
            </div>

            <!-- BEGIN minify-button -->
            <div class="menu-item d-flex">
                <a href="javascript:;"
                   class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none"
                   data-toggle="app-sidebar-minify">
                    <?php
                    $icon ??= '';
                    if ($icon == 'ionicons') {
                        echo '<ion-icon name="arrow-back" class="me-1"></ion-icon> <div class="menu-text">Collapse</div>';
                    } else if ($icon == 'lineicons') {
                        echo '<i class="icon-arrow-left"></i> <div class="menu-text">Collapse</div>';
                    } else {
                        echo '<i class="fa fa-angle-double-left"></i>';
                    }
                    ?>
                </a>
            </div>
            <!-- END minify-button -->
        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
<!-- END #sidebar -->