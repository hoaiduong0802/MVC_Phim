<?php

// || Design Pattern to check data after connecting with database. || 

// $homeDataModal = new CategoryModal();
// $data = $homeDataModal->getCate();


// if ($data !== null) {
//     foreach ($data as $item) {
//         echo $item['id'] . " - " . $item['genre'] . "<br>"; //genre is a key of table 'category'
//     }
// } else {
//     echo "Something wrong";
// }

// || End || 


$homeCategoryModal = new CategoryModal();
$dataCategory = $homeCategoryModal->getCate();

$listProductModal = new ProductModal();
$dataProduct = $listProductModal->getProducts();

$listMoviePass = new ProductModal();
$dataMoviePass = $listMoviePass->getMoviePass();
function sortListId($data)
{
    uasort($data, function ($a, $b) {
        return $b['movieID'] <=> $a['movieID'];
    });
    return array_splice($data, 0, 3);
}
function sortListViews($data)
{
    uasort($data, function ($a, $b) {
        return $b['view'] <=> $a['view'];
    });
    return array_splice($data, 0, 3);
}
?>
<main>
    <section class="banner">
        <div class="swiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-banner">
                        <img src="img/mai.jpg" alt="">
                        <div class="hero-banner__content">
                            <div class="container">
                                <div class="hero-banner__content-calltoaction">
                                    <div class="infomation">
                                        <p class="category">
                                            Loạt phim
                                            <span style="color: #ffa700;">
                                                HOT
                                            </span>
                                        </p>
                                        <h1 class="title">
                                            MAI
                                        </h1>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem
                                            quidem placeat?
                                            Iste, eaque. Distinctio voluptas accusantium sint molestias et, quas illo
                                            quasi aliquid,
                                            sunt dolor minus vel quae consectetur.
                                        </p>
                                    </div>
                                    <div class="action">
                                        <div class="playmovie">
                                            <i class="fa-solid fa-play"></i>
                                            <a href="#">Phát</a>
                                        </div>
                                        <div class="anotherInfo">
                                            <i class="fa-solid fa-exclamation"></i>
                                            <a href="#">Thông tin khác</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-banner">
                        <img src="img/mai.jpg" alt="">
                        <div class="hero-banner__content">
                            <div class="container">
                                <div class="hero-banner__content-calltoaction">
                                    <div class="infomation">
                                        <p class="category">
                                            Loạt phim
                                            <span style="color: #ffa700;">
                                                HOT
                                            </span>
                                        </p>
                                        <h1 class="title">
                                            MAI
                                        </h1>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem
                                            quidem placeat?
                                            Iste, eaque. Distinctio voluptas accusantium sint molestias et, quas illo
                                            quasi aliquid,
                                            sunt dolor minus vel quae consectetur.
                                        </p>
                                    </div>
                                    <div class="action">
                                        <div class="playmovie">
                                            <i class="fa-solid fa-play"></i>
                                            <a href="#">Phát</a>
                                        </div>
                                        <div class="anotherInfo">
                                            <i class="fa-solid fa-exclamation"></i>
                                            <a href="#">Thông tin khác</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-banner">
                        <img src="img/mai.jpg" alt="">
                        <div class="hero-banner__content">
                            <div class="container">
                                <div class="hero-banner__content-calltoaction">
                                    <div class="infomation">
                                        <p class="category">
                                            Loạt phim
                                            <span style="color: #ffa700;">
                                                HOT
                                            </span>
                                        </p>
                                        <h1 class="title">
                                            MAI
                                        </h1>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem
                                            quidem placeat?
                                            Iste, eaque. Distinctio voluptas accusantium sint molestias et, quas illo
                                            quasi aliquid,
                                            sunt dolor minus vel quae consectetur.
                                        </p>
                                    </div>
                                    <div class="action">
                                        <div class="playmovie">
                                            <i class="fa-solid fa-play"></i>
                                            <a href="#">Phát</a>
                                        </div>
                                        <div class="anotherInfo">
                                            <i class="fa-solid fa-exclamation"></i>
                                            <a href="#">Thông tin khác</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="container">
        <section class="hot-genres">
            <h2>THỂ LOẠI</h2>
            <div class="swiper_category">
                <div class="swiper-wrapper">
                    <?php
                    $listCate = $dataCategory;
                    foreach ($listCate as $item) {
                        extract($item);
                        echo '
                <div class="swiper-slide">
                    <div class="genre">
                        <a href="index.php?page=category&id=' . $cateID . '">
                            <p>' . $genre . '</p>
                        </a>
                    </div>
                </div>
                ';
                    }
                    ?>
                </div>
            </div>
        </section>


        <section class="favorite-movies before-pb-180">
            <h2>DANH SÁCH PHIM</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($dataProduct as $movie) {
                        extract($movie);
                        echo '
                            <div class="swiper-slide">
                                <div class="movie">
                                    <img class="movieDes" src="img/' . $img . '" alt="Movie 1" />
                                    <h3 class="title"><a href="index.php?page=detail&id=' . $movieID . '">' . $name . '</a></h3>
                                    <div class="movie-preview">
                                        <div class="movie-preview-description">
                                            <div class="description-img">
                                                <img src="img/' . $img . '" alt="Movie 1" />
                                            </div>
                                        </div>
                                        <div class="movie-preview-controller">
                                            <div class="heading">
                                            <div class="movie-preview-leftSide">
                                                <a href="index.php?page=playmovie&id=' . $movieID . '&name=' . $name . '">
                                                    <i class="fa-solid fa-play"></i>
                                                </a>
                                                <i class="fa-solid fa-plus"></i>
                                                <i class="fa-solid fa-thumbs-up"></i>
                                            </div>
                                                <div class="movie-preview-rightSide">
                                                    <i class="fa-solid fa-angle-down"></i>
                                                </div>
                                            </div>
                                            <div class="middle">
                                                <div class="episodeNumber">
                                                    <span>"Tập N"</span>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <div class="progressBar">100%</div>
                                                <div class="processInfo">10/78ph</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="favorite-movies negative-mt-180">
            <h2>PHIM MỚI</h2>
            <div class="movie-grid">
                <?php
                $newSortList = sortListId($dataProduct);
                foreach ($newSortList as $data) {
                    extract($data);
                    echo '
                <div class="movie">
                    <img class="movieDes" src="img/' . $img . '" alt="Movie 1" />
                    <h3 class="title"><a href="index.php?page=detail&id=' . $movieID . '">' . $name . '</a></h3>
                    <div class="movie-preview">
                        <div class="movie-preview-description">
                            <div class="description-img">
                                <img src="img/' . $img . '" alt="Movie 1" />
                            </div>
                        </div>
                        <div class="movie-preview-controller">
                            <div class="heading">
                                <div class="movie-preview-leftSide">
                                    <i class="fa-solid fa-play"></i>
                                    <i class="fa-solid fa-plus"></i>
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                                <div class="movie-preview-rightSide">
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="middle">
                                <div class="episodeNumber">
                                    <span>"Tập N"</span>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="progressBar">100%</div>
                                <div class="processInfo">10/78ph</div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
                }
                ?>
            </div>
        </section>

        <section class="favorite-movies ">
            <h2>PHIM XEM NHIỀU</h2>
            <div class="movie-grid">
                <?php
                $sortListViews = sortListViews($dataProduct);
                // echo '<pre>';
                // print_r($sortListViews);
                // echo '</pre>';
                foreach ($sortListViews as $data) {
                    extract($data);
                    echo '
                        <div class="movie">
                            <img class="movieDes" src="img/' . $img . '" alt="Movie 1" />
                            <h3 class="title"><a href="index.php?page=detail&id=' . $movieID . '">' . $name . '</a></h3>
                            <div class="movie-preview">
                                <div class="movie-preview-description">
                                    <div class="description-img">
                                        <img src="img/' . $img . '" alt="Movie 1" />
                                    </div>
                                </div>
                                <div class="movie-preview-controller">
                                    <div class="heading">
                                        <div class="movie-preview-leftSide">
                                            <i class="fa-solid fa-play"></i>
                                            <i class="fa-solid fa-plus"></i>
                                            <i class="fa-solid fa-thumbs-up"></i>
                                        </div>
                                        <div class="movie-preview-rightSide">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <div class="middle">
                                        <div class="episodeNumber">
                                            <span>"Tập N"</span>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="progressBar">100%</div>
                                        <div class="processInfo">10/78ph</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    ';
                }
                ?>
            </div>
        </section>
        <section class="favorite-movies">
            <h2>LỰA CHỌN HÀNG ĐẦU CHO HÔM NAY</h2>
            <div class="movie-grid">
                <?php
                $sortListViews = sortListViews($dataProduct);
                foreach ($sortListViews as $data) {
                    extract($data);
                    echo '
                        <div class="movie">
                            <img class="movieDes" src="img/' . $img . '" alt="Movie 1" />
                            <h3 class="title"><a href="index.php?page=detail&id=' . $movieID . '">' . $name . '</a></h3>
                            <div class="movie-preview">
                                <div class="movie-preview-description">
                                    <div class="description-img">
                                        <img src="img/' . $img . '" alt="Movie 1" />
                                    </div>
                                </div>
                                <div class="movie-preview-controller">
                                    <div class="heading">
                                        <div class="movie-preview-leftSide">
                                            <i class="fa-solid fa-play"></i>
                                            <i class="fa-solid fa-plus"></i>
                                            <i class="fa-solid fa-thumbs-up"></i>
                                        </div>
                                        <div class="movie-preview-rightSide">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <div class="middle">
                                        <div class="episodeNumber">
                                            <span>"Tập N"</span>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="progressBar">100%</div>
                                        <div class="processInfo">10/78ph</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    ';
                }
                ?>
            </div>
        </section>
        <section class="favorite-movies before-pb-180">
            <h2>MỚI TRÊN BHZ</h2>
            <div class="swiper_2">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($dataProduct as $movie) {
                        extract($movie);
                        echo '
                            <div class="swiper-slide">
                                <div class="movie">
                                    <img class="movieDes" src="img/' . $img . '" alt="Movie 1" />
                                    <h3 class="title"><a href="index.php?page=detail&id=' . $movieID . '">' . $name . '</a></h3>
                                    <div class="movie-preview">
                                        <div class="movie-preview-description">
                                            <div class="description-img">
                                                <img src="img/' . $img . '" alt="Movie 1" />
                                            </div>
                                        </div>
                                        <div class="movie-preview-controller">
                                            <div class="heading">
                                                <div class="movie-preview-leftSide">
                                                    <i class="fa-solid fa-play"></i>
                                                    <i class="fa-solid fa-plus"></i>
                                                    <i class="fa-solid fa-thumbs-up"></i>
                                                </div>
                                                <div class="movie-preview-rightSide">
                                                    <i class="fa-solid fa-angle-down"></i>
                                                </div>
                                            </div>
                                            <div class="middle">
                                                <div class="episodeNumber">
                                                    <span>"Tập N"</span>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <div class="progressBar">100%</div>
                                                <div class="processInfo">10/78ph</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        ';
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="moviePass negative-mt-180">
            <!--  -->
            <h2>BHZ Movie Pass</h2>
            <div class="moviePass__contains">
                <?php
                // echo '<pre>';
                // print_r($dataMoviePass);
                // echo '<pre>';
                foreach ($dataMoviePass as $data) {
                    extract($data);
                    echo '
                    <div class="moviePass__contains-defind">
                        <a href="index.php?page=cart&price=' . $price . '&img=' . $img . '&expiredAt=' . $expiredAt . '">
                            <img src="img/' . $img . '" alt="">
                        </a>
                    </div>';
                }
                ?>
                <!-- <div class="moviePass__contains-silver">
                    <a href="index.php?page=cart">
                        <img src="img/silver.webp" alt="">
                    </a>
                </div>
                <div class="moviePass__contains-gold">
                    <a href="index.php?page=cart">
                        <img src="img/gold.webp" alt="">
                    </a>
                </div>
                <div class="moviePass__contains-platium">
                    <a href="index.php?page=cart">
                        <img src="img/platium.webp" alt="">
                    </a>
                </div> -->
            </div>
        </section>
    </div>

</main>