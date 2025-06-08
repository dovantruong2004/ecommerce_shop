<div class="page-inner">
    <h1>Thêm sản phẩm mới</h1>
    <form action="admin.php?hanh_dong=them_sanpham" method="post">
        <div>
            <label for="">Nhập tên sản phẩm</label>
            <input type="text" name="ten_sanpham" class="">
        </div>
        <div class="mt-4">
            <label for="">Nhập giá</label>
            <input type="text" name="gia" id="">
        </div>
        <div class="mt-4">
            <label for="">Nhập mô tả</label>
            <input type="text" name="mo_ta" id="">
        </div>
        <div class="mt-4">
            <label for="">Nhập số lượng</label>
            <input type="text" name="so_luong" id="">
        </div>
        <div class="mt-4">
            <label for="">Chọn danh mục của sản phẩm</label>
            <select name="id_danh_muc" id="">
                <option value="">--Chọn--</option>
                <?php foreach ($danhsach_danhmuc as $item ) {?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['ten'] ?></option>
                <?php }?>
            </select>
        </div><div class="mt-4">
            <label for="">Chọn size</label>
            <select name="size" id="">
                <option value="">--Chọn--</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
        </div>
        <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
        <p style="color: red;"><strong><?php echo $loi ?></strong></p>
        <input type="submit" name="them_sanpham" class="btn btn-primary mt-3" value="Thêm"></input>
    </form>
</div>