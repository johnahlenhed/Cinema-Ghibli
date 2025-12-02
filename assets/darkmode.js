let darkMode = localStorage.getItem('darkMode');

const darkModeToggleMobile = document.querySelector('.menu-icon-switch');
const darkModeToggleDesktop = document.querySelector('.menu-icon-switch-desktop')

const enableDarkMode = () => {
    document.body.classList.add('dark-mode');
    localStorage.setItem('darkMode', 'enabled');
}

const disableDarkMode = () => {
    document.body.classList.remove('dark-mode');
    localStorage.setItem('darkMode', null);
}

if (darkMode === 'enabled') {
    enableDarkMode();
}

const toggleDarkMode = () => {
    darkMode = localStorage.getItem('darkMode');
    if (darkMode !== 'enabled') {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
}

darkModeToggleMobile.addEventListener('click', toggleDarkMode);
darkModeToggleDesktop.addEventListener('click', toggleDarkMode);