<?php
  //Register Nav Walker class_alias
  require_once('wp-bootstrap-navwalker.php');

  //Theme Support
  function blg_theme_setup(){
    add_theme_support('post-thumbnails');

    //Nav Menus
    register_nav_menus(array(
      'primary'  => __('Primary Menu')
    ));

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
  }

  add_action('after_setup_theme','blg_theme_setup');

  //Customizer File
  require get_template_directory(). '/inc/customizer.php';
