<header>
  <h3 class="section-title"><?php the_field('section_title_thanks'); ?></h3>
  <?php if(get_field('section_desc_thanks')): ?>
  <div class="desc">
    <?php the_field('section_desc_thanks'); ?>
  </div>
  <?php endif; ?>
</header>

<div class="fs-row">
  <div id="home--thanks-first"  class="fs-cell fs-lg-12 fs-md-6 fs-sm-3    fs-xs-3 text-center"><div class="wrapper"><?php the_field('main_thanks'); ?></div></div>
  <div id="home--thanks-second" class="fs-cell fs-lg-6  fs-md-3 fs-sm-half fs-xs-3 equal text-center"><div class="wrapper"><?php the_field('main_thanks_second'); ?></div></div>
  <div id="home--thanks-third"  class="fs-cell fs-lg-6  fs-md-3 fs-sm-half fs-xs-3 equal text-center"><div class="wrapper"><?php the_field('main_thanks_third'); ?></div></div>
</div>