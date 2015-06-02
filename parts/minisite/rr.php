<header>
<h3 class="section-title"><?php the_field('section_title_rr'); ?></h3>
</header>

<div class="fs-row">
<div class="fs-cell fs-all-full slider">

<?php if( have_rows('recommended_reading') ):while ( have_rows('recommended_reading') ) : the_row(); ?>

<div class="fs-cell book fs-lg-3 fs-md-2 fs-sm-1 fs-xs-half text-center">
  <a href="<?php the_sub_field('url'); ?>" class="cover-link"></a>
  <div class="meta cover">
    <div class="wrapper">
      <h3><?php the_sub_field('title'); ?></h3>
      <h4><?php the_sub_field('sub_title'); ?></h4>
    </div>
  </div>
  <?php $image = get_sub_field('cover'); if( !empty($image) ): ?>
  <img src="<?php echo $image['sizes']['book-lg']; ?>" alt="<?php echo $image['alt']; ?>" class='img-responsive' />
  <?php endif; ?>
</div>

<?php endwhile; endif; ?>
</div>
</div>

