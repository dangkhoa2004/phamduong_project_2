<?php
require_once 'includes/config.php';
require_once 'includes/db.php'; 

$request_uri = $_SERVER['REQUEST_URI'];
$project_folder = PROJECT_FOLDER; 

$router = str_replace($project_folder, '', $request_uri);
$router = strtok($router, '?'); 

$page_title = "Nhà Đất Phạm Dương - Mua bán Bất động sản uy tín";
$meta_desc  = "Chuyên mua bán, ký gửi nhà phố, biệt thự, căn hộ cao cấp. Pháp lý rõ ràng, hỗ trợ vay ngân hàng nhanh chóng.";
$meta_image = $project_folder . "/assets/images/banner-default.jpg";
$page_content = null; 

if ($router == '/' || $router == '/trang-chu' || $router == '/home') {
    $page_content = 'pages/home.php';
}
elseif (preg_match('#^/chi-tiet/(.+)$#', $router, $matches)) {
    $product_id = $matches[1];
    $page_content = 'pages/detail.php';

    $found_item = get_product_details($conn, $product_id); 

    if ($found_item) {
        $page_title = $found_item['name'] . " - Phạm Dương Land";
        $meta_desc  = "Đang bán " . $found_item['name'] . ". Giá: " . ($found_item['price'] ?? 'Liên hệ') . " - Diện tích: " . ($found_item['area'] ?? 'Đang cập nhật');
        $meta_image = $found_item['img'];
    } else {
        $page_title = "Không tìm thấy sản phẩm - 404";
    }
}
elseif ($router == '/lien-he') {
    $page_title = "Liên hệ tư vấn - Phạm Dương Land";
}
else {
    $page_title = "Lỗi 404 - Trang không tồn tại";
}

require_once 'includes/header.php';

if ($page_content) {
    require_once $page_content;
} elseif ($router == '/lien-he') {
    echo "<div class='container' style='padding:100px 0; text-align:center'><h2>Trang liên hệ</h2></div>";
} else {
    echo "<div class='container' style='padding:100px 0; text-align:center'>
            <h1 style='color:red; font-size:60px'>404</h1>
            <h3>Không tìm thấy trang yêu cầu!</h3>
            <a href='$project_folder/trang-chu'>Về trang chủ</a>
          </div>";
}

$conn->close();
require_once 'includes/footer.php';
?>