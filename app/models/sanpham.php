<?php

function danhsach_sanpham()
{
    $sql = "SELECT san_pham.id, san_pham.ten, san_pham.gia, san_pham.mo_ta, san_pham.so_luong,
                danh_muc.ten AS ten_danhmuc 
                FROM san_pham
                LEFT JOIN danh_muc ON san_pham.id_danh_muc = danh_muc.id";
    $danhsach_sanpham = pdo_query($sql);
    return $danhsach_sanpham;
}
function lay_sanpham_theo_danhmuc($id)
{
    $sql = "SELECT * FROM san_pham WHERE id_danh_muc = '$id'";
    $sanpham_theo_danhmuc = pdo_query($sql);
    return $sanpham_theo_danhmuc;
}
function truyvan_mot_sanpham($id)
{
    $sql = "SELECT san_pham.id, san_pham.ten, san_pham.gia, san_pham.mo_ta, san_pham.so_luong,
                danh_muc.ten AS ten_danhmuc 
                FROM san_pham
                LEFT JOIN danh_muc ON san_pham.id_danh_muc = danh_muc.id
                WHERE san_pham.id = '$id'";
    $mot_sanpham = pdo_query_one($sql);
    return $mot_sanpham;
}
function capnhat_sanpham($id, $ten, $mo_ta, $gia, $so_luong, $id_danh_muc)
{
    $sql = "UPDATE san_pham SET ten = '$ten' , mo_ta = '$mo_ta' , gia='$gia' , so_luong ='$so_luong', id_danh_muc ='$id_danh_muc' WHERE id = '$id'";
    thucthi_truyvan($sql);
}
function them_sanpham($ten, $mo_ta, $gia, $so_luong, $id_danh_muc)
{
    $sql = "INSERT INTO san_pham(ten,mo_ta,gia,so_luong,id_danh_muc) VALUES('$ten','$mo_ta','$gia','$so_luong','$id_danh_muc')";
    thucthi_truyvan($sql);
}
function xoa_sanpham($id)
{
    $sql = "DELETE FROM san_pham WHERE id = '$id'";
    thucthi_truyvan($sql);
}
function thongtin_sanpham()
{
    $sql = "SELECT
    sp.*,
    dm.ten AS ten_danh_muc,
    GROUP_CONCAT(DISTINCT asp.url SEPARATOR ', ') AS danh_sach_anh,
    GROUP_CONCAT(DISTINCT tksp.tu_khoa SEPARATOR ', ') AS danh_sach_tu_khoa
    FROM
        san_pham sp
    JOIN
        danh_muc dm ON sp.id_danh_muc = dm.id
    LEFT JOIN
        anh_san_pham asp ON sp.id = asp.id_san_pham
    LEFT JOIN
        tu_khoa_san_pham tksp ON sp.id = tksp.id_san_pham
    GROUP BY
        sp.id
    LIMIT 5; -- Lấy 2 sản phẩm đầu tiên

        ";
    $thongtin_sanpham = pdo_query($sql);
    return $thongtin_sanpham;
}
function loc_sanpham_theo_danhmuc($id){
    $sql = "SELECT
    sp.id,
    sp.ten,
    sp.gia,
    sp.mo_ta,
    sp.so_luong,
    dm.ten AS ten_danh_muc,
    GROUP_CONCAT(DISTINCT asp.url SEPARATOR ', ') AS danh_sach_anh,
    GROUP_CONCAT(DISTINCT tksp.tu_khoa SEPARATOR ', ') AS danh_sach_tu_khoa
    FROM
        san_pham sp
    JOIN
        danh_muc dm ON sp.id_danh_muc = dm.id
    LEFT JOIN
        anh_san_pham asp ON sp.id = asp.id_san_pham
    LEFT JOIN
        tu_khoa_san_pham tksp ON sp.id = tksp.id_san_pham
    WHERE dm.id = '$id'
    GROUP BY
        sp.id";
    $loc_sanpham_theo_danhmuc = pdo_query($sql);
    return $loc_sanpham_theo_danhmuc;
}
function loc_sanpham_theo_ten($ten){
    $sql = "SELECT
    sp.id,
    sp.ten,
    sp.gia,
    sp.mo_ta,
    sp.so_luong,
    dm.ten AS ten_danh_muc,
    GROUP_CONCAT(DISTINCT asp.url SEPARATOR ', ') AS danh_sach_anh,
    GROUP_CONCAT(DISTINCT tksp.tu_khoa SEPARATOR ', ') AS danh_sach_tu_khoa
    FROM
        san_pham sp
    JOIN
        danh_muc dm ON sp.id_danh_muc = dm.id
    LEFT JOIN
        anh_san_pham asp ON sp.id = asp.id_san_pham
    LEFT JOIN
        tu_khoa_san_pham tksp ON sp.id = tksp.id_san_pham
    WHERE sp.ten like '%$ten%'
    GROUP BY
        sp.id";
    $loc_sanpham_theo_ten= pdo_query($sql);
    return $loc_sanpham_theo_ten;
}