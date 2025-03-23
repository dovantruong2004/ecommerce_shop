<?php
    
    function danhsach_sanpham(){
        $sql = "SELECT san_pham.id, san_pham.ten, san_pham.gia, san_pham.mo_ta, san_pham.so_luong, 
                danh_muc.ten AS ten_danhmuc 
                FROM san_pham
                LEFT JOIN danh_muc ON san_pham.id_danh_muc = danh_muc.id";
        $danhsach_sanpham = pdo_query( $sql );
        return $danhsach_sanpham;
    }
    function lay_sanpham_theo_danhmuc($id){
        $sql = "SELECT * FROM san_pham WHERE id_danh_muc = '$id'";
        $sanpham_theo_danhmuc = pdo_query( $sql );
        return $sanpham_theo_danhmuc;
    }
    function truyvan_mot_sanpham($id){
        $sql = "SELECT san_pham.id, san_pham.ten, san_pham.gia, san_pham.mo_ta, san_pham.so_luong, 
                danh_muc.ten AS ten_danhmuc 
                FROM san_pham
                LEFT JOIN danh_muc ON san_pham.id_danh_muc = danh_muc.id
                WHERE san_pham.id = '$id'";
        $mot_sanpham = pdo_query_one($sql);
        return $mot_sanpham;
    }
    function capnhat_sanpham($id,$ten,$mo_ta,$gia,$so_luong,$id_danh_muc){
        $sql = "UPDATE san_pham SET ten = '$ten' , mo_ta = '$mo_ta' , gia='$gia' , so_luong ='$so_luong', id_danh_muc ='$id_danh_muc' WHERE id = '$id'";
        thucthi_truyvan($sql);
    }
    function them_sanpham($ten,$mo_ta,$gia,$so_luong,$id_danh_muc){
        $sql = "INSERT INTO san_pham(ten,mo_ta,gia,so_luong,id_danh_muc) VALUES('$ten','$mo_ta','$gia','$so_luong','$id_danh_muc')";
        thucthi_truyvan($sql);
    }
    function xoa_sanpham($id){
        $sql = "DELETE FROM san_pham WHERE id = '$id'";
        thucthi_truyvan($sql);
    }
?>