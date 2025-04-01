<div class="page-inner">
    <h1>Danh sách liên hệ</h1>
    <p style="color: green;"><strong><?php echo $thong_bao ?></strong></p>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên người gửi</th>
                <th>Email</th>
                <th>Chủ đề</th>
                <th>Nội dung</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($danhsach_lienhe as $lienhe) { ?>
            <tr>
                <td><?php echo $lienhe["id"] ?></td>
                <td><?php echo $lienhe["ten"] ?></td>
                <td><?php echo $lienhe["email"] ?></td>
                <td><?php echo $lienhe["chu_de"] ?></td>
                <td><?php echo $lienhe["noi_dung"] ?></td>
            </tr>
            <?php }
            ?>

        </tbody>
    </table>
</div>