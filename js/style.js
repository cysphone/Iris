document.addEventListener("DOMContentLoaded", function () {
  var heroSwiper = new Swiper('.heroSwiperss', {
    loop: true,
    slidesPerView: 1,
    speed: 800,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    // effect: 'fade',  // keep commented if you’re testing slide mode
    // fadeEffect: { crossFade: true },

    pagination: {
      el: '.heroSwiperss .swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.heroSwiperss .swiper-button-next',
      prevEl: '.heroSwiperss .swiper-button-prev',
    },

    // 👇 Debug logs here
    on: {
      init: function () {
        console.log("Swiper initialized. Total slides (with duplicates):", this.slides.length);
        console.log("Slides real count:", this.slides.length - this.loopedSlides * 2);
      },
      slideChange: function () {
        console.log("Slide changed → Now at index:", this.realIndex);
      }
    }
  });
});
