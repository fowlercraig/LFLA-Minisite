<main id="index">
  <div class="fs-row">
    <div class="fs-cell fs-xl-7 fs-lg-8 fs-md-5 fs-sm-2 fs-xs-3 fs-centered">
      <div class="fs-row">
        <div id="splash--title"  class="fs-cell-padded fs-all-12 text-center">
          <img src="assets/img/ld-logo.png" class="img-responsive" />
          <h2>Menus from the Collection of the Los Angeles Public Library</h2>
        </div>

        <hr class="divider fs-cell fs-all-12">
        <div id="splash--desc"   class="fs-cell-padded fs-lg-10 rightside">
          <div class="wrapper">
            <?php the_field('splash_description'); ?>
          </div>
        </div>
        <hr class="divider fs-cell fs-lg-hide fs-md-hide fs-sm-hide">
        <div id="splash--social" class="fs-cell-padded fs-lg-2"><!-- @include splash/_social --></div>

        <hr class="divider fs-cell fs-all-12">
        <div id="splash--about"  class="fs-cell-padded fs-lg-2 fs-md-hide fs-sm-hide"><img id="starship" src="assets/img/starship.png" /></div>
        <div id="splash--empty"  class="fs-cell-padded fs-lg-10 leftside">
          <div class="wrapper">
            <?php the_field('splash_description_cont'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>