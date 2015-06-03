<header>
  <h3 class="section-title"><?php the_field('section_title_events'); ?></h3>
  <a id="btnCalendar" class="btn btn-outlined btn-sm">View Full Calendar</a>
</header>

<div class="fs-row">
  <div class="fs-cell fs-all-full packeryContainer" id="packeryContainer">

  <?php if( have_rows('events') ): $i = 0; while ( have_rows('events') ) : the_row(); ?>

  <?php

    // Limit to 4 Events

    $i++; if( $i > 4 ) { break; }

    $eventWidth = 'fs-cell fs-lg-3 fs-md-half fs-sm-half fs-xs-3 fs-contained normal';
    $backbone   = '/assets/img/800x800.gif';

    if (get_sub_field('event_wide')) {

      $eventWidth = 'fs-cell fs-lg-6 fs-md-half fs-sm-half fs-xs-3 fs-contained wide';
      $backbone   = '/assets/img/800x400.gif';

    }

    if (get_sub_field('event_tall')) {

      $eventWidth = 'fs-cell fs-lg-3 fs-md-half fs-sm-half fs-xs-3 fs-contained tall';
      $backbone   = '/assets/img/400x800.gif';

    }

    if (get_sub_field('event_wide') && get_sub_field('event_tall')) {

      $eventWidth = 'fs-cell fs-lg-6 fs-md-half fs-sm-half fs-xs-3 fs-contained jumbo';
      $backbone   = '/assets/img/800x800.gif';

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
      <a class="wrapper cover" href="<?php the_sub_field('event_url'); ?>">
        <h4><?php the_sub_field('event_date'); ?></h4>
        <h3><?php the_sub_field('event_title'); ?></h3>
      </a>
    </div>
    <img src="<?php echo $backbone; ?>" class="img-responsive invisible backbone" />
  </div>

  <?php endwhile; endif; ?>

  </div>
</div>