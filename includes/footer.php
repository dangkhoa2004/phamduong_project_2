</main>
    
    <footer>
        <div class="container">
            <div class="footer-grid">
                
                <div>
                    <h4>Nhà Đất Phạm Dương</h4>
                    <p style="margin-bottom: 15px; line-height: 1.6;">
                        Đối tác tin cậy hàng đầu trong lĩnh vực pháp lý nhà đất và môi giới bất động sản chuyên nghiệp tại Việt Nam.
                    </p>
                    <ul style="list-style: none; padding: 0;">
                        <li><i class="fas fa-map-marker-alt" style="color:var(--accent)"></i> Ngô Gia Tự, Hải An, TP.Hải Phòng</li>
                        <li><i class="fas fa-phone" style="color:var(--accent)"></i> 0389.616.946</li>
                        <li><i class="fas fa-envelope" style="color:var(--accent)"></i> hotro@phamduong.com</li>
                    </ul>
                </div>
                
                <div>
                    <h4>VỀ CHÚNG TÔI</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="#">Giới thiệu chung</a></li>
                        <li><a href="#">Đội ngũ nhân sự</a></li>
                        <li><a href="#">Tuyển dụng</a></li>
                        <li><a href="#">Tin tức sự kiện</a></li>
                    </ul>
                </div>

                <div>
                    <h4>DỊCH VỤ CHÍNH</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="#">Ký gửi mua bán</a></li>
                        <li><a href="#">Dịch vụ làm sổ đỏ</a></li>
                        <li><a href="#">Tư vấn hoàn công</a></li>
                        <li><a href="#">Đo đạc địa chính</a></li>
                    </ul>
                </div>

                 <div>
                    <h4>MẠNG XÃ HỘI</h4>
                    <p style="margin-bottom: 15px;">Theo dõi chúng tôi để nhận tin nhà đất mới nhất.</p>
                    <div class="social-icons" style="font-size: 24px; display:flex; gap: 15px;">
                        <a href="#"><i class="fab fa-facebook" style="color:#1877f2"></i></a>
                        <a href="#"><i class="fab fa-youtube" style="color:#ff0000"></i></a>
                        <a href="#"><i class="fab fa-zalo" style="color:#0068ff"></i></a>
                        <a href="#"><i class="fab fa-tiktok" style="color:white"></i></a>
                    </div>
                </div>

            </div>
            
            <hr style="border-color: #333; margin: 40px 0 20px;">
            
            <div style="text-align: center; font-size: 13px; color: #777;">
                &copy; 2025 PhamDuong Project. Designed by dangkh0a.
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const navMenu = document.getElementById('nav-menu');

            if(menuBtn) {
                menuBtn.addEventListener('click', function() {
                    navMenu.classList.toggle('active');
                    const icon = menuBtn.querySelector('i');
                    if (navMenu.classList.contains('active')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                });
            }
        });
    </script>
</body>
</html>