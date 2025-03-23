import './bootstrap';

import.meta.glob([
    '../images/**'
]);


function toggleMenu() {
    var navLinks = document.getElementById('navLinks');
    if (navLinks.classList.contains('show')) {
        navLinks.classList.remove('show');
    } else {
        navLinks.classList.add('show');
    }
}
