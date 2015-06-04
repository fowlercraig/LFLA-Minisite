<div class="fs-row">
  <div class="fs-cell fs-lg-12 fs-md-hide fs-sm-hide text-center fs-centered">
    <?php if( have_rows('navigation') ): $i = 0; while ( have_rows('navigation') ) : the_row(); ?>
      <?php if(get_sub_field('visible')): ?><a href="<?php the_sub_field('nav_url'); ?>" class="btn btn-nav"><?php the_sub_field('nav_label'); ?></a><?php endif; ?>
    <?php endwhile; endif; ?>
  </div>
  <div class="fs-cell fs-lg-hide fs-md-5 fs-sm-2">
    <a href="http://lfla.org"id="home--header-logo" class="btn btn-nav btn-first">The Library Foundation of Los Angeles</a>
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
