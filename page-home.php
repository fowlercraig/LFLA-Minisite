<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<?php

  $sectionWidth = 'fs-grid fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center';

?>

<div id="home--wrapper">

  <header id="home--header">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/header.php' );?></div>
    </div>
  </header>

  <section id="home--main">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/main.php' );?></div>
    </div>
  </section>

  <section id="home--events">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/events.php' );?></div>
    </div>
  </section>

  <section id="home--essays">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/essays.php' );?></div>
    </div>
  </section>

  <section id="home--lamenu">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/lamenu.php' );?></div>
    </div>
  </section>

  <section id="home--rr">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/rr.php' );?></div>
    </div>
  </section>

  <section id="home--tumblr">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/tumblr.php' );?></div>
    </div>
  </section>

  <section id="home--social">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/social.php' );?></div>
    </div>
  </section>

  <section id="home--thanks">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/thanks.php' );?></div>
    </div>
  </section>

  <footer id="home--footer">
    <div class="fs-row">
      <div class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/footer.php' );?></div>
    </div>
  </footer>

</div>

<?php get_footer(); ?>