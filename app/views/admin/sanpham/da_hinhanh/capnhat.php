<div class="page-inner">
    <h1>Cập nhật hình ảnh</h1>
    <form action="admin.php?hanh_dong=capnhat_hinhanh" method="post" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="id" value="<?php echo $mot_hinhanh['id_hinhanh']; ?>">
            <label for="">ID</label>
            <input type="text" name="id" id="" value="<?php echo $mot_hinhanh['id_hinhanh'] ?>" disabled>
        </div>
        <div class="mt-3">
            <input type="hidden" name="id_sanpham" value="<?php echo $mot_hinhanh['id_sanpham']; ?>">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="ten" id="" value="<?php echo $mot_hinhanh['ten'] ?>" disabled>
        </div>
        <div class="mt-3">
            <img src="http://localhost:90/ecommerce/<?php echo $path.$mot_hinhanh['url'] ?>" width="100" height="100" style='margin: 5px; object-fit:cover;'>
        </div>
        <div class="mt-3">
            <input type="file" name="url" id="">
        </div>
        <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
        <input type="submit" name="capnhat_hinhanh" class="btn btn-primary mt-3" value="Cập nhật"></input>
    </form>
</div>