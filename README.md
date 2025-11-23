# PHAMDUONG LAND – Website Bất Động Sản

## Giới thiệu dự án

**PHAMDUONG LAND** là website bất động sản chuyên cung cấp thông tin mua bán, cho thuê và đầu tư các loại hình nhà đất, căn hộ, biệt thự cao cấp tại các tỉnh thành lớn như TP. Hồ Chí Minh, Hà Nội, Đà Lạt, Hải Phòng, Đà Nẵng...

Dự án hướng tới việc xây dựng một nền tảng trực quan, hiện đại và dễ sử dụng, giúp khách hàng nhanh chóng tìm kiếm và tiếp cận các sản phẩm bất động sản phù hợp với nhu cầu.
<img src="assets/img/banner.png" alt="Villa Quận 9" />
---

## Mục tiêu

* Giới thiệu và quảng bá các dự án bất động sản uy tín.
* Hỗ trợ khách hàng tìm kiếm, so sánh và liên hệ nhanh chóng.
* Tăng độ tin cậy thương hiệu PHAMDUONG LAND trên thị trường.
* Tối ưu trải nghiệm người dùng trên cả desktop và mobile.

---

## Công nghệ sử dụng (đề xuất)

* **Frontend**: HTML5, CSS3, JavaScript, TailwindCSS / Bootstrap
* **Backend**: PHP (Laravel) hoặc Node.js
* **Database**: MySQL / PostgreSQL
* **Server**: Apache / Nginx
* **Hosting**: VPS hoặc Shared Hosting

---

## Cấu trúc giao diện chính

### 1. Header

* Logo PHAMDUONG LAND
* Menu điều hướng:

  * Trang chủ
  * Nhận định
  * Nhà đất cho thuê
  * Dịch vụ pháp lý
  * Tin tức
* Thanh tìm kiếm nhanh
* Hotline hỗ trợ

---

### 2. Banner chính (Hero Section)

* Hình ảnh bất động sản nổi bật
* Thông điệp:

  > "Hiện thực hóa giấc mơ an cư"
* Bộ lọc tìm kiếm:

  * Từ khóa
  * Khu vực
  * Mức giá
  * Nút tìm kiếm

---

### 3. Thống kê nổi bật

* 12+ Năm kinh nghiệm
* 5.000+ Giao dịch thành công
* 1.200+ Sổ đỏ trao tay
* Top 10 sàn BĐS uy tín 2024

---

### 4. Tâm điểm thị trường

Hiển thị các khu vực nổi bật:

* TP. Hồ Chí Minh
* Hà Nội
* Đà Lạt
* Hải Phòng
* Đà Nẵng

---

### 5. Danh mục Nhà phố - Biệt thự

* Danh sách sản phẩm bất động sản dạng card:

  * Hình ảnh
  * Tiêu đề
  * Giá bán
  * Diện tích
  * Vị trí
  * Nút xem chi tiết

---

### 6. Video trải nghiệm không gian sống

* Video giới thiệu dự án nổi bật
* Tiêu đề lớn tạo cảm hứng

---

### 7. Giải pháp pháp lý toàn diện

Các dịch vụ:

* Sang tên sổ đỏ
* Đo đạc chính xác
* Hoàn công chuẩn
* Tư vấn luật

---

### 8. Căn hộ cao cấp

Hiển thị các căn hộ cao cấp kèm giá bán và thông tin cơ bản.

---

### 9. Kêu gọi hành động (CTA)

Phần banner:

> Bạn muốn bán nhà nhanh trong 30 ngày?

Nút: **Ký gửi ngay**

---

### 10. Đội ngũ chuyên gia

* Danh sách nhân sự
* Hình ảnh đại diện
* Tên và số điện thoại

---

### 11. Đánh giá khách hàng

Hiển thị các đánh giá 5 sao về dịch vụ

---

### 12. Tin tức thị trường

* Bài viết cập nhật:

  * Dự báo thị trường BĐS
  * Luật đất đai
  * Xu hướng đầu tư

---

### 13. Form hỗ trợ khách hàng

* Họ và tên
* Số điện thoại
* Nhu cầu
* Nút gửi yêu cầu

---

### 14. Footer

* Thông tin công ty
* Liên hệ
* Mạng xã hội
* Bản quyền

---

## Tính năng chính

* Tìm kiếm bất động sản theo khu vực và giá
* Hiển thị danh sách sản phẩm theo loại
* Xem chi tiết sản phẩm
* Gửi yêu cầu tư vấn
* Tích hợp video quảng bá
* Hiển thị đánh giá khách hàng
* Quản lý tin tức thị trường

---

## Môi trường chạy dự án

### Nền tảng

Dự án được xây dựng và chạy trên môi trường **XAMPP** với các thành phần:

* Apache Web Server
* PHP 7.4+ / 8.x
* MySQL / MariaDB

Dự án hoạt động theo mô hình website PHP thuần (PHP Native), không sử dụng framework.

---

## Cấu trúc dự án thực tế

Dựa trên cấu trúc bạn cung cấp, project được tổ chức như sau:

```
phamduong-land/
├── assets/
│   ├── css/           # File CSS giao diện
│   ├── img/           # Hình ảnh website
│   └── js/            # File JavaScript
│
├── includes/
│   ├── config.php     # Cấu hình chung hệ thống
│   ├── data.php       # Dữ liệu tĩnh hoặc xử lý dữ liệu
│   ├── db.php         # Kết nối cơ sở dữ liệu
│   ├── header.php     # Header dùng chung
│   └── footer.php     # Footer dùng chung
│
├── pages/
│   ├── home.php       # Trang chủ
│   └── detail.php     # Trang chi tiết bất động sản
│
├── .gitattributes
├── .htaccess          # Cấu hình rewrite URL
├── index.php          # File điều hướng chính
└── README.md          # Tài liệu dự án
```

---

## Vai trò từng thành phần

### 📁 assets/

Chứa toàn bộ tài nguyên giao diện:

* css/: style layout, responsive
* img/: ảnh banner, sản phẩm, icon
* js/: hiệu ứng, slider, validation

### 📁 includes/

Chứa các file dùng chung:

* config.php: thông số hệ thống (base_url, timezone,...)
* db.php: kết nối MySQL
* data.php: xử lý dữ liệu hiển thị
* header.php: phần đầu trang
* footer.php: phần cuối trang

### 📁 pages/

* home.php: nội dung trang chủ
* detail.php: trang chi tiết sản phẩm

### index.php

File trung tâm, điều hướng route:

```php
<?php
$page = $_GET['page'] ?? 'home';
include "includes/header.php";
include "pages/$page.php";
include "includes/footer.php";
?>
```

---

## Hướng dẫn cài đặt & chạy bằng XAMPP

### Bước 1: Cài đặt XAMPP

Tải và cài đặt tại:
[https://www.apachefriends.org](https://www.apachefriends.org)

### Bước 2: Đưa dự án vào htdocs

Copy thư mục dự án vào:

```
C:/xampp/htdocs/phamduong-land
```

### Bước 3: Khởi động server

Mở XAMPP Control Panel và Start:

* Apache
* MySQL

### Bước 4: Truy cập website

Mở trình duyệt:

```
http://localhost/phamduong-land/
```

---

## Cấu hình kết nối CSDL (includes/db.php)

```php
<?php
$conn = new mysqli('localhost', 'root', '', 'phamduong_land');
if ($conn->connect_error) {
    die('Kết nối thất bại: ' . $conn->connect_error);
}
?>
```

---

## Cấu trúc URL sử dụng

* Trang chủ:
  [http://localhost/phamduong-land/](http://localhost/phamduong-land/)

* Trang chi tiết:
  [http://localhost/phamduong-land/?page=detail&id=1](http://localhost/phamduong-land/?page=detail&id=1)

---

## Quy ước thêm ảnh dự án

Thêm ảnh vào thư mục:

```
assets/img/projects/
```

Ví dụ:

```html
<img src="assets/img/projects/villa-01.jpg" alt="Villa Quận 9" />
```

---

## Hướng dẫn phát triển tiếp

* Tạo thêm trang trong pages/
* Cập nhật menu trong header.php
* Load dữ liệu động qua MySQL

---

## Checklist triển khai thực tế

* [x] Cấu trúc PHP chuẩn
* [x] XAMPP hoạt động
* [ ] Upload ảnh thật
* [ ] Kết nối database đầy đủ
* [ ] Thêm trang quản trị

---

## Hướng dẫn cài đặt

```bash
# Clone project
git clone https://github.com/your-repo/phamduong-land.git

# Cài đặt dependencies
npm install

# Chạy dự án
npm run dev
```

---

## Cấu trúc thư mục (gợi ý)

```
phamduong-land/
├── public/
│   ├── images/
│   ├── css/
│   └── js/
├── src/
│   ├── components/
│   ├── pages/
│   └── assets/
├── database/
├── routes/
└── README.md
```

---

## Định hướng phát triển

* Tích hợp bản đồ Google Maps
* Bộ lọc nâng cao theo diện tích, pháp lý
* Hệ thống quản trị (Admin Panel)
* Quản lý bài đăng và khách hàng
* Hỗ trợ đăng tin dành cho môi giới

---

## Đóng góp

Mọi đóng góp vui lòng gửi Pull Request hoặc liên hệ trực tiếp với PHAMDUONG LAND.

---

## Thông tin liên hệ

* Website: PHAMDUONG LAND
* Hotline: 0386.816.468
* Email: [contact@phamduongland.vn](mailto:contact@phamduongland.vn)

---

## Bản quyền

© 2025 PHAMDUONG LAND. All rights reserved.

---

# PHẦN MỞ RỘNG – TÀI LIỆU README CHI TIẾT (HỖ TRỢ HÌNH ẢNH DỰ ÁN)

## 1. Tổng quan trực quan dự án

Website được thiết kế theo phong cách hiện đại, tập trung vào hình ảnh và trải nghiệm người dùng, phù hợp với lĩnh vực bất động sản cao cấp.

Các điểm nhấn giao diện:

* Banner lớn với hình ảnh villa, biệt thự và cảnh quan cao cấp
* Màu sắc chủ đạo: Xanh lá đậm – Vàng ánh kim – Trắng
* Phong cách: Sang trọng, chuyên nghiệp, dễ nhìn

---

## 2. Bộ ảnh giao diện (Screenshots / Gallery)

Khi thêm ảnh vào dự án, bạn có thể bổ sung vào README theo cấu trúc sau:

### 2.1 Trang chủ

```markdown
![Trang chủ PHAMDUONG LAND](images/homepage.png)
```

Mô tả:

* Banner tìm kiếm bất động sản
* Các khu vực nổi bật
* Danh sách sản phẩm

### 2.2 Danh sách bất động sản

```markdown
![Danh sách sản phẩm](images/product-list.png)
```

### 2.3 Chi tiết bất động sản

```markdown
![Chi tiết sản phẩm](images/product-detail.png)
```

### 2.4 Khu vực tin tức

```markdown
![Tin tức thị trường](images/news-section.png)
```

### 2.5 Form liên hệ

```markdown
![Form liên hệ](images/contact-form.png)
```

---

## 3. Chuẩn đặt tên và quản lý hình ảnh

Khuyến nghị cấu trúc thư mục ảnh:

```
public/images/
├── banner/
├── products/
├── team/
├── services/
├── testimonials/
└── ui/
```

Quy tắc đặt tên file:

* homepage-banner.jpg
* product-villa-01.jpg
* team-pham-duong.jpg
* service-legal.jpg

---

## 4. Hướng dẫn chèn ảnh vào README

Ví dụ chuẩn:

```markdown
### Giao diện trang chủ
![Trang chủ](./public/images/ui/trang-chu.png)
```

Hoặc dùng HTML:

```html
<img src="./public/images/ui/trang-chu.png" alt="Trang chủ" width="100%" />
```

---

## 5. Mô tả chi tiết từng phân hệ

### 5.1 Module Trang Chủ

* Slider banner
* Bộ lọc tìm kiếm nâng cao
* Thống kê số liệu
* Sản phẩm nổi bật

### 5.2 Module Bất Động Sản

* Lọc theo: khu vực, giá, diện tích, loại hình
* Phân trang
* Sắp xếp theo giá hoặc độ ưu tiên

### 5.3 Module Dịch Vụ Pháp Lý

* Giới thiệu dịch vụ
* Hình ảnh minh họa
* Biểu mẫu tư vấn nhanh

### 5.4 Module Tin Tức

* Danh sách bài viết
* Phân loại theo chủ đề
* Hỗ trợ SEO

### 5.5 Module Đội Ngũ

* Hồ sơ nhân sự
* Hình ảnh
* Thông tin liên hệ

---

## 6. Tiêu chuẩn UI/UX

* Responsive 100%
* Chuẩn UX cho bất động sản
* Tối ưu tốc độ tải ảnh (lazy load)
* Tương thích Chrome, Firefox, Edge

---

## 7. Quy chuẩn SEO

* Thẻ meta title & description
* Tối ưu URL thân thiện
* Sitemap.xml
* Schema bất động sản
* Thẻ ALT cho ảnh

---

## 8. Hướng dẫn triển khai hình ảnh thực tế

Sau khi bạn thêm ảnh dự án, README sẽ có dạng:

```markdown
## Hình ảnh thực tế dự án
![Villa Quận 9](./public/images/projects/villa-q9-01.jpg)
![Căn hộ Thủ Đức](./public/images/projects/can-ho-thu-duc.jpg)
![Biệt thự Đà Lạt](./public/images/projects/biet-thu-da-lat.jpg)
```

---

## 9. Kịch bản trình bày dự án với khách hàng

README có thể dùng như tài liệu showroom online:

* Giới thiệu thương hiệu
* Trình chiếu sản phẩm
* Mô tả chi tiết
* Thông tin liên hệ

---

## 10. Checklist khi bàn giao website

* [x] Giao diện responsive
* [x] Tối ưu ảnh
* [x] SEO cơ bản
* [x] Tài liệu README
* [ ] Thêm hình ảnh thật từ chủ đầu tư
* [ ] Video dự án thực tế

---

Nếu bạn muốn, tôi có thể:

* Chuẩn hóa README theo tiêu chuẩn GitHub Professional
* Viết phiên bản tiếng Anh
* Tạo mục trình bày "Bộ ảnh dự án" chuyên nghiệp
* Chèn mô tả kỹ thuật cho lập trình viên hoặc tài liệu marketing

Chỉ cần gửi thêm ảnh, tôi sẽ cập nhật README cho bạn ngay.
