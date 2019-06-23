$(document).ready(function(){
  $('.bnr-slider').slick({
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
  });
  $('.btn-left').click(function(){
    $('.bnr-slider').slick('slickPrev');
  });

  $('.btn-right').click(function(){
    $('.bnr-slider').slick('slickNext');
  });

});
