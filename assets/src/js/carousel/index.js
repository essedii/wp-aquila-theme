(function ($) {
  class SlickCarousel {
    constructor() {
      this.initiateCarousel();
    }

    

    initiateCarousel() {
      $(".slider").slick({
        nextArrow: '<button class="right" style="background: none; border: none"><i class="fa fa-chevron-right fa-2xl m-2"></i></button>',
        prevArrow: '	<button class="left" style="background: none; border: none"><i class="fa fa-chevron-left fa-2xl m-2"></i></button>'
        // arrows: false
      // })
      // $('.left').click(function(){
      //   $('.slider').slick('slickPrev');
      // })
      
      // $('.right').click(function(){
      //   $('.slider').slick('slickNext');
      // })
    })
  }
}

  new SlickCarousel();
})(jQuery);

