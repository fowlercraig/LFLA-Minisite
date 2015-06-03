<header>
  <h3 class="section-title"><?php the_field('section_title_hash'); ?></h3>
  <?php if(get_field('section_desc_hash')): ?>
  <div class="desc">
    <?php the_field('section_desc_hash'); ?>
  </div>
  <?php endif; ?>
</header>