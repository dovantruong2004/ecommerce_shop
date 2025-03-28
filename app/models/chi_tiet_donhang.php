<?php
function them_chitiet_donhang($id_don_hang, $id_san_pham, $so_luong, $tong_gia)
{
    $sql = "INSERT INTO chi_tiet_don_hang(id_don_hang,id_san_pham,so_luong,tong_gia) VALUES('$id_don_hang','$id_san_pham','$so_luong','$tong_gia')";
    thucthi_truyvan($sql);
}
function lich_su_donhang($id_nguoi_dung,$id_don_hang)
{
    $sql = "SELECT
    dh.*,
    ctdh.*,
    sp.*
        FROM
            don_hang dh
        LEFT JOIN
            chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang
        LEFT JOIN
            san_pham sp ON ctdh.id_san_pham = sp.id
        WHERE
            dh.id_nguoi_dung = '$id_nguoi_dung' AND dh.id = '$id_don_hang';";
            
    $lich_su_donhang = pdo_query($sql);
    return $lich_su_donhang;
}
function admin_lich_su_donhang($id_don_hang)
{
    $sql = "SELECT
    dh.*,
    ctdh.*,
    sp.*
        FROM
            don_hang dh
        LEFT JOIN
            chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang
        LEFT JOIN
            san_pham sp ON ctdh.id_san_pham = sp.id
        WHERE
            dh.id = '$id_don_hang';";
            
    $lich_su_donhang = pdo_query($sql);
    return $lich_su_donhang;
}
function quan_li_donhang($id_nguoi_dung){
    $sql = "SELECT
                dh.*,
                SUM(ctdh.tong_gia * ctdh.so_luong) AS tong_tien_don_hang
            FROM
                don_hang dh
            LEFT JOIN
                chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang
            LEFT JOIN
                san_pham sp ON ctdh.id_san_pham = sp.id
            WHERE
                dh.id_nguoi_dung = '$id_nguoi_dung'
            GROUP BY
                dh.id;";
    $quan_li_donhang = pdo_query($sql);
    return $quan_li_donhang;
}
function admin_quan_li_donhang(){
    $sql = "SELECT
                dh.*,
                SUM(ctdh.tong_gia * ctdh.so_luong) AS tong_tien_don_hang
            FROM
                don_hang dh
            LEFT JOIN
                chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang
            LEFT JOIN
                san_pham sp ON ctdh.id_san_pham = sp.id
            GROUP BY
                dh.id;";
    $quan_li_donhang = pdo_query($sql);
    return $quan_li_donhang;
}
function thong_tin_vanchuyen($id,$id_nguoi_dung){
    $sql = "SELECT * FROM don_hang WHERE id='$id' AND id_nguoi_dung='$id_nguoi_dung'";
    $thong_tin_vanchuyen = pdo_query($sql);
    return $thong_tin_vanchuyen;
}