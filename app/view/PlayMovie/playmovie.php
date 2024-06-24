<?php
$name = $_GET['name'];
?>
<main class="mainPlayvideo">
    <section class="playVideo">
        <div class="container">
            <h1>Xem Phim <?= $name ?></h1>
            <div id="videoContainer" class="videoContainer" style="display: none;">
                <video id="videoElement" width="600" controls>
                    <source src="video/Demo_DuocMat.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <button id="playButton">Play Video</button>
        </div>
    </section>
</main>