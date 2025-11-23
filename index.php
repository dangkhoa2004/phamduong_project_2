<?php
require_once 'includes/config.php';
require_once 'includes/data.php';

$request_uri = $_SERVER['REQUEST_URI'];
$project_folder = ''; // Đổi tên thư mục nếu cần
$router = str_replace($project_folder, '', $request_uri);
$router = strtok($router, '?'); // Bỏ query string

// ROUTER XỬ LÝ LOGIC
// 1. Kiểm tra Trang chủ
if ($router == '/' || $router == '/trang-chu' || $router == '/home') {
    require_once 'includes/header.php';
    require_once 'pages/home.php';
    require_once 'includes/footer.php';
}

// 2. Kiểm tra trang Chi tiết (Dạng /chi-tiet/nhapho-01)
// preg_match sẽ kiểm tra xem đường dẫn có bắt đầu bằng /chi-tiet/ hay không
elseif (preg_match('#^/chi-tiet/(.+)$#', $router, $matches)) {
    // $matches[1] chính là cái ID chúng ta cần (VD: nhapho-01)
    $product_id = $matches[1];

    require_once 'includes/header.php';
    require_once 'pages/detail.php'; // Gọi trang detail, trang này sẽ dùng biến $product_id
    require_once 'includes/footer.php';
}

// 3. Các trang khác
elseif ($router == '/lien-he') {
    require_once 'includes/header.php';
    echo "<div class='container' style='padding:100px 0; text-align:center'><h2>Trang liên hệ</h2></div>";
    require_once 'includes/footer.php';
}

// 4. Trang 404
else {
    require_once 'includes/header.php';
    echo "<div class='container' style='padding:100px 0; text-align:center'>
            <h1 style='color:red; font-size:60px'>404</h1>
            <h3>Không tìm thấy trang yêu cầu!</h3>
            <a href='$project_folder/trang-chu'>Về trang chủ</a>
          </div>";
    require_once 'includes/footer.php';
}
