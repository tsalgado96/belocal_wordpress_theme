$(document).ready(function(){
  // Slick Slider
  $('.initiative-slider').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    mobileFirst: true,
    pauseOnHover: false,
    adaptiveHeight: true,
    fade: true,
    speed: 600
  });

});

$('.map').click(function() {
    $('.map iframe').css("pointer-events", "auto");
    $('.map iframe').css("filter", "none");
});

$('.map').mouseleave(function() {
    $('.map iframe').css("pointer-events", "none");
    $('.map iframe').css("filter", "grayscale(100%)");
});
