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
include("../../models/chi_tiet_donhang.php");
include("../../models/thong_ke.php");
include("../../models/lienhe.php");
include("../../../duong_dan_anh.php");
$thong_bao = '';
$loi = '';
$thong_ke_sanpham_danhmuc = soluong_sanpham_danhmuc();

$ngay_hien_tai = date('Y-m-d');

$doanh_thu_ngay = doanh_thu_theo_ngay($ngay_hien_tai);

$thang_hien_tai = date('Y-m');
$doanh_thu_thang = doanh_thu_theo_thang($thang_hien_tai);

$so_don_huy = so_don_huy();

$so_don_hoanthanh = so_don_hoanthanh();

$so_luong_sanpham_danhmuc = soluong_sanpham_danhmuc();

$so_don_dadat = so_don_dadat();

$doanhthu_tatca_thang = doanhthu_tatca_thang();
// Tạo mảng với 12 phần tử, mặc định là 0
$doanhThuTheoThang = array_fill(0, 12, 0);
foreach ($doanhthu_tatca_thang as $item) {
    $thang = (int) substr($item['thang'], 5, 2); // Lấy số tháng
    $doanhThuTheoThang[$thang - 1] = (float) $item['doanh_thu']; // Đặt doanh thu vào vị trí đúng
}


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
                if ($ten_danhmuc == "") {
                    $loi = "Danh mục không được để trống";
                } else {
                    them_danhmuc($ten_danhmuc);
                    $thong_bao = "Thêm thành công";
                }
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
                if ($ten == "") {
                    $loi = "Danh mục không được để trống";
                } else {
                    capnhat_danhmuc($id, $ten);
                    $mot_danhmuc = truyvan_1_danhmuc($id);
                    $thong_bao = "Cập nhật thành công";
                }
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
                if ($ten == "") {
                    $loi = "Không được để trống tên sản phẩm";
                } elseif ($gia == "") {
                    $loi = "Không được để trống giá sản phẩm";
                } elseif ($mo_ta == "") {
                    $loi = "Không được để trống mô tả sản phẩm";
                } elseif ($so_luong == "") {
                    $loi = "Không được để trống số lượng sản phẩm";
                } else {
                    them_sanpham($ten, $mo_ta, $gia, $so_luong, $id_danh_muc);
                    $thong_bao = "Thêm thành công";
                }
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
                if ($ten == "") {
                    $loi = "Không được để trống tên sản phẩm";
                } elseif ($gia == "") {
                    $loi = "Không được để trống giá sản phẩm";
                } elseif ($mo_ta == "") {
                    $loi = "Không được để trống mô tả sản phẩm";
                } elseif ($so_luong == "") {
                    $loi = "Không được để trống số lượng sản phẩm";
                } else {
                    capnhat_sanpham($id, $ten, $mo_ta, $gia, $so_luong, $id_danh_muc);
                    $mot_sanpham = truyvan_mot_sanpham($id);
                    $thong_bao = "Cập nhật thành công";
                }
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
        //Quản lí đơn hàng
        case "don_hang":
            $quan_li_donhang = admin_quan_li_donhang();
            include("../../views/admin/donhang/danhsach.php");
            break;
        case "huy_don":
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id_donhang = $_GET['id'];
                $trang_thai = 'Đã hủy';
                huy_donhang($id_donhang, $trang_thai);
                $quan_li_donhang = admin_quan_li_donhang();
                include("../../views/admin/donhang/danhsach.php");
            }
            break;
        case "xem_chi_tiet_donhang":
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id_don_hang = $_GET['id'];
                $lich_su_donhang = admin_lich_su_donhang($id_don_hang);
                include("../../views/admin/donhang/chitiet_donhang.php");
            }
            break;
        case "capnhat_donhang_danggiaohang":
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id_don_hang = $_GET['id'];
                $trang_thai = 'Đang giao hàng';
                capnhat_trangthai_donhang($id_don_hang, $trang_thai);
                $quan_li_donhang = admin_quan_li_donhang();
                include("../../views/admin/donhang/danhsach.php");
            }
            break;
        case "capnhat_donhang_dagiaohang":
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id_don_hang = $_GET['id'];
                $trang_thai = 'Đã giao hàng';
                capnhat_trangthai_donhang($id_don_hang, $trang_thai);
                $quan_li_donhang = admin_quan_li_donhang();
                include("../../views/admin/donhang/danhsach.php");
            }
            break;
        // Quản lí người dùng

        case "nguoi_dung":
            $vai_tro = 'khach_hang';
            $quan_li_nguoidung = quan_li_nguoidung($vai_tro);
            include("../../views/admin/nguoidung/danhsach.php");
            break;
        //Thống kê

        case "thong_ke";
            $so_luong_sanpham_danhmuc = soluong_sanpham_danhmuc();
            include("../../views/admin/thongke/danhsach.php");
            break;

        //Đánh giá
        case "danh_gia":
            $danh_sach_binhluan = danhsach_binhluan();
            include("../../views/admin/danhgia/danhsach.php");
            break;
        case "lienhe":
            $danhsach_lienhe = danhsach_lienhe();
            include("../../views/admin/lienhe/danhsach.php");
            break;
        // Danh mục bài viết
        case "danhmuc_baiviet":
            $danhsach_danhmuc_baiviet = danhsach_danhmuc_baiviet();
            include("../../views/admin/danhmuc_baiviet/danhsach.php");
            break;
        case "them_danhmuc_baiviet":
            if (isset($_POST["them_danhmuc_baiviet"]) && $_POST["them_danhmuc_baiviet"]) {
                $ten = $_POST["ten"];
                if ($ten == "") {
                    $loi = "Danh mục bài viết không được để trống";
                } else {
                    them_danhmuc_baiviet($ten);
                    $thong_bao = "Thêm thành công";
                }
            }
            include("../../views/admin/danhmuc_baiviet/them.php");
            break;
        case "capnhat_danhmuc_baiviet":
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $danhmuc_baiviet = danhmuc_baiviet($id);
            }
            if (isset($_POST["capnhat_danhmuc_baiviet"])) {
                $id = $_POST["id"];
                $ten = $_POST["ten"];
                if ($ten == "") {
                    $loi = "Danh mục bài viết không được để trống";
                } else {
                    capnhat_danhmuc_baiviet($id,$ten);
                    $thong_bao = "Cập nhật thành công";
                    $danhmuc_baiviet = danhmuc_baiviet($id);
                }
            }
            include("../../views/admin/danhmuc_baiviet/danhsach.php");
            break;
        case "xoa_danhmuc_baiviet":
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                xoa_danhmuc_baiviet($id);
                $thong_bao = "Xóa thành công";
            }
            $danhsach_danhmuc_baiviet = danhsach_danhmuc_baiviet();
            include("../../views/admin/danhmuc_baiviet/danhsach.php");
            break;
        // Bài viết
        case "baiviet":
            $bai_viet = danhsach_baiviet();
            include("../../views/admin/baiviet/danhsach.php");
            break;
        case "them_baiviet":
            if(isset($_POST['them_baiviet'])){
                $tieu_de = $_POST['tieu_de'];
                $noi_dung = $_POST['noi_dung'];
                $tac_gia = $_POST['tac_gia'];
                $ngay_dang_bai = date("Y-m-d");
                $id_danhmuc_baiviet = $_POST['id_danhmuc_baiviet'];
                them_baiviet($tieu_de,$noi_dung,$tac_gia,$ngay_dang_bai,$id_danhmuc_baiviet);
                $thong_bao = "Thêm thành công";
            }
            $danhsach_danhmuc_baiviet = danhsach_danhmuc_baiviet();
            include("../../views/admin/baiviet/them.php");
            break;
        case "capnhat_baiviet":
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $chitiet_baiviet = chitiet_baiviet($id);
                $danhsach_danhmuc_baiviet = danhsach_danhmuc_baiviet();
            }
            if(isset($_POST['capnhat_baiviet'])){
                $id = $_POST["id"];
                $tieu_de = $_POST['tieu_de'];
                $noi_dung = $_POST['noi_dung'];
                $tac_gia = $_POST['tac_gia'];
                $ngay_dang_bai = date("Y-m-d");
                $id_danhmuc_baiviet = $_POST['id_danhmuc_baiviet'];
                capnhat_baiviet($id,$tieu_de,$noi_dung,$tac_gia,$ngay_dang_bai,$id_danhmuc_baiviet);
                $thong_bao = "Cập nhật thành công";
                $chitiet_baiviet = chitiet_baiviet($id);
            }
            $danhsach_danhmuc_baiviet = danhsach_danhmuc_baiviet();
            include("../../views/admin/baiviet/capnhat.php");
            break;
        case "xoa_baiviet":
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                xoa_baiviet($id);
                $thong_bao = "Xóa thành công";
            }
            $danhsach_danhmuc_baiviet = danhsach_danhmuc_baiviet();
            $bai_viet = danhsach_baiviet();
            include("../../views/admin/baiviet/them.php");
            break;
        //
        default:
            include("../../views/admin/main.php");
            break;
    }
} else {
    include("../../views/admin/main.php");
}
include("../../views/admin/footer.php");
