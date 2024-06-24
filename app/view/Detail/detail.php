<section class="detailMovie">
    <div class="container">
        <div class="detailMovie__title">
            <h2 class="title">Chi Tiết Phim</h2>
        </div>
        <div class="detailMovie__wrapper">
            <div class="detailMovie__wrapper-mainwrapper">
                <?php if (isset($name)): ?>
                    <div class="movie">
                        <img src="img/<?= $img ?>" alt="<?= $name ?>">
                        <div class="movie-info">
                            <h3><?= $name ?></h3>
                            <p>Thể loại: <?= $genre ?></p>
                            <p>Lượt Xem: <?= $view ?></p>
                            <p>Ngôn ngữ: Viet Nam</p>
                            <p>Chất lượng: HD</p>
                            <p>Tổng số tập: 1</p>
                            <p>Trạng thái: Full</p>
                            <p>Đạo diễn: Lý Hải - Minh Hà</p>
                            <p>Năm sản xuất: 2024</p>
                            <p>Thời lượng: 119 Phút</p>
                            <div class="movie-info-rating">
                                <p>Đánh giá phim: (4.0 sao / 6 đánh giá)</p>
                                <div class="star-component">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cast">
                        <div class="swiper_cast">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="img/cast/1.jpg" alt="Actor 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/cast/2.jpg" alt="Actor 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/cast/1.jpg" alt="Actor 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/cast/2.jpg" alt="Actor 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/cast/1.jpg" alt="Actor 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/cast/2.jpg" alt="Actor 1">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <p>Something went wrong.</p>
                <?php endif; ?>
            </div>
            <div class="detailMovie__wrapper-hotmovie">
                <div class="uptrendMovie">

                </div>
                <div class="uptrendEpisode">

                </div>
            </div>
        </div>

    </div>
</section>

<section class="favorite-movies">
    <div class="container">
        <h3>Có thể bạn sẽ thích</h3>
        <div class="movie-grid">
            <?php
            // $relatedProducts = array_slice($relatedProducts, $movieExist,2);
            // echo "<pre>";
            // print_r($currentMovieIndex = array_search($movieExist, array_column($relatedProducts, 'movieID')));
            // echo "</pre>";
            $movieExist = $movieID;
            $currentMovieIndex = array_search($movieExist, array_column($relatedProducts, 'movieID'));
            if ($currentMovieIndex !== false) {
                array_splice($relatedProducts, $currentMovieIndex, 1);
            }
            foreach ($relatedProducts as $data) {
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
    </div>
</section>