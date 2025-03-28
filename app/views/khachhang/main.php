
    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Danh mục sản phẩm</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <?php foreach($danhsach_danhmuc as $danh_muc){ ?>
                            <a href="#" class="nav-item nav-link"><?php echo $danh_muc['ten'] ?></a>
                        <?php }?>                        
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="khachhang.php?hanh_dong=" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" >
                        <div class="navbar-nav mr-auto py-0">
                            <a href="khachhang.php?hanh_dong=" class="nav-item nav-link active">Trang chủ</a>
                            <a href="khachhang.php?hanh_dong=danhsach_sanpham" class="nav-item nav-link">Sản phẩm</a>
                            
                            <a href="contact.html" class="nav-item nav-link">Liên hệ</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <?php if(isset($_SESSION["khachhang"])&&$_SESSION["khachhang"]['vai_tro']=='khach_hang'){?>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Xin chào <?php echo $_SESSION["khachhang"]["tai_khoan"] ?></a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="khachhang.php?hanh_dong=thongtin_canhan&id=<?php echo $_SESSION["khachhang"]["id"] ?>" class="dropdown-item">Thông tin cá nhân</a>
                                        <a href="khachhang.php?hanh_dong=quan_li_donhang" class="dropdown-item">Quản lí đơn hàng</a>
                                        <a href="khachhang.php?hanh_dong=dang_xuat" class="dropdown-item">Đăng xuất</a>
                                    </div>
                                </div>
                            <?php }elseif(isset($_SESSION["khachhang"])&&$_SESSION["khachhang"]['vai_tro']=='admin'){ ?>
                                <a href="../admin/admin.php" class="dropdown-item" target="_blank">Truy cập trang admin</a>
                                <a href="khachhang.php?hanh_dong=dang_xuat" class="dropdown-item">Đăng xuất</a>
                            <?php }else{  ?>
                            <a href="khachhang.php?hanh_dong=dang_nhap" class="nav-item nav-link">Đăng nhập</a>
                            <a href="khachhang.php?hanh_dong=dang_ky" class="nav-item nav-link">Đăng ký</a>
                            <?php } ?>
                        </div>
                    </div>
                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="http://localhost:90/ecommerce/public/hinhanh/carousel-1.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Giảm giá cho đơn hàng đầu tiên</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Phong cách thời thượng</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="http://localhost:90/ecommerce/public/hinhanh/carousel-2.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Giảm giá cho đơn hàng đầu tiên</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Giá cả hợp lí</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Sản phẩm chất lượng</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Miễn phí vận chuyển</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hoàn trả trong 14 ngày</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hỗ trợ 24/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Offer Start -->
    <div class="container-fluid offer pt-5">
        <div class="row px-xl-5">
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                    
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">20% Giảm giá</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Ưu đãi mùa xuân</h1>
                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                    
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">20% Giảm giá</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Ưu đãi mùa hè</h1>
                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Sản phẩm mới</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php foreach($thongtin_sanpham as $san_pham){
                $hinh_anh = explode(",",$san_pham['danh_sach_anh']);
                $anh_thu_nhat = $hinh_anh[0];
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1" >
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0" style=" width: 370px; height: 250px;">
                            <img class="img-fluid" style="object-fit:cover;" src="http://localhost:90/ecommerce/public/hinhanh/<?php echo $anh_thu_nhat ?>" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?php echo $san_pham['ten'] ?></h6>
                            <div class="d-flex justify-content-center">
                                <h6><?php echo $san_pham['gia'] ?> VNĐ</h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="khachhang.php?hanh_dong=chitiet_sanpham&id=<?php echo $san_pham['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Xem chi tiết</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Products End -->


    <!-- Subscribe Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Cửa hàng của chúng tôi</span></h2>
                    <p>Liên hệ</p>
                </div>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-4" placeholder="Emai">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Liên hệ ngay</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Sản phẩm hot</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
        <?php foreach($thongtin_sanpham as $san_pham){
                $hinh_anh = explode(",",$san_pham['danh_sach_anh']);
                $anh_thu_nhat = $hinh_anh[0];
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1" >
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0" style=" width: 370px; height: 250px;">
                            <img class="img-fluid" style="object-fit:cover;" src="http://localhost:90/ecommerce/public/hinhanh/<?php echo $anh_thu_nhat ?>" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?php echo $san_pham['ten'] ?></h6>
                            <div class="d-flex justify-content-center">
                                <h6><?php echo $san_pham['gia'] ?> VNĐ</h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="khachhang.php?hanh_dong=chitiet_sanpham&id=<?php echo $san_pham['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Xem chi tiết</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Products End -->





    