<?php include __DIR__ . '/includes/hero.php'; ?>

<?php include __DIR__ . '/includes/header.php'; ?>

<main>

    <h2 class="indexTitleCurrent">Current Movies</h2>

     <!-- mobile current airing -->
    <section class="current-movie-container">

        <?php
        include __DIR__ . '/assets/data.php';

        foreach ($current_movies as $title => $movie) { ?>
            <div class="current-movie-carousel">
                <a href="movie.php" class="movie-link">
                <img src="<?php echo $movie['poster']; ?>" alt="">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $movie['jp-title']; ?></p>
                <div class="carousel-line"></div>
                <p><?php echo implode(", ", $movie['genre']); ?></p>
                </a>
            </div>

        <?php
        }
        ?>

        </div>
    </section>

    <!-- desktop current airing -->
    <section class="current-movie-desktop-container">

        <?php
        include __DIR__ . '/assets/data.php';

        foreach ($current_movies as $title => $movie) { ?>
            <div class="current-movie-desktop-card">
                <a href="movie.php" class="movie-link">
                <img src="<?php echo $movie['poster']; ?>" alt="">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $movie['jp-title']; ?></p>
                <div class="desktop-line"></div>
                <p><?php echo implode(", ", $movie['genre']); ?></p>
                </a>
            </div>

        <?php
        }
        ?>

        </div>
    </section>
    

    <h2 class="indexTitleAiring">Airing Soon</h2>

     <!-- mobile airing soon -->
    <section class="airing-soon-container">

        <?php
        include __DIR__ . '/assets/data.php';

        foreach ($upcoming_movies as $title => $movie) { ?>
            <div class="airing-soon-carousel">
                <img src="<?php echo $movie['poster']; ?>" alt="">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $movie['jp-title']; ?></p>
                <div class="carousel-line"></div>
                <p><?php echo implode(", ", $movie['genre']); ?></p>
            </div>

        <?php
        }
        ?>
    </section>

    <!-- desktop airing soon -->
    <section class="airing-soon-desktop-container">
            <?php
        include __DIR__ . '/assets/data.php';

        foreach ($upcoming_movies as $title => $movie) { ?>
            <div class="airing-soon-desktop-card">
                <img src="<?php echo $movie['poster']; ?>" alt="">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $movie['jp-title']; ?></p>
                <div class="desktop-line"></div>
                <p><?php echo implode(", ", $movie['genre']); ?></p>
            </div>

        <?php
        }
        ?>
    </section>

    <div class="offer-container">
        <img src="/assets/images/popcorn.png" alt="Popcorn">

        <h2 class="indexTitle">Right now!</h2>

        <p> If you buy a ticket now, you can get a chance to win an exclusive customized popcorn bucket
            themed after you favorite movies and characters!</p>

        <p>*only available this week</p>
    </div>

    <div class="cta-container">
        <h2 class="indexTitle">HELLO MOVIE FAN!</h2>

        <p>Did you know; as a member of our news letter, you can not only updates about you favorite movies and latest news, BUT ALSO get exclusive deals?</p>

        <p>Sign up today and get 10% off on your next purchase!</p>

        <div class="cta-form">
            <input type="email" name="email" id="email" placeholder="youremail@example.com">
            <button type="submit" class="cta-button">JOIN!</button>
        </div>
    </div>

    <script src="/assets/carousel.js"></script>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>