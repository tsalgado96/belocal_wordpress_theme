<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
<div id="aboutHeroImage">
  <div class="container-fluid aboutOverlay">
    <div class="aboutHero">
      <h1 class="aboutHeroHeading"><span class="whiteBorder">About Us</span></h1>
    </div>
  </div>
</div>

<div class="aboutPage">

  <div class="missionStatement container text-center">
    <h1 class="aboutMainHeading">Mission Statement</h1>
    <h3 class="aboutSubText">The BeLocal Group was created to provide developing countries the power to leverage
      global crowd-sourced innovation to solve their everyday quality of life challenges.</h3>
    <!--<a href="#" class="btn">Learn More</a>-->
  </div>

  <div class="programDev container text-center">
    <h1 class="aboutMainHeading">Program Development</h1>
    <h3 class="aboutSubText">BeLocal Group started working with Dr. Wright and the Chief
      Technology Officer of the Centre ValBio, Jesse McKinney, in the summer of 2016 to
      pilot the Process on Madagascar. The first Discover expedition was conducted in
      January of 2017 by a combined student and CVB team.</h3>
    <a href="#" class="btn">Learn More</a>
  </div>

  <div class="belocalProcess container text-center">
    <h1 class="aboutMainHeading">The BeLocal Process</h1>
    <h3 class="aboutSubText">Discover</h3>
      <p>Engage directly with local population for insight and cultural context.</p>
      <p>Collect and annotate data-rich everyday life stories of the local population in video, audio and text.</p>
    <h3 class="aboutSubText">Define</h3>
      <p>Crowd-source the identification of challenges described or observed in the collected data.</p>
      <p>Form problem statements that address the most compelling and greatest number of challenges.</p>
    <h3 class="aboutSubText">Innovate</h3>
      <p>Crowd-source solutions that fit the local situation and can be self-sustaining.</p>
      <p>Satisfy local needs for performance, cost, materials, infrastructure, maintenance, environment, and culture.</p>
    <h3 class="aboutSubText">Pilot</h3>
      <p>Test and refine solutions with the initial engaged population and beyond.</p>
      <p>Rank the solutions based on performance and degree of adoption.</p>
    <h3 class="aboutSubText">Impact</h3>
      <p>Achieve self-sustaining impact by allowing local entrepreneurs or any willing organization to produce, market and distribute the solution to local population.</p>
      <p>Work with village resources to enable local manufacturing and production.</p>
    <!--<a href="#" class="btn">Learn More</a>-->
  </div>

  <div class="aboutTheTeam container text-center">
    <h1 class="aboutMainHeading">Meet The Team</h1>

      <h3 class="aboutSubText">BeLocal Group</h3>
      <div class="row">
        <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/jeffNagel.jpg" alt="Jeff Nagel"><div class="caption">Jeff Nagel</div></div>
        <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/mickieNagel.jpg" alt="Mickie Nagel"><div class="caption">Mickie Nagel</div></div>
        <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/ericBergerson.jpg" alt="Eric Bergerson"><div class="caption">Eric Bergerson</div></div>
      </div>

        <h3 class="aboutSubText">Stony Brook University</h3>
        <div class="row">
          <div class="col-xs-6"><img src="<?php bloginfo('template_url'); ?>/img/patriciaWright.jpg" alt="Patricia Wright"><div class="caption">Patricia Wright</div></div>
          <div class="col-xs-6"><img src="<?php bloginfo('template_url'); ?>/img/jesseMckinney.jpg" alt="Jesse McKinney"><div class="caption">Jesse McKinney</div></div>
        </div>

        <h3 class="aboutSubText">Advisory Council</h3>
        <div class="row">
          <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/peterSmall.jpg" alt="Peter Small"><div class="caption">Peter Small</div></div>
          <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/petarDjuric.jpg" alt="Petar Djuric"><div class="caption">Petar Djuric</div></div>
          <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/robKukta.jpg" alt="Rob Kukta"><div class="caption">Rob Kukta</div></div>
        </div>

  </div>

</div><!--./aboutPage -->

<?php get_footer(); ?>
