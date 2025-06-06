<div class="container-fluid pt-5">
  <!-- Main Content -->
  <div class="container mt-5">
    <div class="row">
      <!-- Blog Posts -->
      <div class="col-md-8">
        <?php
        foreach ($bai_viet as $item) {
        ?>
          <div class="blog-post mt-3">
            <h2><?php echo $item['tieu_de'] ?></h2>
            <p class="text-muted">Ngày đăng: <?php echo $item['ngay_dang_bai'] ?> | Tác giả: <?php echo $item['tac_gia'] ?></p>
            <p style="white-space: nowrap;overflow:hidden;text-overflow:ellipsis;"><?php echo $item['noi_dung'] ?></p>
            <a href="khachhang.php?hanh_dong=chitiet_baiviet&id=<?php echo $item['id'] ?>" class="btn btn-primary">Đọc tiếp</a>
          </div>
        <?php
        }
        ?>
      </div>

      <!-- Sidebar -->
      <div class="col-md-4">
        <div class="p-4 mb-3 bg-light rounded">
          <h4>Giới thiệu</h4>
          <p>Chào mừng bạn đến với blog cá nhân của tôi! Đây là nơi chia sẻ kiến thức và kinh nghiệm cá nhân.</p>
        </div>
        <div class="p-4">
          <h4>Danh mục</h4>
          <ul class="list-unstyled">
            <?php
            foreach ($danhmuc_baiviet as $items) {
            ?>
              <li><a href="#"><?php echo $items['ten'] ?></a></li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>