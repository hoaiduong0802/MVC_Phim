<?php
$hasData = false;
foreach ($data['categories'] as $genre => $movies) {
    if (!empty($movies)) {
        $hasData = true;
        break;
    }
}
?>

<?php if ($hasData): ?>
    <main class="main-categorymovie">
        <div class="container">
            <h1>Movies by Category</h1>
            <?php foreach ($data['categories'] as $genre => $movies): ?>
                <?php if (!empty($movies)): ?>
                    <h2><?php echo $genre; ?></h2>
                    <section class="favorite-movies cinemaMovie">
                        <?php foreach ($movies as $movie): ?>
                            <div class="movie">
                                <img class="movieDes" src="img/<?php echo $movie['img']; ?>" alt="Movie 1" />
                                <h3 class="title"><a
                                        href="index.php?page=detail&id=<?php echo $movie['id']; ?>"><?php echo $movie['name']; ?></a>
                                </h3>
                                <p>ID: <?php echo $movie['id']; ?></p>
                                <p>Name: <?php echo $movie['name']; ?></p>
                                <p>Genre: <?php echo $movie['genre']; ?></p>
                                <p>Views: <?php echo $movie['view']; ?></p>
                                <div class="movie-preview">
                                    <div class="movie-preview-description">
                                        <div class="description-img">
                                            <img src="img/<?php echo $movie['img']; ?>" alt="Movie 1" />
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
                        <?php endforeach; ?>
                    </section>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </main>

<?php endif; ?>