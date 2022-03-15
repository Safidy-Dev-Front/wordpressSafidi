import $ from "jquery";
$(document).ready(function() {
    $('.header__burger-menu').on('click', function() {
        $('.header__nav-menu .menu').toggleClass('display-menu');
        $('.header__burger-menu').toggleClass('display-menu');
    })
})