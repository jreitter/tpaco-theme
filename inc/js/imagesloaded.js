$('.container--parallax').imagesLoaded({
    background: '.container--image',
}, function() {
    $('body').addClass('images-loaded');
  });