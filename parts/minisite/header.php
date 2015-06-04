<a id="home--header-logo" class="site-logo" href="http://lfla.org" target="blank">The Library Foundation of Los Angeles</a>
<div class="fs-row">
  <div id="home--header-wrapper">
    <div id="home--header-upper" class="fs-cell fs-lg-12 fs-md-hide fs-sm-hide text-center fs-centered">
      <?php if( have_rows('navigation') ): $i = 0; while ( have_rows('navigation') ) : the_row(); ?>
        <?php if(get_sub_field('visible')): ?><a href="<?php the_sub_field('nav_url'); ?>" class="btn btn-nav"><?php the_sub_field('nav_label'); ?></a><?php endif; ?>
      <?php endwhile; endif; ?>
    </div>
    <div id="home--header-lower" class="fs-cell fs-lg-12 fs-md-hide fs-sm-hide text-center fs-centered">
      <?php if( have_rows('navigation_lfla') ): $i = 0; while ( have_rows('navigation_lfla') ) : the_row(); ?>
        <a href="<?php the_sub_field('nav_url'); ?>" class="btn btn-nav"><?php the_sub_field('nav_label'); ?></a>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="fs-cell fs-lg-hide fs-md-5 fs-sm-2">
    <a href="http://lfla.org"id="home--header-logo-mobile" class="btn btn-nav btn-first site-logo" target="blank">The Library Foundation of Los Angeles</a>
    <a href="#home--wrapper" class="btn btn-nav">To Live and Dine in LA</a>
  </div>
  <div class="fs-cell fs-lg-hide fs-md-1 fs-sm-1 fs-right">
    <a id="menuBtn" class="btn btn-nav btn-last text-right" href="#">
      <span>
        <span></span>
        <span></span>
        <span></span>
      </span>
    </a>
  </div>
</div>
<div id="home--header-social">
  <a href="#" class="btn btn-nav"><i class="ss-social-circle ss-icon">twitter</i></a>
  <a href="#" class="btn btn-nav"><i class="ss-social-circle ss-icon">facebook</i></a>
</div>
