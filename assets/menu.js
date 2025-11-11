const menuIcons = document.querySelectorAll('.menu-icon');
        const mobileMenu = document.querySelector('.mobile-menu');

        menuIcons.forEach(icon => {
            icon.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
            });
        });