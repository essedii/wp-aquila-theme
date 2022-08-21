(function ($) {
  class SlickCarousel {
    constructor() {
      this.initiateCarousel();
    }
    initiateCarousel() {
      

  
      $(".slider").slick({
        autoplay: false,
        infinite: true,
        vertical: false,
        dots: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        customPaging: function(slider, i) {},
        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            vertical: false,
          },
        }, {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            vertical: false,
          },
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            vertical: false,
          },
        }]
  })
}
}

  new SlickCarousel();
})(jQuery);

