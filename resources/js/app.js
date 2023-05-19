import './bootstrap';

/* HAMBURGER MENU BAR */
var menuToggle = document.getElementById('menu-toggle');
var menuItems = document.querySelector('.menu-items');
var search = document.querySelector('.search');
var user = document.querySelector('.fa-user');

menuToggle.addEventListener('click', function() {
    menuItems.classList.toggle('show');
    search.classList.toggle('hide');
    user.classList.toggle('hide');
});
