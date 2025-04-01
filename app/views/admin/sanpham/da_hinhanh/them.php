<div class="page-inner">
    <h1>Thêm hình ảnh mới</h1>
    <form action="admin.php?hanh_dong=them_hinhanh" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Chọn sản phẩm</label>
            <select name="id_san_pham" id="">
                <?php foreach($danhsach_sanpham as $item) { ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['ten'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mt-3">
            <input type="file" name="url" id="">
        </div>
        <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
        <p style="color: red;"><strong><?php echo $loi ?></strong></p>
        <input type="submit" name="them_hinhanh" class="btn btn-primary mt-3" value="Thêm"></input>
    </form>
</div>