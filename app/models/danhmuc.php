<?php
include("cau_hinh.php");
function danhsach_danhmuc()
{
    $sql = "SELECT * FROM danh_muc";
    $danhsach_danhmuc = pdo_query($sql);
    return $danhsach_danhmuc;
}
function truyvan_1_danhmuc($id){
    $sql = "SELECT * FROM danh_muc WHERE id = '$id'";
    $mot_danhmuc = pdo_query_one($sql);
    return $mot_danhmuc;
}
function them_danhmuc($ten){
    $sql = "INSERT INTO danh_muc(ten) VALUES ('$ten')";
    thucthi_truyvan($sql);
}
function capnhat_danhmuc($id,$ten){
    $sql = "UPDATE danh_muc SET ten='$ten' WHERE id = '$id'";
    thucthi_truyvan($sql);
}   
function xoa_danhmuc($id){
    $sql = "DELETE FROM danh_muc WHERE id = '$id'";
    thucthi_truyvan($sql);
}
?>