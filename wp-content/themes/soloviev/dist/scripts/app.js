(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{0:function(e,t,n){n("xYjq"),e.exports=n("nau3")},nau3:function(e,t){},xYjq:function(e,t,n){"use strict";n.r(t),function(e){n("xeH2"),n("3yRE"),n("e42n");var t,r=n("bTu8"),a=n("g0Ox"),i=n("0Xqd"),o=n("Xchd"),s=n("6N1L"),l=n("z/o8"),u=n("Haw6"),c=n("lCAa");l.a.registerPlugin(u.a,c.a),r.a.use([a.a,i.a,o.a,s.a]),e(document).ready((function(){e(window).smartresize((function(e){}));new r.a(".home-slider",{slidesPerView:"auto",grabCursor:!0,centeredSlides:!0,parallax:!0,speed:1200});var t=new r.a(".timeline-slider",{slidesPerView:"auto",grabCursor:!0,freeMode:!0,spaceBetween:24,breakpoints:{768:{spaceBetween:32,slidesOffsetAfter:32},1024:{spaceBetween:48,slidesOffsetAfter:48}},navigation:{nextEl:".timeline-btn-next",prevEl:".timeline-btn-prev"}});e(".tl-jump").click((function(n){n.preventDefault();var r=e(this).data("index");t.slideTo(r)})),e(document).on("input","#timeline-range",(function(){console.log(e(this).val());var n,r=(n=e(this).val(),timelineDates.reduce((function(e,t){var r=Math.abs(e-n),a=Math.abs(t-n);return r==a?e>t?e:t:a<r?t:e}))),a=timelineDates.indexOf(r);t.slideTo(a)})),l.a.config({nullTargetWarn:!1}),l.a.to("#nav",{scrollTrigger:{trigger:"#nav",start:"top",endTrigger:"html",end:"bottom top",toggleClass:{targets:"#nav",className:"active"}}}),e(".return-top").on("click",(function(e){e.preventDefault(),l.a.to(window,{duration:2,scrollTo:{y:0}})})),e(".who-btn").on("click",(function(e){var t=e.currentTarget.getAttribute("href"),n=t.substring(t.indexOf("#"));document.querySelectorAll(n).length>0&&(e.preventDefault(),l.a.to(window,{duration:1.5,scrollTo:{y:n,offsetY:100}}))})),l.a.utils.toArray(".nav-container .nav-link").forEach((function(e,t){e.addEventListener("click",(function(e){var t=e.currentTarget.getAttribute("href"),n=t.substring(t.indexOf("#"));document.querySelectorAll(n).length>0&&(e.preventDefault(),l.a.to(window,{duration:1.5,scrollTo:{y:n,offsetY:100}}))}))})),l.a.utils.toArray(".section").forEach((function(e,t){var n=e.getAttribute("id");l.a.to(e,{scrollTrigger:{trigger:e,start:"top 60%",end:"bottom 20%",toggleClass:{targets:".nav-container a[href='#"+n+"']",className:"active"}}})}))})),jQuery,t="smartresize",jQuery.fn[t]=function(e){return e?this.bind("resize",(n=e,function(){var e=this,t=arguments;function o(){a||n.apply(e,t),i=null}i?clearTimeout(i):a&&n.apply(e,t),i=setTimeout(o,r||100)})):this.trigger(t);var n,r,a,i}}.call(this,n("xeH2"))},xeH2:function(e,t){!function(){e.exports=this.jQuery}()}},[[0,0,4]]]);