<div class="page-inner">
    <h1>Thống kê số lượng sản phẩm theo danh mục</h1>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Tên danh mục</th>
                <th>Số lượng sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($so_luong_sanpham_danhmuc as $so_luong){ ?>
                <tr>
                    <td><?php echo $so_luong['ten_danh_muc'] ?></td>
                    <td><?php echo $so_luong['tong_so_luong'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>