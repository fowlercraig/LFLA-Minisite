<?php

  if (get_field('coming_soon_videos')){

    include locate_template('/parts/minisite/videos-comingsoon.php' );

  } else {

    include locate_template('/parts/minisite/videos-visible.php' );

  }

?>