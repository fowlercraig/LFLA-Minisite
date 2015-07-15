<?php Themewrangler::setup_page();get_header(/***Template Name: Events */); ?>

<div id="home--main">

<?php

  $sectionWidth = 'fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center';

?>

<header id="home--header">
  <div class="fs-row">
    <div id="home--header-wrap" class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/header.php' );?></div>
  </div>
</header>


<section id="home--content" class="page-content text-center">
  <div class="fs-row">
    <div class="fs-cell fs-lg-6 fs-md-5 fs-sm-3 fs-centered">
      <h1 class="page-title"><?php the_title(); ?></h1>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>


<div class="fs-row">
<div class="fs-cell fs-lg-7 fs-md-5 fs-sm-3 fs-centered">
<?php if( have_rows('region') ): while ( have_rows('region') ) : the_row(); ?>

  <div class="lapl-region">
    <div class="fs-row text-center">
      
      <?php $region = get_sub_field('region_title'); ?>
      
      <?php if( have_rows('branches') ): while ( have_rows('branches') ) : the_row(); ?>
      <div class="lapl-branch fs-cell fs-xl-third fs-lg-half fs-md-half fs-sm-half text-center fs-padded">
        <h4><a href="<?php the_sub_field('branch_url'); ?>"><?php the_sub_field('branch_name'); ?></a></h4>
        <span><?php echo $region; ?></span>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>

<?php endwhile; endif; ?>
</div>

<div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered"><?php include locate_template('parts/lfla--footer.php' ); ?></div>
  </div>

</div>

</div>
<?php get_footer(); ?>

