<?php Themewrangler::setup_page();get_header(/***Template Name: Events */); ?>

<div id="home--wrapper">

<?php

  $sectionWidth = 'fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center';

?>

<header id="home--header">
  <div class="fs-row">
    <div id="home--header-wrap" class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/header.php' );?></div>
  </div>
</header>

<hr class="invisible">

<div class="fs-row">
<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
<?php if( have_rows('region') ): while ( have_rows('region') ) : the_row(); ?>

  <div class="lapl-region">
    <div class="fs-row">
      <div class="lapl-header fs-cell fs-all-full text-center">
      <h3><?php the_sub_field('region_title'); ?></h3>
      </div>
      <?php if( have_rows('branches') ): while ( have_rows('branches') ) : the_row(); ?>
      <div class="lapl-branch fs-cell fs-all-fourth text-center fs-padded">
      <a href="<?php the_sub_field('branch_url'); ?>"><?php the_sub_field('branch_name'); ?></a>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>

<?php endwhile; endif; ?>
</div>
</div>

</div>
<?php get_footer(); ?>