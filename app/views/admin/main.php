<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Trang chủ</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Số đơn hàng đã đặt</p>
                                <h4 class="card-title"><h4 class="card-title"><?php foreach($so_don_dadat as $so_don){ ?>
                                    <p><?php echo $so_don['so_don_dadat'] ?></p>
                                    <?php } ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                <i class="fas fa-user-check"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Số sản phẩm trong kho</p>
                                <h4 class="card-title"><?php foreach($so_don_huy as $so_don){ ?>
                                    <p><?php echo $so_don['so_don_huy'] ?></p>
                                    <?php } ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-danger bubble-shadow-small">
                                <i class="fas fa-luggage-cart"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Số đơn đã hủy</p>
                                <h4 class="card-title">
                                    <?php foreach($so_don_huy as $so_don){ ?>
                                    <p><?php echo $so_don['so_don_huy'] ?></p>
                                    <?php } ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                <i class="far fa-check-circle"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Số đơn hàng giao thành công</p>
                                <h4 class="card-title">
                                    <?php foreach($so_don_hoanthanh as $so_don){ ?>
                                    <p><?php echo $so_don['so_don_hoanthanh'] ?></p>
                                    <?php } ?></h4>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                <i class="far fa-check-circle"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Tổng doanh thu theo ngày</p>
                                <h4 class="card-title">
                                  <?php foreach($doanh_thu_ngay as $doanh_thu){ ?>
                                    <p><?php echo number_format($doanh_thu['doanh_thu'], 0, '', '') ?> VNĐ</p>
                                  <?php } ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="card-title">Biểu đồ thống kê doanh thu</div>
                </div>
                <div class="card-body">
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                </div>
                <div id="barChart"></div>
            </div>
          </div>
    </div>
</div>
