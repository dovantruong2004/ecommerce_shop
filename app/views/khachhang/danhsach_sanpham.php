  <!-- Shop Start -->
  <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <div class="">
                    <h5 class="font-weight-semi-bold mb-4">Lọc sản phẩm theo danh mục</h5>
                        <div >
                            <a href="khachhang.php?hanh_dong=loc_sanpham_danhmuc&id=">Tất cả</a>
                            <?php foreach($danhsach_danhmuc as $danhmuc){ ?>
                                <a href="khachhang.php?hanh_dong=loc_sanpham_danhmuc&id=<?php echo $danhmuc['id'] ?>"><?php echo $danhmuc['ten'] ?></a>
                            <?php }?>
                        </div>
                </div>
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="khachhang.php?hanh_dong=timkiem_sanpham" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm tên sản phẩm" name="ten">
                                    <input class="input-group-append bg-secondary" type="submit" value="Tìm kiếm" name="timkiem" style="border:none;">
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php foreach($thongtin_sanpham as $sanpham){
                        $hinh_anh = explode(",",$sanpham['danh_sach_anh']);
                        $anh_thu_nhat = $hinh_anh[0];
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                            <form action="khachhang.php?hanh_dong=gio_hang" method="post">
                                <input type="hidden" name="id" value="<?php echo $sanpham['id'] ?>">
                                <input type="hidden" name="gia" value="<?php echo $sanpham['gia'] ?>">
                                <input type="hidden" name="ten" value="<?php echo $sanpham['ten'] ?>">
                                <div class="card product-item border-0 mb-4" style="height: 573px;">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0" >
                                        <img class="img-fluid w-100" src="http://localhost:90/ecommerce/public/hinhanh/<?php echo $anh_thu_nhat ?>" alt="" style="width: 100%;height: 100%;object-fit: contain;">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3"><?php echo $sanpham['ten'] ?></h6>
                                        <div class="d-flex justify-content-center">
                                            <h6><?php echo number_format($sanpham['gia'], 0, '', '') ?> VNĐ</h6>
                                        </div>  
                                    </div>
                                    
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="khachhang.php?hanh_dong=chitiet_sanpham&id=<?php echo $sanpham['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Xem chi tiết</a>
                                        <i class="fas fa-shopping-cart text-primary mr-1"><input type="submit" name="them_vao_giohang" value="Thêm vào giỏ hàng" class="btn btn-sm text-dark p-0" style="font-size:14px;font-family:Arial, Helvetica, sans-serif;"></i>
                                    </div>
                                </div>
                            </form>
                        </div>                        
                    <?php }?>
                    <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
