<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Google Fonts: Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700" rel="stylesheet">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick.css"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main Stylsheet -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <style media="screen">
      #landingContainer{
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>);
        height: 100vh;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
      }
/*
      #initiativesHome {
        background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), url(<?php echo get_theme_mod('initiative_image', get_bloginfo('template_url').'/img/initiative.jpg'); ?>);
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        overflow: auto;
      }
*/
      #opportunities {
        background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(<?php echo get_theme_mod('join_image', get_bloginfo('template_url').'/img/join.jpg'); ?>);
        background-size: cover;
        background-attachment: fixed;
        background-position: center top;
        overflow: auto;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <!-- Fix Admin Menu Overlap -->
    <?php if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; ?>
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php bloginfo('template_url'); ?>/img/blgLogoFix.svg" alt="BeLocal Group Logo"></a>
      </div>
      <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
    </div><!-- /.container-fluid -->
  </nav>
<!-- ****** MODALS ****** -->
<!-- THE BELOCAL PROCESS MODALS -->
<!-- Discover -->
<div class="modal fade discoverModal" tabindex="-1" role="dialog" aria-labelledby="discoverModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content about-offwhite-bg-modal ">
      <div class="modal-body text-center">
        <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
        <h1><?php echo get_theme_mod('process_phase1Heading', 'The BeLocal Process Phase 1'); ?></h1>
        <p><?php echo get_theme_mod('process_phase1Modal', 'The BeLocal Process Phase 1 Modal'); ?></p>
      </div>
    </div>
  </div>
</div>
<!-- Define -->
<div class="modal fade defineModal" tabindex="-1" role="dialog" aria-labelledby="defineModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content about-offwhite-bg-modal ">
      <div class="modal-body text-center">
        <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
        <h1><?php echo get_theme_mod('process_phase2Heading', 'The BeLocal Process Phase 2'); ?></h1>
        <p><?php echo get_theme_mod('process_phase2Modal', 'The BeLocal Process Phase 2 Modal'); ?></p>
      </div>
    </div>
  </div>
</div>
<!-- Innovate -->
<div class="modal fade innovateModal" tabindex="-1" role="dialog" aria-labelledby="innovateModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content about-offwhite-bg-modal ">
      <div class="modal-body text-center">
        <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
        <h1><?php echo get_theme_mod('process_phase3Heading', 'The BeLocal Process Phase 3'); ?></h1>
        <p><?php echo get_theme_mod('process_phase3Modal', 'The BeLocal Process Phase 3 Modal'); ?></p>
      </div>
    </div>
  </div>
</div>
<!-- Pilot -->
<div class="modal fade pilotModal" tabindex="-1" role="dialog" aria-labelledby="pilotModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content about-offwhite-bg-modal ">
      <div class="modal-body text-center">
        <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
        <h1><?php echo get_theme_mod('process_phase4Heading', 'The BeLocal Process Phase 4'); ?></h1>
        <p><?php echo get_theme_mod('process_phase4Modal', 'The BeLocal Process Phase 4 Modal'); ?></p>
      </div>
    </div>
  </div>
</div>
<!-- Impact -->
<div class="modal fade impactModal" tabindex="-1" role="dialog" aria-labelledby="impactModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content about-offwhite-bg-modal ">
      <div class="modal-body text-center">
        <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
        <h1><?php echo get_theme_mod('process_phase5Heading', 'The BeLocal Process Phase 5'); ?></h1>
        <p><?php echo get_theme_mod('process_phase5Modal', 'The BeLocal Process Phase 5 Modal'); ?></p>
      </div>
    </div>
  </div>
</div>
<!-- END THE BELOCAL PROCESS MODALS -->
<!-- ****** END MODALS ****** -->
  <div id="landingContainer" class="container-fluid">
    <div class="jumbotron text-center">
      <img src="<?php bloginfo('template_url'); ?>/img/blgHero.svg" alt="BeLocal Group Logo">
    </div>
  </div>
  <section id="work" class="container-fluid text-center">
    <div class="maxContainer">
      <h1>Our Work</h1>
      <h3>The BeLocal Group was created to provide developing countries the power to leverage global crowd-sourced innovation to solve their everyday quality of life challenges.</h3>
    </div>
  </section>
  <section  id="work" class="about-offwhite-bg container-fluid text-center">
    <div class="maxContainer">
      <h1>Why BeLocal</h1>
      <h3>The developing world faces many everyday challenges where innovation could help, but they lack access to experienced innovators.  At the same time, there are many creative innovators all over the world who would like to help, but don’t have access to local problems.  BeLocal provides the right connection.</h3>
    </div>
  </section>
  <section id="initiativesHome" class="container-fluid content text-center">
    <div class="initiative-slider">
      <img src="<?php bloginfo('template_url'); ?>/img/initiativeSlider1.jpg" alt="">
      <img src="<?php bloginfo('template_url'); ?>/img/initiativeSlider2.jpg" alt="">
      <img src="<?php bloginfo('template_url'); ?>/img/initiativeSlider3.jpg" alt="">
      <img src="<?php bloginfo('template_url'); ?>/img/initiativeSlider4.jpg" alt="">
      <img src="<?php bloginfo('template_url'); ?>/img/initiativeSlider5.jpg" alt="">
      <img src="<?php bloginfo('template_url'); ?>/img/initiativeSlider6.jpg" alt="">
      <img src="<?php bloginfo('template_url'); ?>/img/initiativeSlider8.jpg" alt="">
    </div>
    <div class="overlay"></div>
    <div class="container-fluid">
      <div class="initiative-text">
        <h1>Current Initiative</h1>
        <!--<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>">--><span class="whiteBorder"><?php echo get_theme_mod('initiative_heading', 'Madagascar'); ?></span><!--</a>-->
      </div>
    </div>
  </section>
  <section id="process" class="container-fluid text-center">
    <div class="maxContainer">
      <h1><?php echo get_theme_mod('process_heading', 'The BeLocal Process'); ?></h1>
      <h3><?php echo get_theme_mod('process_subheading', 'The BeLocal Process Subheading'); ?></h3>

      <h2><span class="green1"><?php echo get_theme_mod('process_phase1Heading', 'The BeLocal Process Phase 1'); ?></span></h2>
      <p><?php echo get_theme_mod('process_phase1Subheading', 'The BeLocal Process Phase 1'); ?></p>
      <button <?php echo ( get_theme_mod('process_buttons')) ? "style='display: none;'" : "" ?> class="btn" type="button" name="button" data-toggle="modal" data-target=".discoverModal">Learn More</button>

      <h2><span class="green2"><?php echo get_theme_mod('process_phase2Heading', 'The BeLocal Process Phase 2'); ?></span></h2>
      <p><?php echo get_theme_mod('process_phase2Subheading', 'The BeLocal Process Phase 2'); ?></p>
      <button <?php echo ( get_theme_mod('process_buttons')) ? "style='display: none;'" : "" ?> class="btn" type="button" name="button" data-toggle="modal" data-target=".defineModal">Learn More</button>

      <h2><span class="green3"><?php echo get_theme_mod('process_phase3Heading', 'The BeLocal Process Phase 3'); ?></span></h2>
      <p><?php echo get_theme_mod('process_phase3Subheading', 'The BeLocal Process Phase 3'); ?></p>
      <button <?php echo ( get_theme_mod('process_buttons')) ? "style='display: none;'" : "" ?> class="btn" type="button" name="button" data-toggle="modal" data-target=".innovateModal">Learn More</button>

      <h2><span class="green4"><?php echo get_theme_mod('process_phase4Heading', 'The BeLocal Process Phase 4'); ?></span></h2>
      <p><?php echo get_theme_mod('process_phase4Subheading', 'The BeLocal Process Phase 4'); ?></p>
      <button <?php echo ( get_theme_mod('process_buttons')) ? "style='display: none;'" : "" ?> class="btn" type="button" name="button" data-toggle="modal" data-target=".pilotModal">Learn More</button>

      <h2><span class="green5"><?php echo get_theme_mod('process_phase5Heading', 'The BeLocal Process Phase 5'); ?></span></h2>
      <p><?php echo get_theme_mod('process_phase5Subheading', 'The BeLocal Process Phase 5'); ?></p>
      <button <?php echo ( get_theme_mod('process_buttons')) ? "style='display: none;'" : "" ?> class="btn" type="button" name="button" data-toggle="modal" data-target=".impactModal">Learn More</button>

    </div>
  </section>
  <div id="opportunities" class="container-fluid content text-center">
    <div class="maxContainer">
      <h1><?php echo get_theme_mod('join_heading', 'Join Our Team'); ?></h1>
      <p><?php echo get_theme_mod('join_text', 'BeLocal Group'); ?></p>
      <?php
        if (is_active_sidebar('front')){
            dynamic_sidebar('front');
        }
      ?>
      <!--<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact' ) ) ); ?>" class="btn"><?php echo get_theme_mod('join_btn', 'Get Started'); ?></a>-->
      <br>
      <a href="https://www.facebook.com/groups/belocalgroup/" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
      <a href="https://www.instagram.com/belocalgroup/" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
    </div>
  </div>
<?php get_footer(); ?>
