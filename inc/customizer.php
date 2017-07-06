<?php
  function blg_customize_register($wp_customize){

    $wp_customize->add_section('showcase',array(
      'title'  => __('Landing Page', 'belocal'),
      'descripton'  => sprintf(__('Options for showcase', 'belocal')),
      'priority'  => 130
    ));

    $wp_customize->add_section('community',array(
      'title'  => __('Community Page', 'belocal'),
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

    // // *******************************************
    // // Showcase Heading
    // // *******************************************
    // $wp_customize->add_setting('showcase_heading', array(
    //   'default'  => _x('BeLocal Group', 'belocal'),
    //   'type'  => 'theme_mod'
    // ));
    //
    // $wp_customize->add_control('showcase_heading', array(
    //   'label'  => __('Heading', 'belocal'),
    //   'section'  => 'showcase',
    //   'priority'  => 2
    // ));

    // //*******************************************
    // //Showcase Subheading
    // //*******************************************
    // $wp_customize->add_setting('showcase_text', array(
    //   'default'  => _x('Listen Local. Leverage Global.', 'belocal'),
    //   'type'  => 'theme_mod'
    // ));
    //
    // $wp_customize->add_control('showcase_text', array(
    //   'label'  => __('Text', 'belocal'),
    //   'section'  => 'showcase',
    //   'priority'  => 3
    // ));

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
    //BeLocal Process Heading
    //*******************************************
    $wp_customize->add_setting('process_heading', array(
      'default'  => _x('The BeLocal Process', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_heading', array(
      'label'  => __('Process Heading', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 5
    ));

    //*******************************************
    //BeLocal Process Subheading
    //*******************************************
    $wp_customize->add_setting('process_subheading', array(
      'default'  => _x('The BeLocal Process Subheading', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_subheading', array(
      'label'  => __('Process Subheading', 'belocal'),
      'section'  => 'showcase',
      'type'     => 'textarea',
      'priority'  => 5
    ));

    //*******************************************
    //BeLocal Process Phase 1 Heading
    //*******************************************
    $wp_customize->add_setting('process_phase1Heading', array(
      'default'  => _x('Discover', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase1Heading', array(
      'label'  => __('Phase 1 Heading', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 5
    ));
    //*******************************************
    //BeLocal Process Phase 1 Subheading
    //*******************************************
    $wp_customize->add_setting('process_phase1Subheading', array(
      'default'  => _x('Phase 1 Subheading', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase1Subheading', array(
      'label'  => __('Phase 1 Subheading', 'belocal'),
      'section'  => 'showcase',
      'type'   => 'textarea',
      'priority'  => 5
    ));
    //*******************************************
    //BeLocal Process Phase 1 Modal
    //*******************************************
    $wp_customize->add_setting('process_phase1Modal', array(
      'default'  => _x('Phase 1 Popup', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase1Modal', array(
      'label'  => __('Phase 1 Popup Text', 'belocal'),
      'section'  => 'showcase',
      'type'   => 'textarea',
      'priority'  => 5
    ));


    //*******************************************
    //BeLocal Process Phase 2 Heading
    //*******************************************
    $wp_customize->add_setting('process_phase2Heading', array(
      'default'  => _x('Define', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase2Heading', array(
      'label'  => __('Phase 2 Heading', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 5
    ));
    //*******************************************
    //BeLocal Process Phase 2 Subheading
    //*******************************************
    $wp_customize->add_setting('process_phase2Subheading', array(
      'default'  => _x('Phase 2 Subheading', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase2Subheading', array(
      'label'  => __('Phase 2 Subheading', 'belocal'),
      'section'  => 'showcase',
      'type'   => 'textarea',
      'priority'  => 5
    ));
    //*******************************************
    //BeLocal Process Phase 2 Modal
    //*******************************************
    $wp_customize->add_setting('process_phase2Modal', array(
      'default'  => _x('Phase 2 Popup', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase2Modal', array(
      'label'  => __('Phase 2 Popup Text', 'belocal'),
      'section'  => 'showcase',
      'type'   => 'textarea',
      'priority'  => 5
    ));



    //*******************************************
    //BeLocal Process Phase 3 Heading
    //*******************************************
    $wp_customize->add_setting('process_phase3Heading', array(
      'default'  => _x('Innovate', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase3Heading', array(
      'label'  => __('Phase 3 Heading', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 5
    ));
    //*******************************************
    //BeLocal Process Phase 3 Subheading
    //*******************************************
    $wp_customize->add_setting('process_phase3Subheading', array(
      'default'  => _x('Phase 3 Subheading', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase3Subheading', array(
      'label'  => __('Phase 3 Subheading', 'belocal'),
      'section'  => 'showcase',
      'type'   => 'textarea',
      'priority'  => 5
    ));
    //*******************************************
    //BeLocal Process Phase 3 Modal
    //*******************************************
    $wp_customize->add_setting('process_phase3Modal', array(
      'default'  => _x('Phase 3 Popup', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase3Modal', array(
      'label'  => __('Phase 3 Popup Text', 'belocal'),
      'section'  => 'showcase',
      'type'   => 'textarea',
      'priority'  => 5
    ));



    //*******************************************
    //BeLocal Process Phase 4 Heading
    //*******************************************
    $wp_customize->add_setting('process_phase4Heading', array(
      'default'  => _x('Pilot', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase4Heading', array(
      'label'  => __('Phase 4 Heading', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 5
    ));
    //*******************************************
    //BeLocal Process Phase 4 Subheading
    //*******************************************
    $wp_customize->add_setting('process_phase4Subheading', array(
      'default'  => _x('Phase 4 Subheading', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase4Subheading', array(
      'label'  => __('Phase 4 Subheading', 'belocal'),
      'section'  => 'showcase',
      'type'   => 'textarea',
      'priority'  => 5
    ));
    //*******************************************
    //BeLocal Process Phase 4 Modal
    //*******************************************
    $wp_customize->add_setting('process_phase4Modal', array(
      'default'  => _x('Phase 4 Popup', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase4Modal', array(
      'label'  => __('Phase 4 Popup Text', 'belocal'),
      'section'  => 'showcase',
      'type'   => 'textarea',
      'priority'  => 5
    ));



    //*******************************************
    //BeLocal Process Phase 5 Heading
    //*******************************************
    $wp_customize->add_setting('process_phase5Heading', array(
      'default'  => _x('Impact', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase5Heading', array(
      'label'  => __('Phase 5 Heading', 'belocal'),
      'section'  => 'showcase',
      'priority'  => 5
    ));
    //*******************************************
    //BeLocal Process Phase 5 Subheading
    //*******************************************
    $wp_customize->add_setting('process_phase5Subheading', array(
      'default'  => _x('Phase 5 Subheading', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase5Subheading', array(
      'label'  => __('Phase 5 Subheading', 'belocal'),
      'section'  => 'showcase',
      'type'   => 'textarea',
      'priority'  => 5
    ));
    //*******************************************
    //BeLocal Process Phase 5 Modal
    //*******************************************
    $wp_customize->add_setting('process_phase5Modal', array(
      'default'  => _x('Phase 5 Popup', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('process_phase5Modal', array(
      'label'  => __('Phase 5 Popup Text', 'belocal'),
      'section'  => 'showcase',
      'type'   => 'textarea',
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
      'type'  => 'textarea',
      'priority'  => 8
    ));

    // //*******************************************
    // //Join Team Button Text
    // //*******************************************
    // $wp_customize->add_setting('join_btn', array(
    //   'default'  => _x('Get Started', 'belocal'),
    //   'type'  => 'theme_mod'
    // ));
    //
    // $wp_customize->add_control('join_btn', array(
    //   'label'  => __('Button', 'belocal'),
    //   'section'  => 'showcase',
    //   'priority'  => 9
    // ));

    //*******************************************
    //Community Heading
    //*******************************************
    $wp_customize->add_setting('community_heading', array(
      'default'  => _x('Community', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('community_heading', array(
      'label'  => __('Heading', 'belocal'),
      'section'  => 'community',
      'priority'  => 1
    ));

    //*******************************************
    //Community Subheading
    //*******************************************
    $wp_customize->add_setting('community_subheading', array(
      'default'  => _x('Active Projects.', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('community_subheading', array(
      'label'  => __('Subheading', 'belocal'),
      'section'  => 'community',
      'priority'  => 2
    ));

    //*******************************************
    //Community Sidebar Heading
    //*******************************************
    $wp_customize->add_setting('community_sidebar_heading', array(
      'default'  => _x('About', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('community_sidebar_heading', array(
      'label'  => __('Sidebar Heading', 'belocal'),
      'section'  => 'community',
      'priority'  => 3
    ));

    //*******************************************
    //Community Sidebar Text
    //*******************************************
    $wp_customize->add_setting('community_sidebar_text', array(
      'default'  => _x('Lorem Ipsum Dolores', 'belocal'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('community_sidebar_text', array(
      'label'  => __('Sidebar Description', 'belocal'),
      'section'  => 'community',
      'type'  => 'textarea',
      'priority'  => 4
    ));
  }

  add_action('customize_register', 'blg_customize_register');
