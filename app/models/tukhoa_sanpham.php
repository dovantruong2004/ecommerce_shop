<?php 
function danhsach_tukhoa(){
    $sql = "SELECT san_pham.id as id_sanpham ,san_pham.ten , tu_khoa_san_pham.tu_khoa , tu_khoa_san_pham.id as id_tukhoa
            FROM tu_khoa_san_pham
            LEFT JOIN san_pham ON tu_khoa_san_pham.id_san_pham = san_pham.id";
    $danhsach_tukhoa = pdo_query($sql);
    return $danhsach_tukhoa;
}
function them_tukhoa($id_san_pham,$tu_khoa){
    $sql = "INSERT INTO tu_khoa_san_pham(id_san_pham,tu_khoa) VALUES('$id_san_pham','$tu_khoa')";
    thucthi_truyvan($sql);
}
function truyvan_mot_tukhoa($id){
    $sql = "SELECT san_pham.id as id_sanpham ,san_pham.ten , tu_khoa_san_pham.tu_khoa , tu_khoa_san_pham.id as id_tukhoa
            FROM tu_khoa_san_pham
            LEFT JOIN san_pham ON tu_khoa_san_pham.id_san_pham = san_pham.id WHERE tu_khoa_san_pham.id = '$id'";
    $mot_tukhoa = pdo_query_one($sql);
    return $mot_tukhoa;
}
function capnhat_tukhoa($id,$id_san_pham,$tu_khoa){
    $sql = "UPDATE tu_khoa_san_pham SET id_san_pham = '$id_san_pham', tu_khoa = '$tu_khoa' WHERE id = '$id'";
    thucthi_truyvan($sql);
}
function xoa_tukhoa($id){
    $sql = "DELETE FROM tu_khoa_san_pham WHERE id = '$id'";
    thucthi_truyvan($sql);
}
