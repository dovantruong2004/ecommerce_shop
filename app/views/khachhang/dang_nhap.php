<div class="container-fluid pt-5" style="padding-left: 500px;">
    <div class="col-md-5">
        <h1>Đăng nhập</h1>
        <h4 class="mb-4">Thông tin</h4>
        <form action="khachhang.php?hanh_dong=dang_nhap" method="post">
            <div class="form-group">
                <label for="tai_khoan">Tài khoản</label>
                <input type="text" name="tai_khoan" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="mat_khau">Mật khẩu</label>
                <input type="password" name="mat_khau" id="" class="form-control">
            </div>
            <div class="form-group mb-0">
                <input type="submit" value="Đăng nhập" class="btn btn-primary px-3" name="dang_nhap">
            </div>
            <div>
                <p style="color:green"><?php echo $thong_bao ?></p>
                <p style="color:red"><?php echo $loi ?></p>
            </div>
        </form>
    </div>
</div>