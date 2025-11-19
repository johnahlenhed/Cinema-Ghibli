<?php include __DIR__ . '/includes/header.php'; ?>

<?php include __DIR__ . '/includes/hero.php'; ?>

<main>

    <h1>Welcome to Cinema Ghibli</h1>

    <a href="movie.php">View Movie Details</a>

    <h2>Current Movies</h2>

    <section class="current-movie-container">

        <?php
        include __DIR__ . '/assets/data.php';

        foreach ($current_movies as $title => $movie) { ?>
            <div class="current-movie-carousel">
                <img src="<?php echo $movie['poster']; ?>" alt="">
                <h3><?php echo $title; ?></h3>
                <p>Japanese Title: <?php echo $movie['jp-title']; ?></p>
                <p>Genre: <?php echo implode(", ", $movie['genre']); ?></p>
            </div>

        <?php
        }
        ?>

        </div>
    </section>

    <h2>Airing Soon</h2>

    <section class="airing-soon-container">

        <?php
        include __DIR__ . '/assets/data.php';

        foreach ($upcoming_movies as $title => $movie) { ?>
            <div class="airing-soon-carousel">
                <img src="<?php echo $movie['poster']; ?>" alt="">
                <h3><?php echo $title; ?></h3>
                <p>Japanese Title: <?php echo $movie['jp-title']; ?></p>
                <p>Genre: <?php echo implode(", ", $movie['genre']); ?></p>
            </div>

        <?php
        }
        ?>
    </section>

    <div class="offer-container">
        <img src="/assets/images/popcorn.png" alt="Popcorn">

        <h2>Right now!</h2>

        <p> If you buy a ticket now, you can get a chance to win an exclusive customized popcorn bucket 
            themed after you favorite movies and characters!</p>

        <p>*only available this week</p>
    </div>

    <div class="cta-container">
        <h2>HELLO MOVIE FAN!</h2>

        <p>Did you know; as a member of our news letter, you can not only updates about you favorite movies and latest news, BUT ALSO get exclusive deals?</p>

        <p>Sign up today and get 10% off on your next purchase!</p>

        <input type="email" name="email" id="email" placeholder="Enter your email">
        <button type="submit">JOIN</button>
    </div>"

    <script src="/assets/carousel.js"></script>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>