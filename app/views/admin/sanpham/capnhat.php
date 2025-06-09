<div class="page-inner">
    <h1>Cập nhật sản phẩm</h1>
    <form action="admin.php?hanh_dong=capnhat_sanpham" method="post">
        <div>
            <input type="hidden" name="id" value="<?php echo $mot_sanpham['id']; ?>">
            <label for="">ID</label>
            <input type="text" name="id" id="" value="<?php echo $mot_sanpham['id'] ?>" disabled>
        </div>
        <div>
            <label for="">Nhập tên sản phẩm</label>
            <input type="text" name="ten_sanpham" class="" placeholder="<?php echo $mot_sanpham['ten'] ?>">
        </div>
        <div class="mt-4">
            <label for="">Nhập giá</label>
            <input type="text" name="gia" id="" placeholder="<?php echo $mot_sanpham['gia'] ?> VNĐ">
        </div>
        <div class="mt-4">
            <label for="">Nhập mô tả</label>
            <input type="text" name="mo_ta" id="" placeholder="<?php echo $mot_sanpham['mo_ta'] ?>">
        </div>
        <div class="mt-4">
            <label for="">Nhập số lượng</label>
            <input type="text" name="so_luong" id="" placeholder="<?php echo $mot_sanpham['so_luong'] ?>">
        </div>
        <div class="mt-4">
            <label for="">Chọn danh mục của sản phẩm</label>
            <select name="id_danh_muc" id="">
                <option value="">--Chọn--</option>
                <?php foreach ($danhsach_danhmuc as $item ) {?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['ten'] ?></option>
                <?php }?>
            </select>
        </div>
        
        <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
        <p style="color: red;"><strong><?php echo $loi ?></strong></p>
        <input type="submit" name="capnhat_sanpham" class="btn btn-primary mt-3" value="Cập nhật"></input>
    </form>
</div>