<?php 
    function tao_don_hang($id_nguoi_dung,$ho_va_ten,$email,$so_dien_thoai,$dia_chi_giao_hang,$tong_gia,$phuong_thuc_thanh_toan,$ngay_dat_hang,$trang_thai){
        $sql = "INSERT INTO don_hang (id_nguoi_dung, ho_va_ten, email, so_dien_thoai, dia_chi_giao_hang, tong_gia, phuong_thuc_thanh_toan, ngay_dat_hang, trang_thai) 
        VALUES (:id_nguoi_dung, :ho_va_ten, :email, :so_dien_thoai, :dia_chi_giao_hang, :tong_gia, :phuong_thuc_thanh_toan, :ngay_dat_hang, :trang_thai)";

        $pdo = ket_noi(); // Lấy kết nối PDO
        $stmt = $pdo->prepare($sql);

        // Bind dữ liệu để tránh SQL Injection
        $stmt->bindParam(':id_nguoi_dung', $id_nguoi_dung, PDO::PARAM_INT);
        $stmt->bindParam(':ho_va_ten', $ho_va_ten, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':so_dien_thoai', $so_dien_thoai, PDO::PARAM_STR);
        $stmt->bindParam(':dia_chi_giao_hang', $dia_chi_giao_hang, PDO::PARAM_STR);
        $stmt->bindParam(':tong_gia', $tong_gia, PDO::PARAM_INT);
        $stmt->bindParam(':phuong_thuc_thanh_toan', $phuong_thuc_thanh_toan, PDO::PARAM_STR);
        $stmt->bindParam(':ngay_dat_hang', $ngay_dat_hang, PDO::PARAM_STR);
        $stmt->bindParam(':trang_thai', $trang_thai, PDO::PARAM_STR);

        $stmt->execute();

        // Lấy ID đơn hàng vừa tạo
        return $pdo->lastInsertId();
    }
    function huy_donhang($id,$trang_thai){
        $sql = "UPDATE don_hang SET trang_thai = '$trang_thai' WHERE id='$id'";
        thucthi_truyvan($sql);
    }
    function capnhat_trangthai_donhang($id,$trang_thai){
        $sql = "UPDATE don_hang SET trang_thai = '$trang_thai' WHERE id='$id'";
        thucthi_truyvan($sql);
    }
?>