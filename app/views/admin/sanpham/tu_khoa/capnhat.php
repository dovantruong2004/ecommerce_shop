<div class="page-inner">
    <h1>Cập nhật từ khóa</h1>
    <form action="admin.php?hanh_dong=capnhat_tukhoa" method="post" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="id" value="<?php echo $mot_tukhoa['id_tukhoa']; ?>">
            <label for="">ID</label>
            <input type="text" name="id" id="" value="<?php echo $mot_tukhoa['id_tukhoa'] ?>" disabled>
        </div>
        <div class="mt-3">
            <input type="hidden" name="id_sanpham" value="<?php echo $mot_tukhoa['id_sanpham']; ?>">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="ten" id="" value="<?php echo $mot_tukhoa['ten'] ?>" disabled>
        </div>
        <div class="mt-3">
            
        </div>
        <div class="mt-3">
            <label for="">Nhập từ khóa cho sản phẩm</label>
            <input type="text" name="tu_khoa" id="">
        </div>
        <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
        <input type="submit" name="capnhat_tukhoa" class="btn btn-primary mt-3" value="Cập nhật"></input>
    </form>
</div>