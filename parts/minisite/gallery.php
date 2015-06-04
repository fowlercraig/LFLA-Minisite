<header>
  <h3 class="section-title"><?php the_field('section_title_gallery'); ?></h3>
  <?php if(get_field('section_desc_gallery')): ?>
  <div class="desc">
    <?php the_field('section_desc_gallery'); ?>
  </div>
  <?php endif; ?>
</header>

<div id="home--gallery-gallery">
<?php $images = get_field('gallery'); if( $images ): ?>
<?php foreach( $images as $image ): ?>

<div class="fs-cell fs-lg-3 fs-md-2 fs-sm 3">
<a href="<?php echo $image['url']; ?>">
<img src="<?php echo $image['sizes']['gallery-sm']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
</a>
</div>

<?php endforeach; ?>
<?php endif; ?>
</div>