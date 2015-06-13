<div class="fs-row">
  <div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3 text-left">
    <div class="table">
      <div class="cell">
        <hr class="invisible">
        <header>
          <h3 class="section-title"><?php the_field('section_title_videos'); ?></h3>
        </header>
        <p><?php the_field('section_description_videos'); ?></p>
      </div>
    </div>
  </div>
  <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3">
    <?php if( have_rows('videos') ): while ( have_rows('videos') ) : the_row(); ?>
    <div class="video"><?php the_sub_field('video_source'); ?></div>
    <?php endwhile; else :endif; ?>
  </div>
</div>

