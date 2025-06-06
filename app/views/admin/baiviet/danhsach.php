<div class="page-inner">
    <h1>Danh sách bài viết</h1>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <a href="admin.php?hanh_dong=them_baiviet" class="btn btn-success">Thêm bài viết</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề bài viết</th>
                <th>Ngày đăng bài</th>
                <th>Nội dung</th>
                <th>Tác giả</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
             foreach($bai_viet as $item){
            ?>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['tieu_de'] ?></td>
                <td><?php echo $item['ngay_dang_bai'] ?></td>
                <td><?php echo $item['noi_dung'] ?></td>
                <td><?php echo $item['tac_gia'] ?></td>
                <td>
                    <a href="admin.php?hanh_dong=capnhat_baiviet&id=<?php echo $item["id"] ?>" class="btn btn-warning">Cập nhật</a>
                    <a href="admin.php?hanh_dong=xoa_baiviet&id=<?php echo $item["id"] ?>" onclick="return(confirm('Bạn có chắc chắn muốn xóa không?'))" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>