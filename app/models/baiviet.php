<?php
    function danhsach_baiviet()
    {
        $sql = "SELECT * FROM bai_viet";
        $danhsach_baiviet = pdo_query($sql);
        return $danhsach_baiviet;
    }
    function chitiet_baiviet($id){
        $sql = "SELECT * FROM bai_viet WHERE id='$id'";
        $baiviet = pdo_query_one($sql);
        return $baiviet;
    }
    function them_baiviet($tieu_de,$noi_dung,$tac_gia,$ngay_dang_bai,$id_danhmuc_baiviet)
    {
        $sql = "INSERT INTO bai_viet(tieu_de,noi_dung,tac_gia,ngay_dang_bai,id_danhmuc_baiviet) VALUES ('$tieu_de','$noi_dung','$tac_gia','$ngay_dang_bai','$id_danhmuc_baiviet')";
        thucthi_truyvan($sql);
    }
    function capnhat_baiviet($id,$tieu_de,$noi_dung,$tac_gia,$ngay_dang_bai,$id_danhmuc_baiviet){
        $sql = "UPDATE bai_viet SET tieu_de = '$tieu_de',noi_dung = '$noi_dung',tac_gia='$tac_gia',ngay_dang_bai = '$ngay_dang_bai',id_danhmuc_baiviet='$id_danhmuc_baiviet' WHERE id='$id'";
        thucthi_truyvan($sql);
    }
    function xoa_baiviet($id){
        $sql = "DELETE FROM bai_viet WHERE id='$id'";
        thucthi_truyvan($sql);
    }
?>