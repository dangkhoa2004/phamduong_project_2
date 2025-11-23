<?php
// 1. Load các thành phần chung
require_once 'includes/config.php';
require_once 'includes/data.php';

// 2. Lấy đường dẫn URL hiện tại
// Ví dụ: http://localhost/my_project/gioi-thieu -> $request_uri = '/my_project/gioi-thieu'
$request_uri = $_SERVER['REQUEST_URI'];

// 3. Xử lý đường dẫn (Loại bỏ thư mục gốc nếu chạy ở localhost/my_project)
// Nếu bạn chạy trực tiếp domain (vd: datviet.com) thì không cần dòng str_replace này phức tạp
$project_folder = ''; // Đổi tên này nếu thư mục bạn đặt tên khác
$router = str_replace($project_folder, '', $request_uri);

// Loại bỏ query string (ví dụ ?id=1) để lấy đúng đường dẫn sạch
$router = strtok($router, '?');

// 4. Load Header
require_once 'includes/header.php';

// 5. ĐIỀU HƯỚNG (ROUTER SWITCH)
// Dựa vào $router để quyết định nạp file nào trong thư mục pages/
switch ($router) {
    case '/':
    case '/trang-chu':
    case '/home':
        require_once 'pages/home.php';
        break;

    case '/chi-tiet':
    case '/san-pham':
        require_once 'pages/detail.php';
        break;

    case '/lien-he':
        // Bạn có thể tạo file pages/contact.php
        echo "<div class='container' style='padding:50px 0'><h2>Trang liên hệ đang xây dựng...</h2></div>";
        break;

    default:
        // Trang 404
        echo "<div class='container' style='padding:50px 0; text-align:center'>
                <h1 style='color:red; font-size: 50px'>404</h1>
                <h3>Trang không tồn tại!</h3>
                <a href='trang-chu'>Quay về trang chủ</a>
              </div>";
        break;
}

// 6. Load Footer
require_once 'includes/footer.php';
