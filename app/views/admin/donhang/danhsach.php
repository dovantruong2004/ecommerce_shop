<div class="page-inner">
    <h1>Danh sách đơn hàng</h1>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                
                <th>Trạng thái đơn hàng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($quan_li_donhang as $item) { ?>
            <tr>
                <td><?php echo $item["id"] ?></td>
                <td><?php echo $item["trang_thai"] ?></td>
                <td>
                    <?php 
                        if($item['trang_thai'] == 'Chờ giao hàng'){
                    ?>
                        <a href="admin.php?hanh_dong=xem_chi_tiet_donhang&id=<?php echo $item['id'] ?>" class="btn btn-info">Xem chi tiết</a>
                        <a href="admin.php?hanh_dong=huy_don&id=<?php echo $item['id'] ?>" onclick="return(confirm('Bạn có chắc chắn muốn hủy đơn không?'))" class="btn btn-danger">Hủy đơn</a>
                        <a href="admin.php?hanh_dong=capnhat_donhang_danggiaohang&id=<?php echo $item['id'] ?>" onclick="return(confirm('Bạn có chắc muốn cập nhật đơn không?'))" class="btn btn-warning">Đang giao hàng</a>
                        <a href="admin.php?hanh_dong=capnhat_donhang_dagiaohang&id=<?php echo $item['id'] ?>" onclick="return(confirm('Bạn có chắc muốn cập nhật đơn không?'))" class="btn btn-secondary">Đã giao hàng</a>
                    <?php }elseif($item['trang_thai'] == 'Đang giao hàng'){?>
                        <a href="admin.php?hanh_dong=xem_chi_tiet_donhang&id=<?php echo $item['id'] ?>" class="btn btn-info">Xem chi tiết</a>
                        <a href="admin.php?hanh_dong=capnhat_donhang_dagiaohang&id=<?php echo $item['id'] ?>" onclick="return(confirm('Bạn có chắc muốn cập nhật đơn không?'))" class="btn btn-secondary">Đã giao hàng</a>
                    <?php }elseif($item['trang_thai'] == 'Đã giao hàng'){ ?>
                        <a href="admin.php?hanh_dong=xem_chi_tiet_donhang&id=<?php echo $item['id'] ?>" class="btn btn-info">Xem chi tiết</a>
                    <?php }elseif($item['trang_thai'] == 'Đã hủy'){?>
                        <a href="admin.php?hanh_dong=xem_chi_tiet_donhang&id=<?php echo $item['id'] ?>" class="btn btn-info">Xem chi tiết</a>
                    <?php } ?>
                </td>
            </tr>
            <?php }
            ?>

        </tbody>
    </table>
</div>