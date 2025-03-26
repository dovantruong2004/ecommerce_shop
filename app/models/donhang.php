<?php 
    function tao_don_hang($id_nguoi_dung,$ho_va_ten,$email,$so_dien_thoai,$dia_chi_giao_hang,$tong_gia,$phuong_thuc_thanh_toan,$trang_thai){
        $sql = "INSERT INTO don_hang(id_nguoi_dung,ho_va_ten,email,so_dien_thoai,dia_chi_giao_hang,tong_gia,phuong_thuc_thanh_toan,trang_thai) VALUES('$id_nguoi_dung','$ho_va_ten','$email','$so_dien_thoai','$dia_chi_giao_hang','$tong_gia','$phuong_thuc_thanh_toan','$trang_thai')";
        thucthi_truyvan($sql);
       return pdo_execute_return_lastInsertId($sql);
    }
    function huy_donhang($id,$trang_thai){
        $sql = "UPDATE don_hang SET trang_thai = '$trang_thai' WHERE id='$id'";
        thucthi_truyvan($sql);
    }
    function capnhat_trangthai_donhang($id,$trang_thai){
        $sql = "UPDATE don_hang SET trang_thai = '$trang_thai' WHERE id='$id'";
        thucthi_truyvan($sql);
    }
?>