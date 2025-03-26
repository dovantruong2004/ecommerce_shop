<?php 
    function them_vao_giohang($id_nguoi_dung,$id_san_pham,$so_luong){
        $sql = "INSERT INTO gio_hang(id_nguoi_dung,id_san_pham,so_luong) VALUES('$id_nguoi_dung','$id_san_pham','$so_luong')";
        thucthi_truyvan($sql);
    }
    function gio_hang($id){
        $sql = "SELECT
            sp.id,
            sp.ten,
            sp.gia,
            gh.id as id_giohang,
            GROUP_CONCAT(DISTINCT asp.url SEPARATOR ', ') AS danh_sach_anh
        FROM
            gio_hang gh
        JOIN
            san_pham sp ON gh.id_san_pham = sp.id
        LEFT JOIN
            anh_san_pham asp ON sp.id = asp.id_san_pham
        WHERE
            gh.id_nguoi_dung = '$id'
        GROUP BY
            gh.id;";
        $gio_hang = pdo_query($sql);
        return $gio_hang;
    }
    function xoa_sanpham_giohang($id){
        $sql = "DELETE FROM gio_hang WHERE id='$id'";
        thucthi_truyvan($sql);
    }
    function xoa_giohang_nguoidung($id){
        $sql = "DELETE FROM gio_hang WHERE id_nguoi_dung='$id'";
        thucthi_truyvan($sql);
    }
?>