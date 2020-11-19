/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';
import 'lity';
import Swiper, { Navigation, Autoplay, Pagination, Parallax } from 'swiper';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
Swiper.use([Navigation, Autoplay, Pagination, Parallax]);

$(document).ready(() => {


  $(window).smartresize(function(e){

    //strategySwiper.update();

  });

  const homeSwiper = new Swiper('.home-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    centeredSlides: true,
    parallax: true,
    speed: 1200,
    //watchSlidesProgress: true,
    // navigation: {
    //   nextEl: '.process-swiper-next',
    //   prevEl: '.process-swiper-prev',
    // },
    // pagination: {
    //   el: '.process-swiper-pagination',
    //   type: 'bullets',
    // },
  });

  const timelineSwiper = new Swiper('.timeline-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    freeMode: true,
    spaceBetween: 24,
    breakpoints: {
      768: {
        spaceBetween: 32,
        slidesOffsetAfter: 32,
      },
      1024:  {
        spaceBetween: 48,
        slidesOffsetAfter: 48,
      }
    },
    //watchSlidesProgress: true,
    navigation: {
      nextEl: '.timeline-btn-next',
      prevEl: '.timeline-btn-prev',
    },
    // pagination: {
    //   el: '.process-swiper-pagination',
    //   type: 'bullets',
    // },
  });

  $('.tl-jump').click(function(e) {
    e.preventDefault();
    let index = $(this).data("index");
    //console.log(index)
    timelineSwiper.slideTo(index);
  })

  $(document).on('input', '#timeline-range', function() {
    console.log($(this).val() );
    //console.log(timelineDates)
    let found = closest($(this).val(), timelineDates)
    let foundIndex = timelineDates.indexOf(found)

    timelineSwiper.slideTo(foundIndex);
    //console.log(foundIndex);
  });
  
  function closest(needle, haystack) {
    return haystack.reduce((a, b) => {
        let aDiff = Math.abs(a - needle);
        let bDiff = Math.abs(b - needle);

        if (aDiff == bDiff) {
            return a > b ? a : b;
        } else {
            return bDiff < aDiff ? b : a;
        }
    });
  }

  gsap.config({
    nullTargetWarn: false,
  });

  gsap.to('#nav', {
    scrollTrigger: {
      trigger: '#nav',
      start: "top",
      endTrigger: "html",
      end:"bottom top",
      toggleClass: {targets: "#nav", className: "active"},
      //markers: true,
    }
  });

  $('.return-top').on('click', function(e) {
    e.preventDefault();
    gsap.to(window, {duration: 2, scrollTo: {y: 0}});
  });

  $('.who-btn').on('click', function(e) {
    var href = e.currentTarget.getAttribute("href")
    var anchor = href.substring(href.indexOf("#"))

    if(document.querySelectorAll(anchor).length > 0) {
      e.preventDefault();
      gsap.to(window, {duration: 1.5, scrollTo: {y: anchor, offsetY: 100 }});
    }
  });

  const navLinks = gsap.utils.toArray(".nav-container .nav-link");
  //console.log(navLinks);
  navLinks.forEach((link, i) => {
    link.addEventListener("click", function(e) {
      var href = e.currentTarget.getAttribute("href")
      var anchor = href.substring(href.indexOf("#"))

      if(document.querySelectorAll(anchor).length > 0) {
        e.preventDefault();
        gsap.to(window, {duration: 1.5, scrollTo: {y: anchor, offsetY: 100 }});
      }
    });
  });

  gsap.utils.toArray(".section").forEach((box, i) => {
    var id = box.getAttribute("id");
    gsap.to(box, {
      scrollTrigger: {
        trigger: box,
        start: "top 60%",
        end: "bottom 20%",
        //markers: true,
        toggleClass: {targets: ".nav-container a[href='#" + id + "']", className: "active"},
      },
    });
  });



});

(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');