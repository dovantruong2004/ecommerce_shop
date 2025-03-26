<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="admin.php?hanh_dong=''" class="logo">
                <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Trang chủ</p>

                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Quản lí</h4>
                </li>
                <li class="nav-item">
                    <a href="admin.php?hanh_dong=danh_muc">
                        <i class="fas fa-layer-group"></i>
                        <p>Danh mục</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo 'admin.php?hanh_dong=san_pham' ?>">
                        <i class="fas fa-th-list"></i>
                        <p>Sản phẩm</p>
                    </a>                    
                </li>
                <li class="nav-item">
                    <a href="<?php echo 'admin.php?hanh_dong=don_hang' ?>">
                        <i class="fas fa-pen-square"></i>
                        <p>Đơn hàng</p>

                    </a>

                </li>
                <li class="nav-item">
                    <a href="<?php echo 'admin.php?hanh_dong=nguoi_dung' ?>">
                        <i class="fas fa-table"></i>
                        <p>Người dùng</p>

                    </a>

                </li>
                <li class="nav-item">
                    <a href="<?php echo 'admin.php?hanh_dong=danh_gia' ?>">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Đánh giá</p>

                    </a>

                </li>
                <li class="nav-item">
                    <a href="<?php echo 'admin.php?hanh_dong=san_pham' ?>">
                        <i class="far fa-chart-bar"></i>
                        <p>Thống kê</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="charts/charts.html">
                                    <span class="sub-item">Chart Js</span>
                                </a>
                            </li>
                            <li>
                                <a href="charts/sparkline.html">
                                    <span class="sub-item">Sparkline</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
<div class="main-panel">
    <div class="main-header">
        <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
                <a href="index.html" class="logo">
                    <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                </a>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="gg-menu-right"></i>
                    </button>
                    <button class="btn btn-toggle sidenav-toggler">
                        <i class="gg-menu-left"></i>
                    </button>
                </div>
                <button class="topbar-toggler more">
                    <i class="gg-more-vertical-alt"></i>
                </button>
            </div>
            <!-- End Logo Header -->
        </div>
        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-search pe-1">
                                <i class="fa fa-search search-icon"></i>
                            </button>
                        </div>
                        <input type="text" placeholder="Tìm kiếm ..." class="form-control" />
                    </div>
                </nav>


            </div>
        </nav>
        <!-- End Navbar -->
    </div>
    <div class="container">