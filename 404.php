<?php Themewrangler::setup_page();get_header(); ?>

<div id="home--main">

<header id="home--header">
 <div class="fs-row">
   <div id="home--header-wrap" class="<?php echo $sectionWidth;?>"><?php include locate_template('parts/minisite/header.php' );?></div>
 </div>
</header>

<div id="error-msg" class="fs-grid">
  <div class="fs-cell fs-lg-6 fs-md-4 fs-sm-3 fs-centered text-center">
    <h1>404</h1>
    <h3>Sorry, nothing here. <a href="/">Go Home</a></h3>
  </div>
</div>

</div>

<?php get_footer(); ?>