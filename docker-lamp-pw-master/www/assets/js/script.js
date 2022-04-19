$(document).ready(function() {

    $('.article').load('home.html');

    $('#home').click(function() {
        $('.article').load('home.html');
    });

    $('#about').click(function() {
        $('.article').load('about.html');
    });

    $('#contact').click(function() {
        $('.article').load('contact.html');
    });
});