<?php
function tatca_sanpham_size()
{
    $sql = "SELECT 
        sp.*,
        size.*,
        sp_size.*
        FROM sanpham_size sp_size
        LEFT JOIN
            size ON size.id = sp_size.id_size
        LEFT JOIN
            san_pham sp ON sp_size.id_sanpham = sp.id
        ";
    $sp_size = pdo_query($sql);
    return $sp_size;
}
function chitiet_sanpham_size($id_sanpham)
{
    $sql = "SELECT 
        sp.*,
        size.*,
        sp_size.*
        FROM sanpham_size sp_size
        LEFT JOIN
            size ON size.id = sp_size.id_size
        LEFT JOIN
            san_pham sp ON sp_size.id_sanpham = sp.id
        WHERE sp.id = '$id_sanpham'
        ";
    $chitiet_sp_size = pdo_query($sql);
    return $chitiet_sp_size;
}
function them_sanpham_size($id_sanpham, $id_size)
{
    $sql = "INSERT INTO sanpham_size(id_sanpham,id_size) VALUES('$id_sanpham','$id_size')";
    thucthi_truyvan($sql);
}
function capnhat_sanpham_size($id,$id_sanpham, $id_size)
{
    $sql = "UPDATE sanpham_size SET id_sanpham = '$id_sanpham' , id_size = '$id_size'  WHERE id = '$id'";
    thucthi_truyvan($sql);
}
function mot_sanpham_size($id){
    $sql = "SELECT 
        sp.*,
        size.*,
        sp_size.*
        FROM sanpham_size sp_size
        LEFT JOIN
            size ON size.id = sp_size.id_size
        LEFT JOIN
            san_pham sp ON sp_size.id_sanpham = sp.id
        WHERE sp_size.id = '$id'";
    $sp_size = pdo_query_one($sql);
    return $sp_size;
}
function xoa_sanpham_size($id){
    $sql = "DELETE FROM sanpham_size WHERE id = '$id'";
    thucthi_truyvan($sql);
}