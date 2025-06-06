<div class="page-inner">
    <h1>Thêm bài viết mới</h1>
    <form action="admin.php?hanh_dong=them_baiviet" method="post">
        <div>
            <label for="">Nhập tiêu đề</label>
            <input type="text" name="tieu_de" id="">
        </div><br>
        <div>
            <label for="">Nhập nội dung</label>
            <input type="text" name="noi_dung" id="">
        </div><br>
        <div>
            <label for="">Nhập tên tác giả</label>
            <input type="text" name="tac_gia" id="">
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

        <input type="submit" name="them_baiviet" class="btn btn-primary mt-3" value="Thêm"></input>
    </form>
</div>