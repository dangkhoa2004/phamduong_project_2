<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà Đất Phạm Dương</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-main">
                <div class="menu-toggle" id="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>

                <a href="<?php echo $project_folder ?? ''; ?>/trang-chu" class="logo">
                    <i class="fas fa-city"></i> PHAMDUONG<span>LAND</span>
                </a>

                <div class="header-right">
                    <div class="search-box-header">
                        <input type="text" placeholder="Nhập từ khóa tìm kiếm...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="hotline-header">
                        <span>Hotline hỗ trợ</span>
                        <strong>0389.616.946</strong>
                    </div>
                </div>

                <a href="tel:0389616946" style="display: block; color: var(--primary); font-size: 20px;" class="show-on-mobile-only">
                    <i class="fas fa-phone-volume"></i>
                </a>
            </div>
        </div>

        <nav class="nav-bar" id="nav-menu">
            <div class="container">
                <ul class="nav-list">
                    <li><a href="<?php echo $project_folder ?? ''; ?>/trang-chu"><i class="fas fa-home"></i> Trang chủ</a></li>

                    <li><a href="<?php echo $project_folder ?? ''; ?>/nha-dat-ban"><i class="fas fa-building"></i> Nhà đất bán</a></li>

                    <li><a href="<?php echo $project_folder ?? ''; ?>/nha-dat-thue"><i class="fas fa-key"></i> Nhà đất cho thuê</a></li>

                    <li><a href="<?php echo $project_folder ?? ''; ?>/dich-vu"><i class="fas fa-file-contract"></i> Dịch vụ pháp lý</a></li>

                    <li><a href="<?php echo $project_folder ?? ''; ?>/do-dac"><i class="fas fa-map-marked-alt"></i> Đo đạc bản đồ</a></li>

                    <li><a href="<?php echo $project_folder ?? ''; ?>/tin-tuc"><i class="fas fa-newspaper"></i> Tin tức</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <style>
        .show-on-mobile-only {
            display: none;
        }

        @media (max-width: 992px) {
            .show-on-mobile-only {
                display: block;
            }
        }
    </style>

    <main>