<div class="page-inner">
    <h1>Danh sách người dùng</h1>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($danhsach_danhmuc as $item) { ?>
            <tr>
                <td><?php echo $item["id"] ?></td>
                <td><?php echo $item["ten"] ?></td>
                <td>
                    <a href="admin.php?hanh_dong=capnhat_danhmuc&id=<?php echo $item["id"] ?>" class="btn btn-warning">Cập nhật</a>
                    <a href="admin.php?hanh_dong=xoa_danhmuc&id=<?php echo $item["id"] ?>" onclick="return(confirm('Bạn có chắc chắn muốn xóa không?'))" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php }
            ?>

        </tbody>
    </table>
</div>