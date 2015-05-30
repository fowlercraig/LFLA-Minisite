<?php

  add_image_size( 'gallery-xs', 85  , 35,  true );
  add_image_size( 'gallery-sm', 320 , 320, true );
  add_image_size( 'gallery-lg', 1280, 720, true );
  add_image_size( 'gallery-lg', 1280, 720, true );
  add_image_size( 'eventstrip', 900 , 100, true );

  function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
  }

  add_action( 'init', 'register_my_menu' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats', array( 'quote', 'image' ) );