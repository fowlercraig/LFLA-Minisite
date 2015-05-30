function openEssay(){

  $('.open-essay').each(function() {

    var $this = $(this);
    var  href = $this.attr('href');

    console.log(href);

    $this.click(function(event){

      event.preventDefault();

      $(href).transition({
        opacity : 1,
        right   : 0,
      },300).addClass('clickable');

      $('body').addClass('readermode').transition({
        // position: 'relative',
        // left: -50,
      }).css('overflow', 'hidden');

    });

  });

}

function closeEssay(){

  $('.full.essay').transition({
    opacity : 0,
    right   : -20,
  },300).removeClass('clickable');

  $('body').transition({
   // position: 'relative',
   // left: 0,
  }).css('overflow', 'visible').removeClass('readermode');

}

$('.essayClose').click(function(event){
  event.preventDefault();
  closeEssay();
  $('html').css('overflow', 'visible');
});
