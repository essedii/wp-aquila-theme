(function ($) {
  class SlickCarousel {
    constructor() {
      this.initiateCarousel();
    }
    initiateCarousel() {
      

  
      $(".slider").slick({
        autoplay: false,
        vertical: false,
        dots: true,
        arrows: true,

    
        slidesToShow: 1,
        slidesToScroll: 1,
 
        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            vertical: false,
          },
        }, {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            vertical: false,
          },
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
               dots: true,
            vertical: false,
          },
        }]
  })
}
}

  new SlickCarousel();
})(jQuery);

