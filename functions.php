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
      'id'    => 'sidebar',
      'before_widget'  => '<div class="sidebar-module">',
      'after_widget'   => '</div>',
      'before_title'   => '<h4>',
      'after_title'    => '</h4>'
    ));
    register_sidebar(array(
      'name'  => 'Contact Email Form',
      'id'    => 'contact',
      'before_widget' => '<div class="contactOptinForm">',
      'after_widget'  => '</div>',
      'before_title'   => '<h2>',
      'after_title'    => '</h2>'
    ));
    register_sidebar(array(
      'name'  => 'Front Page Email Form',
      'id'    => 'front',
      'before_widget' => '<div class="frontOptinForm">',
      'after_widget'  => '</div>',
      'before_title'   => '<h2>',
      'after_title'    => '</h2>'
    ));
  }

  add_action('widgets_init', 'blg_init_widgets');

  // Custom Wordpress Login Image
  function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/belocal-wordpress-login-logo3.png);
      		height:130px;
      		width:320px;
      		background-size: contain;
      		background-repeat: no-repeat;
              	padding-bottom: 30px;
        }
    </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_logo' );

  //Customize Wordpress Login
  function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
  }
  add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
