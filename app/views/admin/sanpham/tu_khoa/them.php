<div class="page-inner">
    <h1>Thêm từ khóa mới</h1>
    <form action="admin.php?hanh_dong=them_tukhoa" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Chọn sản phẩm</label>
            <select name="id_san_pham" id="">
                <?php foreach($danhsach_sanpham as $item) { ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['ten'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mt-3">
            <label for="">Nhập từ khóa cho sản phẩm</label>
            <input type="text" name="tu_khoa" id="">
        </div>
        <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
        <input type="submit" name="them_tukhoa" class="btn btn-primary mt-3" value="Thêm"></input>
    </form>
</div>