<div class="page-inner">
    <h1>Quản lí từ khóa sản phẩm</h1>
    <a href="admin.php?hanh_dong=them_tukhoa" class="btn btn-success">Thêm từ khóa cho sản phẩm</a>
    
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Từ khóa</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($danhsach_tukhoa as $item) { ?>
            <tr>
                <td><?php echo $item["id_tukhoa"] ?></td>
                <td><?php echo $item["ten"] ?></td>
                <td><?php echo $item['tu_khoa'] ?></td>
                <td>
                    <a href="admin.php?hanh_dong=capnhat_tukhoa&id=<?php echo $item["id_tukhoa"] ?>" class="btn btn-warning">Cập nhật</a>
                    <a href="admin.php?hanh_dong=xoa_tukhoa&id=<?php echo $item["id_tukhoa"] ?>" onclick="return(confirm('Bạn có chắc chắn muốn xóa không?'))" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>