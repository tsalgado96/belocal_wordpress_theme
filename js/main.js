$(document).ready(function(){

});

$('.map').click(function() {
    $('.map iframe').css("pointer-events", "auto");
    $('.map iframe').css("filter", "none");
});

$('.map').mouseleave(function() {
    $('.map iframe').css("pointer-events", "none");
    $('.map iframe').css("filter", "grayscale(100%)");
});
