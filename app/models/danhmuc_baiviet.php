<?php
function danhsach_danhmuc_baiviet()
{
    $sql = "SELECT * FROM danhmuc_baiviet";
    $danhsach_danhmuc_baiviet = pdo_query($sql);
    return $danhsach_danhmuc_baiviet;
}
function danhmuc_baiviet($id)
{
    $sql = "SELECT * FROM danhmuc_baiviet WHERE id ='$id'";
    $danhmuc_baiviet = pdo_query_one($sql);
    return $danhmuc_baiviet;
}
function them_danhmuc_baiviet($ten)
{
    $sql = "INSERT INTO danhmuc_baiviet(ten) VALUES ('$ten')";
    thucthi_truyvan($sql);
}
function capnhat_danhmuc_baiviet($id, $ten)
{
    $sql = "UPDATE danhmuc_baiviet SET ten='$ten' WHERE id = '$id'";
    thucthi_truyvan($sql);
}
function xoa_danhmuc_baiviet($id)
{
    $sql = "DELETE FROM danhmuc_baiviet WHERE id = '$id'";
    thucthi_truyvan($sql);
}
