// @codekit-prepend "site/_packery.js"
// @codekit-prepend "site/_openessay.js"
// @codekit-prepend "site/_smoothscroll.js"
// @codekit-prepend "site/_mobilenav.js"

function popups(){
  $('#home--gallery-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
     //titleSrc: function(item) {
     //  return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
     //}
    }
  });
}

function randos(){

  $("#home--essays, #home--thanks").equalize({
    target: ".equal",
    minWidth: '500px',
  });

}

function headerhover(){

  $(".site-logo").hover(function(){
    $("#home--header-wrapper > div").addClass('active');
  });

  $("#home--main").hover(function(){
    $("#home--header-wrapper > div").removeClass('active');
  });

}

function header(){

var options = {
    offset: 200,
    classes: {
        clone:   'banner--clone',
        stick:   'banner--stick',
        unstick: 'banner--unstick'
    },
    onInit: function() {
      smoothScroll();
      mobileNav();
      headerhover();
    },
    onUnstick: function () {
      $('#mobile-menu').removeClass('open');
    },
};

// Initialise with options
var banner = new Headhesive('#home--header', options);

}

$(document).ready(function(){

  packeryTime();
  openEssay();
  header();
  randos();
  headerhover();
  popups();
  $("#home--videos").fitVids();
  $(".embed_video").fitVids();

});