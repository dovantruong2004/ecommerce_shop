<div class="page-inner">
    <h1>Chi tiết sản phẩm</h1>
    <a href="admin.php?hanh_dong=them_sanpham" class="btn btn-success">Thêm sản phẩm</a>
    <a href="admin.php?hanh_dong=da_hinhanh" class="btn btn-info">Quản lí đa hình ảnh</a>
    <a href="admin.php?hanh_dong=tu_khoa" class="btn btn-secondary">Quản lí từ khóa sản phẩm</a>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Size</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($chitiet_sanpham_size as $item) { ?>
            <tr>
                <td><?php echo $item["id"] ?></td>
                <td><?php echo $item["ten"] ?></td>
                <td><?php echo $item["ten_size"] ?></td>
                <td>
                    <a href="admin.php?hanh_dong=capnhat_size&id=<?php echo $item["id"] ?>" class="btn btn-warning">Cập nhật</a>
                    <a href="admin.php?hanh_dong=xoa_size&id=<?php echo $item["id_sanpham"] ?>&id_xoa=<?php echo $item["id"] ?>" onclick="return(confirm('Bạn có chắc chắn muốn xóa không?'))" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php }
            ?>

        </tbody>
    </table>
</div>