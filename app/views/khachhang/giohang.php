 <!-- Cart Start -->
 <div class="container-fluid pt-5">
     <?php if (!isset($_SESSION["khachhang"])) { ?>
         <h1 style="color: red;">Hãy đăng nhập hoặc đăng ký để mua hàng</h1>
     <?php } else { ?>
        <div class="row px-xl-5">
         <div class="col-lg-8 table-responsive mb-5">
             <table class="table table-bordered text-center mb-0">
                 <thead class="bg-secondary text-dark">
                     <tr>
                         <th>Sản phẩm</th>
                         <th>Giá</th>
                         <th>Số lượng</th>
                         <th>Size</th>
                         <th>Tổng giá</th>
                         <th>Xóa</th>
                     </tr>
                 </thead>
                 <tbody class="align-middle">
                     <?php
                        $tong_tien = 0;
                        $tong_gia_sanpham = 0;
                        foreach ($gio_hang as $sanpham) {
                            $hinh_anh = explode(",", $sanpham['danh_sach_anh']);
                            $anh_thu_nhat = $hinh_anh[0];
                        ?>
                         <tr>
                             <td class="align-middle"><img src="http://localhost:90/ecommerce/public/hinhanh/<?php echo $anh_thu_nhat ?>" alt="" style="width: 50px;"><?php echo $sanpham['ten'] ?></td>
                             <td class="align-middle"><?php echo number_format($sanpham['gia'], 0, '', '') ?> VNĐ</td>
                             <td class="align-middle">
                                 <?php echo $sanpham['so_luong'] ?>
                             </td>
                             <td><?php echo $sanpham['size'] ?></td>
                             <td class="align-middle"><?php echo number_format(($tong_gia_sanpham = $sanpham['gia']*$sanpham['so_luong']), 0, '', '') ?> VNĐ</td>
                             <td class="align-middle"><a href="khachhang.php?hanh_dong=xoa_sanpham_giohang&id=<?php echo $sanpham['id_giohang'] ?>" class="btn btn-sm btn-primary" onclick="return(confirm('Bạn có chắc muốn xóa khỏi giỏ hàng?'))"><i class="fa fa-times"></i></a></td>
                         </tr>

                     <?php
                            $tong_tien += $tong_gia_sanpham;
                        } ?>
                 </tbody>
             </table>
         </div>
         <div class="col-lg-4">

             <div class="card border-secondary mb-5">
                 <div class="card-header bg-secondary border-0">
                     <h4 class="font-weight-semi-bold m-0">Giỏ hàng </h4>
                 </div>
                 <div class="card-body">
                     <div class="d-flex justify-content-between mb-3 pt-1">
                         <h6 class="font-weight-medium">Tổng giá sản phẩm</h6>
                         <h6 class="font-weight-medium"><?php echo number_format($tong_tien, 0, '', '') ?> VNĐ</h6>
                     </div>
                     <div class="d-flex justify-content-between">
                         <h6 class="font-weight-medium">Shipping</h6>
                         <h6 class="font-weight-medium">0 VNĐ</h6>
                     </div>
                 </div>
                 <div class="card-footer border-secondary bg-transparent">
                     <div class="d-flex justify-content-between mt-2">
                         <h5 class="font-weight-bold">Tổng</h5>
                         <h5 class="font-weight-bold"><?php echo number_format($tong_tien, 0, '', '') ?> VNĐ</h5>
                     </div>
                     <a href="khachhang.php?hanh_dong=thanh_toan" class="btn btn-block btn-primary my-3 py-3">Tiến hành thanh toán</a>
                     <a href="khachhang.php?hanh_dong=danhsach_sanpham" class="btn btn-block btn-primary my-3 py-3">Tiếp tục mua hàng</a>
                 </div>
             </div>
         </div>
     </div>
     <?php } ?>
     
</div>
     <!-- Cart End -->