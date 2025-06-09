<div class="page-inner">
    <h1>Thêm size mới</h1>
    <form action="admin.php?hanh_dong=them_size" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Chọn sản phẩm</label>
            <select name="id_san_pham" id="">
                <?php foreach($danhsach_sanpham as $item) { ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['ten'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mt-3">
            <label for="">Chọn size</label>
            <select name="id_size" id="">
                <option value="">--Chọn--</option>
                <?php foreach($tatca_size as $size){?>
                    <option value="<?php echo $size['id'] ?>"><?php echo $size['ten_size'] ?></option>
                <?php }?>
            </select>
        </div>
        <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
        <input type="submit" name="them_size" class="btn btn-primary mt-3" value="Thêm"></input>
    </form>
</div>