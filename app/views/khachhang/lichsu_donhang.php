<div class="container-fluid pt-5">
    <h1>Quản lí đơn hàng</h1>
    <h2>Đơn hàng của bạn</h2>
    <div class="col-lg-8 table-responsive mb-5">
        <table class="table table-bordered text-center mb-0">
            <thead class="bg-secondary text-dark">
                <tr>
                    <th>Họ và tên</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php
                foreach ($lich_su_donhang as $don_hang) {
                ?>
                    <tr>
                        <td><?php echo $don_hang['ho_va_ten'] ?></td>
                        <td><?php echo $don_hang['so_dien_thoai'] ?></td>
                        <td><?php echo $don_hang['dia_chi_giao_hang'] ?></td>
                        <td><?php echo $don_hang['email'] ?></td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
        <table class="table table-bordered text-center mb-0">
            <thead class="bg-secondary text-dark">
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng giá</th>
                    <th>Phương thức thanh toán</th>
                    <th>Trạng thái đơn hàng</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php
                foreach ($lich_su_donhang as $don_hang) {
                ?>
                    <tr>
                        <td class="align-middle"><?php echo $don_hang['ten'] ?></td>
                        <td class="align-middle"><?php echo $don_hang['gia'] ?> VNĐ</td>
                        <td class="align-middle">
                            1
                        </td>
                        <td class="align-middle"><?php echo $don_hang['tong_gia'] ?> VNĐ</td>
                        <td class="align-middle"><?php echo $don_hang['phuong_thuc_thanh_toan'] ?></td>
                        <td class="align-middle"><?php echo $don_hang['trang_thai'] ?></td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
</div>