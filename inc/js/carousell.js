$('.wrapper--proof').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    centerMode: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 700,
          settings: "unslick"
        }
      ]
  });

  $('.next--slider').click(function(){
    $('.wrapper--proof').slick("slickNext");
  })

  $('.prev--slider').click(function(){
    $('.wrapper--proof').slick("slickPrev");
  })

  $(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 200) {
        $('.icon--scroll').fadeOut();
    } else {
        $('.icon--scrollgo').fadeIn();
    }
    if (y < 200) {
        $('.icon--scroll').fadeIn();
    } else {
        $('.icon--scrollgo').fadeOut();
    }
});