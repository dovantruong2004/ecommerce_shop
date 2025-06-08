<div class="page-inner">
    <h1>Chi tiết đơn hàng</h1>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($lich_su_donhang as $item) { ?>
            <tr>
                <td><?php echo $item["ho_va_ten"] ?></td>
                <td><?php echo $item["so_dien_thoai"] ?></td>
                <td><?php echo $item["dia_chi_giao_hang"] ?></td>
                <td><?php echo $item["email"] ?></td>
            </tr>
            <?php }
            ?>

        </tbody>
    </table>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Size</th>
                <th>Tổng giá</th>
                <th>Phương thức thanh toán</th>
                <th>Trạng thái đơn hàng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($lich_su_donhang as $item) { ?>
            <tr>
                <td><?php echo $item["ten"] ?></td>
                <td><?php echo $item["gia"] ?> VNĐ</td>
                <td><?php echo $item["so_luong_mua"] ?></td>
                <td><?php echo $item["size"] ?></td>
                <td><?php echo $item["tong_gia"] ?> VNĐ</td>
                <td><?php echo $item["phuong_thuc_thanh_toan"] ?></td>
                <td><?php echo $item["trang_thai"] ?></td>
            </tr>
            <?php }
            ?>

        </tbody>
    </table>
</div>