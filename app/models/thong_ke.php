<?php
function soluong_sanpham_danhmuc()
{
    $sql = "SELECT id_danh_muc, SUM(so_luong) AS tong_so_luong,danh_muc.ten AS ten_danh_muc
                FROM san_pham
                LEFT JOIN danh_muc ON danh_muc.id = san_pham.id_danh_muc
                GROUP BY id_danh_muc;
                ";
    $so_luong_san_pham = pdo_query($sql);
    return $so_luong_san_pham;
}
function doanh_thu_theo_ngay($ngay_hien_tai)
{
    $sql = "SELECT ngay_dat_hang, SUM(tong_gia) AS doanh_thu FROM don_hang WHERE ngay_dat_hang= '$ngay_hien_tai'";
    $doanh_thu = pdo_query($sql);
    return $doanh_thu;
}
function doanh_thu_theo_thang($thang_hien_tai)
{
    $sql = "SELECT SUM(tong_gia) AS doanh_thu 
            FROM don_hang
            WHERE DATE_FORMAT(ngay_dat_hang, '%Y-%m') = '$thang_hien_tai'";
    $doanh_thu = pdo_query($sql);
    return $doanh_thu;
}
function so_don_huy()
{
    $sql = "SELECT COUNT(*) AS so_don_huy
            FROM don_hang
            WHERE trang_thai = 'Đã hủy';
            ";
    $so_don_huy = pdo_query($sql);
    return $so_don_huy;
}
function so_don_hoanthanh()
{
    $sql = "SELECT COUNT(*) AS so_don_hoanthanh
            FROM don_hang
            WHERE trang_thai = 'Đã giao hàng';";
    $so_don_hoanthanh = pdo_query($sql);
    return $so_don_hoanthanh;
}
function so_don_dadat()
{
    $sql = "SELECT COUNT(*) AS so_don_dadat
            FROM don_hang
            WHERE trang_thai = 'Chờ giao hàng';";
    $so_don_dadat = pdo_query($sql);
    return $so_don_dadat;
}
function doanhthu_tatca_thang()
{
    $sql = "SELECT DATE_FORMAT(ngay_dat_hang, '%Y-%m') AS thang, SUM(tong_gia) AS doanh_thu 
            FROM don_hang 
            GROUP BY thang 
            ORDER BY thang ASC";
    $doanh_thu = pdo_query($sql);
    return $doanh_thu;
}
