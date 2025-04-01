<div class="page-inner">
    <h1>Danh sách bình luận</h1>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Tài khoản</th>
                <th>Nội dung bình luận</th>
                <th>Ngày bình luận</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($danh_sach_binhluan as $binhluan) { ?>
            <tr>
                <td><?php echo $binhluan["id"] ?></td>
                <td><?php echo $binhluan["ten"] ?></td>
                <td><?php echo $binhluan["tai_khoan"] ?></td>
                <td><?php echo $binhluan["binh_luan"] ?></td>
                <td><?php echo $binhluan["ngay_binh_luan"] ?></td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>