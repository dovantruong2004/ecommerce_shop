<?php
    
    function danhsach_sanpham(){
        $sql = "SELECT * FROM san_pham";
        $danhsach_sanpham = pdo_query( $sql );
        return $danhsach_sanpham;
    }
?>