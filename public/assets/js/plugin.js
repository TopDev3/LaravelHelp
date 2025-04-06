const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    speed: 500, // slide transition speed in milliseconds
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

  });


  let testimonialNext = document.querySelector('.testimonial__next');
  let testimonialPrev = document.querySelector('.testimonial__prev');


  testimonialPrev.addEventListener('click', ()=>{
    if(testimonialNext.classList.contains('active')){
        testimonialNext.classList.remove('active')
    }
    testimonialPrev.classList.add('active')
    swiper.slidePrev()
  })

  testimonialNext.addEventListener('click', ()=>{
    if(testimonialPrev.classList.contains('active')){
        testimonialPrev.classList.remove('active')

    }
    testimonialNext.classList.add('active')
    swiper.slideNext()
  })