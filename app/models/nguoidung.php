<?php 
    function dang_ky($tai_khoan,$mat_khau,$vai_tro){
        $sql = "INSERT INTO nguoi_dung(tai_khoan,mat_khau,email,ho_va_ten,dia_chi,so_dien_thoai,vai_tro) 
                VALUES ('$tai_khoan','$mat_khau','','','','','$vai_tro') ";
        thucthi_truyvan($sql);
    }
    function dang_nhap($tai_khoan,$mat_khau){
        $sql = "SELECT * FROM nguoi_dung WHERE tai_khoan='$tai_khoan'AND mat_khau='$mat_khau'";
        $dang_nhap = pdo_query_one($sql);
        return $dang_nhap;
    }
    function thongtin_canhan($id){
        $sql = "SELECT * FROM nguoi_dung WHERE id='$id'";
        $thongtin_nguoidung = pdo_query_one($sql);
        return $thongtin_nguoidung;
    }
    function capnhat_thongtin($id,$tai_khoan,$mat_khau,$email,$ho_va_ten,$dia_chi,$so_dien_thoai,$vai_tro){
        $sql = "UPDATE nguoi_dung SET tai_khoan='$tai_khoan',mat_khau='$mat_khau',email='$email',ho_va_ten='$ho_va_ten',dia_chi='$dia_chi',so_dien_thoai='$so_dien_thoai',vai_tro='$vai_tro' WHERE id='$id'";
        thucthi_truyvan($sql);
    }
    function quan_li_nguoidung($vai_tro){
        $sql = "SELECT * FROM nguoi_dung WHERE vai_tro='$vai_tro'";
        $quan_li_nguoidung= pdo_query($sql);
        return $quan_li_nguoidung;
    }
?>