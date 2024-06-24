<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Hub</title>

    <link rel="stylesheet" href="public/css/_reset.css">
    <link rel="stylesheet" href="public/css/fonts.css">
    <link rel="stylesheet" href="public/css/boostrap-bundle/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/fontawesome-bundle/css/all.min.css">
    <link rel="stylesheet" href="public/css/swiper-bundle/swiper-bundle.min.css">
    <link rel="stylesheet" href="public/css/style.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <a href="./" class="logo"><img src="img/logo.png" alt="BHZ Logo"></a>
            <nav>
                <ul>
                    <li><a href="index.php?page=index">Home</a></li>
                    <li><a href="index.php?page=genre">Movies</a></li>
                    <li><a href="index.php?page=tvshow">TV Shows</a></li>
                    <li><a href="index.php?page=blog">Blog</a></li>
                    <li><a href="index.php?page=blog">Danh sách của tôi</a></li>
                    <li><a href="index.php?page=blog">Duyệt tìm theo ngôn ngữ</a></li>
                    <li><a href="index.php?page=blog">Duyệt tìm theo khu vực</a></li>
                    <!-- <li><a href="index.php?page=signin">Sign In</a></li> -->
                </ul>
            </nav>
            <div class="cta">
                <ul>
                    <li class="lookingUp">
                        <input type="text" placeholder="Tìm kiếm...">
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                    <li class="bellNoti">
                        <a href="#"><i class="fa-solid fa-bell"></i></a>
                        <div class="bell-notification">
                            <div class="noti-1">
                                <a href="#">
                                    <div class="img">
                                        <img src="img/mai.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="up-trend">Nội dung mới</div>
                                        <div class="up-trend-title">Mô tả cho phần nội dung của thông báo. Tối đa 2
                                            dòng, nếu nhiều hơn sẽ</div>
                                        <div class="up-trend-time">Cách đây <span>2 tuần</span></div>
                                    </div>
                                </a>
                            </div>
                            <hr style="color: gray;">
                            <div class="noti-2">
                                <a href="#">
                                    <div class="img">
                                        <img src="img/mai.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="up-trend">Nội dung mới</div>
                                        <div class="up-trend-title">Mô tả cho phần nội dung của thông báo. Tối đa 2
                                            dòng, nếu nhiều hơn sẽ</div>
                                        <div class="up-trend-time">Cách đây <span>2 tuần</span></div>
                                    </div>
                                </a>
                            </div>
                            <hr style="color: gray;">
                            <div class="noti-3">
                                <a href="#">
                                    <div class="img">
                                        <img src="img/mai.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="up-trend">Nội dung mới</div>
                                        <div class="up-trend-title">Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Labore fugit facere vel veniam amet dicta natus sapiente tempore atque
                                            inventore eius, consequuntur obcaecati sint veritatis sit reprehenderit nisi
                                            eum temporibus.</div>
                                        <div class="up-trend-time">Cách đây <span>2 tuần</span></div>
                                    </div>
                                </a>
                            </div>
                            <hr style="color: gray;">
                            <div class="noti-4">
                                <a href="#">
                                    <div class="img">
                                        <img src="img/mai.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="up-trend">Nội dung mới</div>
                                        <div class="up-trend-title">Mô tả cho phần nội dung của thông báo. Tối đa 2
                                            dòng, nếu nhiều hơn sẽ</div>
                                        <div class="up-trend-time">Cách đây <span>2 tuần</span></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="userMenu">
                        <?php
                        if (isset($_SESSION['name'])) {
                            echo '<a href="#"><i class="fa-solid fa-user"></i></a>';
                            echo '<div class="user-dropdown">';
                            echo '<span>Xin chào, ' . $_SESSION['name'] . '</span>';
                            echo '<a href="index.php?page=signout" class="btn btn-primary">Đăng xuất</a>';
                            echo '</div>';
                        } else {
                            echo '<a href="index.php?page=login"><i class="fa-solid fa-user"></i></a>';
                        }
                        ?>
                    </li>
                    <li>
                        <a href="index.php?page=cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>