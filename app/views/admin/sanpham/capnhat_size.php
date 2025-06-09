<div class="page-inner">
    <h1>Cập nhật size mới</h1>
    <form action="admin.php?hanh_dong=capnhat_size" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $mot_sanpham_size['id'] ?>">
        <input type="hidden" name="id_sanpham" value="<?php echo $mot_sanpham_size['id_sanpham'] ?>">
        <div>
            <label for="">Sản phẩm</label>
            <strong><?php echo $mot_sanpham_size['ten'] ?></strong>
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
        <input type="submit" name="capnhat_size" class="btn btn-primary mt-3" value="Cập nhật"></input>
    </form>
</div>