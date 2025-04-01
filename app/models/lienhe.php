<?php
    function lienhe($id_nguoi_dung,$email,$ten,$chu_de,$noi_dung){
        $sql = "INSERT INTO lien_he(id_nguoi_dung,email,ten,chu_de,noi_dung) VALUES('$id_nguoi_dung','$email','$ten','$chu_de','$noi_dung')";
        thucthi_truyvan($sql);
    }
    function danhsach_lienhe(){
        $sql = "SELECT * FROM lien_he";
        $danhsach_lienhe = pdo_query($sql);
        return $danhsach_lienhe;
    }
?>