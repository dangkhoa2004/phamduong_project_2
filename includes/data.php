<?php
// =================================================================
// DATABASE GIẢ LẬP (MOCK DATA) - FULL OPTION
// =================================================================

// 1. DỮ LIỆU THỐNG KÊ
$stats = [
    ["num" => "12+", "label" => "Năm kinh nghiệm"],
    ["num" => "5.000+", "label" => "Giao dịch thành công"],
    ["num" => "1.200+", "label" => "Sổ đỏ trao tay"],
    ["num" => "Top 10", "label" => "Sàn BĐS Uy tín 2024"]
];

// 2. DANH SÁCH NHÀ PHỐ & BIỆT THỰ
$houses = [
    [
        "id" => "nhapho-01",
        "name" => "Biệt thự đơn lập Vạn Phúc City, View trực diện sông Sài Gòn",
        "price" => "45.5 Tỷ",
        "area" => "350m²",
        "loc" => "Thủ Đức",
        "img" => "https://images.unsplash.com/photo-1613977257363-707ba9348227?w=800&q=80",
        "bed" => 5,
        "bath" => 6,
        "address" => "KĐT Vạn Phúc, Quốc lộ 13, P. Hiệp Bình Phước, TP. Thủ Đức",
        "use_area" => "800m²",
        "dim" => "15m x 23.5m",
        "floors" => "1 Hầm, 1 Trệt, 3 Lầu",
        "direction" => "Đông Nam",
        "balcony" => "Tây Bắc",
        "frontage" => "15m",
        "road" => "20m nhựa",
        "legal" => "Sổ hồng riêng",
        "furniture" => "Full nội thất Ý cao cấp",
        "video_url" => "https://www.youtube.com/embed/LXb3EKWsInQ",
        
        // --- MÔ TẢ CHI TIẾT ---
        "desc" => "
            <p>Cần bán gấp siêu phẩm biệt thự đơn lập vị trí kim cương tại Vạn Phúc City. Gia chủ định cư Mỹ cần nhượng lại tâm huyết.</p>
            <p><strong>1. Vị trí đắc địa:</strong></p>
            <ul>
                <li>Nằm ngay mặt tiền công viên ven sông The Long Park dài 3.4km.</li>
                <li>Hưởng trọn luồng gió mát và vượng khí từ sông Sài Gòn.</li>
                <li>Khu vực an ninh biệt lập, chốt bảo vệ 24/7.</li>
            </ul>
            <p><strong>2. Kết cấu & Thiết kế:</strong></p>
            <ul>
                <li>Diện tích đất: 15x23.5m (350m2). Diện tích sàn sử dụng: 800m2.</li>
                <li>Xây dựng: 1 Hầm, 1 Trệt, 3 Lầu, Sân thượng. Hầm rộng đỗ được 3 xe hơi.</li>
                <li>Có thang máy kính nhập khẩu Ý (Schindler) chạy từ hầm lên sân thượng.</li>
            </ul>
            <p><strong>3. Nội thất:</strong> Bàn giao Full nội thất cao cấp nhập khẩu 100%: Sofa da bò tót, Bếp từ Bosch, Hệ thống lạnh âm trần Daikin, Thiết bị vệ sinh Duravit...</p>
        ",
        
        // --- TIỆN ÍCH NỘI KHU ---
        "amenities" => ["Hồ bơi riêng", "Thang máy kính", "Smart Home Lumi", "Phòng Xông hơi", "Phòng Karaoke cách âm", "Gara 3 ô tô", "Sân vườn BBQ"],
        
        // --- TIỆN ÍCH NGOẠI KHU (NEARBY) ---
        "nearby" => [
            ["name" => "Trường Quốc tế Emasi", "dist" => "200m"],
            ["name" => "Bệnh viện Vạn Phúc", "dist" => "500m"],
            ["name" => "Quảng trường Nhạc nước", "dist" => "1km"],
            ["name" => "Sân bay Tân Sơn Nhất", "dist" => "6km"]
        ],
        
        "images" => [
            "https://images.unsplash.com/photo-1613977257363-707ba9348227?w=1200&q=90",
            "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1200&q=90",
            "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=1200&q=90"
        ]
    ],
    
    [
        "id" => "nhapho-02",
        "name" => "Shophouse Sala Đại Quang Minh mặt tiền Nguyễn Cơ Thạch",
        "price" => "72 Tỷ",
        "area" => "140m²",
        "loc" => "Quận 2",
        "img" => "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&q=80",
        "bed" => 4,
        "bath" => 5,
        "address" => "Đường Nguyễn Cơ Thạch, KĐT Sala, TP. Thủ Đức",
        "use_area" => "560m²",
        "dim" => "7m x 20m",
        "floors" => "1 Hầm, 4 Tầng, Áp mái",
        "direction" => "Tây Nam",
        "road" => "30m",
        "legal" => "Hợp đồng mua bán",
        "furniture" => "Hoàn thiện mặt ngoài, thô bên trong",
        
        "desc" => "
            <p>Bán Shophouse Nguyễn Cơ Thạch - Tuyến đường thương mại sầm uất nhất Khu đô thị Sala Đại Quang Minh.</p>
            <p>Thích hợp làm Showroom, Văn phòng công ty, Ngân hàng hoặc Nhà hàng cao cấp.</p>
            <p>- Vỉa hè rộng 8m, lát đá granite sang trọng.</p>
            <p>- Hầm chung toàn khu rộng lớn, sức chứa hàng ngàn xe ô tô.</p>
            <p>- Cộng đồng cư dân đẳng cấp, văn minh.</p>
        ",
        
        "amenities" => ["Vỉa hè 8m", "Hầm để xe chung", "Hệ thống PCCC tiêu chuẩn", "Máy phát điện dự phòng", "An ninh 2 lớp"],
        
        "nearby" => [
            ["name" => "Công viên Sala", "dist" => "100m"],
            ["name" => "Tháp văn phòng Sofic", "dist" => "50m"],
            ["name" => "TTTM Thiso Mall", "dist" => "200m"],
            ["name" => "Hầm Thủ Thiêm", "dist" => "1km"]
        ],
        
        "images" => [
            "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1200&q=90",
            "https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200&q=90",
            "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1200&q=90"
        ]
    ],

    [
        "id" => "nhapho-03",
        "name" => "Nhà phố cổ điển đường Lê Văn Sỹ, Q.3, 4 Tầng",
        "price" => "18.5 Tỷ",
        "area" => "90m²",
        "loc" => "Quận 3",
        "img" => "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=500&q=80",
        "bed" => 4,
        "bath" => 4,
        "address" => "Hẻm 300 Lê Văn Sỹ, Phường 14, Quận 3",
        "use_area" => "320m²",
        "dim" => "5m x 18m",
        "floors" => "Trệt, 3 Lầu, Sân thượng",
        "direction" => "Bắc",
        "road" => "Hẻm xe hơi 6m",
        "legal" => "Sổ hồng hoàn công",
        "furniture" => "Nội thất gỗ Gõ Đỏ",
        
        "desc" => "
            <p>Bán nhà chính chủ xây tâm huyết để ở đường Lê Văn Sỹ, Quận 3.</p>
            <p>Nhà thiết kế theo phong cách Tân Cổ Điển, sử dụng toàn bộ nội thất gỗ Gõ Đỏ tự nhiên trị giá hơn 3 tỷ đồng.</p>
            <p>Khu vực dân trí cao, yên tĩnh, hẻm thông thoáng xe hơi quay đầu thoải mái.</p>
            <p>Thích hợp mua để ở, làm văn phòng công ty hoặc Spa.</p>
        ",
        
        "amenities" => ["Nội thất gỗ quý", "Sân thượng trồng cây", "Bồn tắm Jacuzzi", "Phòng thờ riêng"],
        
        "nearby" => [
            ["name" => "Chợ Nguyễn Văn Trỗi", "dist" => "300m"],
            ["name" => "Bệnh viện An Sinh", "dist" => "500m"],
            ["name" => "ĐH Sư Phạm", "dist" => "1km"],
            ["name" => "Sân bay Tân Sơn Nhất", "dist" => "3km"]
        ],
        "images" => [
            "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=1200&q=90",
             "https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=1200&q=90"
        ]
    ],
    // Các căn còn lại để demo cơ bản, sẽ dùng fallback "Chưa có" nếu thiếu
    [
        "id" => "nhapho-04",
        "name" => "Biệt thự sân vườn Thảo Điền khu Compound",
        "price" => "110 Tỷ",
        "area" => "800m²",
        "loc" => "Quận 2",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo_RHC3thnWBCUuqpAmd004Ii0lEV0HRINCw&s",
        "bed" => 6,
        "bath" => 7,
        "address" => "Nguyễn Văn Hưởng, Thảo Điền, Quận 2",
        "amenities" => ["Hồ bơi muối khoáng", "Sân Tennis", "Bảo vệ 24/7"],
        "desc" => "<p>Biệt thự đẳng cấp giới thượng lưu. Khu Compound khép kín, an ninh tuyệt đối.</p>"
    ],
    [
        "id" => "nhapho-05",
        "name" => "Nhà mặt tiền kinh doanh Phan Xích Long",
        "price" => "32 Tỷ",
        "area" => "100m²",
        "loc" => "Phú Nhuận",
        "img" => "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=500&q=80",
        "bed" => 3,
        "bath" => 3,
        "desc" => "<p>Vị trí vàng kinh doanh đắc địa nhất Phú Nhuận. Đang cho thuê HĐ cao.</p>"
    ],
    [
        "id" => "nhapho-06",
        "name" => "Villa nghỉ dưỡng ven sông Quận 7",
        "price" => "28.5 Tỷ",
        "area" => "250m²",
        "loc" => "Quận 7",
        "img" => "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=500&q=80",
        "bed" => 4,
        "bath" => 4
    ],
    [
        "id" => "nhapho-07",
        "name" => "Nhà phố Cityland Park Hills Gò Vấp",
        "price" => "15.5 Tỷ",
        "area" => "100m²",
        "loc" => "Gò Vấp",
        "img" => "https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=500&q=80",
        "bed" => 4,
        "bath" => 4
    ],
    [
        "id" => "nhapho-08",
        "name" => "Dinh thự khu Chateau Phú Mỹ Hưng",
        "price" => "150 Tỷ",
        "area" => "1000m²",
        "loc" => "Quận 7",
        "img" => "https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=500&q=80",
        "bed" => 8,
        "bath" => 10
    ]
];

// 3. DANH SÁCH CĂN HỘ CHUNG CƯ
$apartments = [
    [
        "id" => "canho-01",
        "name" => "Căn hộ 2PN Vinhomes Grand Park, View công viên 36ha",
        "price" => "2.8 Tỷ",
        "area" => "69m²",
        "loc" => "Quận 9",
        "img" => "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800&q=80",
        "bed" => 2,
        "bath" => 2,
        
        "address" => "Đường Nguyễn Xiển, P. Long Thạnh Mỹ, Quận 9",
        "use_area" => "64m² (Thông thủy)",
        "dim" => "Căn góc",
        "floors" => "Tầng 18",
        "direction" => "Đông Bắc",
        "balcony" => "Tây Nam",
        "legal" => "Sổ hồng sở hữu lâu dài",
        "furniture" => "Nội thất cơ bản chủ đầu tư (Bếp, Rèm, Máy lạnh)",
        
        "desc" => "
            <p>Cần bán nhanh căn hộ 2PN phân khu The Origami - Phong cách Nhật Bản.</p>
            <p>- Căn góc 2 view thoáng mát, view trực diện vườn Nhật nội khu.</p>
            <p>- Nhà mới 100% chưa qua sử dụng.</p>
            <p>- Đã có sổ hồng, công chứng sang tên ngay.</p>
            <p>- Ngân hàng hỗ trợ vay 70% giá trị định giá.</p>
        ",
        
        "amenities" => ["Hồ cá Koi", "Công viên 36ha", "Vincom Mega Mall", "Trường Vinschool", "Xe buýt điện VinBus"],
        
        "nearby" => [
            ["name" => "Khu Công Nghệ Cao", "dist" => "2km"],
            ["name" => "Bến xe Miền Đông mới", "dist" => "3km"],
            ["name" => "Làng Đại học", "dist" => "4km"]
        ],
        
        "images" => [
            "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=1200&q=90",
            "https://images.unsplash.com/photo-1512918760532-3ed465901d19?w=1200&q=90",
            "https://images.unsplash.com/photo-1484154218962-a1c002085d2f?w=1200&q=90"
        ]
    ],
    
    [
        "id" => "canho-02",
        "name" => "Penthouse The Metropole Thủ Thiêm view trực diện Q1",
        "price" => "45 Tỷ",
        "area" => "250m²",
        "loc" => "Quận 2",
        "img" => "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=500&q=80",
        "bed" => 4,
        "bath" => 4,
        "address" => "Khu chức năng số 1 Thủ Thiêm, TP. Thủ Đức",
        "use_area" => "250m²",
        "direction" => "Đông Nam",
        "legal" => "Hợp đồng mua bán",
        "furniture" => "Bàn giao thô",
        
        "desc" => "
            <p>Siêu phẩm Penthouse tại dự án The Metropole Thủ Thiêm (The Opera Residence).</p>
            <p>View Panorama 360 độ ôm trọn sông Sài Gòn và Quận 1 (Bitexco, Landmark 81).</p>
            <p>Sở hữu hồ bơi riêng ngay tại ban công.</p>
            <p>Số lượng giới hạn chỉ dành cho giới tinh hoa.</p>
        ",
        
        "amenities" => ["Hồ bơi vô cực", "Phòng Gym Yoga", "Sảnh đón Luxury", "Valet Parking"],
        
        "nearby" => [
            ["name" => "Cầu Ba Son", "dist" => "500m"],
            ["name" => "Nhà hát Opera (Tương lai)", "dist" => "100m"],
            ["name" => "Phố đi bộ Nguyễn Huệ", "dist" => "1km"]
        ],
        
        "images" => [
             "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=1200&q=90",
             "https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=1200&q=90"
        ]
    ],
    
    [
        "id" => "canho-03",
        "name" => "Officetel Masteri Thảo Điền full nội thất",
        "price" => "3.5 Tỷ",
        "area" => "50m²",
        "loc" => "Quận 2",
        "img" => "https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=500&q=80",
        "bed" => 1,
        "bath" => 1,
        "address" => "159 Xa Lộ Hà Nội, Thảo Điền, Quận 2",
        "amenities" => ["Vincom Mega Mall", "Hồ bơi", "Gym"],
        "desc" => "<p>Căn hộ văn phòng đa năng, vừa ở vừa làm việc. Đang có hợp đồng thuê 12tr/tháng.</p>"
    ],
    [
        "id" => "canho-04",
        "name" => "Căn hộ Sunwah Pearl View sông Sài Gòn",
        "price" => "8.5 Tỷ",
        "area" => "98m²",
        "loc" => "Bình Thạnh",
        "img" => "https://images.unsplash.com/photo-1493809842364-78817add7ffb?w=500&q=80",
        "bed" => 2,
        "bath" => 2
    ],
    [
        "id" => "canho-05",
        "name" => "Empire City Thủ Thiêm 1PN",
        "price" => "6.2 Tỷ",
        "area" => "64m²",
        "loc" => "Quận 2",
        "img" => "https://premierrealty.vn/wp-content/uploads/2023/09/Empire-City-00-870x712.jpg",
        "bed" => 1,
        "bath" => 1
    ]
];

// 4. DỊCH VỤ PHÁP LÝ
$services = [
    [
        "icon" => "fa-file-signature",
        "title" => "Sang tên Sổ Đỏ",
        "desc" => "Thủ tục nhanh gọn, bao trọn gói thuế phí, nhận sổ sau 15 ngày."
    ],
    [
        "icon" => "fa-ruler-combined",
        "title" => "Đo đạc địa chính",
        "desc" => "Xác định ranh giới, cắm mốc, lập bản vẽ hiện trạng vị trí."
    ],
    [
        "icon" => "fa-home",
        "title" => "Hoàn công nhà ở",
        "desc" => "Hợp thức hóa nhà xây dựng sai phép, đổi sổ hồng mới."
    ],
    [
        "icon" => "fa-balance-scale",
        "title" => "Tư vấn Luật",
        "desc" => "Kiểm tra quy hoạch, soạn thảo hợp đồng cọc, giải quyết tranh chấp."
    ]
];

// 5. ĐÁNH GIÁ KHÁCH HÀNG
$reviews = [
    [
        "user" => "Nguyễn Văn An",
        "role" => "Nhà đầu tư",
        "text" => "Tôi đã đầu tư 3 lô đất nền qua Phạm Dương Land, thanh khoản rất tốt, pháp lý rõ ràng. Sẽ tiếp tục ủng hộ.",
        "star" => 5
    ],
    [
        "user" => "Trần Thị Bích",
        "role" => "Mua ở thực",
        "text" => "Nhân viên dẫn đi xem nhà rất nhiệt tình, không ngại nắng mưa. Cảm ơn team đã giúp tôi tìm được tổ ấm.",
        "star" => 5
    ],
    [
        "user" => "Michael Lee",
        "role" => "Việt kiều Mỹ",
        "text" => "Thủ tục mua nhà cho người nước ngoài khá phức tạp nhưng công ty đã hỗ trợ tôi rất chuyên nghiệp.",
        "star" => 5
    ],
    [
        "user" => "Lê Hoàng Cường",
        "role" => "Giám đốc",
        "text" => "Đã ký gửi bán căn biệt thự tại đây, bán nhanh hơn tôi nghĩ. Phí môi giới hợp lý, minh bạch.",
        "star" => 4
    ]
];

// 6. ĐỘI NGŨ NHÂN SỰ
$agents = [
    [
        "name" => "Phạm Dương",
        "role" => "Trưởng phòng KD",
        "phone" => "0389.616.946",
        "img" => "/assets/img/author.png"
    ],
    [
        "name" => "Phạm Dương",
        "role" => "Chuyên viên cao cấp",
        "phone" => "0389.616.946",
        "img" => "/assets/img/author.png"
    ],
    [
        "name" => "Phạm Dương",
        "role" => "Chuyên gia pháp lý",
        "phone" => "0389.616.946",
        "img" => "/assets/img/author.png"
    ],
    [
        "name" => "Phạm Dương",
        "role" => "Tư vấn viên",
        "phone" => "0389.616.946",
        "img" => "/assets/img/author.png"
    ]
];
?>