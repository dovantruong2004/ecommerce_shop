<?php 
    function soluong_sanpham_danhmuc(){
        $sql = "SELECT
            COUNT(so_luong) AS so_luong_san_pham
        FROM
            san_pham
        GROUP BY
            id_danh_muc;";
        $so_luong_san_pham = pdo_query($sql);
        return $so_luong_san_pham;
    }
    function doanh_thu_theo_ngay(){
        
    } 
?>