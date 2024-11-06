AOS.init({
    duration: 500, // Duration of animation (in ms)
  });

window.onscroll = function() {
    const element = document.querySelector('.navbar');
    const scrollPosition = window.scrollY; // Get the scroll position on the Y-axis

    if (scrollPosition > 100) { // Adjust 100px to the point where you want to trigger the class
        element.classList.remove('position-absolute');
        element.classList.add('fixed-top');

    } else {
        element.classList.add('position-absolute');
        element.classList.remove('fixed-top');
    }
};


var swiper = new Swiper(".bannerSwipper", {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
  });



// Index Swipper Our Service
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    height: 100,
    coverflowEffect: {
      rotate: 30,
      stretch: 0,
      depth: 350,
      modifier: 1,
      slideShadows: true,
    },
  });

//   About Us Swipper - Our Services
var swiper = new Swiper(".aboutUs", {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 15,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });

  var swiper = new Swiper(".destination-area", {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 15,
    
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });

//   Tour
var swiper = new Swiper(".tour-area", {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 15,
    
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });

  var swiper = new Swiper(".flyers", {
    effect: "cube",
    grabCursor: true,
    loop: true,
    autoplay: {
        delay: 1500,
        disableOnInteraction: true,
      },
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });