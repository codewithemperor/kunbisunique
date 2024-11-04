AOS.init({
    duration: 500, // Duration of animation (in ms)
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