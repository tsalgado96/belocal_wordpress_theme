<?php
  function blg_customize_register($wp_customize){

    $wp_customize->add_section('showcase',array(
      'title'  => __('Landing Page', 'belocal'),
      'descripton'  => sprintf(__('Options for showcase', 'belocal')),
      'priority'  => 130
    ));

    //*******************************************
    //Showcase Image
    //*******************************************
    $wp_customize->add_setting('showcase_image', array(
      'default'  => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'  => __('Showcase Image', 'belocal'),
      'section'  => 'showcase',
      'settings'  => 'showcase_image',
      'priority'  => 1
    )));

    //*******************************************
    //Showcase Heading
    //*******************************************
    $wp_customize->add_setting('showcase_heading', array(
      'default'  => _x('BeLocal Group', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'  => __('Heading', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 2
    ));

    //*******************************************
    //Showcase Subheading
    //*******************************************
    $wp_customize->add_setting('showcase_text', array(
      'default'  => _x('Listen Local. Leverage Global.', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'  => __('Text', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 3
    ));

    //*******************************************
    //Current Initiative Image
    //*******************************************
    $wp_customize->add_setting('initiative_image', array(
      'default'  => get_bloginfo('template_directory').'/img/initiative.jpg',
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'initiative_image', array(
      'label'  => __('Current Initiative Image', 'belocal'),
      'section'  => 'showcase',
      'settings'  => 'initiative_image',
      'priority'  => 4
    )));

    //*******************************************
    //Current Initiative Heading
    //*******************************************
    $wp_customize->add_setting('initiative_heading', array(
      'default'  => _x('Madagascar', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('initiative_heading', array(
      'label'  => __('Current Initiative', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 5
    ));

    //*******************************************
    //Join Team Image
    //*******************************************
    $wp_customize->add_setting('join_image', array(
      'default'  => get_bloginfo('template_directory').'/img/join.jpg',
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'join_image', array(
      'label'  => __('Join Team Image', 'belocal'),
      'section'  => 'showcase',
      'settings'  => 'join_image',
      'priority'  => 6
    )));

    //*******************************************
    //Join Team Heading
    //*******************************************
    $wp_customize->add_setting('join_heading', array(
      'default'  => _x('Join Our Team', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('join_heading', array(
      'label'  => __('Join Our Team Heading', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 7
    ));

    //*******************************************
    //Join Team Description
    //*******************************************
    $wp_customize->add_setting('join_text', array(
      'default'  => _x('Default description.', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('join_text', array(
      'label'  => __('Text', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 8
    ));

    //*******************************************
    //Join Team Button Text
    //*******************************************
    $wp_customize->add_setting('join_btn', array(
      'default'  => _x('Get Started', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('join_btn', array(
      'label'  => __('Button', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 9
    ));
  }

  add_action('customize_register', 'blg_customize_register');
