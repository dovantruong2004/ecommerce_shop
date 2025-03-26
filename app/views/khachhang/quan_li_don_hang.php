<div class="container-fluid pt-5">
    <h1>Quản lí đơn hàng</h1>
    <h2>Đơn hàng của bạn</h2>
    <div class="col-lg-8 table-responsive mb-5">
    <table class="table table-bordered text-center mb-0">
            <thead class="bg-secondary text-dark">
                <tr>
                    <th>ID đơn hàng</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php
                    foreach($quan_li_donhang as $don_hang){
                ?>
                    <tr>
                        <td><?php echo $don_hang['id'] ?></td>
                        <th><?php echo $don_hang['trang_thai'] ?></th>
                        <td>
                            <?php 
                                if($don_hang['trang_thai'] == 'Đang giao hàng' || $don_hang['trang_thai'] == 'Đã giao hàng' || $don_hang['trang_thai'] == 'Đã hủy'){
                            ?>
                                <a href="khachhang.php?hanh_dong=xem_chi_tiet_donhang&id=<?php echo $don_hang['id'] ?>" class="btn btn-info">Xem chi tiết</a>
                            <?php }else{?>
                                <a href="khachhang.php?hanh_dong=xem_chi_tiet_donhang&id=<?php echo $don_hang['id'] ?>" class="btn btn-info">Xem chi tiết</a>
                                <a href="khachhang.php?hanh_dong=huy_don&id=<?php echo $don_hang['id'] ?>" onclick="return(confirm('Bạn có chắc chắn muốn hủy đơn không?'))" class="btn btn-danger">Hủy đơn</a>
                            <?php } ?>
                            
                        </td>
                    </tr>

                <?php
                    }
                 ?>
            </tbody>
        </table>
    </div>
</div>