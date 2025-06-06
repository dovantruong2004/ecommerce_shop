<!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Chi tiết bài viết</a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h1 class="post-title"><?php echo $baiviet['tieu_de'] ?></h1>
        <p class="post-meta">Ngày đăng: <?php echo $baiviet['ngay_dang_bai'] ?> | Tác giả: <?php echo $baiviet['tac_gia'] ?></p>

        <hr>

        <p>
          <?php echo $baiviet['noi_dung'] ?>
        </p>
        <p>
          Bạn cũng có thể chèn ảnh, video, liên kết, mã code hoặc bất kỳ nội dung HTML nào. Dưới đây là một ví dụ về chèn hình ảnh:
        </p>

        <img src="https://via.placeholder.com/800x400" class="img-fluid mb-4" alt="Hình minh họa">

        <h3>Phần phụ đề trong bài viết</h3>
        <p>
          Đây là đoạn giải thích chi tiết hơn cho phần nội dung chính. Bạn có thể tiếp tục chia sẻ thông tin hoặc câu chuyện của mình tại đây.
        </p>

        <blockquote class="blockquote">
          <p>"Đây là một trích dẫn nổi bật trong bài viết."</p>
        </blockquote>

        <p>
          Cuối cùng, bạn có thể kết luận hoặc đặt câu hỏi để thu hút bình luận từ độc giả.
        </p>

        <!-- Nút quay lại -->
        <a href="khachhang.php?hanh_dong=baiviet" class="btn btn-secondary mt-4">← Quay lại trang blog</a>
      </div>
    </div>
  </div>