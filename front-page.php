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
        <h1>Discover</h1>
        <p>The Discover step is all about gathering the kind of data needed to enable relevant, effective innovation.  An innovator solving a problem at home has a tremendous amount of critical information readily available.  She knows the culture, the way things are done, the infrastructure, the economy, the supply of local labor, local materials etc.  She often has direct experience with the problem being addressed or is surrounded by people who may and can provide insight and feedback through the process.  An innovator draws on all of this knowledge to develop an effective solution.  Now imagine losing all that information but still being asked to create a relevant, effective solution.  Really hard.  So the first step in the BeLocal Process is to Discover the data needed to bridge the gap between local challenges and global innovators.</p>
        <br>
        <p>During the Discover step enough data is collected to provide a remote innovator a virtual understanding of the local culture and environment of those trying to be served as if it was her own.  This is accomplished through well understood anthropological and ethnographic methodologies enhanced by modern technology.  Video and other multimedia technologies are used to capture what is said and observed while talking to, working alongside and observing the environment of the local population.</p>
        <br>
        <p>Video is taken about all aspects of village life, from culture and environment to food production, transportation, housing, healthcare and more.  This video is annotated for additional context and searchability.  At the same time, interviews are conducted to understand villager thoughts about local challenges, cultural sensitivities, and ideas for improvement.  This primary data is supplemented with a wide range of public information on the local culture, demographics, economy, health, climate, infrastructure, material availability and tool availability.  During the later Innovate step, specific physical measurements (e.g., size of a wheel, distance from A to B, etc) may be taken in support of particular projects.  All of this data is centrally stored and organized to be easily accessible during all of the subsequent steps to support Definition, Innovation and Impact.</p>
        <br>
        <p>The discovery process is built on a foundation of trust with the villagers with a goal to transfer the agency of change to the local population,  This goal is achieved by working with NGO&rsquo;s that are deeply connected to the local villages they work with.  The initial BeLocal effort is in partnership with Dr Pat Wright and the Centre Val Bio research station in Madagascar.  Dr. Wright has worked in Madagascar for over 30 years.  Through her work with lemurs, she has made tremendous contributions to conservation.  At the same time, she has built deep trusting relationships with the 60 villages on Madagascar where the initial BeLocal Process efforts are taking place.  The trust Dr Wright and her team have built is fundamental to the success of the Discover step (and subsequent Pilot and Impact steps as well).</p>
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
        <h1>Define</h1>
        <p>Currently, innovation in the developing world requires extensive travel and a significant commitment of time to remain in residence to truly understand the challenges faced by those one hopes to serve.  The BeLocal Process removes this obstacle to innovation by leveraging technology to distribute the data captured during the Discover phase to a global set of potential innovators.  This allows for significantly more people to be involved with helping solve challenges in the developing world.  The participation of these remote innovators begins with this Define step in which critical thinkers begin to identify common challenges described or observed in the data captured so far.</p>
        <br>
        <p>Traditional philanthropic processes typically focus on a pre-identified problem that they wish to address.  The distribution of mosquito netting, providing dairy cows to villages, and building wells to provide safe drinking water are all worthy goals.  However, these organizations are a solution looking for people who have a problem they can address.  The BeLocal Process drives the agency of change from those being served forward, identifying the reported or observed challenges and discovering which problems best need to be addressed.</p>
        <br>
        <p>The most challenging part of innovation is normally not the creative process itself.  The tough part is in clearly recognizing an unmet need and stating the problem in a new way that points to the novel solution.  A clear problem statement is a great way to unlock creativity.  In the second step of the BeLocal Process, Critical thinkers participating in the process define Challenges by analyzing the data and annotations already collected and piecing together obstacles to everyday life that are either reported or observed in the data.  These or other participants in the Process can then hypothesize structured Problems that can address one or more challenges.  These Problems statements are then passed on to the Innovate step for resolution.</p>
        <br>
        <p>For example, the data might illustrate people carrying lots of heavy harvested goods by hand from the fields to the town.  The annotated data might note people carrying heavy loads, the poor condition of various paths and roads, and the fact that few if any villagers are wearing shoes.  They may note there are a few wheeled carts, but that they are poorly built and in need of good wheels.  The village elders may have said their largest obstacle is in getting food back to the village at harvest time; all observed data and annotation.</p>
        <br>
        <p>The BeLocal Process participants define Challenges by tying together different parts of the data and annotation.  Based on the example data above, one Challenge may be that the roads are uneven and difficult to traverse, backed up by both the observed data and possibly complaints during interviews.  Another Challenge may be that there are insufficient modes of transportation, such as proper carts with good wheels that can easily travel over the poorly maintained roads.  Another Challenge may be that it is difficult to carry a heavy load on unpaved roads without shoes.  The difficulty in staying parasite free when walking around without shoes may be another Challenge.  Four different observed challenges, some overlapping a higher-order reported Challenge that food simply takes too long to get back to town.</p>
        <br>
        <p>A Problem hypothesizes how a group of challenges can be addressed by a specific potential solution.  It does so in a formal way, referring to the defined challenges and demonstrating how each would be addressed.  It includes both global constraints placed on the process by BeLocal, such as cost limitations, local materials available, impact studies limiting certain potential conflicts.  It also can contain constraints the participant identifies as well.  It must include a detailed methodology for testing the solution, both remotely and locally piloted.  Most importantly, it must include a measure of performance to indicate the degree to which the solution meets its goals.</p>
        <br>
        <p>Continuing our example, a Problem could make the conjecture that building a better cart would address the Challenges of moving the harvest over poor roads, make it easier to transport food when barefoot, and allow more food to be moved at once .  An alternative Problem definition might contain a hypothesis proffering that building strong shoes from local material combined with parts of discarded tires will both allow the carriers and cart pullers to move much quicker over the poorly maintained roads while protecting them from the parasites one gets from walking barefoot.  Each problem definition, to be considered complete, would have to have all of the parts described above, but those ideas can come from one or more participants collaborating together.  The two example Problems each address a different combination of defined Challenges and when finished provide the methodology for testing and measuring their success, allowing them to be compared as to their relative effectiveness.</p>
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
        <h1>Innovate</h1>
        <p>While much philanthropy relies on innovation to provide assistance, this step of the Process for BeLocal couldn&rsquo;t be more different from traditional organizations.  Traditional organizations either address a single topic (Save the&mldr;.) or are formed around how a single innovation can serve one or more populations (Let&rsquo;s give everyone ...).  At this stage in the BeLocal Process, we have carefully built up a collection of well defined Problems, all of which identify exactly which Challenges they address and how, each of which has been documented and sourced from those being served.  This insures that any solutions to these problems will directly address the observed and reported obstacles in the lives of those being served.</p>
        <br>
        <p>It is now, that participants in the BeLocal Process get the opportunity to innovate solutions to these problems.  For a solution to be viable it must provide detailed methodology for implementation, both for testing, such as building a prototype and for sustainable production.  It must meet the listed constraints, some of which are imposed by BeLocal, such as ethical concerns or sustainability issues.  Others may be more specific to the locale. For instance, in a village near a jungle at risk, any solution that requires burning wood and whose very success would likely result in deforestation would not pass muster.  Some constraints may simply be the cost under which a pilot project can be performed.</p>
        <br>
        <p>Once these issues are addressed, the innovation is ready for selection for testing in a pilot project.</p>
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
        <h1>Pilot</h1>
        <p>The BeLocal Process is designed to accelerate the process of innovation through crowd sourced innovation.  At this phase of the process, having done so, there is a pipeline of solutions all of which are potential candidates for testing.  As our stated goal is to empower people to make their own lives better, those being served are welcome to participate in any phase they are able.  However, the Process truly shifts the agency of change by insuring their participation in the three phases of Discover, Pilot, and Impact.  In the Pilot step, the participation of those being served provides inexpensive validation as to the performance of solutions.  The local feedback is crucial to evaluate the likely adoption of such a solution if implemented.  Furthermore, the performance data resulting from the pilot can help predict the impact on investment (ioi) that delivering such a solution may have. </p>
        <br>
        <p>The selection of which solutions are piloted is a balance between prioritization based on local feedback, design, projected impact, funding, and practicality.  While all the solutions may not get piloted, those that do already have a much better chance of success than the conjecture that is at the heart of traditional philanthropic organizations, that the solution they are proposing will work and be adopted by those they are trying to serve.</p>
        <br>
        <p>For example, in Madagascar we have been told, much of the population is provided with mosquito netting to help prevent the disease and parasites that mosquitoes spread.  However, mosquito netting is the strongest and finest netting that many of the villages ever own.  As such, despite being covered in poisons intended for the mosquitos they are typically employed as either fishing nets or to shade the crops.  This is an example of a valid solution deployed without proper agency.  The solutions coming out of the BeLocal Process have been sourced by the people and are piloted by the people. By piloting the  adoption of a solution, such as the mosquito netting as fishing nets or shades, the BeLocal Pilot stage would quickly identify solutions that are not yet ready for delivery and do so at a greatly reduced cost.
        </p>
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
        <h1>Impact</h1>
        <p>Having identified the solutions that are ready for adoption, the Impact stage is where BeLocal can begin to help people truly make their lives better.  BeLocal identifies, wherever possible, local individuals and organizations that can deliver these solutions.  BeLocal identifies, and partners with, organizations capable of providing proper support and expertise to these local participants.  This support can come in many forms from investment capital, to business acumen, from training to service trips,. Whatever the form of support, the goal is to deliver the solution in a self-sustaining form, to insure its ongoing success and to, when possible, get synergistic effects that improves lives across the community.  The delivery of a solution must include a plan for recording the impact of the solution and the lessons learned.  By doing so, the knowledge gained by the deployment of a solution can be leveraged in all steps of the BeLocal Process, improving the quality and rate of innovation for future solutions.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- END THE BELOCAL PROCESS MODALS -->


<!-- ****** END MODALS ****** -->

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
      <h3>The BeLocal Group was created to provide developing countries the power to leverage global crowd-sourced innovation to solve their everyday quality of life challenges.</h3>
<!--
      <h2>The Secret Recipe</h2>
      <p>Local Engagement + Everyday Challenges + Crowd-sourced Innovation
        + Market Incentives</p>
      <h2>The Result</h2>
      <p>Relevant, practical, and innovative solutions with built in market demand.</p>
      <h2>How We Do It</h2>
      <p>We boast an interdisciplinary skillset, ranging from engineering and design
        to marketing and business.</p>
-->
    </div>
  </section>

  <section style="border-top: 3px solid #50BF41;" id="work" class="about-offwhite-bg container-fluid text-center">
    <div class="maxContainer">
      <h1>Why BeLocal</h1>
      <h3>The developing world faces many everyday challenges where innovation could help, but they lack access to experienced innovators.  At the same time, there are many creative innovators all over the world who would like to help, but don’t have access to local problems.  BeLocal provides the right connection.</h3>
    </div>
  </section>

  <div id="initiativesHome" class="container-fluid content text-center">
    <h1>Current Initiative</h1>
    <!--<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>">--><span class="whiteBorder"><?php echo get_theme_mod('initiative_heading', 'Madagascar'); ?></span><!--</a>-->
  </div>

  <section id="process" class="container-fluid text-center">
    <div class="maxContainer">
      <h1>The BeLocal Process</h1>
      <h3>We work through a structured, web-based process for innovation that begins with listening to the local needs and understanding local cultural requirements.</h3>
      <h2><span class="green1 inline-modal" data-toggle="modal" data-target=".discoverModal">Discover</span></h2>
      <p>Collect and annotate data-rich everyday life stories of the local population in video,
        audio and text. Engage directly with local population for insight and cultural context.</p>
      <h2><span class="green2 inline-modal" data-toggle="modal" data-target=".defineModal">Define</span></h2>
      <p>Crowd-source the identification of challenges described or observed in the collected data.
        Form problem statements that address the most compelling and greatest number of challenges.</p>
      <h2><span class="green3 inline-modal" data-toggle="modal" data-target=".innovateModal">Innovate</span></h2>
      <p>Crowd-source solutions that fit the local situation and can be self-sustaining.
        Satisfy local needs for performance, cost, materials, infrastructure, maintenance, environment, and culture.</p>
      <h2><span class="green4 inline-modal" data-toggle="modal" data-target=".pilotModal">Pilot</span></h2>
      <p>Test and refine solutions with the initial engaged population and beyond.
        Rank the solutions based on performance and degree of adoption.</p>
      <h2><span class="green5 inline-modal" data-toggle="modal" data-target=".impactModal">Impact</span></h2>
      <p>Achieve self-sustaining impact by allowing local entrepreneurs or any willing
        organization to produce, market, and distribute the solution to local population.
        Work with village resources to enable local manufacturing and production.</p>
    </div>
  </section>

  <div id="opportunities" class="container-fluid content text-center">
    <div class="maxContainer">
      <h1><?php echo get_theme_mod('join_heading', 'Join Our Team'); ?></h1>
      <p><?php echo get_theme_mod('join_text', 'BeLocal Group'); ?></p>
      <form class="optinForm" action="index.html" method="post">
        <div class="row">
          <div class="col-sm-6"><input class="regInput" type="text" name="name" placeholder="Name"></div>
          <div class="col-sm-6"><input class="regInput" type="text" name="email" placeholder="Email"></div>
        </div>
        <br>
        <input class="submit" type="submit" name="submit" value="Sign Up">
      </form>
      <!--<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>" class="btn"><?php echo get_theme_mod('join_btn', 'Get Started'); ?></a>-->
      <br>
      <a href="https://www.facebook.com/groups/belocalgroup/" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
      <a href="https://www.instagram.com/belocalgroup/" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
    </div>
  </div>

<?php get_footer(); ?>
