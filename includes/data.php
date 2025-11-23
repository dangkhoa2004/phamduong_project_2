<?php
// --- FILE NÀY CHỈ CHỨA DỮ LIỆU (DATABASE GIẢ LẬP) ---

// 1. Dữ liệu Thống kê
$stats = [
    ["num" => "12+", "label" => "Năm kinh nghiệm"],
    ["num" => "5.000+", "label" => "Giao dịch thành công"],
    ["num" => "1.200+", "label" => "Sổ đỏ trao tay"],
    ["num" => "Top 10", "label" => "Sàn BĐS Uy tín 2024"]
];

// 2. Nhà phố & Biệt thự
$houses = [
    ["name" => "Biệt thự đơn lập Vạn Phúc City, View sông Sài Gòn", "price" => "45.5 Tỷ", "area" => "350m²", "loc" => "Thủ Đức", "img" => "https://images.unsplash.com/photo-1613977257363-707ba9348227?w=500&q=80", "bed" => 5, "bath" => 6],
    ["name" => "Shophouse Sala Đại Quang Minh mặt tiền Nguyễn Cơ Thạch", "price" => "72 Tỷ", "area" => "140m²", "loc" => "Quận 2", "img" => "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=500&q=80", "bed" => 4, "bath" => 5],
    ["name" => "Nhà phố cổ điển đường Lê Văn Sỹ, Q.3, 4 Tầng", "price" => "18.5 Tỷ", "area" => "90m²", "loc" => "Quận 3", "img" => "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=500&q=80", "bed" => 4, "bath" => 4],
    ["name" => "Biệt thự sân vườn Thảo Điền khu Compound", "price" => "110 Tỷ", "area" => "800m²", "loc" => "Quận 2", "img" => "https://images.unsplash.com/photo-1580587771525-78b9dba3b91d?w=500&q=80", "bed" => 6, "bath" => 7],
    ["name" => "Nhà mặt tiền kinh doanh Phan Xích Long", "price" => "32 Tỷ", "area" => "100m²", "loc" => "Phú Nhuận", "img" => "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=500&q=80", "bed" => 3, "bath" => 3],
    ["name" => "Villa nghỉ dưỡng ven sông Quận 7", "price" => "28.5 Tỷ", "area" => "250m²", "loc" => "Quận 7", "img" => "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=500&q=80", "bed" => 4, "bath" => 4],
    ["name" => "Nhà phố Cityland Park Hills Gò Vấp", "price" => "15.5 Tỷ", "area" => "100m²", "loc" => "Gò Vấp", "img" => "https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=500&q=80", "bed" => 4, "bath" => 4],
    ["name" => "Dinh thự khu Chateau Phú Mỹ Hưng", "price" => "150 Tỷ", "area" => "1000m²", "loc" => "Quận 7", "img" => "https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=500&q=80", "bed" => 8, "bath" => 10],
];

// 3. Căn hộ chung cư
$apartments = [
    ["name" => "Căn hộ 2PN Vinhomes Grand Park, View công viên", "price" => "2.8 Tỷ", "area" => "69m²", "loc" => "Quận 9", "img" => "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=500&q=80", "bed" => 2, "bath" => 2],
    ["name" => "Penthouse The Metropole Thủ Thiêm view trực diện Q1", "price" => "45 Tỷ", "area" => "250m²", "loc" => "Quận 2", "img" => "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=500&q=80", "bed" => 4, "bath" => 4],
    ["name" => "Officetel Masteri Thảo Điền full nội thất", "price" => "3.5 Tỷ", "area" => "50m²", "loc" => "Quận 2", "img" => "https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=500&q=80", "bed" => 1, "bath" => 1],
    ["name" => "Căn hộ Sunwah Pearl View sông Sài Gòn", "price" => "8.5 Tỷ", "area" => "98m²", "loc" => "Bình Thạnh", "img" => "https://images.unsplash.com/photo-1493809842364-78817add7ffb?w=500&q=80", "bed" => 2, "bath" => 2],
];

// 4. Dịch vụ
$services = [
    ["icon" => "fa-file-signature", "title" => "Sang tên Sổ Đỏ", "desc" => "Thủ tục nhanh gọn, bao trọn gói thuế phí, nhận sổ sau 15 ngày."],
    ["icon" => "fa-ruler-combined", "title" => "Đo đạc địa chính", "desc" => "Xác định ranh giới, cắm mốc, lập bản vẽ hiện trạng vị trí."],
    ["icon" => "fa-home", "title" => "Hoàn công nhà ở", "desc" => "Hợp thức hóa nhà xây dựng sai phép, đổi sổ hồng mới."],
    ["icon" => "fa-balance-scale", "title" => "Tư vấn Luật", "desc" => "Kiểm tra quy hoạch, soạn thảo hợp đồng cọc, giải quyết tranh chấp."],
];

// 5. Đánh giá khách hàng
$reviews = [
    ["user" => "Nguyễn Văn An", "role" => "Nhà đầu tư", "text" => "Tôi đã đầu tư 3 lô đất nền qua Đất Việt, thanh khoản rất tốt, pháp lý rõ ràng. Sẽ tiếp tục ủng hộ.", "star" => 5],
    ["user" => "Trần Thị Bích", "role" => "Mua ở thực", "text" => "Nhân viên dẫn đi xem nhà rất nhiệt tình, không ngại nắng mưa. Cảm ơn team đã giúp tôi tìm được tổ ấm.", "star" => 5],
    ["user" => "Michael Lee", "role" => "Việt kiều Mỹ", "text" => "Thủ tục mua nhà cho người nước ngoài khá phức tạp nhưng công ty đã hỗ trợ tôi rất chuyên nghiệp.", "star" => 5],
    ["user" => "Lê Hoàng Cường", "role" => "Giám đốc", "text" => "Đã ký gửi bán căn biệt thự tại đây, bán nhanh hơn tôi nghĩ. Phí môi giới hợp lý, minh bạch.", "star" => 4],
];

// 6. Đội ngũ nhân sự (MỚI)
$agents = [
    ["name" => "Phạm Tuấn", "role" => "Trưởng phòng KD", "phone" => "0909.111.222", "img" => "https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=80"],
    ["name" => "Nguyễn Lan", "role" => "Chuyên viên cao cấp", "phone" => "0909.333.444", "img" => "https://images.unsplash.com/photo-1573496359-7013ac2bebb5?w=400&q=80"],
    ["name" => "Trần Hùng", "role" => "Chuyên gia pháp lý", "phone" => "0909.555.666", "img" => "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80"],
    ["name" => "Lê Vy", "role" => "Tư vấn viên", "phone" => "0909.777.888", "img" => "https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80"],
];
?>