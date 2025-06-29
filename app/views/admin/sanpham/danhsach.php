<div class="page-inner">
    <h1>Danh sách sản phẩm</h1>
    <a href="admin.php?hanh_dong=them_sanpham" class="btn btn-success">Thêm sản phẩm</a>
    <a href="admin.php?hanh_dong=da_hinhanh" class="btn btn-info">Quản lí đa hình ảnh</a>
    <a href="admin.php?hanh_dong=tu_khoa" class="btn btn-secondary">Quản lí từ khóa sản phẩm</a>
    <a href="admin.php?hanh_dong=them_size" class="btn btn-primary">Thêm size cho sản phẩm</a>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>                
                <th>Mô tả</th>
                <th>Tổng số lượng</th>
                <th>Danh mục của sản phẩm</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($danhsach_sanpham as $item) { ?>
            <tr>
                <td><?php echo $item["id"] ?></td>
                <td><?php echo $item["ten"] ?></td>                
                <td><?php echo $item["gia"] ?> VNĐ</td>
                <td><?php echo $item["mo_ta"] ?></td>
                <td><?php echo $item["so_luong"] ?></td>
                <td><?php echo $item["ten_danhmuc"] ?></td>
                <td>
                    <a href="admin.php?hanh_dong=chitiet&id=<?php echo $item["id"] ?>" class="btn btn-info">Chi tiết</a>
                    <a href="admin.php?hanh_dong=capnhat_sanpham&id=<?php echo $item["id"] ?>" class="btn btn-warning">Cập nhật</a>
                    <a href="admin.php?hanh_dong=xoa_sanpham&id=<?php echo $item["id"] ?>" onclick="return(confirm('Bạn có chắc chắn muốn xóa không?'))" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php }
            ?>

        </tbody>
    </table>
</div>