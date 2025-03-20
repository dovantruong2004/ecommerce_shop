
<div class="page-inner">
    <h1>Cập nhật danh mục mới</h1>
    <form action="admin.php?hanh_dong=capnhat_danhmuc" method="post">
        <div>
        <input type="hidden" name="id" value="<?php echo $mot_danhmuc['id']; ?>">
        <label for="">ID</label>
            <input type="text" name="id" id="" value="<?php echo $mot_danhmuc['id'] ?>" disabled>
        </div>
        <div>
            <label for="">Nhập tên danh mục</label>
            <input type="text" name="ten_danhmuc" id="" placeholder="<?php echo $mot_danhmuc['ten'] ?>">
        </div>
        <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
        <input type="submit" name="capnhat_danhmuc" class="btn btn-primary mt-3" value="Cập nhật"></input>
    </form>
</div>