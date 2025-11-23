<?php
// Mock Data MỞ RỘNG (Thêm nhiều trường thông tin kỹ thuật)
$product = [
    "title" => "Biệt thự đơn lập Vạn Phúc City, View trực diện sông Sài Gòn, Full nội thất Ý",
    "price" => "45.5 Tỷ",
    "price_unit" => "~ 130 triệu/m²",
    "address" => "KĐT Vạn Phúc, Quốc lộ 13, P. Hiệp Bình Phước, TP. Thủ Đức",
    "id" => "BDS-8899",
    "date_posted" => "23/11/2025",
    
    // --- THÔNG SỐ KỸ THUẬT CHI TIẾT ---
    "area" => "350m²",          // Diện tích đất
    "dim" => "15m x 23.5m",     // Kích thước
    "use_area" => "800m²",      // Diện tích sử dụng (sàn)
    "floors" => "1 Hầm, 4 Tầng",// Kết cấu tầng
    "bed" => 5,
    "bath" => 6,
    "direction" => "Đông Nam",  // Hướng nhà
    "balcony" => "Tây Bắc",     // Hướng ban công
    "frontage" => "15m",        // Mặt tiền
    "road" => "20m",            // Đường trước nhà
    "legal" => "Sổ hồng riêng", // Pháp lý
    "furniture" => "Cao cấp",   // Nội thất
    
    "video_url" => "https://www.youtube.com/embed/LXb3EKWsInQ",
    "amenities" => ["Hồ bơi vô cực", "Gara 2 ô tô", "Sân vườn BBQ", "Phòng Gym", "Thang máy kính", "Smart Home", "An ninh 24/7", "Phòng xông hơi"],
    "nearby" => [
        ["name" => "Trường Quốc tế Emasi", "dist" => "500m"],
        ["name" => "Bệnh viện Vạn Phúc", "dist" => "1km"],
        ["name" => "Sân bay Tân Sơn Nhất", "dist" => "6km"],
        ["name" => "Trung tâm Quận 1", "dist" => "8km"]
    ],
    "desc" => "
        <p>Cần bán gấp căn biệt thự đơn lập vị trí kim cương tại Vạn Phúc City. Nhà mới hoàn thiện, gia chủ định cư nước ngoài nên cần nhượng lại.</p>
        <p><strong>1. Vị trí độc tôn:</strong> Nằm ngay mặt tiền công viên ven sông dài 3.4km, hưởng trọn luồng gió mát từ sông Sài Gòn.</p>
        <p><strong>2. Kết cấu xây dựng:</strong></p>
        <ul>
            <li>Xây dựng: 1 Hầm, 1 Trệt, 3 Lầu, Sân thượng view pháo hoa.</li>
            <li>Có thang máy kính nhập khẩu Ý từ hầm lên sân thượng.</li>
            <li>Hầm rộng đỗ được 3 xe hơi và nhiều xe máy.</li>
        </ul>
        <p><strong>3. Nội thất bàn giao:</strong> Full nội thất cao cấp nhập khẩu (Sofa da bò tót, Bếp Bosch, Thiết bị vệ sinh Duravit, Máy lạnh âm trần Daikin...).</p>
    ",
    "images" => [
        "https://images.unsplash.com/photo-1613977257363-707ba9348227?w=1200&q=90",
        "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&q=90",
        "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&q=90",
        "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&q=90",
        "https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=800&q=90"
    ],
    "agent" => [
        "name" => "Trần Văn Chuyên",
        "phone" => "0909.888.999",
        "img" => "https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200&q=80",
        "zalo" => "http://zalo.me/0909888999"
    ]
];

// Lấy sản phẩm liên quan từ data chung
$related_products = array_slice($houses, 0, 4);
?>

<style>
    /* CSS MỚI CHO BẢNG THÔNG SỐ (SPECS GRID) */
    .specs-section {
        background: #f8f9fa;
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 25px;
        margin: 25px 0;
    }
    .specs-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 3 Cột */
        gap: 25px;
        row-gap: 30px;
    }
    .spec-item-v2 {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }
    .spec-icon-v2 {
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        font-size: 18px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        flex-shrink: 0;
    }
    .spec-content-v2 { display: flex; flex-direction: column; }
    .spec-label { font-size: 13px; color: #777; margin-bottom: 4px; }
    .spec-value { font-size: 15px; font-weight: 700; color: #222; }

    /* Layout & Gallery (Giữ nguyên từ version trước) */
    .photo-gallery { display: grid; grid-template-columns: 2fr 1fr; gap: 10px; height: 450px; border-radius: 12px; overflow: hidden; margin-bottom: 25px; cursor: pointer; }
    .photo-main img, .photo-sub img { width: 100%; height: 100%; object-fit: cover; transition: 0.3s; }
    .photo-sub { display: grid; grid-template-rows: 1fr 1fr; gap: 10px; }
    .photo-gallery img:hover { transform: scale(1.02); filter: brightness(1.1); }
    
    .detail-container { display: grid; grid-template-columns: 2.5fr 1fr; gap: 40px; }
    
    .prop-header { border-bottom: 1px solid #eee; padding-bottom: 20px; margin-bottom: 20px; }
    .prop-title { font-size: 26px; font-weight: 800; color: #222; margin-bottom: 10px; line-height: 1.3; }
    .prop-price { font-size: 28px; font-weight: bold; color: #d0021b; }

    .content-block { margin-bottom: 40px; }
    .block-title { font-size: 18px; font-weight: 700; margin-bottom: 15px; color: #222; position: relative; padding-left: 15px; }
    .block-title::before { content: ''; position: absolute; left: 0; top: 4px; height: 16px; width: 4px; background: var(--accent); border-radius: 2px; }
    
    .amenity-list { display: flex; flex-wrap: wrap; gap: 10px; }
    .amenity-tag { background: #fff; border: 1px solid #ddd; padding: 8px 15px; border-radius: 30px; font-size: 13px; color: #555; display: flex; align-items: center; gap: 8px; }
    .amenity-tag i { color: #28a745; } /* Icon xanh lá */

    .nearby-table { width: 100%; border-collapse: collapse; font-size: 14px; }
    .nearby-table td { padding: 10px 0; border-bottom: 1px dashed #eee; }

    .sidebar-sticky { position: sticky; top: 100px; }
    .agent-box { background: white; border: 1px solid #eee; border-radius: 12px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); text-align: center; }
    .btn-action { display: flex; align-items: center; justify-content: center; gap: 10px; width: 100%; padding: 12px; border-radius: 6px; font-weight: bold; margin-bottom: 10px; cursor: pointer; transition: 0.2s; text-decoration: none; }
    .btn-call { background: var(--primary); color: white; border: none; }
    .btn-zalo { background: #0068ff; color: white; border: none; }

    /* Responsive */
    @media (max-width: 992px) {
        .detail-container { grid-template-columns: 1fr; }
        .specs-grid { grid-template-columns: repeat(2, 1fr); } /* Tablet 2 cột */
    }
    @media (max-width: 600px) {
        .photo-gallery { height: 250px; grid-template-columns: 1fr; }
        .photo-sub { display: none; }
        .specs-grid { grid-template-columns: 1fr; } /* Mobile 1 cột */
    }
</style>

<div class="container">
    
    <div style="margin: 20px 0; font-size: 13px; color: #888;">
        <a href="trang-chu">Trang chủ</a> <span style="margin:0 5px">/</span> 
        <a href="#">Bán biệt thự</a> <span style="margin:0 5px">/</span> 
        <span style="color: #333;">Mã tin: <?php echo $product['id']; ?></span>
    </div>

    <div class="photo-gallery">
        <div class="photo-main"><img src="<?php echo $product['images'][0]; ?>"></div>
        <div class="photo-sub">
            <img src="<?php echo $product['images'][1]; ?>" style="border-top-right-radius: 12px;">
            <img src="<?php echo $product['images'][2]; ?>" style="border-bottom-right-radius: 12px;">
        </div>
    </div>

    <div class="detail-container">
        <div class="left-content">
            
            <div class="prop-header">
                <h1 class="prop-title"><?php echo $product['title']; ?></h1>
                <div style="color: #666; font-size: 14px; margin-bottom: 15px;">
                    <i class="fas fa-map-marker-alt"></i> <?php echo $product['address']; ?>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                    <div class="prop-price">
                        <?php echo $product['price']; ?> 
                        <span style="font-size: 15px; color: #555; font-weight: normal; margin-left: 10px;">(<?php echo $product['price_unit']; ?>)</span>
                    </div>
                    <div style="font-size: 13px; color: #999;">Ngày đăng: <?php echo $product['date_posted']; ?></div>
                </div>
            </div>

            <div class="content-block">
                <h3 class="block-title">Thông tin chi tiết</h3>
                <div class="specs-section">
                    <div class="specs-grid">
                        
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-ruler-combined"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Diện tích đất</span><span class="spec-value"><?php echo $product['area']; ?></span></div>
                        </div>
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-vector-square"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Diện tích sàn</span><span class="spec-value"><?php echo $product['use_area']; ?></span></div>
                        </div>
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-expand"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Kích thước</span><span class="spec-value"><?php echo $product['dim']; ?></span></div>
                        </div>

                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-bed"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Phòng ngủ</span><span class="spec-value"><?php echo $product['bed']; ?> phòng</span></div>
                        </div>
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-bath"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Phòng tắm</span><span class="spec-value"><?php echo $product['bath']; ?> phòng</span></div>
                        </div>
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-layer-group"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Số tầng</span><span class="spec-value"><?php echo $product['floors']; ?></span></div>
                        </div>

                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-compass"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Hướng nhà</span><span class="spec-value"><?php echo $product['direction']; ?></span></div>
                        </div>
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="far fa-compass"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Hướng ban công</span><span class="spec-value"><?php echo $product['balcony']; ?></span></div>
                        </div>
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-file-contract"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Pháp lý</span><span class="spec-value"><?php echo $product['legal']; ?></span></div>
                        </div>

                         <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-road"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Đường trước nhà</span><span class="spec-value"><?php echo $product['road']; ?></span></div>
                        </div>
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-arrows-alt-h"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Mặt tiền</span><span class="spec-value"><?php echo $product['frontage']; ?></span></div>
                        </div>
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-couch"></i></div>
                            <div class="spec-content-v2"><span class="spec-label">Nội thất</span><span class="spec-value"><?php echo $product['furniture']; ?></span></div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="content-block">
                <h3 class="block-title">Tiện ích đặc quyền</h3>
                <div class="amenity-list">
                    <?php foreach($product['amenities'] as $am): ?>
                        <div class="amenity-tag"><i class="fas fa-check-circle"></i> <?php echo $am; ?></div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="content-block">
                <h3 class="block-title">Mô tả chi tiết</h3>
                <div style="line-height: 1.8; color: #444; text-align: justify; font-size: 15px;">
                    <?php echo $product['desc']; ?>
                </div>
            </div>

            <div class="content-block" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                <div>
                    <h3 class="block-title">Video dự án</h3>
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 8px;">
                        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="<?php echo $product['video_url']; ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div>
                    <h3 class="block-title">Vị trí & Tiện ích ngoại khu</h3>
                    <table class="nearby-table">
                        <?php foreach($product['nearby'] as $nb): ?>
                        <tr>
                            <td><i class="fas fa-map-pin" style="color:#999; margin-right:5px"></i> <?php echo $nb['name']; ?></td>
                            <td><?php echo $nb['dist']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>

        </div> <div class="sidebar-sticky">
            <div class="agent-box">
                <div style="position: relative; width: 90px; height: 90px; margin: 0 auto 15px;">
                     <img src="<?php echo $product['agent']['img']; ?>" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                     <div style="position: absolute; bottom: 0; right: 0; background: #28a745; width: 20px; height: 20px; border-radius: 50%; border: 2px solid white;"></div>
                </div>
                <h4 style="margin-bottom: 5px; color: var(--primary); font-size: 18px;"><?php echo $product['agent']['name']; ?></h4>
                <div style="color: #666; font-size: 13px; margin-bottom: 20px;">
                    <i class="fas fa-star" style="color: gold"></i> Môi giới chuyên nghiệp
                </div>
                
                <a href="tel:0909888999" class="btn-action btn-call">
                    <i class="fas fa-phone-alt"></i> Gọi 0909.888.999
                </a>
                <a href="<?php echo $product['agent']['zalo']; ?>" class="btn-action btn-zalo">
                    <i class="fas fa-comment-dots"></i> Chat Zalo
                </a>
                
                <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">

                <form style="text-align: left;">
                    <p style="font-weight: bold; margin-bottom: 10px; font-size: 14px;">Yêu cầu tư vấn:</p>
                    <input type="text" placeholder="Họ tên" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; margin-bottom: 10px; font-size: 13px;">
                    <input type="text" placeholder="Số điện thoại" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; margin-bottom: 10px; font-size: 13px;">
                    <button style="width: 100%; padding: 10px; background: #fff; border: 1px solid var(--primary); color: var(--primary); font-weight: bold; border-radius: 4px; cursor: pointer;">Gửi yêu cầu</button>
                </form>
            </div>
        </div>

    </div>

    <div style="margin-top: 60px; margin-bottom: 40px;">
        <h3 style="border-left: 5px solid var(--accent); padding-left: 10px; color: #333; margin-bottom: 25px;">BẤT ĐỘNG SẢN TƯƠNG TỰ</h3>
        <div class="product-grid">
            <?php foreach($related_products as $h): ?>
            <div class="real-estate-card">
                <div style="position: relative;">
                    <img src="<?php echo $h['img']; ?>" class="re-img">
                    <span style="position: absolute; top: 10px; right: 10px; background: #d0021b; color: white; padding: 2px 8px; font-size: 11px; border-radius: 3px;">HOT</span>
                </div>
                <div class="re-content">
                    <div class="re-title"><?php echo $h['name']; ?></div>
                    <span class="re-price"><?php echo $h['price']; ?></span>
                    <div class="re-info">
                        <span><i class="fas fa-vector-square"></i> <?php echo $h['area']; ?></span>
                        <span><i class="fas fa-bed"></i> <?php echo $h['bed']; ?></span>
                        <span><i class="fas fa-bath"></i> <?php echo $h['bath']; ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>