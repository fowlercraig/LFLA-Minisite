<header>
  <h3 class="section-title"><?php the_field('section_title_events'); ?></h3>
  <a id="btnCalendar" class="btn btn-outlined btn-sm">View Full Calendar</a>
</header>

<div class="fs-row">
  <div class="fs-cell fs-all-full" id="packeryContainer">

  <?php if( have_rows('events') ): $i = 0; while ( have_rows('events') ) : the_row(); ?>

  <?php

    // Limit to 4 Events

    $i++; if( $i > 4 ) { break; }

    $eventWidth = 'fs-cell fs-lg-3 fs-md-6 fs-sm-3 fs-contained normal';
    $backbone   = 'http://placehold.it/800x800/09f/fff';

    if (get_sub_field('event_wide')) {

      $eventWidth = 'fs-cell fs-lg-6 fs-md-6 fs-sm-3 fs-contained wide';
      $backbone   = 'http://placehold.it/800x400/333/fff';

    }

    if (get_sub_field('event_tall')) {

      $eventWidth = 'fs-cell fs-lg-4 fs-md-6 fs-sm-3 fs-contained tall';
      $backbone   = 'http://placehold.it/400x800/eee/fff">';

    }

    if (get_sub_field('event_wide') && get_sub_field('event_tall')) {

      $eventWidth = 'fs-cell fs-lg-6 fs-md-6 fs-sm-3 fs-contained jumbo';
      $backbone   = 'http://placehold.it/800x800/09f/fff';

    }

    $image = get_sub_field('event_image');

    if( !empty($image) ){

      $size  = 'large';
      $thumb = $image['sizes']['large'];

    } else {

      $size = '';
      $thumb = '';

    }

  ?>

  <div class="event <?php echo $eventWidth; ?> text-left" style="background-image:url(<?php echo $thumb; ?>);">
    <div class="meta">
      <a class="wrapper cover" href="#">
        <h4><?php the_sub_field('event_date'); ?></h4>
        <h3><?php the_sub_field('event_title'); ?></h3>
      </a>
    </div>
    <img src="<?php echo $backbone; ?>" class="img-responsive invisible backbone" />
  </div>

  <?php endwhile; endif; ?>

  </div>
</div>