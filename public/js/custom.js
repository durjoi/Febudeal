

$(document).ready(function(){
  $('.bnr-slider').slick({
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: false,
  });
  $('.btn-left').click(function(){
    $('.bnr-slider').slick('slickPrev');
  });

  $('.btn-right').click(function(){
    $('.bnr-slider').slick('slickNext');
  });




  $('#slider1').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 7,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: false,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $('.slider1-btn-left').click(function(){
    $('#slider1').slick('slickPrev');
  });

  $('.slider1-btn-right').click(function(){
    $('#slider1').slick('slickNext');
  });


  $('#slider2').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 7,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: false,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $('.slider2-btn-left').click(function(){
    $('#slider2').slick('slickPrev');
  });

  $('.slider2-btn-right').click(function(){
    $('#slider2').slick('slickNext');
  });

  // $('.product__image__slider').slick({
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   arrows: false,
  //   fade: true,
  //   asNavFor: '.slider-nav'
  // });
  // $('.slider-nav').slick({
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   asNavFor: '.product__image__slider',
  //   dots: true,
  //   centerMode: true,
  //   focusOnSelect: true
  // });

  $('.slider-main').slick({
  slidesToShow: 1,
  arrows: false,
  asNavFor: '.slider-nav',
  vertical: false,
  autoplay: false,
  infinite: false,
  verticalSwiping: false,
  centerMode: true
});

$('.slider-nav').slick({
  slidesToShow: 4,
  asNavFor: '.slider-main',
  vertical: true,
  focusOnSelect: true,
  autoplay: false,
  centerMode: false
});

$(window).on('resize orientationchange', function() {
  if ($(window).width() > 1200) {
    $('.slider-nav').slick('unslick');
    $('.slider-nav').slick({
      slidesToShow: 4,
      asNavFor: '.slider-main',
      vertical: true,
      focusOnSelect: true,
      autoplay: false,
      centerMode: false
    });
  }
});

//Admin Catagory Toggler
  $(".catagory__toggler").click(function(){
        $(this).find(".admin__subcatagory").addClass("admin__catagory__active");
    });
  $(".subcatagory__toggler").click(function(){
        $(this).find(".admin__sub2catagory").toggleClass("admin__catagory__active");
    });

    $(".catagorydelete__button").click(function(){
            $(this).find('#delete_catagory').submit(); // Submit the form
        });

    $(".catagory_list_item").click(function(){
          $(this).siblings().find(".subcatagory_list").removeClass("admin__catagory__active");
      });
    $(".catagory_list_item").click(function(){
          $(this).find(".subcatagory_list").addClass("admin__catagory__active");
      });


    $(".subcatagory_list_item").click(function(){
          $(this).siblings().find(".sub2catagory_list").removeClass("admin__catagory__active");
      });
    $(".subcatagory_list_item").click(function(){
          $(this).find(".sub2catagory_list").addClass("admin__catagory__active");
      });


$( function() {

  $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 100000,
    values: [ 500, 70000 ],
    slide: function( event, ui ) {
      $( "#min_amount" ).val( ui.values[ 0 ] );
      $( "#max_amount" ).val( ui.values[ 1 ] );

      var min = $('#min_amount').val();
      var max = $('#max_amount').val();

      $.ajax({
        type: 'get', url:'', data: "min="+min + "& max=" +max,

        success: function(response) {
          console.log(response);
          $('#updateDiv').html(response);
        },
      });

    }
  });

  $('.discount').click(function(){
    var dis = [];
    $('.discount').each(function(){
      if($(this).is(":checked")){
        dis.push($(this).val());
      }
    });
    $.ajax({
      type:'get',
      dataType:'html',
      url:'',
      data: "discount="+dis,

      success: function(response) {
        console.log(response);
        $('#updateDiv').html(response);
      },
    });
  });
});


});
