<?php

/**
 * =================================================================
 * KẾT NỐI VÀ HÀM TRUY VẤN CƠ SỞ DỮ LIỆU (DATABASE FUNCTIONS)
 * =================================================================
 */

// Thông tin kết nối MySQL (Mặc định XAMPP)
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); // Tên đăng nhập của bạn
define('DB_PASSWORD', '');     // Mật khẩu của bạn (thường là trống)
define('DB_NAME', 'phamduong_project_2'); // Tên CSDL đã tạo

// Khởi tạo kết nối MySQLi
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Lỗi kết nối CSDL: " . $conn->connect_error);
}

// Thiết lập mã hóa Tiếng Việt và các cấu hình cần thiết
$conn->set_charset("utf8mb4");

// ===============================================
// CÁC HÀM TRUY VẤN CHO BẢNG PRODUCTS
// ===============================================

// Hàm để lấy danh sách sản phẩm theo loại (house/apartment) - Dùng ở trang chủ
function get_products_by_type($conn, $type)
{
    // Chỉ lấy các trường cơ bản cho trang chủ
    $stmt = $conn->prepare("SELECT id, name, price, area, loc, img, bed, bath FROM products WHERE type = ? LIMIT 8");
    $stmt->bind_param("s", $type);
    $stmt->execute();
    $result = $stmt->get_result();
    $products = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $products;
}

// Hàm để lấy thông tin chi tiết (Dùng ở trang detail)
function get_product_details($conn, $product_id)
{
    // Lấy TẤT CẢ các cột của sản phẩm theo ID
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("s", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();

    // Giải mã JSON cho các trường mảng và xử lý lỗi Deprecated (NULL -> '')
    if ($product) {
        $product['amenities'] = json_decode($product['amenities'] ?? '', true);
        $product['nearby'] = json_decode($product['nearby'] ?? '', true);
        $product['images'] = json_decode($product['images'] ?? '', true);
    }
    return $product;
}


// ===============================================
// CÁC HÀM TRUY VẤN CHO CÁC BẢNG PHỤ TRỢ (FIX LỖI Undefined function)
// ===============================================

// 1. Lấy dữ liệu Thống kê (Dùng ở trang chủ)
function get_stats($conn)
{
    $result = $conn->query("SELECT num, label FROM stats");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// 2. Lấy dữ liệu Dịch vụ (Dùng ở trang chủ)
function get_services($conn)
{
    $result = $conn->query("SELECT icon, title, description FROM services");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// 3. Lấy dữ liệu Đánh giá (Dùng ở trang chủ)
function get_reviews($conn)
{
    // Đã đổi tên cột thành user_name, user_role, review_text, star
    $result = $conn->query("SELECT user_name, user_role, review_text, star FROM reviews ORDER BY star DESC, id DESC");
    // Vì trường review_text không phải JSON nên không cần decode
    $reviews = $result->fetch_all(MYSQLI_ASSOC);
    return $reviews;
}

// 4. Lấy dữ liệu Nhân sự (Dùng ở trang chủ)
function get_agents($conn)
{
    $result = $conn->query("SELECT name, role, phone, img FROM agents");
    return $result->fetch_all(MYSQLI_ASSOC);
}
