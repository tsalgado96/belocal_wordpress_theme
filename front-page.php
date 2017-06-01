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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <!-- Main Stylsheet -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

      #initiativesHome {
        background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), url(<?php echo get_theme_mod('initiative_image', get_bloginfo('template_url').'/img/initiative.jpg'); ?>);
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        overflow: auto;
      }

      #opportunities {
        background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(<?php echo get_theme_mod('join_image', get_bloginfo('template_url').'/img/join.jpg'); ?>);
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        overflow: auto;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php bloginfo('template_url'); ?>/img/blgLogo.svg" alt="BeLocal Group Logo"></a>
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

  <div id="landingContainer" class="container-fluid">
    <div class="jumbotron text-center">
      <img src="<?php bloginfo('template_url'); ?>/img/blgHero.svg" alt="BeLocal Group Logo">
      <!--
      <h1><span class="whiteBorder"><?php echo get_theme_mod('showcase_heading', 'BeLocal Group'); ?></span></h1>
      <h2><?php echo get_theme_mod('showcase_text', 'Listen Local. Leverage Global.'); ?></h2>
    -->
    </div>
  </div>

  <section id="work" class="container-fluid text-center">
    <div class="maxContainer">
      <h1>Our Work</h1>
      <h3>We provide developing communities the power to leverage global crowd
        sourced innovation to solve local challenges.</h3>
      <h2>The Secret Recipe</h2>
      <p>Local Engagement + Everyday Challenges + Crowd-sourced Innovation
        + Market Incentives</p>
      <h2>The Result</h2>
      <p>Relevant, practical, and innovative solutions with build in market demand.</p>
      <h2>How We Do It</h2>
      <p>We boast an interdisciplinary skillset, ranging from engineering and design
        to marketing and business.</p>
    </div>
  </section>

  <div id="initiativesHome" class="container-fluid content text-center">
    <h1>Current Initiative</h1>
    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Community' ) ) ); ?>"><span class="whiteBorder"><?php echo get_theme_mod('initiative_heading', 'Madagascar'); ?></span></a>
  </div>

  <section id="process" class="container-fluid text-center">
    <div class="maxContainer">
      <h1>The BeLocal Process</h1>
      <h2 style="color:#C5E1A5">Discover</h2>
      <p>Collect and annotate data-rich everyday life stories of the local population in video,
        audio and text. Engage directly with local population for insight and cultural context.</p>
      <h2 style="color:#AED581">Define</h2>
      <p>Crowd-source the identification of challenges described or observed in the collected data.
        Form problem statements that address the most compelling and greatest number of challenges.</p>
      <h2 style="color:#8BC34A">Innovate</h2>
      <p>Crowd-source solutions that fit the local situation and can be self-sustaining.
        Satisfy local needs for performance, cost, materials, infrastructure, maintenance, environment, and culture.</p>
      <h2 style="color:#689F38">Pilot</h2>
      <p>Test & refine solutions with the initial engaged population and beyond.
        Rank the solutions based on performance and degree of adoption</p>
      <h2 style="color:#33691E">Impact</h2>
      <p>Achieve self-sustaining impact by allowing local entrepreneurs or any willing
        organization to produce, market and distribute the solution to local population.
        Work with village resources to enable local manufacturing and production.</p>
    </div>
  </section>

  <div id="opportunities" class="container-fluid content text-center">
    <div class="maxContainer">
      <h1><?php echo get_theme_mod('join_heading', 'Join Our Team'); ?></h1>
      <p><?php echo get_theme_mod('join_text', 'BeLocal Group'); ?></p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Login/Register' ) ) ); ?>" class="btn"><?php echo get_theme_mod('join_btn', 'Get Started'); ?></a>
    </div>
  </div>

<?php get_footer(); ?>
