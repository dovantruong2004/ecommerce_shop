<div class="page-inner">
    <h1>Cập nhật bài viết mới</h1>
    <form action="admin.php?hanh_dong=capnhat_baiviet" method="post">
        <div>
        <input type="hidden" name="id" value="<?php echo $chitiet_baiviet['id']; ?>">
        <label for="">ID</label>
            <input type="text" name="id" id="" value="<?php echo $chitiet_baiviet['id'] ?>" disabled>
        </div>
        <div>
            <label for="">Nhập tiêu đề</label>
            <input type="text" name="tieu_de" id="" value="<?php echo $chitiet_baiviet['tieu_de'] ?>">
        </div><br>
        <div>
            <label for="">Nhập nội dung</label>
            <input type="text" name="noi_dung" id="" value="<?php echo $chitiet_baiviet['noi_dung'] ?>">
        </div><br>
        <div>
            <label for="">Nhập tên tác giả</label>
            <input type="text" name="tac_gia" id="" value="<?php echo $chitiet_baiviet['tac_gia'] ?>">
        </div><br>
        <div>
            <label for="">Danh mục bài viết</label>
            <select name="id_danhmuc_baiviet" id="" class="form-select">
                <?php
                foreach ($danhsach_danhmuc_baiviet as $danhmuc) {
                ?>
                    <option value="<?php echo $danhmuc['id'] ?>"><?php echo $danhmuc['ten'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
        <p style="color: red;"><strong><?php echo $loi ?></strong></p>
        <input type="submit" name="capnhat_baiviet" class="btn btn-primary mt-3" value="Cập nhật"></input>
    </form>
</div>