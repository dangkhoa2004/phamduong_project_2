<?php
require_once 'includes/config.php';
require_once 'includes/header.php';

// --- MOCK DATA MỚI ---

// 1. Nhà phố (Giữ nguyên)
$houses = [
    ["name" => "Biệt thự song lập Vạn Phúc City, View sông", "price" => "22.5 Tỷ", "area" => "200m²", "loc" => "Thủ Đức", "img" => "https://images.unsplash.com/photo-1613977257363-707ba9348227?w=500&q=80", "bed" => 4, "bath" => 5],
    ["name" => "Shophouse Sala Đại Quang Minh Kinh doanh tốt", "price" => "35 Tỷ", "area" => "140m²", "loc" => "Quận 2", "img" => "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=500&q=80", "bed" => 3, "bath" => 3],
    ["name" => "Nhà hẻm xe hơi Lê Văn Sỹ, Q.3, 4 Tầng", "price" => "12.8 Tỷ", "area" => "80m²", "loc" => "Quận 3", "img" => "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=500&q=80", "bed" => 3, "bath" => 2],
    ["name" => "Biệt thự sân vườn Thảo Điền", "price" => "55 Tỷ", "area" => "500m²", "loc" => "Quận 2", "img" => "https://images.unsplash.com/photo-1580587771525-78b9dba3b91d?w=500&q=80", "bed" => 5, "bath" => 6],
];

// 2. Căn hộ chung cư (MỚI)
$apartments = [
    ["name" => "Căn hộ 2PN Vinhomes Grand Park", "price" => "2.8 Tỷ", "area" => "69m²", "loc" => "Quận 9", "img" => "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=500&q=80", "bed" => 2, "bath" => 2],
    ["name" => "Penthouse The Metropole Thủ Thiêm", "price" => "18 Tỷ", "area" => "150m²", "loc" => "Quận 2", "img" => "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=500&q=80", "bed" => 3, "bath" => 3],
    ["name" => "Officetel Masteri Thảo Điền", "price" => "3.2 Tỷ", "area" => "45m²", "loc" => "Quận 2", "img" => "https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=500&q=80", "bed" => 1, "bath" => 1],
    ["name" => "Căn hộ Sunwah Pearl View sông Sài Gòn", "price" => "6.5 Tỷ", "area" => "90m²", "loc" => "Bình Thạnh", "img" => "https://images.unsplash.com/photo-1493809842364-78817add7ffb?w=500&q=80", "bed" => 2, "bath" => 2],
];

// 3. Dịch vụ (Giữ nguyên)
$services = [
    ["icon" => "fa-file-signature", "title" => "Sang tên Sổ Đỏ", "desc" => "Nhanh gọn, trọn gói"],
    ["icon" => "fa-ruler-combined", "title" => "Đo đạc địa chính", "desc" => "Cắm mốc, tách thửa"],
    ["icon" => "fa-home", "title" => "Hoàn công nhà ở", "desc" => "Hợp thức hóa sai phép"],
    ["icon" => "fa-balance-scale", "title" => "Tư vấn Luật", "desc" => "Giải quyết tranh chấp"],
];

// 4. Đánh giá khách hàng (MỚI - Tái sử dụng grid)
$reviews = [
    ["user" => "Nguyễn Văn A", "role" => "Nhà đầu tư", "text" => "Dịch vụ sang tên rất nhanh, chỉ 15 ngày là tôi đã nhận được sổ hồng mới. Rất uy tín!", "star" => 5],
    ["user" => "Trần Thị B", "role" => "Mua ở thực", "text" => "Nhân viên tư vấn nhiệt tình, dẫn đi xem nhà nhiều lần không ngại nắng mưa. Cảm ơn Đất Việt.", "star" => 5],
    ["user" => "Lê Hoàng C", "role" => "Chủ doanh nghiệp", "text" => "Đã ký gửi bán biệt thự tại đây, thanh khoản nhanh hơn tôi mong đợi. Phí môi giới hợp lý.", "star" => 4],
    ["user" => "Phạm Minh D", "role" => "Việt kiều", "text" => "Hỗ trợ pháp lý cho người nước ngoài mua nhà rất tốt. Tôi hoàn toàn yên tâm khi giao dịch.", "star" => 5],
];
?>

<div class="container">

    <section class="hero-banner">
        <div style="border-radius: var(--radius); overflow: hidden; position: relative;">
            <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200&q=80" style="width:100%; height:450px; object-fit:cover; filter: brightness(0.7);">
            
            <div class="hero-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; width: 85%;">
                <h1 style="text-transform: uppercase; letter-spacing: 1px;">Hệ thống Bất Động Sản & Pháp Lý Hàng Đầu</h1>
                <p style="margin-bottom: 25px; font-size: 16px; opacity: 0.9;">Hơn 5.000+ giao dịch thành công mỗi năm</p>
                
                <div class="banner-search-group">
                    <select>
                        <option>Loại hình BĐS</option>
                        <option>Nhà phố / Biệt thự</option>
                        <option>Căn hộ chung cư</option>
                        <option>Đất nền dự án</option>
                    </select>
                    <select>
                        <option>Khu vực</option>
                        <option>TP. Hồ Chí Minh</option>
                        <option>Hà Nội</option>
                        <option>Đồng Nai</option>
                    </select>
                    <select>
                        <option>Khoảng giá</option>
                        <option>Dưới 3 Tỷ</option>
                        <option>3 - 7 Tỷ</option>
                        <option>Trên 7 Tỷ</option>
                    </select>
                    <button><i class="fas fa-search"></i> TÌM KIẾM</button>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px;">
        <div class="service-grid">
            <div class="service-card" style="border-bottom: none; box-shadow: none; background: transparent;">
                <div style="font-size: 40px; font-weight: bold; color: var(--primary);">10+</div>
                <div style="color: #666;">Năm kinh nghiệm</div>
            </div>
            <div class="service-card" style="border-bottom: none; box-shadow: none; background: transparent;">
                <div style="font-size: 40px; font-weight: bold; color: var(--primary);">5000+</div>
                <div style="color: #666;">Khách hàng hài lòng</div>
            </div>
            <div class="service-card" style="border-bottom: none; box-shadow: none; background: transparent;">
                <div style="font-size: 40px; font-weight: bold; color: var(--primary);">1200+</div>
                <div style="color: #666;">Sổ đỏ đã trao tay</div>
            </div>
            <div class="service-card" style="border-bottom: none; box-shadow: none; background: transparent;">
                <div style="font-size: 40px; font-weight: bold; color: var(--primary);">24/7</div>
                <div style="color: #666;">Hỗ trợ pháp lý</div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px;">
        <h2 style="color: #333; margin-bottom: 20px;">Bất động sản theo khu vực</h2>
        <div class="region-grid">
            <div style="position: relative; border-radius: 8px; overflow: hidden;">
                <img src="https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?w=600&q=80" style="width:100%; height:100%; object-fit:cover;">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: white;">
                    <h3 style="margin:0">TP. HỒ CHÍ MINH</h3>
                    <span style="font-size: 13px;">2.500 tin đăng</span>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; gap: 15px;">
                <div style="flex: 1; position: relative; border-radius: 8px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1599708153386-5381a7dc26be?w=400&q=80" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold; text-shadow: 1px 1px 2px black;">HÀ NỘI</div>
                </div>
                <div style="flex: 1; position: relative; border-radius: 8px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1557688280-45920b78423f?w=400&q=80" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold; text-shadow: 1px 1px 2px black;">ĐÀ NẴNG</div>
                </div>
            </div>
             <div style="display: flex; flex-direction: column; gap: 15px;">
                <div style="flex: 1; position: relative; border-radius: 8px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1628624747186-a941c476b7ef?w=400&q=80" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold; text-shadow: 1px 1px 2px black;">BÌNH DƯƠNG</div>
                </div>
                <div style="flex: 1; position: relative; border-radius: 8px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1565610261709-6725227d6d5e?w=400&q=80" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold; text-shadow: 1px 1px 2px black;">ĐỒNG NAI</div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="color: #333; border-left: 5px solid var(--accent); padding-left: 10px;">NHÀ PHỐ - BIỆT THỰ</h2>
            <a href="#" style="color: var(--primary);">Xem tất cả <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="product-grid">
            <?php foreach($houses as $h): ?>
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
    </section>

    <section style="margin-bottom: 50px; background: #fff; padding: 30px 15px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
         <h2 style="text-align: center; margin-bottom: 30px; color: var(--primary); text-transform: uppercase;">Dịch Vụ Pháp Lý Chuyên Nghiệp</h2>
         <div class="service-grid">
             <?php foreach($services as $s): ?>
             <div class="service-card">
                 <div class="service-icon"><i class="fas <?php echo $s['icon']; ?>"></i></div>
                 <h4 style="margin-bottom: 10px;"><?php echo $s['title']; ?></h4>
                 <p style="font-size: 13px; color: #666; line-height: 1.5;"><?php echo $s['desc']; ?></p>
                 <a href="#" style="display:block; margin-top:10px; color:var(--accent); font-size:13px;">Chi tiết &rarr;</a>
             </div>
             <?php endforeach; ?>
         </div>
    </section>

    <section style="margin-bottom: 50px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="color: #333; border-left: 5px solid #007bff; padding-left: 10px;">CĂN HỘ CAO CẤP</h2>
            <a href="#" style="color: var(--primary);">Xem tất cả <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="product-grid">
            <?php foreach($apartments as $a): ?>
            <div class="real-estate-card">
                <div style="position: relative;">
                    <img src="<?php echo $a['img']; ?>" class="re-img">
                    <span style="position: absolute; bottom: 10px; left: 10px; background: rgba(0,0,0,0.6); color: white; padding: 2px 8px; font-size: 11px; border-radius: 3px;">
                        <i class="fas fa-map-marker-alt"></i> <?php echo $a['loc']; ?>
                    </span>
                </div>
                <div class="re-content">
                    <div class="re-title"><?php echo $a['name']; ?></div>
                    <span class="re-price" style="color: #007bff;"><?php echo $a['price']; ?></span>
                    <div class="re-info">
                        <span><i class="fas fa-vector-square"></i> <?php echo $a['area']; ?></span>
                        <span><i class="fas fa-bed"></i> <?php echo $a['bed']; ?> PN</span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section style="margin-bottom: 50px;">
        <h2 style="text-align: center; margin-bottom: 30px;">Khách hàng nói gì về Đất Việt?</h2>
        <div class="service-grid">
            <?php foreach($reviews as $r): ?>
            <div class="service-card" style="text-align: left; border-bottom: 3px solid #ddd;">
                <div style="color: #f59e0b; margin-bottom: 10px;">
                    <?php for($i=0; $i<$r['star']; $i++) echo '<i class="fas fa-star"></i>'; ?>
                </div>
                <p style="font-size: 13px; font-style: italic; color: #555; margin-bottom: 15px; min-height: 60px;">
                    "<?php echo $r['text']; ?>"
                </p>
                <div style="font-weight: bold; color: var(--primary);"><?php echo $r['user']; ?></div>
                <div style="font-size: 12px; color: #999;"><?php echo $r['role']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="news-wrapper" style="margin-bottom: 50px;">
        <div>
            <h3 style="margin-bottom: 20px; border-bottom: 2px solid #ddd; padding-bottom: 10px;">Tin tức thị trường</h3>
            <div style="display: flex; gap: 15px; margin-bottom: 15px; background: white; padding: 10px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=200&q=80" style="width: 100px; height: 80px; object-fit: cover; border-radius: 4px;">
                <div>
                    <h4 style="margin-bottom: 5px; font-size: 14px;"><a href="#">Thị trường BĐS 2025: Dòng tiền chảy về đâu?</a></h4>
                    <span style="font-size: 12px; color: #999;"><i class="far fa-clock"></i> 23/11/2025</span>
                </div>
            </div>
            <div style="display: flex; gap: 15px; margin-bottom: 15px; background: white; padding: 10px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=200&q=80" style="width: 100px; height: 80px; object-fit: cover; border-radius: 4px;">
                <div>
                    <h4 style="margin-bottom: 5px; font-size: 14px;"><a href="#">Luật đất đai sửa đổi: Những điểm mới cần biết</a></h4>
                    <span style="font-size: 12px; color: #999;"><i class="far fa-clock"></i> 20/11/2025</span>
                </div>
            </div>
             <div style="display: flex; gap: 15px; margin-bottom: 15px; background: white; padding: 10px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=200&q=80" style="width: 100px; height: 80px; object-fit: cover; border-radius: 4px;">
                <div>
                    <h4 style="margin-bottom: 5px; font-size: 14px;"><a href="#">Lãi suất vay mua nhà chạm đáy, cơ hội vàng?</a></h4>
                    <span style="font-size: 12px; color: #999;"><i class="far fa-clock"></i> 18/11/2025</span>
                </div>
            </div>
        </div>

        <div style="background: var(--primary); padding: 25px; border-radius: 8px; color: white;">
            <h3 style="margin-bottom: 10px; text-transform: uppercase;">Ký gửi nhà đất?</h3>
            <p style="font-size: 13px; margin-bottom: 20px; opacity: 0.9;">Để lại thông tin, chuyên viên của chúng tôi sẽ liên hệ trong 15 phút.</p>
            <form style="display: flex; flex-direction: column; gap: 12px;">
                <input type="text" placeholder="Họ tên của bạn" style="padding: 12px; border: none; border-radius: 4px;">
                <input type="text" placeholder="Số điện thoại" style="padding: 12px; border: none; border-radius: 4px;">
                <select style="padding: 12px; border: none; border-radius: 4px; color: #555;">
                    <option>Nhu cầu: Cần bán</option>
                    <option>Nhu cầu: Cần cho thuê</option>
                    <option>Nhu cầu: Tư vấn pháp lý</option>
                </select>
                <button style="padding: 12px; background: var(--accent); color: white; font-weight: bold; border: none; border-radius: 4px; cursor: pointer; margin-top: 10px;">GỬI YÊU CẦU NGAY</button>
            </form>
        </div>
    </section>

    <div style="text-align: center; margin-bottom: 60px; padding-top: 20px; border-top: 1px solid #eee;">
        <h4 style="color: #999; margin-bottom: 20px; font-size: 12px; text-transform: uppercase; letter-spacing: 2px;">Đối tác chiến lược</h4>
        <div style="display: flex; justify-content: center; gap: 40px; color: #ccc; font-size: 30px; flex-wrap: wrap;">
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fas fa-university"></i>
            <i class="fas fa-building"></i>
            <i class="fas fa-landmark"></i>
        </div>
    </div>

</div>

<?php require_once 'includes/footer.php'; ?>