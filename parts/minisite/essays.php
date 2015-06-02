<header>
  <h3 class="section-title"><?php the_field('section_title_essays'); ?></h3>
</header>

<div class="fs-row">

  <?php if( have_rows('essays') ): $i = 0; while ( have_rows('essays') ) : the_row(); $i++; if( $i > 3 ) { break; } ?>

  <?php
    if ($i == 3){

      $essayWidth = 'last fs-lg-12 fs-md-6 fs-sm-3';

    } else {

      $essayWidth = 'equal fs-lg-6 fs-md-3 fs-sm-half fs-xs-3';

    }
  ?>

  <div id="essay-<?php echo $i; ?>" class="essay fs-cell <?php echo $essayWidth ; ?> fs-contained">
    <div class="wrapper">
      <h3><?php the_sub_field('essay_title'); ?></h3>
      <?php the_sub_field('essay_teaser'); ?>
      <hr class="invisible">
      <a href="#full-essay-<?php echo $i; ?>" class="open-essay btn btn-sm btn-outlined">Read the full essay</a>
    </div>
  </div>

  <div id="full-essay-<?php echo $i; ?>" class="essay full cover fixed">
    <div class="wrapper">
      <header>
        <a href="#" class="essayClose"><i class="ss-gizmo ss-icon">plus</i></a>
        <h2><?php the_sub_field('essay_title'); ?></h2>
      </header>
      <?php the_sub_field('full_essay'); ?>
    </div>
  </div>

  <?php endwhile; endif; ?>

</div>