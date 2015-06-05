<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<?php

  $sectionWidth = 'fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center';

?>

<div id="home--wrapper">

  <header id="home--header">
    <div class="fs-row">
      <div id="home--header-wrap" class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/header.php' );?></div>
    </div>
  </header>

  <div id="mobile-menu" class="fs-grid">
    <div class="fs-row">
      <nav class="fs-cell fs-all-12">
        <?php if( have_rows('navigation') ): $i = 0; while ( have_rows('navigation') ) : the_row(); ?>
        <a href="<?php the_sub_field('nav_url'); ?>" class="btn btn-nav"><?php the_sub_field('nav_label'); ?></a>
        <?php endwhile; endif; ?>
      </nav>
    </div>
  </div>

  <section id="home--main">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/main.php' );?></div>
    </div>
  </section>

  <?php if (!get_field('publish_section_events')): ?>
  <section id="home--events">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/events.php' );?></div>
    </div>
  </section>
  <?php endif; ?>

  <?php if (!get_field('publish_section_essays')): ?>
  <section id="home--essays">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/essays.php' );?></div>
    </div>
  </section>
  <?php endif; ?>

  <?php if (!get_field('publish_section_rr')): ?>
  <section id="home--rr">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/rr.php' );?></div>
    </div>
  </section>
  <?php endif; ?>

  <?php if (!get_field('publish_section_lamenu')): ?>
  <section id="home--lamenu">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/mylamenu.php' );?></div>
    </div>
  </section>
  <?php endif; ?>

  <section id="home--tumblr">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/tumblr.php' );?></div>
    </div>
  </section>

  <section id="home--gallery">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/gallery.php' );?></div>
    </div>
  </section>

  <?php if (!get_field('publish_section_hash')): ?>
  <section id="home--social">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/social.php' );?></div>
    </div>
  </section>
  <?php endif; ?>

  <?php if (!get_field('publish_section_thanks')): ?>
  <section id="home--thanks">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/thanks.php' );?></div>
    </div>
  </section>
  <?php endif; ?>

  <footer id="home--footer">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/footer.php' );?></div>
    </div>
  </footer>

  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered"><?php include locate_template('parts/lfla--footer.php' ); ?></div>

</div>



<?php get_footer(); ?>