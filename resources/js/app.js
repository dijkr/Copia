import './bootstrap';

/* HAMBURGER MENU BAR */
var bar = document.querySelector('.fa-bars');
var menuToggle = document.getElementById('menu-toggle');
var menuItems = document.querySelector('.menu-items');
var search = document.querySelector('.search');
var user = document.querySelector('.fa-user');
var header = document.querySelector('header');

menuToggle.addEventListener('click', function() {
    bar.classList.toggle('style');
    menuItems.classList.toggle('show');
    search.classList.toggle('hide');
    user.classList.toggle('hide');
    header.classList.toggle('background');
});
