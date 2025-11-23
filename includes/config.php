<?php
// Bật thông báo lỗi (Chỉ dùng khi đang lập trình, tắt khi public web)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Giả lập biến tiêu đề chung
define('SITE_NAME', 'Dự án PHP Đầu Tay');

// Kết nối Database (Ví dụ mẫu - chưa cần dùng ngay)
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ten_database";
$conn = new mysqli($servername, $username, $password, $dbname);
*/
?>