<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles.css">
    <title>Cinema Ghibli</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <img src="/assets/images/cinema-ghibli-logo-light.svg" alt="">
            <div class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

            </div>
        </nav>
    </header>

    <div class="mobile-menu">
        <img src="/assets/images/cinema-ghibli-logo-light.svg" alt="" class="mobile-menu-logo">
        <div class="mobile-menu-links">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
    </div>

<script>
    const menuIcons = document.querySelectorAll('.menu-icon');
    const mobileMenu = document.querySelector('.mobile-menu');

    menuIcons.forEach(icon => {
        icon.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });
    });
</script>