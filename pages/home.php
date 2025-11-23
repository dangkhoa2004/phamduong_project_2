<?php
$houses_data = get_products_by_type($conn, 'house');
$apartments_data = get_products_by_type($conn, 'apartment');
$stats_data = get_stats($conn);
$services_data = get_services($conn);
$reviews_data = get_reviews($conn);
$agents_data = get_agents($conn);
?>

<div class="container">

    <section class="hero-banner">
        <div style="border-radius: var(--radius); overflow: hidden; position: relative;">
            <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200&q=80" style="width:100%; height:500px; object-fit:cover; filter: brightness(0.6);">

            <div class="hero-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; width: 90%;">
                <h1 style="text-transform: uppercase; letter-spacing: 1px; font-size: 32px;">Hiện thực hóa giấc mơ an cư</h1>
                <p style="margin-bottom: 30px; font-size: 18px; opacity: 0.9;">Hệ sinh thái Bất động sản & Pháp lý toàn diện nhất Việt Nam</p>

                <div class="banner-search-group">
                    <select>
                        <option>Tất cả loại hình</option>
                        <option>Nhà phố</option>
                        <option>Đất nền</option>
                    </select>
                    <select>
                        <option>Toàn quốc</option>
                        <option>Hồ Chí Minh</option>
                        <option>Hà Nội</option>
                    </select>
                    <select>
                        <option>Mức giá</option>
                        <option>
                            < 3 Tỷ</option>
                        <option>3 - 10 Tỷ</option>
                    </select>
                    <button><i class="fas fa-search"></i> TÌM KIẾM</button>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 60px;">
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
            <?php foreach ($stats_data as $s): ?>
                <div style="text-align: center; border: none; box-shadow: none; background: transparent;">
                    <div style="font-size: 28px; font-weight: 900; color: #d4ac0d;"><?php echo $s['num']; ?></div>
                    <div style="color: #666; font-weight: 600; text-transform: uppercase; font-size: 13px;"><?php echo $s['label']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section style="margin-bottom: 60px;">
        <h2 style="color: #333; margin-bottom: 25px; font-weight: 800;">TÂM ĐIỂM THỊ TRƯỜNG</h2>
        <div class="region-grid">
            <div style="position: relative; border-radius: 8px; overflow: hidden;">
                <img src="/assets/img/hcm.jpg" style="width:100%; height:100%; object-fit:cover;">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(transparent, rgba(0,0,0,0.9)); padding: 30px; color: white;">
                    <h3 style="margin:0; font-size: 24px;">TP. HỒ CHÍ MINH</h3>
                    <span style="font-size: 14px; opacity: 0.8;"><i class="fas fa-map-marker-alt"></i> 2.500 dự án đang mở bán</span>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; gap: 15px;">
                <div style="flex: 1; position: relative; border-radius: 8px; overflow: hidden;">
                    <img src="/assets/img/hanoi.jpg" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position: absolute; bottom: 15px; left: 20px; color: white; font-weight: bold; text-shadow: 1px 1px 3px black; font-size: 18px;">HÀ NỘI</div>
                </div>
                <div style="flex: 1; position: relative; border-radius: 8px; overflow: hidden;">
                    <img src="/assets/img/haiphong.jpeg" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position: absolute; bottom: 15px; left: 20px; color: white; font-weight: bold; text-shadow: 1px 1px 3px black; font-size: 18px;">HẢI PHÒNG</div>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; gap: 15px;">
                <div style="flex: 1; position: relative; border-radius: 8px; overflow: hidden;">
                    <img src="/assets/img/dalat.jpg" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position: absolute; bottom: 15px; left: 20px; color: white; font-weight: bold; text-shadow: 1px 1px 3px black; font-size: 18px;">ĐÀ LẠT</div>
                </div>
                <div style="flex: 1; position: relative; border-radius: 8px; overflow: hidden;">
                    <img src="/assets/img/danang.jpg" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position: absolute; bottom: 15px; left: 20px; color: white; font-weight: bold; text-shadow: 1px 1px 3px black; font-size: 18px;">ĐÀ NẴNG</div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 60px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
            <h2 style="color: #333; border-left: 5px solid var(--accent); padding-left: 15px; font-weight: 800;">NHÀ PHỐ - BIỆT THỰ</h2>
            <a href="#" style="color: var(--primary); font-weight: 600;">Xem tất cả <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="product-grid">
            <?php foreach ($houses_data as $h): ?>
                <a href="<?php echo $project_folder ?? ''; ?>/chi-tiet/<?php echo $h['id']; ?>" class="real-estate-card">
                    <div style="position: relative;">
                        <img src="<?php echo $h['img']; ?>" class="re-img">
                        <span class="re-tag"><?php echo $h['loc']; ?></span>
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
    </section>

    <section style="margin-bottom: 60px; background: #000; padding: 40px; border-radius: 8px; text-align: center; color: white;">
        <h2 style="margin-bottom: 10px; color: var(--accent);">TRẢI NGHIỆM KHÔNG GIAN SỐNG ĐẲNG CẤP</h2>
        <p style="margin-bottom: 30px; opacity: 0.7;">Tham quan thực tế ảo dự án The Global City qua video 4K</p>
        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;">
            <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 8px;" src="https://www.youtube.com/embed/LXb3EKWsInQ?si=example" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section style="margin-bottom: 60px;">
        <h2 style="text-align: center; margin-bottom: 30px; color: var(--primary); text-transform: uppercase; font-weight: 800;">Giải Pháp Pháp Lý Toàn Diện</h2>
        <div class="service-grid">
            <?php foreach ($services_data as $s): ?>
                <div class="service-card">
                    <div class="service-icon"><i class="fas <?php echo $s['icon']; ?>"></i></div>
                    <h4 style="margin-bottom: 10px; font-size: 16px;"><?php echo $s['title']; ?></h4>
                    <p style="font-size: 13px; color: #666; line-height: 1.6; margin-bottom: 15px;"><?php echo $s['description']; ?></p>
                    <a href="#" style="color:var(--accent); font-weight: 600; font-size: 13px;">TƯ VẤN NGAY &rarr;</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section style="margin-bottom: 60px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
            <h2 style="color: #333; border-left: 5px solid #007bff; padding-left: 15px; font-weight: 800;">CĂN HỘ CAO CẤP</h2>
            <a href="#" style="color: var(--primary); font-weight: 600;">Xem tất cả <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="product-grid">
            <?php foreach ($apartments_data as $a): ?>
                <a href="<?php echo $project_folder ?? ''; ?>/chi-tiet/<?php echo $a['id']; ?>" class="real-estate-card" style="display: block; text-decoration: none; color: inherit;">
                    <div style="position: relative;">
                        <img src="<?php echo $a['img']; ?>" class="re-img">
                        <span style="position: absolute; bottom: 10px; left: 10px; background: rgba(0,0,0,0.7); color: white; padding: 4px 10px; font-size: 11px; border-radius: 4px;">
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
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section style="margin-bottom: 60px; background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1200&q=80'); background-size: cover; background-attachment: fixed; padding: 80px 20px; text-align: center; border-radius: 8px; position: relative;">
        <div style="background: rgba(15, 81, 50, 0.85); position: absolute; top:0; left:0; width:100%; height:100%; border-radius: 8px;"></div>
        <div style="position: relative; z-index: 2; color: white;">
            <h2 style="font-size: 32px; margin-bottom: 15px;">BẠN MUỐN BÁN NHÀ NHANH TRONG 30 NGÀY?</h2>
            <p style="font-size: 16px; margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">Với mạng lưới hơn 5.000 khách hàng tiềm năng, chúng tôi cam kết thanh khoản bất động sản của bạn với mức giá tốt nhất.</p>
            <a href="#" style="background: var(--accent, #d4af37); color: white; padding: 15px 40px; border-radius: 50px; font-weight: bold; font-size: 16px; text-decoration: none; display: inline-block; box-shadow: 0 5px 15px rgba(0,0,0,0.3);">KÝ GỬI NGAY</a>
        </div>
    </section>

    <section style="margin-bottom: 60px;">
        <h2 style="text-align: center; margin-bottom: 30px; font-weight: 800;">ĐỘI NGŨ CHUYÊN GIA</h2>
        <div class="product-grid">
            <?php foreach ($agents_data as $ag): ?>
                <div class="real-estate-card" style="text-align: center; padding: 20px 0;">
                    <div style="width: 120px; height: 120px; margin: 0 auto 15px; border-radius: 50%; overflow: hidden; border: 3px solid var(--accent);">
                        <img src="<?php echo $ag['img']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-size: 18px; margin-bottom: 5px; color: var(--primary);"><?php echo $ag['name']; ?></h4>
                    <div style="font-size: 13px; color: #999; margin-bottom: 10px;"><?php echo $ag['role']; ?></div>
                    <div style="font-weight: bold; color: #333;"><i class="fas fa-phone-alt" style="color: var(--accent);"></i> <?php echo $ag['phone']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section style="margin-bottom: 60px;">
        <h2 style="text-align: center; margin-bottom: 30px;">Khách hàng nói gì về chúng tôi?</h2>
        <div class="service-grid">
            <?php foreach ($reviews_data as $r): ?>
                <div class="service-card" style="text-align: left; border-bottom: 4px solid #eee; transition: 0.3s;">
                    <div style="color: #f59e0b; margin-bottom: 15px;">
                        <?php for ($i = 0; $i < $r['star']; $i++) echo '<i class="fas fa-star"></i>'; ?>
                    </div>
                    <p style="font-size: 14px; font-style: italic; color: #555; margin-bottom: 20px; min-height: 70px; line-height: 1.6;">
                        "<?php echo $r['review_text']; ?>"
                    </p>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div style="width: 40px; height: 40px; background: #ddd; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #555;">
                            <?php echo substr($r['user_name'], 0, 1); ?>
                        </div>
                        <div>
                            <div style="font-weight: bold; color: var(--primary); font-size: 14px;"><?php echo $r['user_name']; ?></div>
                            <div style="font-size: 12px; color: #999;"><?php echo $r['user_role']; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="news-wrapper" style="margin-bottom: 60px;">
        <div>
            <h3 style="margin-bottom: 20px; border-bottom: 2px solid #ddd; padding-bottom: 10px; text-transform: uppercase; font-size: 16px; font-weight: bold;">Tin tức thị trường</h3>
            <div style="display: flex; gap: 15px; margin-bottom: 15px; background: white; padding: 15px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=200&q=80" style="width: 120px; height: 80px; object-fit: cover; border-radius: 4px;">
                <div>
                    <h4 style="margin-bottom: 8px; font-size: 15px; line-height: 1.4;"><a href="#">Dự báo thị trường BĐS cuối năm 2025: Thời điểm vàng để bắt đáy?</a></h4>
                    <span style="font-size: 12px; color: #999;"><i class="far fa-clock"></i> 23/11/2025</span>
                </div>
            </div>
            <div style="display: flex; gap: 15px; margin-bottom: 15px; background: white; padding: 15px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=200&q=80" style="width: 120px; height: 80px; object-fit: cover; border-radius: 4px;">
                <div>
                    <h4 style="margin-bottom: 8px; font-size: 15px; line-height: 1.4;"><a href="#">Luật đất đai sửa đổi chính thức có hiệu lực: Người mua cần lưu ý gì?</a></h4>
                    <span style="font-size: 12px; color: #999;"><i class="far fa-clock"></i> 20/11/2025</span>
                </div>
            </div>
            <div style="display: flex; gap: 15px; margin-bottom: 15px; background: white; padding: 15px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=200&q=80" style="width: 120px; height: 80px; object-fit: cover; border-radius: 4px;">
                <div>
                    <h4 style="margin-bottom: 8px; font-size: 15px; line-height: 1.4;"><a href="#">Ngân hàng đồng loạt giảm lãi suất vay mua nhà: Cơ hội cho người trẻ</a></h4>
                    <span style="font-size: 12px; color: #999;"><i class="far fa-clock"></i> 18/11/2025</span>
                </div>
            </div>
        </div>

        <div style="background: var(--primary); padding: 30px; border-radius: 8px; color: white; height: fit-content;">
            <h3 style="margin-bottom: 15px; text-transform: uppercase; font-size: 18px;">Bạn cần hỗ trợ?</h3>
            <p style="font-size: 14px; margin-bottom: 25px; opacity: 0.9; line-height: 1.5;">Đội ngũ chuyên gia của chúng tôi sẵn sàng giải đáp mọi thắc mắc về pháp lý và giá cả.</p>
            <form style="display: flex; flex-direction: column; gap: 15px;">
                <input type="text" placeholder="Họ và tên" style="padding: 12px; border: none; border-radius: 4px; font-size: 14px;">
                <input type="text" placeholder="Số điện thoại" style="padding: 12px; border: none; border-radius: 4px; font-size: 14px;">
                <select style="padding: 12px; border: none; border-radius: 4px; color: #555; font-size: 14px;">
                    <option>Tôi muốn: Mua nhà</option>
                    <option>Tôi muốn: Ký gửi bán</option>
                    <option>Tôi muốn: Tư vấn pháp lý</option>
                </select>
                <button style="padding: 12px; background: var(--accent); color: white; font-weight: bold; border: none; border-radius: 4px; cursor: pointer; margin-top: 10px; font-size: 15px;">GỬI YÊU CẦU</button>
            </form>
            <div style="margin-top: 20px; font-size: 12px; text-align: center; opacity: 0.7;">
                <i class="fas fa-lock"></i> Thông tin của bạn được bảo mật tuyệt đối.
            </div>
        </div>
    </section>

    <div style="text-align: center; margin-bottom: 60px; padding-top: 40px; border-top: 1px solid #eee;">
        <h4 style="color: #bbb; margin-bottom: 30px; font-size: 13px; text-transform: uppercase; letter-spacing: 2px; font-weight: 600;">Đối tác tài chính chiến lược</h4>
        <div style="display: flex; justify-content: center; gap: 50px; color: #ddd; font-size: 35px; flex-wrap: wrap; align-items: center;">
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fas fa-university"></i>
            <i class="fas fa-building"></i>
            <i class="fas fa-landmark"></i>
            <i class="fab fa-cc-paypal"></i>
        </div>
    </div>

</div>