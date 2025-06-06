<div class="page-inner">
    <h1>Thêm danh mục bài viết</h1>
    <form action="admin.php?hanh_dong=them_danhmuc_baiviet" method="post">
        <div>
            <label for="">Nhập tên danh mục</label>
            <input type="text" name="ten" id="">
        </div><br>
        
        <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
        <p style="color: red;"><strong><?php echo $loi ?></strong></p>
        
        <input type="submit" name="them_danhmuc_baiviet" class="btn btn-primary mt-3" value="Thêm"></input>
    </form>
</div>