<a href="<?php the_field('tumblr_link'); ?>" class="cover-link"></a>

<div id="home--tumblr-container" class="fs-grid">
  <div class="fs-row">
    <div class="fs-cell fs-lg-6 fs-md-6 fs-sm-3 fs-centered text-center">
      <header>
        <h3 class="section-title"><?php the_field('section_title_tumblr'); ?></h3>
      </header>
      <p><?php the_field('section_description_tumblr'); ?></p>
    </div>
  </div>
</div>

<div id="home--tumblr-gallery">
<?php  $images = get_field('tumblr_gallery'); if( $images ): ?>
<?php foreach( $images as $image ): ?>
<div class="gallery-background" style="background-image:url(<?php echo $image['sizes']['large']; ?>)"></div>
<?php endforeach; ?>
<?php endif; ?>
</div>