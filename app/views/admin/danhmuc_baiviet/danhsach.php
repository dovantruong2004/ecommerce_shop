<div class="page-inner">
    <h1>Danh mục bài viết</h1>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <a href="admin.php?hanh_dong=them_danhmuc_baiviet" class="btn btn-success">Thêm danh mục bài viết</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục bài viết</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
             foreach ($danhsach_danhmuc_baiviet as $danh_muc) {
             
            ?>
            <tr>
                <td><?php echo $danh_muc['id'] ?></td>
                <td><?php echo $danh_muc['ten'] ?></td>
                <td>
                    <a href="admin.php?hanh_dong=capnhat_danhmuc_baiviet&id=<?php echo $danh_muc["id"] ?>" class="btn btn-warning">Cập nhật</a>
                    <a href="admin.php?hanh_dong=xoa_danhmuc&id=<?php echo $danh_muc["id"] ?>" onclick="return(confirm('Bạn có chắc chắn muốn xóa không?'))" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>