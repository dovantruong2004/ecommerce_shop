<?php 
    function tatca_size(){
        $sql = "SELECT * FROM size";
        $tatca_size = pdo_query($sql);
        return $tatca_size;
    }
?>