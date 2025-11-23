<?php
/**
 * ---------------------------------------------------------
 * LOGIC PHP: TÌM KIẾM & XỬ LÝ DỮ LIỆU ĐỘNG
 * ---------------------------------------------------------
 */

// 1. Gộp dữ liệu từ các nguồn (Nhà phố + Căn hộ) để tìm kiếm
$all_products = array_merge($houses ?? [], $apartments ?? []);

// 2. Tìm sản phẩm theo ID (Lấy từ Router)
$found_item = null;
foreach ($all_products as $item) {
    if (isset($item['id']) && $item['id'] == $product_id) {
        $found_item = $item;
        break;
    }
}

// 3. Nếu không tìm thấy (404)
if ($found_item == null) {
    echo "<div class='container' style='padding:100px 0; text-align:center'>
            <h1 style='color:#ccc; font-size:80px'><i class='fas fa-search'></i></h1>
            <h3>Không tìm thấy bất động sản!</h3>
            <p>Tin đăng này có thể đã hết hạn hoặc đường dẫn không đúng.</p>
            <a href='" . ($project_folder ?? '') . "/trang-chu' style='display:inline-block; margin-top:20px; padding:10px 20px; background:var(--primary); color:white; border-radius:4px; font-weight:bold'>Về trang chủ</a>
          </div>";
    return;
}

// 4. CHUẨN HÓA DỮ LIỆU (MAPPING)
// Logic: $found_item['key'] ?? 'Chưa có'
// Nghĩa là: Nếu trong data.php có thì lấy, không có thì ghi "Chưa có"

$product = [
    // --- THÔNG TIN CƠ BẢN (Luôn có từ data.php) ---
    "id"            => $found_item['id'],
    "title"         => $found_item['name'],
    "price"         => $found_item['price'],
    "address"       => isset($found_item['loc']) ? "Khu vực " . $found_item['loc'] : "Đang cập nhật",
    "date_posted"   => date("d/m/Y"), // Giả lập ngày hiện tại
    "price_unit"    => "Thương lượng", // Đơn vị giá

    // --- THÔNG SỐ KỸ THUẬT (Dùng toán tử ?? để check) ---
    "area"      => $found_item['area'] ?? 'Chưa có',
    "use_area"  => $found_item['area'] ?? 'Chưa có', // Tạm dùng diện tích đất nếu ko có diện tích sàn
    "dim"       => $found_item['dim'] ?? 'Chưa có',
    "floors"    => $found_item['floors'] ?? 'Chưa có',
    
    "bed"       => $found_item['bed'] ?? 0,
    "bath"      => $found_item['bath'] ?? 0,
    
    "direction" => $found_item['direction'] ?? 'Chưa có',
    "balcony"   => $found_item['balcony'] ?? 'Chưa có',
    "frontage"  => $found_item['frontage'] ?? 'Chưa có',
    "road"      => $found_item['road'] ?? 'Chưa có',
    "legal"     => $found_item['legal'] ?? 'Đang chờ sổ',
    "furniture" => $found_item['furniture'] ?? 'Thỏa thuận',

    // --- HÌNH ẢNH & MEDIA ---
    // Nếu data gốc chỉ có 1 ảnh, ta nhân bản lên để Gallery không bị lỗi
    "images" => [
        $found_item['img'], 
        $found_item['img'], // Ảnh phụ 1 (dùng lại ảnh chính)
        $found_item['img']  // Ảnh phụ 2
    ],
    "video_url" => $found_item['video_url'] ?? "https://www.youtube.com/embed/LXb3EKWsInQ", // Video mặc định nếu thiếu

    // --- MÔ TẢ & TIỆN ÍCH ---
    "desc" => $found_item['desc'] ?? "<p>Hiện tại chưa có mô tả chi tiết cho bất động sản <strong>{$found_item['name']}</strong>. Quý khách vui lòng liên hệ trực tiếp để nhận thông tin mới nhất.</p>",
    
    "amenities" => $found_item['amenities'] ?? ["Đang cập nhật tiện ích..."],
    
    "nearby" => $found_item['nearby'] ?? [
        ["name" => "Trung tâm hành chính", "dist" => "Gần bên"],
        ["name" => "Chợ / Siêu thị", "dist" => "500m"]
    ],

    // --- MÔI GIỚI ---
    "agent" => [
        "name"  => "Hotline Hỗ Trợ",
        "phone" => "0389.616.946",
        "img"   => "https://images.unsplash.com/photo-1557862921-37829c790f19?w=200&q=80",
        "zalo"  => "#"
    ]
];

// Lấy sản phẩm liên quan (Trừ sản phẩm đang xem)
$related_products = [];
foreach($houses as $h) {
    if($h['id'] != $product['id']) {
        $related_products[] = $h;
    }
    if(count($related_products) >= 4) break;
}
?>

<style>
    /* CSS MỚI CHO BẢNG THÔNG SỐ (SPECS GRID) */
    .specs-section { background: #f8f9fa; border: 1px solid #eee; border-radius: 12px; padding: 25px; margin: 25px 0; }
    .specs-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; row-gap: 30px; }
    .spec-item-v2 { display: flex; align-items: flex-start; gap: 15px; }
    .spec-icon-v2 { width: 40px; height: 40px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary); font-size: 18px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); flex-shrink: 0; }
    .spec-content-v2 { display: flex; flex-direction: column; }
    .spec-label { font-size: 13px; color: #777; margin-bottom: 4px; }
    .spec-value { font-size: 15px; font-weight: 700; color: #222; }

    /* Helper class để làm mờ chữ "Chưa có" */
    .text-muted-custom { color: #999 !important; font-weight: normal !important; font-style: italic; }

    /* Các CSS cũ giữ nguyên */
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
    .amenity-tag i { color: #28a745; }

    .nearby-table { width: 100%; border-collapse: collapse; font-size: 14px; }
    .nearby-table td { padding: 10px 0; border-bottom: 1px dashed #eee; }

    .sidebar-sticky { position: sticky; top: 100px; }
    .agent-box { background: white; border: 1px solid #eee; border-radius: 12px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); text-align: center; }
    .btn-action { display: flex; align-items: center; justify-content: center; gap: 10px; width: 100%; padding: 12px; border-radius: 6px; font-weight: bold; margin-bottom: 10px; cursor: pointer; transition: 0.2s; text-decoration: none; }
    .btn-call { background: var(--primary); color: white; border: none; }
    .btn-zalo { background: #0068ff; color: white; border: none; }

    @media (max-width: 992px) { .detail-container { grid-template-columns: 1fr; } .specs-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 600px) { .photo-gallery { height: 250px; grid-template-columns: 1fr; } .photo-sub { display: none; } .specs-grid { grid-template-columns: 1fr; } }
</style>

<div class="container">
    
    <div style="margin: 20px 0; font-size: 13px; color: #888;">
        <a href="<?php echo $project_folder ?? ''; ?>/trang-chu">Trang chủ</a> <span style="margin:0 5px">/</span> 
        <span style="color: #333;">Chi tiết: <?php echo $product['id']; ?></span>
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
                    <div style="font-size: 13px; color: #999;">Cập nhật: <?php echo $product['date_posted']; ?></div>
                </div>
            </div>

            <div class="content-block">
                <h3 class="block-title">Thông tin chi tiết</h3>
                <div class="specs-section">
                    <div class="specs-grid">
                        
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-ruler-combined"></i></div>
                            <div class="spec-content-v2">
                                <span class="spec-label">Diện tích đất</span>
                                <span class="spec-value <?php echo $product['area'] == 'Chưa có' ? 'text-muted-custom' : ''; ?>">
                                    <?php echo $product['area']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-vector-square"></i></div>
                            <div class="spec-content-v2">
                                <span class="spec-label">Diện tích sử dụng</span>
                                <span class="spec-value <?php echo $product['use_area'] == 'Chưa có' ? 'text-muted-custom' : ''; ?>">
                                    <?php echo $product['use_area']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-expand"></i></div>
                            <div class="spec-content-v2">
                                <span class="spec-label">Kích thước</span>
                                <span class="spec-value <?php echo $product['dim'] == 'Chưa có' ? 'text-muted-custom' : ''; ?>">
                                    <?php echo $product['dim']; ?>
                                </span>
                            </div>
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
                            <div class="spec-content-v2">
                                <span class="spec-label">Kết cấu</span>
                                <span class="spec-value <?php echo $product['floors'] == 'Chưa có' ? 'text-muted-custom' : ''; ?>">
                                    <?php echo $product['floors']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-compass"></i></div>
                            <div class="spec-content-v2">
                                <span class="spec-label">Hướng nhà</span>
                                <span class="spec-value <?php echo $product['direction'] == 'Chưa có' ? 'text-muted-custom' : ''; ?>">
                                    <?php echo $product['direction']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="far fa-compass"></i></div>
                            <div class="spec-content-v2">
                                <span class="spec-label">Hướng ban công</span>
                                <span class="spec-value <?php echo $product['balcony'] == 'Chưa có' ? 'text-muted-custom' : ''; ?>">
                                    <?php echo $product['balcony']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-file-contract"></i></div>
                            <div class="spec-content-v2">
                                <span class="spec-label">Pháp lý</span>
                                <span class="spec-value <?php echo $product['legal'] == 'Chưa có' ? 'text-muted-custom' : ''; ?>">
                                    <?php echo $product['legal']; ?>
                                </span>
                            </div>
                        </div>

                         <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-road"></i></div>
                            <div class="spec-content-v2">
                                <span class="spec-label">Đường trước nhà</span>
                                <span class="spec-value <?php echo $product['road'] == 'Chưa có' ? 'text-muted-custom' : ''; ?>">
                                    <?php echo $product['road']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-arrows-alt-h"></i></div>
                            <div class="spec-content-v2">
                                <span class="spec-label">Mặt tiền</span>
                                <span class="spec-value <?php echo $product['frontage'] == 'Chưa có' ? 'text-muted-custom' : ''; ?>">
                                    <?php echo $product['frontage']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="spec-item-v2">
                            <div class="spec-icon-v2"><i class="fas fa-couch"></i></div>
                            <div class="spec-content-v2">
                                <span class="spec-label">Nội thất</span>
                                <span class="spec-value <?php echo $product['furniture'] == 'Chưa có' ? 'text-muted-custom' : ''; ?>">
                                    <?php echo $product['furniture']; ?>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="content-block">
                <h3 class="block-title">Tiện ích</h3>
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
                    <h3 class="block-title">Tiện ích ngoại khu</h3>
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
                
                <a href="tel:<?php echo str_replace('.', '', $product['agent']['phone']); ?>" class="btn-action btn-call">
                    <i class="fas fa-phone-alt"></i> Gọi <?php echo $product['agent']['phone']; ?>
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
            <a href="<?php echo $project_folder ?? ''; ?>/chi-tiet/<?php echo $h['id']; ?>" class="real-estate-card" style="display: block; text-decoration: none; color: inherit;">
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
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>