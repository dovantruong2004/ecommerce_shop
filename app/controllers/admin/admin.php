<?php
include("../../views/admin/header.php");
include("../../views/admin/sidebar.php");
include("../../models/anh_sanpham.php");
include("../../models/baiviet.php");
include("../../models/danhgia.php");
include("../../models/danhmuc_baiviet.php");
include("../../models/danhmuc.php");
include("../../models/sanpham.php");
include("../../models/tukhoa_sanpham.php");
include("../../models/giohang.php");
include("../../models/donhang.php");
include("../../models/nguoidung.php");
include("../../../duong_dan_anh.php");
$thong_bao = '';
if (isset($_GET["hanh_dong"]) && $_GET["hanh_dong"] != "") {
    $hanh_dong = $_GET["hanh_dong"];
    switch ($hanh_dong) {
        // Danh mục
        case "danh_muc":
            $danhsach_danhmuc = danhsach_danhmuc();
            include("../../views/admin/danhmuc/danhsach.php");
            break;
        case "them_danhmuc":

            if (isset($_POST["them_danhmuc"]) && $_POST["them_danhmuc"]) {
                $ten_danhmuc = $_POST["ten_danhmuc"];
                them_danhmuc($ten_danhmuc);
                $thong_bao = "Thêm thành công";
            }
            include("../../views/admin/danhmuc/them.php");
            break;
        case "capnhat_danhmuc":

            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $mot_danhmuc = truyvan_1_danhmuc($id);
            }
            if (isset($_POST["capnhat_danhmuc"])) {
                $id = $_POST["id"];
                $ten = $_POST["ten_danhmuc"];
                capnhat_danhmuc($id, $ten);
                $mot_danhmuc = truyvan_1_danhmuc($id);
                $thong_bao = "Cập nhật thành công";
            }
            include("../../views/admin/danhmuc/capnhat.php");
            break;
        case "xoa_danhmuc":
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                xoa_danhmuc($id);
                $thong_bao = "Xóa thành công";
            }
            $danhsach_danhmuc = danhsach_danhmuc();
            include("../../views/admin/danhmuc/danhsach.php");
            break;
        // Sản phẩm
        case "san_pham":
            $danhsach_sanpham = danhsach_sanpham();
            include("../../views/admin/sanpham/danhsach.php");
            break;
        case "them_sanpham":
            if (isset($_POST["them_sanpham"]) && $_POST["them_sanpham"]) {
                $ten = $_POST["ten_sanpham"];
                $gia = $_POST["gia"];
                $mo_ta = $_POST["mo_ta"];
                $so_luong = $_POST["so_luong"];
                $id_danh_muc = $_POST["id_danh_muc"];
                them_sanpham($ten, $mo_ta, $gia, $so_luong, $id_danh_muc);
                $thong_bao = "Thêm thành công";
            }
            $danhsach_danhmuc = danhsach_danhmuc();
            include("../../views/admin/sanpham/them.php");
            break;
        case "capnhat_sanpham":
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $mot_sanpham = truyvan_mot_sanpham($id);
            }
            if (isset($_POST['capnhat_sanpham'])) {
                $id = $_POST['id'];
                $ten = $_POST["ten_sanpham"];
                $gia = $_POST["gia"];
                $mo_ta = $_POST["mo_ta"];
                $so_luong = $_POST["so_luong"];
                $id_danh_muc = $_POST["id_danh_muc"];
                capnhat_sanpham($id, $ten, $mo_ta, $gia, $so_luong, $id_danh_muc);
                $mot_sanpham = truyvan_mot_sanpham($id);
                $thong_bao = "Cập nhật thành công";
            }
            $danhsach_sanpham = danhsach_sanpham();
            $danhsach_danhmuc = danhsach_danhmuc();
            include("../../views/admin/sanpham/capnhat.php");
            break;
        case "xoa_sanpham":
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                xoa_sanpham($id);
                $thong_bao = "Xóa thành công";
            }
            $danhsach_sanpham = danhsach_sanpham();
            $danhsach_danhmuc = danhsach_danhmuc();
            include("../../views/admin/sanpham/danhsach.php");
            break;
        // Quản lí đa hình ảnh
        case "da_hinhanh":
            $danhsach_hinhanh = danhsach_hinhanh();
            include("../../views/admin/sanpham/da_hinhanh/danhsach.php");
            break;
        case "them_hinhanh":
            if (isset($_POST["them_hinhanh"])) {
                $filename = $_FILES["url"]["name"];
                $target_dir = __DIR__ . "/../../../public/hinhanh/";
                $target_file = $target_dir . basename($filename);
                if (move_uploaded_file($_FILES["url"]["tmp_name"], $target_file)) {
                    $id_san_pham = $_POST['id_san_pham'];
                    $url = $filename; // Lưu đường dẫn đầy đủ thay vì chỉ tên file
                    them_hinhanh($id_san_pham, $url);
                    $thong_bao = "Thêm thành công";
                } else {
                    echo "Lỗi up load file.";
                }
            }
            $danhsach_sanpham = danhsach_sanpham();
            $danhsach_hinhanh = danhsach_hinhanh();
            include("../../views/admin/sanpham/da_hinhanh/them.php");
            break;
        case "capnhat_hinhanh":
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $mot_hinhanh = truyvan_mot_hinhanh($id);
            }
            if (isset($_POST["capnhat_hinhanh"])) {
                $filename = $_FILES["url"]["name"];
                $target_dir = __DIR__ . "/../../../public/hinhanh/";
                $target_file = $target_dir . basename($filename);
                if (move_uploaded_file($_FILES["url"]["tmp_name"], $target_file)) {
                    $id = $_POST['id'];
                    $id_san_pham = $_POST['id_sanpham'];
                    $url = $filename; // Lưu đường dẫn đầy đủ thay vì chỉ tên file
                    capnhat_hinhanh($id, $id_san_pham, $url);
                    $mot_hinhanh = truyvan_mot_hinhanh($id);
                    $thong_bao = "Cập nhật thành công";
                } else {
                    echo "Lỗi up load file.";
                }
            }
            $danhsach_sanpham = danhsach_sanpham();
            $danhsach_hinhanh = danhsach_hinhanh();
            include("../../views/admin/sanpham/da_hinhanh/capnhat.php");
            break;
        case "xoa_hinhanh":
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                xoa_hinhanh($id);
                $thong_bao = "Xóa thành công";
            }
            $danhsach_sanpham = danhsach_sanpham();
            $danhsach_hinhanh = danhsach_hinhanh();
            include("../../views/admin/sanpham/da_hinhanh/danhsach.php");
            break;
        // Quản lí từ khóa
        case "tu_khoa":
            $danhsach_tukhoa = danhsach_tukhoa();
            include("../../views/admin/sanpham/tu_khoa/danhsach.php");
            break;
        case "them_tukhoa":
            if (isset($_POST['them_tukhoa'])) {
                $id_san_pham = $_POST['id_san_pham'];
                $tu_khoa = $_POST['tu_khoa'];
                them_tukhoa($id_san_pham, $tu_khoa);
                $thong_bao = "Thêm thành công";
            }
            $danhsach_sanpham = danhsach_sanpham();
            $danhsach_tukhoa = danhsach_tukhoa();
            include("../../views/admin/sanpham/tu_khoa/them.php");
            break;
        case "capnhat_tukhoa":
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $mot_tukhoa = truyvan_mot_tukhoa($id);
            }
            if (isset($_POST["capnhat_tukhoa"])) {
                $id = $_POST['id'];
                $id_san_pham = $_POST['id_sanpham'];
                $tu_khoa = $_POST['tu_khoa'];
                capnhat_tukhoa($id, $id_san_pham, $tu_khoa);
                $mot_tukhoa = truyvan_mot_tukhoa($id);
                $thong_bao = "Cập nhật thành công";
            }
            $danhsach_sanpham = danhsach_sanpham();
            $danhsach_tukhoa = danhsach_tukhoa();
            include("../../views/admin/sanpham/tu_khoa/capnhat.php");
            break;
        case "xoa_tukhoa":
            if (isset($_GET['id'])) {
                $id = $_GET["id"];
                xoa_tukhoa($id);
                $thong_bao = "Xóa thành công";
            }
            $danhsach_sanpham = danhsach_sanpham();
            $danhsach_tukhoa = danhsach_tukhoa();
            include("../../views/admin/sanpham/tu_khoa/danhsach.php");
            break;
        default:
            include("../../views/admin/main.php");
            break;
    }
} else {
    include("../../views/admin/main.php");
}
include("../../views/admin/footer.php");
