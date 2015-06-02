// @codekit-prepend "site/_packery.js"
// @codekit-prepend "site/_openessay.js"
// @codekit-prepend "site/_smoothscroll.js"
// @codekit-prepend "site/_mobilenav.js"

function randos(){

  $("#home--essays, #home--thanks").equalize({
    target: ".equal",
    minWidth: '740px',
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

});