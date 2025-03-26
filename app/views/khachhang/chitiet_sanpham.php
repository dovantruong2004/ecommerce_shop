 <!-- Shop Detail Start -->
 <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <?php foreach(array_slice($hinhanh_sanpham,0,1) as $hinhanh){ ?>
                            <div class="carousel-item active" style="width:210px;height:500px;object-fit: cover;">
                                <img src="http://localhost:90/ecommerce/public/hinhanh/<?php echo $hinhanh['url'] ?>" alt="Image" style="">
                            </div>
                        <?php } ?>
                        <?php foreach($hinhanh_sanpham as $hinhanh){ ?>
                            <div class="carousel-item" style="width:210px;height:500px;object-fit: cover;">
                                <img src="http://localhost:90/ecommerce/public/hinhanh/<?php echo $hinhanh['url'] ?>" alt="Image" style="">
                            </div>
                        <?php } ?>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold"><?php echo $thongtin_sanpham['ten'] ?></h3>
                <div class="d-flex mb-3">
                    
                    <small class="pt-1">(50 Reviews)</small>
                </div>
                <h3 class="font-weight-semi-bold mb-4"><?php echo $thongtin_sanpham['gia'] ?> VNĐ</h3>
                
                
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus" >
                            <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary text-center" id="soluong" value="1" name="so_luong">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Thêm vào giỏ hàng</button>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Chia sẻ</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Mô tả</a>
                    
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Đánh giá (0)</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Mô tả sản phẩm</h4>
                        <p><?php echo $thongtin_sanpham['mo_ta'] ?></p>
                    </div>

                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4">Bình luận về sản phẩm</h4>
                                <div class="media mb-4">
                                    
                                    <div class="media-body">
                                        <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                        
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Bình luận</h4>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Bình luận của bạn</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Gửi" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lấy các phần tử
        const quantityInput = document.querySelector('#soluong');
        const minusButton = document.querySelector('.btn-minus');
        const plusButton = document.querySelector('.btn-plus');

        // Hàm tăng số lượng
        function increaseQuantity() {
            let currentValue = parseInt(quantityInput.value);
            if (!isNaN(currentValue)) {
                quantityInput.value = currentValue + 1;
            } else {
                quantityInput.value = 1; // Đặt giá trị mặc định là 1 nếu không phải số
            }
        }

        // Hàm giảm số lượng
        function decreaseQuantity() {
            let currentValue = parseInt(quantityInput.value);
            if (!isNaN(currentValue) && currentValue > 1) {
                quantityInput.value = currentValue - 1;
            } else {
                quantityInput.value = 1; // Đặt giá trị tối thiểu là 1
            }
        }

        // Gắn sự kiện click cho nút "-"
        minusButton.addEventListener('click', decreaseQuantity);

        // Gắn sự kiện click cho nút "+"
        plusButton.addEventListener('click', increaseQuantity);
    });
</script>