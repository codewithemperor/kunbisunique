AOS.init({
    duration: 500, // Duration of animation (in ms)
  });

window.onscroll = function() {
    const element = document.querySelector('.navbar');
    const scrollPosition = window.scrollY; // Get the scroll position on the Y-axis

    if (scrollPosition > 100) { // Adjust 100px to the point where you want to trigger the class
        element.classList.add('fixed-top');

    } else {
        element.classList.remove('fixed-top');
    }
};



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
    slidesPerView: 1,
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
    slidesPerView: 1,
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


  

/*---- HIDE / SHOW NAVBAR -----*/
var ScrollPosition;
var lastScrollPosition = 0;
var delta = 5;
var navbarHeight = $('#nav-bar').outerHeight();
$(window).on("scroll", function (event) {
    ScrollPosition = true;
});
setInterval(function () {
    if (ScrollPosition) {
        ScrollPosition = false;
    }
}, 250);


/*---- PRELOADER PAGE -----*/
paceOptions = {
    ajax: true,
    document: true,
    eventLag: false
};
Pace.on('done', function () {
    $('#preloader').addClass("isdone");
    $('.loading-text').addClass("isdone");
});



$(document).ready(function () {
    "use strict";

    /*---- SCROLL BACK TO TOP -----*/
    var progressPath = document.querySelector('.progress-wrap path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 150;
    var duration = 550;
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
        } else {
            jQuery('.progress-wrap').removeClass('active-progress');
        }
    });
    jQuery('.progress-wrap').on('click', function (event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        return false;
    })
});

$(window).scroll(function () {

    /*---- FADE SLIDESHOW -----*/
    var scrolled = $(this).scrollTop();
    $('.slider .caption').css({
        'transform': 'translate3d(0, ' + -(scrolled * 0.20) + 'px, 0)',
        'opacity': 1 - scrolled / 600
    });
});