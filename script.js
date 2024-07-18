//  swiper rating-slider (rating review)
var swiper = new Swiper(".rating-slider",
{
  loop:true,
  spaceBetween: 20,
  autoplay:
  {
    delay: 2000,
    disableOnIneteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    800: {
      slidesPerView: 2,
    },
    1050: {
      slidesPerView: 3,
    },
  },
});


