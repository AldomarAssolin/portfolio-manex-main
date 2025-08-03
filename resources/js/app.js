import './bootstrap';

// Import the main CSS file
import $ from 'jquery';
window.$ = $;
window.jQuery = $;


// AdminLTE
import 'admin-lte/dist/js/adminlte.min.js';

// Import Bootstrap
import 'bootstrap';

// CSS global
import '../sass/app.scss';


// Sidebar toggle functionality
document.addEventListener('DOMContentLoaded', function () {
    const menuToggleIcon = document.getElementById('menu-toggle-icon');
    let toggled = false;
    menuToggleIcon.addEventListener('click', function () {
        toggled = !toggled;
        const icon = menuToggleIcon.querySelector('i');
        if (toggled) {
            icon.classList.remove('bi-layout-sidebar-inset-reverse');
            icon.classList.add('bi-layout-sidebar-inset');
        } else {
            icon.classList.remove('bi-layout-sidebar-inset');
            icon.classList.add('bi-layout-sidebar-inset-reverse');
        }
    });
});

// Scream toggle functionality
document.addEventListener('DOMContentLoaded', function () {
    const menuToggleIcon = document.getElementById('full-screan-toggle');
    let toggled = false;
    menuToggleIcon.addEventListener('click', function () {
        toggled = !toggled;
        const icon = menuToggleIcon.querySelector('i');
        if (toggled) {
            icon.classList.remove('bi-arrows-fulls-screen');
            icon.classList.add('bi-fullscreen-exit');
        } else {
            icon.classList.remove('bi-fullscreen-exit');
            icon.classList.add('bi-arrows-fulls-screen');
        }
    });
});
