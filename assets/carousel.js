const imageCarousel = document.querySelector('.current-movie-container' + '.airing-soon-container');
const scrollPerClick = 300;

function scrollMovieList(direction) {
    if (direction === 'left') {
        imageCarousel.scrollTo({
            top: 0,
            left: (scrollAmount -= scrollPerClick),
            behavior: 'smooth'
        });
    } else if (direction === 'right') {
        imageCarousel.scrollTo( {
            top: 0,
            left: (scrollAmount += scrollPerClick),
            behavior: 'smooth'
        });
    }
}

