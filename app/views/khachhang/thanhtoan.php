 <!-- Checkout Start -->
 <div class="container-fluid pt-5">
     <div class="row px-xl-5">
         <form action="khachhang.php?hanh_dong=thanh_toan" method="post" class="row px-xl-5">
             <div class="col-lg-8">
                 <div class="mb-4">
                     <h4 class="font-weight-semi-bold mb-4">Thanh toán đơn hàng</h4>
                     <div class="row">
                         <div class="col-md-6 form-group">
                             <label>Họ và tên</label>
                             <input class="form-control" type="text" placeholder="John" name="ho_va_ten">
                         </div>
                         <div class="col-md-6 form-group">
                             <label>Email</label>
                             <input class="form-control" type="text" placeholder="example@email.com" name="email">
                         </div>
                         <div class="col-md-6 form-group">
                             <label>Số điện thoại</label>
                             <input class="form-control" type="text" placeholder="+123 456 789" name="so_dien_thoai">
                         </div>
                         <div class="col-md-6 form-group">
                             <label>Địa chỉ</label>
                             <input class="form-control" type="text" placeholder="123 Street" name="dia_chi">
                         </div>
                     </div>
                 </div>

             </div>
             <div class="col-lg-4">
                 <div class="card border-secondary mb-5">
                     <div class="card-header bg-secondary border-0">
                         <h4 class="font-weight-semi-bold m-0">Đơn hàng của bạn</h4>
                     </div>
                     <div class="card-body">
                         <h5 class="font-weight-medium mb-3">Sản phẩm</h5>
                         <div class="d-flex justify-content-between">
                            <?php
                            $tong_tien = 0; foreach($gio_hang as $sanpham){ 
                                
                            ?>
                             <input type="hidden" name="id_san_pham" value="<?php echo $sanpham['id'] ?>">
                             <div><?php echo $sanpham['ten'] ?> - Size  <?php echo $sanpham['size'] ?><p><?php echo $sanpham['gia'] ?> VNĐ</p></div>
                            <?php
                                $tong_tien += $sanpham['gia'];
                            } ?>
                         </div>

                     </div>
                     <div class="card-footer border-secondary bg-transparent">
                         <div class="d-flex justify-content-between mt-2">
                             <h5 class="font-weight-bold">Tổng giá </h5>
                             <input type="hidden" name="tong_gia" value="<?php echo $tong_tien ?>">
                             <h5 class="font-weight-bold"><?php echo $tong_tien ?>VNĐ</h5>
                         </div>
                     </div>
                 </div>
                 <div class="card border-secondary mb-5">
                     <div class="card-header bg-secondary border-0">
                         <h4 class="font-weight-semi-bold m-0">Phương thức thanh toán</h4>
                     </div>
                     <div class="card-body">
                         <div class="form-group">
                             <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="phuong_thuc_thanh_toan" id="cod" value="Ship COD" checked>
                                <label class="custom-control-label" for="cod">Ship COD ( Trả tiền khi giao hàng xong)</label>
                             </div>
                         </div>
                     </div>
                     <div class="card-footer border-secondary bg-transparent">
                         <input type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" value="Đặt hàng" name="thanh_toan">
                     </div>
                 </div>
             </div>
             <div><h3 style="color: green;"><?php echo $thong_bao ?></h3></div>
             <div><h3 style="color: red;"><?php echo $loi ?></h3></div>
         </form>
     </div>
 </div>
 <!-- Checkout End -->
 <script>
    document.addEventListener("DOMContentLoaded", function () {
        let form = document.querySelector("form");
        let submitButton = document.querySelector("input[name='thanh_toan']");

        form.addEventListener("submit", function () {
            submitButton.disabled = true;
        });
    });
</script>