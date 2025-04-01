<div class="container-fluid pt-5">
    <h1>Thông tin cá nhân</h1>
    <form class="row g-3" action="khachhang.php?hanh_dong=thongtin_canhan" method="post">
        <input type="hidden" name="id" value="<?php echo $thongtin_canhan['id'] ?>">
        <div class="col-md-6 mt-3">
            <label for="">Tài khoản</label>
            <input type="text" class="form-control" name="tai_khoan" value="<?php echo $thongtin_canhan['tai_khoan'] ?>">
        </div>
        <div class="col-md-6 mt-3">
            <label for="">Họ và tên</label>
            <input type="text" class="form-control" name="ho_va_ten" value="<?php echo $thongtin_canhan['ho_va_ten'] ?>">
        </div>
        <div class="col-md-6 mt-3">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $thongtin_canhan['email'] ?>">
        </div>
        <div class="col-md-6 mt-3">
            <label for="inputPassword4" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="inputPassword4" name="mat_khau" value="<?php echo $thongtin_canhan['mat_khau'] ?>">
        </div>
        <div class="col-12 mt-3">
            <label for="inputAddress" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="inputAddress" value="<?php echo $thongtin_canhan['dia_chi'] ?>" name="dia_chi">
        </div>
        <div class="col-12 mt-3">
            <label for="inputAddress2" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="inputAddress2" value="<?php echo $thongtin_canhan['so_dien_thoai'] ?>" name="so_dien_thoai">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary" name="capnhat_thongtin">Cập nhật</button>
        </div>
        <div>
            <p style="color: green;"><?php echo $thong_bao ?></p>
            <p style="color: red;"><?php echo $loi ?></p>
        </div>
    </form>
</div>