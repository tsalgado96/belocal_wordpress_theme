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

  //Widget Locations
  function blg_init_widgets($id){
    register_sidebar(array(
      'name'  => 'Sidebar',
      'id'  => 'sidebar',
      'before_widget'  => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'  => '</h4>'
    ));
  }

  add_action('widgets_init', 'blg_init_widgets');
