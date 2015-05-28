<?php

$settings = array(

  'available_scripts'      => array(
    'jquery-g'             => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
    'scripts'              => array('/assets/js/scripts.min.js'),
  ),

  'default_scripts'        => array(
    'jquery-g',
    'scripts',
  ),

  'available_stylesheets'  => array(
    'default'              => array('/assets/css/styles.min.css'),
  ),

  'default_stylesheets'    => array(
    'default'
  ),

);

Themewrangler::set_defaults( $settings );