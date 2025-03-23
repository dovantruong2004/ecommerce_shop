<?php 
function danhsach_hinhanh(){
    $sql = "SELECT san_pham.id as id_sanpham ,san_pham.ten , anh_san_pham.url , anh_san_pham.id as id_hinhanh 
            FROM anh_san_pham
            LEFT JOIN san_pham ON anh_san_pham.id_san_pham = san_pham.id";
    $danhsach_hinhanh = pdo_query($sql);
    return $danhsach_hinhanh;
}
function them_hinhanh($id_san_pham,$url){
    $sql = "INSERT INTO anh_san_pham(id_san_pham,url) VALUES('$id_san_pham','$url')";
    thucthi_truyvan($sql);
}
function truyvan_mot_hinhanh($id){
    $sql = "SELECT san_pham.id as id_sanpham ,san_pham.ten , anh_san_pham.url , anh_san_pham.id as id_hinhanh
    FROM anh_san_pham
    LEFT JOIN san_pham ON anh_san_pham.id_san_pham = san_pham.id WHERE anh_san_pham.id ='$id'";
    $mot_hinhanh = pdo_query_one($sql);
    return $mot_hinhanh;
}
function capnhat_hinhanh($id,$id_san_pham,$url){
    $sql = "UPDATE anh_san_pham SET id_san_pham = '$id_san_pham', url = '$url' WHERE id = '$id'";
    thucthi_truyvan($sql);
}
function xoa_hinhanh($id){
    $sql = "DELETE FROM anh_san_pham WHERE id = '$id'";
    thucthi_truyvan($sql);
}