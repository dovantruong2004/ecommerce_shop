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
$thong_bao= '';
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
                $thong_bao = "Cập nhật thành công";
            }
            include("../../views/admin/danhmuc/them.php");
            break;
        case "capnhat_danhmuc" :
            
            if(isset($_GET["id"])) {
                $id = $_GET["id"];
                $mot_danhmuc = truyvan_1_danhmuc($id);
            }
            if (isset($_POST["capnhat_danhmuc"]) && $_POST["capnhat_danhmuc"]) {
                $id = $_POST["id"];
                $ten = $_POST["ten_danhmuc"];
                capnhat_danhmuc($id,$ten);
                $mot_danhmuc = truyvan_1_danhmuc($id);
                $thong_bao = "Cập nhật thành công";
            }
            include("../../views/admin/danhmuc/capnhat.php");
            break;
        case "xoa_danhmuc" :
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
            
            
            break;
        case "capnhat_sanpham" :
            
            
            break;
        case "xoa_sanpham" :
            
            break;
        default:
            include("../../views/admin/main.php");
            break;
    }
} else {
    include("../../views/admin/main.php");
}
include("../../views/admin/footer.php");
?>