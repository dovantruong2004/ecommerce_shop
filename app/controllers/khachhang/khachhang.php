<?php
session_start();
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
include("../../models/lienhe.php");
include("../../../duong_dan_anh.php");
$danhsach_danhmuc = danhsach_danhmuc();
$danhsach_sanpham = danhsach_sanpham();
$thongtin_sanpham = thongtin_sanpham();
include("../../views/khachhang/header.php");
//include("../../views/khachhang/sidebar.php");
$thong_bao = '';
$loi = '';
if (isset($_GET["hanh_dong"]) && $_GET["hanh_dong"] != "") {
    $hanh_dong = $_GET["hanh_dong"];

    switch ($hanh_dong) {
        case "danhsach_sanpham":
            $danhsach_danhmuc = danhsach_danhmuc();
            $danhsach_sanpham = danhsach_sanpham();
            $thongtin_sanpham = thongtin_sanpham();
            include("../../views/khachhang/danhsach_sanpham.php");
            break;
        case "loc_sanpham_danhmuc":
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id = $_GET['id'];
                $thongtin_sanpham = loc_sanpham_theo_danhmuc($id);
            } else {
                $thongtin_sanpham = thongtin_sanpham();
            }
            $danhsach_danhmuc = danhsach_danhmuc();
            include("../../views/khachhang/danhsach_sanpham.php");
            break;
        case "timkiem_sanpham":
            if (isset($_POST['timkiem'])) {
                $ten = $_POST['ten'];
                $thongtin_sanpham = loc_sanpham_theo_ten($ten);
            } else {
                $thongtin_sanpham = thongtin_sanpham();
            }
            $danhsach_danhmuc = danhsach_danhmuc();
            include("../../views/khachhang/danhsach_sanpham.php");
            break;
        case "chitiet_sanpham":
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id = $_GET['id'];
                $hinhanh_sanpham = hinhanh_sanpham($id);
                $thongtin_sanpham = truyvan_mot_sanpham($id);
                $binhluan_sanpham = binhluan_sanpham($id);
                $so_binh_luan = so_binh_luan();
                include("../../views/khachhang/chitiet_sanpham.php");
            }
            break;
        case "dang_ky":
            if (isset($_POST['dang_ky'])) {
                $tai_khoan = $_POST['tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $vai_tro = 'khach_hang';
                if ($tai_khoan == "") {
                    $loi = "Tài khoản không được để trống";
                } elseif ($mat_khau == "") {
                    $loi = "Mật khẩu không được để trống";
                } else {
                    dang_ky($tai_khoan, $mat_khau, $vai_tro);
                    $thong_bao = "Đăng ký thành công";
                }
            }
            include("../../views/khachhang/dang_ky.php");
            break;
        case "dang_nhap":
            if (isset($_POST['dang_nhap'])) {
                $tai_khoan = $_POST['tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                if ($tai_khoan == "") {
                    $loi = "Tài khoản không được để trống";
                } elseif ($mat_khau == "") {
                    $loi = "Mật khẩu không được để trống";
                } else {
                    $dang_nhap = dang_nhap($tai_khoan, $mat_khau);
                    if (is_array($dang_nhap)) {
                        $thong_bao = "Đăng nhập thành công";
                        $_SESSION["khachhang"] = $dang_nhap;
                        include("../../views/khachhang/main.php");
                    } else {
                        $loi = "Tài khoản không tồn tại!";
                    }
                }
            }
            include("../../views/khachhang/dang_nhap.php");
            break;
        case "thongtin_canhan":
            if (isset($_GET["id"]) && $_GET["id"] != "") {
                $id = $_GET["id"];
                $thongtin_canhan = thongtin_canhan($id);
            }
            if (isset($_POST['capnhat_thongtin'])) {
                $id = $_POST['id'];
                $tai_khoan = $_POST['tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $ho_va_ten = $_POST['ho_va_ten'];
                $dia_chi = $_POST['dia_chi'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $vai_tro = 'khach_hang';
                if ($tai_khoan == "") {
                    $loi = "Tài khoản không được để trống";
                } elseif ($mat_khau == "") {
                    $loi = "Mật khẩu không được để trống";
                } elseif ($email == "") {
                    $loi = "Email không được để trống";
                } elseif ($dia_chi == "") {
                    $loi = "Địa chỉ không được để trống";
                } elseif ($so_dien_thoai == "") {
                    $loi = "Số điện thoại không được để trống";
                } elseif ($ho_va_ten == "") {
                    $loi = "Họ và tên không được để trống";
                } else {
                    capnhat_thongtin($id, $tai_khoan, $mat_khau, $email, $ho_va_ten, $dia_chi, $so_dien_thoai, $vai_tro);
                    $thong_bao = "Cập nhật thành công";
                    $thongtin_canhan = thongtin_canhan($id);
                }
            }
            include("../../views/khachhang/thongtin_canhan.php");
            break;
        case "dang_xuat":
            session_destroy();
            include("../../views/khachhang/main.php");
            break;
        case "gio_hang":
            if(isset($_SESSION["khachhang"])){
                $id_nguoi_dung = $_SESSION["khachhang"]['id'];
                if (isset($_POST['them_vao_giohang'])) {
                    $id_san_pham = $_POST['id'];
                    $so_luong = 1;
                    them_vao_giohang($id_nguoi_dung, $id_san_pham, $so_luong);
                }
                $gio_hang = gio_hang($id_nguoi_dung);
            }
            include("../../views/khachhang/giohang.php");
            break;
        case "xoa_sanpham_giohang":
            $id_nguoi_dung = $_SESSION["khachhang"]['id'];
            if (isset($_GET['id']) && $_GET['id'] != "") {
                xoa_sanpham_giohang($_GET['id']);
                $gio_hang = gio_hang($id_nguoi_dung);
                include("../../views/khachhang/giohang.php");
            }
            $gio_hang = gio_hang($id_nguoi_dung);
            break;
        case "thanh_toan":
            $id_nguoi_dung = $_SESSION["khachhang"]['id'];
            if (isset($_POST['thanh_toan'])) {
                $email = $_POST['email'];
                $ho_va_ten = $_POST['ho_va_ten'];
                $dia_chi_giao_hang = $_POST['dia_chi'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $tong_gia = $_POST['tong_gia'];
                $phuong_thuc_thanh_toan = "Ship COD";
                $trang_thai = "Chờ giao hàng"; // Định nghĩa trạng thái đơn hàng
                $ngay_dat_hang = date('Y/m/d');
                if ($email == "") {
                    $loi = "Email không được để trống";
                } elseif ($ho_va_ten == "") {
                    $loi = "Họ và tên không được để trống";
                } elseif ($dia_chi_giao_hang == "") {
                    $loi = "Địa chỉ giao hàng không được để trống";
                } else {
                    $id_don_hang = tao_don_hang($id_nguoi_dung, $ho_va_ten, $email, $so_dien_thoai, $dia_chi_giao_hang, $tong_gia, $phuong_thuc_thanh_toan, $ngay_dat_hang, $trang_thai);
                    $gio_hang = gio_hang($id_nguoi_dung);
                    foreach ($gio_hang as $sanpham) {
                        $id_san_pham = $sanpham['id'];
                        $so_luong = 1;
                        $don_gia = $sanpham['gia'];
                        $thanh_tien = $don_gia * $so_luong;
                        them_chitiet_donhang($id_don_hang, $id_san_pham, $so_luong, $thanh_tien);
                    }
                    // Xóa giỏ hàng sau khi thanh toán thành công 
                    xoa_giohang_nguoidung($id_nguoi_dung);
                    $thong_bao =  "Đặt hàng thành công!";
                }
            }
            $gio_hang = gio_hang($id_nguoi_dung);

            include("../../views/khachhang/thanhtoan.php");
            break;
        case "quan_li_donhang":
            $id_nguoi_dung = $_SESSION["khachhang"]['id'];
            $quan_li_donhang = quan_li_donhang($id_nguoi_dung);
            include("../../views/khachhang/quan_li_don_hang.php");
            break;
        case "xem_chi_tiet_donhang":
            $id_nguoi_dung = $_SESSION["khachhang"]['id'];
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id_don_hang = $_GET['id'];
                $lich_su_donhang = lich_su_donhang($id_nguoi_dung, $id_don_hang);
                $thong_tin_vanchuyen = thong_tin_vanchuyen($id_don_hang, $id_nguoi_dung);
                // var_dump($thong_tin_vanchuyen);
                include("../../views/khachhang/lichsu_donhang.php");
            }
            break;
        case "huy_don":
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id_donhang = $_GET['id'];
                $trang_thai = 'Đã hủy';
                huy_donhang($id_donhang, $trang_thai);
                $id_nguoi_dung = $_SESSION["khachhang"]['id'];
                $quan_li_donhang = quan_li_donhang($id_nguoi_dung);
                include("../../views/khachhang/quan_li_don_hang.php");
            }
            break;
        case "binhluan":
            $id_nguoi_dung = $_SESSION["khachhang"]['id'];
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id = $_GET['id'];
                $hinhanh_sanpham = hinhanh_sanpham($id);
                $thongtin_sanpham = truyvan_mot_sanpham($id);
                if (isset($_POST['gui_binh_luan'])) {
                    $binh_luan = $_POST['binh_luan'];
                    $id_san_pham = $_POST['id_san_pham'];
                    $ngay_binh_luan = date('Y/m/d');
                    binh_luan($id_nguoi_dung, $id_san_pham, $binh_luan, $ngay_binh_luan);
                }
                $binhluan_sanpham = binhluan_sanpham($id);
                include("../../views/khachhang/chitiet_sanpham.php");
            }
            break;
        case "lienhe":
            
            if (isset($_POST['gui'])) {
                $email = $_POST['email'];
                $ten = $_POST['ten'];
                $chu_de = $_POST['chu_de'];
                $noi_dung = $_POST['noi_dung'];
                lienhe( $email, $ten, $chu_de, $noi_dung);
                $thong_bao = "Gửi thành công";
            }
            include("../../views/khachhang/lienhe.php");
            break;
        default:
            include("../../views/khachhang/main.php");
            break;
    }
} else {
    include("../../views/khachhang/main.php");
}
include("../../views/khachhang/footer.php");
