<div class="page-inner">
    <h1>Danh sách người dùng</h1>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($quan_li_nguoidung as $item) { ?>
            <tr>
                <td><?php echo $item["id"] ?></td>
                <td><?php echo $item["ho_va_ten"] ?></td>
                <td><?php echo $item["email"] ?></td>
                <td><?php echo $item["so_dien_thoai"] ?></td>
                <td><?php echo $item["dia_chi"] ?></td>
            </tr>
            <?php }
            ?>

        </tbody>
    </table>
</div>