<div class="page-inner">
    <h1>Quản lí hình ảnh sản phẩm</h1>
    <a href="admin.php?hanh_dong=them_hinhanh" class="btn btn-success">Thêm hình ảnh cho sản phẩm</a>
    
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh </th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($danhsach_hinhanh as $item) { ?>
            <tr>
                <td><?php echo $item["id_hinhanh"] ?></td>
                <td><?php echo $item["ten"] ?></td>
                <td><img src="http://localhost:90/ecommerce/<?php echo $path.$item['url'] ?>" width="100" height="100" style='margin: 5px; object-fit:cover;'></td>
                <td>
                    <a href="admin.php?hanh_dong=capnhat_hinhanh&id=<?php echo $item["id_hinhanh"] ?>" class="btn btn-warning">Cập nhật</a>
                    <a href="admin.php?hanh_dong=xoa_hinhanh&id=<?php echo $item["id_hinhanh"] ?>" onclick="return(confirm('Bạn có chắc chắn muốn xóa không?'))" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>