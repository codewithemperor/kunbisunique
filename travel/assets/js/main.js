    // custom coursor
    if ($(".custom-cursor").length) {

      var cursor = document.querySelector('.custom-cursor__cursor');
      var cursorinner = document.querySelector('.custom-cursor__cursor-two');
      var a = document.querySelectorAll('a');

      document.addEventListener('mousemove', function (e) {
        var x = e.clientX;
        var y = e.clientY;
        cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
      });

      document.addEventListener('mousemove', function (e) {
        var x = e.clientX;
        var y = e.clientY;
        cursorinner.style.left = x + 'px';
        cursorinner.style.top = y + 'px';
      });

      document.addEventListener('mousedown', function () {
        cursor.classList.add('click');
        cursorinner.classList.add('custom-cursor__innerhover')
      });

      document.addEventListener('mouseup', function () {
        cursor.classList.remove('click')
        cursorinner.classList.remove('custom-cursor__innerhover')
      });

      a.forEach(item => {
        item.addEventListener('mouseover', () => {
          cursor.classList.add('custom-cursor__hover');
        });
        item.addEventListener('mouseleave', () => {
          cursor.classList.remove('custom-cursor__hover');
        });
      })
    };

    function dynamicCurrentMenuClass(selector) {
      let fileName = window.location.href.split("/").reverse()[0];

      // Iterate over each list item
      selector.querySelectorAll("li").forEach(function (li) {
        let anchor = li.querySelector("a");
        if (anchor && anchor.getAttribute("href") === fileName) {
          li.classList.add("current");
        }
      });

      // Add 'current' class if any child has 'current' class
      selector.querySelectorAll("li").forEach(function (li) {
        if (li.querySelector(".current")) {
          li.classList.add("current");
        }
      });

      // If no file name, set first list item as current
      if (fileName === "") {
        let firstListItem = selector.querySelector("li");
        if (firstListItem) {
          firstListItem.classList.add("current");
        }
      }
    }

    if (document.querySelector(".main-menu__list")) {
      // Dynamic current class
      let mainNavUL = document.querySelector(".main-menu__list");
      dynamicCurrentMenuClass(mainNavUL);
    }

    if (
      document.querySelector(".main-menu__list") &&
      document.querySelector(".mobile-nav__container")
    ) {
      let navContent = document.querySelector(".main-menu__list").outerHTML;
      let mobileNavContainer = document.querySelector(".mobile-nav__container");
      mobileNavContainer.innerHTML = navContent;
    }

    if (document.querySelector(".sticky-header__content")) {
      let navContent = document.querySelector(".main-menu").innerHTML;
      let stickyHeaderContent = document.querySelector(".sticky-header__content");
      stickyHeaderContent.innerHTML = navContent;
    }

    if (document.querySelector(".mobile-nav__container .main-menu__list")) {
      let dropdownAnchors = document.querySelectorAll(
        ".mobile-nav__container .main-menu__list .dropdown > a"
      );
  
      dropdownAnchors.forEach(function (anchor) {
        let toggleBtn = document.createElement("BUTTON");
        toggleBtn.setAttribute("aria-label", "dropdown toggler");
        toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";

        anchor.appendChild(toggleBtn);

        toggleBtn.addEventListener("click", function (e) {
          e.preventDefault();
          toggleBtn.classList.toggle("expanded");
          anchor.parentElement.classList.toggle("expanded");
          let submenu = anchor.parentElement.querySelector("ul");
          if (submenu) {
            submenu.style.display =
              submenu.style.display === "none" || submenu.style.display === ""
                ? "block"
                : "none";
          }
        });
      });
    }

    if (document.querySelector(".mobile-nav__toggler")) {
      document
        .querySelector(".mobile-nav__toggler")
        .addEventListener("click", function (e) {
          e.preventDefault();
          document.querySelector(".mobile-nav__wrapper").classList.toggle("expanded");
          document.body.classList.toggle("locked");
        });
    }

    if (document.querySelector(".search-toggler")) {
      document
        .querySelector(".search-toggler")
        .addEventListener("click", function (e) {
          e.preventDefault();
          document.querySelector(".search-popup").classList.toggle("active");
          document
            .querySelector(".mobile-nav__wrapper")
            .classList.remove("expanded");
          document.body.classList.toggle("locked");
        });
    }
 
    
    (function ($) {
    "use strict";
  


    /*---- PRELOADER PAGE -----*/
    paceOptions = {
      ajax: true,
      document: true,
      eventLag: false
    };


  
  })(jQuery);

  document.addEventListener('DOMContentLoaded', function () {
    // Initialize the main hero slider
    var heroSlider2 = new Swiper('#heroSlide2', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.slider-next',
            prevEl: '.slider-prev',
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade', // You can change the effect here
    });

    // Initialize the thumbnail slider
    var heroThumbs = new Swiper('#heroSlide3', {
        slidesPerView: 3,
        spaceBetween: 10,
        loop: true,
        slideToClickedSlide: true,
    });

    // Link the main hero slider and the thumbnails slider
    heroSlider2.controller.control = heroThumbs;
    heroThumbs.controller.control = heroSlider2;
});
