<?php
$servername = "localhost";
$username = "root";
$password = "Dovantruongf1$";
$dbname = "ecommerce";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}else{
    echo "connected";
}
?>