<main class="main-category">
    <section class="movieByCategory">
        <div class="container">
            <h1>Movies in <?php echo $data['category']['genre']; ?></h1>
            <?php
            if (!empty($data['movies'])) {
                foreach ($data['movies'] as $movie) {
                    echo '
                    <div class="movie">
                        <p>ID: ' . $movie['movieID'] . '</p>
                        <p>Name: ' . $movie['name'] . '</p>
                        <p>Genre: ' . $movie['genre'] . '</p>
                        <p>Image: <img src="img/' . $movie['img'] . '" alt=""></p>
                        <p>Views: ' . $movie['view'] . '</p>
                    </div>
                ';
                }
            } else {
                echo '<p>No movies available in this category.</p>';
            }
            ?>
        </div>
    </section>

</main>