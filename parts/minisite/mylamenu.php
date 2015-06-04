<div id="home--lamenu-container" class="fs-grid">
  <div class="fs-row">
    <div class="fs-cell fs-lg-6 fs-md-6 fs-sm-3 fs-centered text-center">
      <header>
        <?php the_field('myla_description'); ?>
      </header>
    </div>
  </div>
</div>
<div id="home--lamenu-bg" style="background-image:url(<?php $image = get_field('background_image'); if( !empty($image) ): ?><?php echo $image['url']; ?><?php endif; ?>);"></div>