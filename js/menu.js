document.addEventListener('DOMContentLoaded', function() {
    var menuButtonSvg = document.querySelector('.menu svg');
    var menuButton = document.querySelector('.menu');
    var closeButton = document.querySelector('.close');
    var navbar = document.querySelector('.navbar_container');
    var contentR = document.querySelector('.content_right');
    var contentL = document.querySelector('.content_left');

    menuButton.addEventListener('click', function() {
        navbar.classList.add('navbar_mobile');
        contentR.style.display = 'flex';
        menuButton.style.display = 'none';
        menuButtonSvg.style.display = 'none';
        closeButton.style.display = 'flex';
        
    });

    closeButton.addEventListener('click', function() {
        navbar.classList.remove('navbar_mobile');
        contentR.classList.remove('content_right_mobile');
        contentL.classList.remove('content_left_mobile');


        closeButton.style.display = 'none';
        menuButton.style.display = 'flex';
    });
});