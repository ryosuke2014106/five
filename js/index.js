const swiper = new Swiper('.swiper', {
  loop: true, 
  slidesPerView: 1.2,
  initialSlide: 1, 
  centeredSlides: true,
  spaceBetween: 15,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

