function packeryTime(){

  var $container = $('.packeryContainer');

  $container.css({
    opacity:0,
    paddingTop: '10px',
  });

  // initialize Packery after all images have loaded

  $container.imagesLoaded( function() {

    $container.packery({

      itemSelector: '.fs-cell',
      gutter: 0,

    }).delay(1000).transition({

      opacity: 1,
      paddingTop: '0px',

    });

  });

}