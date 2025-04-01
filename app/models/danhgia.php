<?php
    function binh_luan($id_nguoi_dung,$id_san_pham,$binh_luan,$ngay_binh_luan){
        $sql = "INSERT INTO danh_gia(id_nguoi_dung,id_san_pham,binh_luan,ngay_binh_luan) VALUES('$id_nguoi_dung','$id_san_pham','$binh_luan','$ngay_binh_luan')";
        thucthi_truyvan($sql);
    }
    function danhsach_binhluan(){
        $sql = "SELECT danh_gia.binh_luan, danh_gia.ngay_binh_luan , nguoi_dung.tai_khoan , san_pham.ten , danh_gia.id
                FROM danh_gia
                LEFT JOIN nguoi_dung ON danh_gia.id_nguoi_dung = nguoi_dung.id
                LEFT JOIN san_pham ON danh_gia.id_san_pham = san_pham.id";
        $danh_sach_binhluan = pdo_query($sql);
        return $danh_sach_binhluan;
    }
    function binhluan_sanpham($id_san_pham){
        $sql = "SELECT danh_gia.binh_luan, danh_gia.ngay_binh_luan , nguoi_dung.tai_khoan , san_pham.ten
                FROM danh_gia
                LEFT JOIN nguoi_dung ON danh_gia.id_nguoi_dung = nguoi_dung.id
                LEFT JOIN san_pham ON danh_gia.id_san_pham = san_pham.id
                WHERE id_san_pham='$id_san_pham'";
        $binhluan_sanpham = pdo_query($sql);
        return $binhluan_sanpham;
    }
    function so_binh_luan(){
        $sql  = "SELECT COUNT(*) FROM danh_gia GROUP BY id";
        $so_binh_luan = pdo_query($sql);
        return $so_binh_luan;

    }
?>