function mobileNav(){

  var $mobileNav = $('#mobile-menu');

  function activeMobile(){

    $mobileNav.toggleClass('open');

  }

  function closeMobile(){

    $mobileNav.toggleClass('open');

  }

  $('#menuBtn').on('click',function(event){
    event.preventDefault();
    activeMobile();
  });

  $('#mobile-menu').find('a').on('click',function(){
    closeMobile();
  });

}

mobileNav();