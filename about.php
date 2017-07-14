<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
<style>
  #aboutHeroImage{
    background-image: url(<?php echo get_theme_mod('about_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>);
  }
</style>
<div id="aboutHeroImage">
  <div class="container-fluid aboutOverlay">
    <div class="aboutHero">
      <h1 class="aboutHeroHeading"><span class="whiteBorder">About Us</span></h1>
    </div>
  </div>
</div>
<div class="aboutPage">
<!-- ****** MODALS ****** -->
  <!-- ABOUT THE TEAM MODALS -->
  <!-- Jeff Nagel -->
  <div class="modal fade jeffNagelModal" tabindex="-1" role="dialog" aria-labelledby="jeffNagelModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content about-offwhite-bg-modal">
        <div class="modal-body text-center">
          <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
          <img src="<?php bloginfo('template_url'); ?>/img/jeffNagel.jpg" alt="Jeff Nagel">
          <h1>Jeff Nagel</h1>
          <p>Jeff joined AEA in 2015 as an Operating Partner. He is primarily focused on working with portfolio companies to maximize value creation through improved operating performance and cross-portfolio best practice development. He also works with AEA’s Risk Committee on the implementation of its ESG initiative. Jeff currently serves on the board of Generation Brands, LoneStar, Pro Mach and Sparrows and TricorBraun.</p>
          <p>Before joining AEA, Jeff was the chief executive officer of NBTY Inc., a portfolio company of The Carlyle Group. NBTY is a &dollar;3B global manufacturer and marketer of supplements. He was formerly a corporate officer of GE and most recently led the Global Services division of GE Oil &amp; Gas as VP and GM, based out of Italy. He previously ran GE Inspection Technologies as president and chief executive officer, based out of Germany. Prior to that, he was the president of GE Home Electric Products. He also served as general manager of business development in GE Aircraft Engines. He joined GE in May of 1997 as the manager of business development at GE Lighting. Before joining GE, Jeff was vice president of marketing at a biotech start-up, Energy Biosystems Corporation. He started his career in management consulting with Strategic Planning Associates (now Mercer Management) and Cannon Associates. He graduated from Carnegie Mellon University in 1987 with an MBA and BS in Mechanical Engineering, both with Honors.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Mickie Nagel -->
  <div class="modal fade mickieNagelModal" tabindex="-1" role="dialog" aria-labelledby="mickieNagelModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content about-offwhite-bg-modal">
        <div class="modal-body text-center">
          <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
          <img src="<?php bloginfo('template_url'); ?>/img/mickieNagel.jpg" alt="Mickie Nagel">
          <h1>Mickie Nagel</h1>
          <p>Mickie Nagel has over 25 years of experience in advertising, marketing, public relations, and community development.  She spent the first half of her career in marketing for super-regional shopping malls where she was responsible for developing strategic marketing plans, advertising campaigns, public relations and special events.  As part of her work, she designed and conducted events that delivered up to 100,000 people.  Her campaigns won multiple industry awards for creative excellence.  She subsequently worked for Hewlett Packard (Compaq Computer) running large scale B2B marketing events.  The second half of her career has been spent raising four children while living in Europe for seven years.  During this period, she travelled extensively and took leadership roles in charitable works and community events.  Currently, she continues her work in marketing, advertising and special events for both business and not-for-profit companies.   She has a Bachelor’s Degree in Business with a Marketing Major from Davenport University (DCB).
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Eric Bergerson -->
  <div class="modal fade ericBergersonModal" tabindex="-1" role="dialog" aria-labelledby="ericBergersonModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content about-offwhite-bg-modal">
        <div class="modal-body text-center">
          <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
          <img src="<?php bloginfo('template_url'); ?>/img/ericBergerson.jpg" alt="Eric Bergerson">
          <h1>Eric Bergerson</h1>
          <p>Eric is the Director of Research at TickerTags.com, a financial technology company focused on discovering market insights before they become news by monitoring the social web in real-time, and aligning the conversations in social media with investable assets.  Before joining TickerTags, he was a senior engineering director at Vendavo responsible for the analytic team leveraging big data technology to provide actionable insights to enable business to sell more profitably.  Eric is a hard-core coder and an experienced manager, applying his experience in software development, machine learning and data science to problems for Financial Services, Healthcare, Entertainment and Market Research.  He has been a founder in three companies and holds both a B.S.E.E. from Carnegie Mellon University (1986) and an M.S.E.E. from the University of Rhode Island (1988).
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Patricia Wright -->
  <div class="modal fade patriciaWrightModal" tabindex="-1" role="dialog" aria-labelledby="patriciaWrightModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content about-offwhite-bg-modal">
        <div class="modal-body text-center">
          <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
          <img src="<?php bloginfo('template_url'); ?>/img/patriciaWright.jpg" alt="Patricia Wright">
          <h1>Patricia Wright</h1>
          <p>Dr. Wright is a Distinguished Service Professor in the Department of Anthropology at the State University of New York at Stony Brook. Dr. Wright has served as the Executive Director for the Institute for the Conservation of Tropical Environments (ICTE) since 1992 and founded the Centre ValBio Research station in Madagascar in 2002. She has studied behavioral ecology of non-human primates in South America, Asia and Madagascar. Her research interests include primate behavior and ecology, female dominance, male parenting, the evolution of tropical biodiversity, biodiversity conservation, climate change in the tropics and conservation genetics.  Patricia is a Fellow of the John D. and Catherine T. MacArthur Foundation, the American Association for the Advancement of Sciences and has won numerous awards and medals including the “Nobel Prize” in conservation, the Indianapolis Prize for Animal Conservation.  She has authored or co-authored many books including her own two volume autobiography and published over a hundred and fifty scientific papers.  Her work has been featured in documentaries and TV shows, most recently in CNN’s “Parts Unknown” and ABC Nightline news.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Jesse McKinney -->
  <div class="modal fade jesseMckinneyModal" tabindex="-1" role="dialog" aria-labelledby="jesseMckinneyModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content about-offwhite-bg-modal">
        <div class="modal-body text-center">
          <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
          <img src="<?php bloginfo('template_url'); ?>/img/jesseMckinney.jpg" alt="Jesse McKinney">
          <h1>Jesse McKinney</h1>
          <p>Jesse McKinney, a trained designer, is currently serving as the Chief Technology Officer of Centre ValBio. He has for the last five years lived and worked in rural Madagascar advising and implementing technology forward initiatives for health and scientific research. Prior to his current position, Jesse served in the United States Peace Corps Madagascar as an Internet and Communication Technology Volunteer. Before working in Madagascar, Jesse had a professional career as an Industrial and Digital Designer, where he held positions at a number of engineering facilities and design firms throughout the USA. In addition to his experience as a designer, Jesse has significant professional experience in robotic systems integration, movement and perception centric industrial automation engineering, and software development. Jesse’s current research interest is in novel applications of low cost distributed sensor networks for ecosystems scale data capture and processing. Jesse holds a BS in Digital Design from the College of DAAP at the University of Cincinnati.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Peter Small -->
  <div class="modal fade peterSmallModal" tabindex="-1" role="dialog" aria-labelledby="peterSmallModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content about-offwhite-bg-modal">
        <div class="modal-body text-center">
          <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
          <img src="<?php bloginfo('template_url'); ?>/img/peterSmall.jpg" alt="Peter Small">
          <h1>Peter Small</h1>
          <p>Dr. Small is the Founding Director of the Stony Brook University Global Health Institute, a highly collaborative, transdisciplinary campus based program that includes teaching, research and service with a mission to reduce poverty, ecological devastation and disease in Madagascar and other poor countries.
          Immediately prior to joining Stony Brook, Peter worked for the Bill and Melinda Gates Foundation for nearly 13 years where he was responsible for developing the foundation’s tuberculosis strategy, building the programs core partnerships and country programs, hiring and managing the TB team, overseeing the vaccine, drug and diagnostic product development activities and serving as the foundation’s voice for tuberculosis. Peter completed his postgraduate training in internal medicine at UCSF and infectious diseases at Stanford University before spending about a decade on the faculty of Stanford’s Division of Infectious Disease and Geographic Medicine. Peter has published more than 150 articles including molecular epidemiologic studies that helped to shape the public health response to the resurgence of tuberculosis in the USA in the 1990’s and seminal papers on the origin, nature and consequence of genetic variability within the species M. tuberculosis. He is a member of several honor societies such as Alpha Omega Alpha Honor Medical Society, American Society for Clinical Investigation, was awarded the Distinguished Alumnus Award from his alma mater, the University of Florida and is a fellow in the American Academy of Microbiology He is a recipient of the Princess Chichibu Global TB Award for his pioneering contributions to global tuberculosis control.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Petar Djuric -->
  <div class="modal fade petarDjuricModal" tabindex="-1" role="dialog" aria-labelledby="petarDjuricModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content about-offwhite-bg-modal">
        <div class="modal-body text-center">
          <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
          <img src="<?php bloginfo('template_url'); ?>/img/petarDjuric.jpg" alt="Petar Djuric">
          <h1>Petar Djuric</h1>
          <p>Petar M. Djurić received a B.S. and M.S. degrees in electrical engineering from the University of Belgrade, Belgrade, Yugoslavia, respectively, and a Ph.D. degree in electrical engineering from the University of Rhode Island, Kingston, RI, USA. He is currently a Professor and Chair of the Department of Electrical and Computer Engineering, Stony Brook University, Stony Brook, NY, USA. His research has been in the area of signal and information processing with primary interests in the theory of signal modeling, detection, and estimation; Monte Carlo-based methods; signal and information processing over networks; machine learning, RFID and the IoT. He has been invited to lecture at many universities in the United States and overseas. Prof. Djurić was a recipient of the IEEE Signal Processing Magazine Best Paper Award in 2007 and the EURASIP Technical Achievement Award in 2012. In 2008, he was the Chair of Excellence of Universidad Carlos III de Madrid-Banco de Santander. From 2008 to 2009, he was a Distinguished Lecturer of the IEEE Signal Processing Society. He has been on numerous committees of the IEEE Signal Processing Society and of many professional conferences and workshops. He is the Editor-in-Chief of the IEEE Transactions on Signal and Information Processing over Networks. Prof. Djurić is a Fellow of IEEE and EURASIP.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Rob Kukta -->
  <div class="modal fade robKuktaModal" tabindex="-1" role="dialog" aria-labelledby="robKuktaModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content about-offwhite-bg-modal">
        <div class="modal-body text-center">
          <span data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times"></i></span>
          <img src="<?php bloginfo('template_url'); ?>/img/robKukta.jpg" alt="Rob Kukta">
          <h1>Rob Kukta</h1>
          <p>Robert Kukta is the Associate Dean for Undergraduate Programs in the College of Engineering and Applied Sciences at Stony Brook University.  He joined Stony Brook in 1999 as a faculty member of the Department of Mechanical Engineering, after serving as a Postdoctoral Scholar of Applied Mechanics at Caltech.  He earned his PhD in Engineering (1998) from Brown University. His research is in solid mechanics, involving the mathematical modeling and simulation of microstructural evolution.  He is best known for his work on the dynamics of dislocations and the mechanics of steps on vicinal surfaces of crystals.  He received an NSF CAREER award for this work.  Recently, Robert’s focus has shifted towards education and diversity.  Prior to becoming Associate Dean, he successively served as Graduate Program Director and then Undergraduate Program Director for the Department of Mechanical Engineering.  In Mechanical Engineering, he advanced successful initiatives to grow the Master’s program, improve undergraduate academic advising, and increase graduation rates.  He is currently working on College initiatives on experiential learning, engineering innovation and entrepreneurship, industry-based senior design projects, broadening participation of women in engineering, and global engineering with a new engineering summer field school in off-grid Africa.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- END ABOUT THE TEAM MODALS -->
<!-- ****** END MODALS ****** -->
  <div style="border-bottom: 3px solid #1371d6;" class="about-offwhite-bg mediumTopPadding mediumBottomPadding container text-center">
    <h3 class="aboutSubText">We believe that great innovation starts with empathy for the people we serve.  Our process begins and ends with their input because our success is measured by their voluntary adoption of innovations that <span class="blue">improve their lives</span>.  We believe that agency matters and makes for the best long term changes.  BeLocal is ultimately about empowering people to make their own lives better.</h3>
  </div>
  <div class="about-offwhite-bg mediumTopPadding mediumBottomPadding container text-center">
    <h1 class="aboutMainHeading">BeLocal Partnership</h1>
    <h3 class="aboutSubText">The BeLocal Group was formed at the beginning of 2017 in partnership with <span class="inline-modal green" data-toggle="modal" data-target=".patriciaWrightModal">Dr Patricia Wright</span> of Stony Brook University (SBU) and <span class="inline-modal green" data-toggle="modal" data-target=".jesseMckinneyModal">Jesse McKinney</span> of Centre ValBio.  We held our introductory kick-off session at Stony Brook in February of 2017 with a diverse interdisciplinary group of professors and students.  From that session, our advisory group was created and a plan put in place to launch the BeLocal Process with the SBU Senior Engineering Design classes in the Fall of 2018.  Our first major expedition is underway on Madagascar, to be completed in July.  The first Discover data set is being developed in parallel with the BeLocal Process web platform.  The process, platform, and suggested project areas will be presented to the Senior Design professors in August and the students in September.  The best projects will be selected for piloting on Madagascar in June of 2018.  Stay tuned!</h3>
  </div>
  <div style="border-top: 3px solid #1371d6;" class="aboutTheTeam container text-center">
    <h1 class="aboutMainHeading">Meet The Team</h1>
    <h3 class="aboutSubText">BeLocal Group</h3>
    <div class="row">
      <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/jeffNagel.jpg" alt="Jeff Nagel" data-toggle="modal" data-target=".jeffNagelModal"><div class="caption inline-modal " data-toggle="modal" data-target=".jeffNagelModal">Jeff Nagel</div></div>
      <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/mickieNagel.jpg" alt="Mickie Nagel" data-toggle="modal" data-target=".mickieNagelModal"><div class="caption inline-modal " data-toggle="modal" data-target=".mickieNagelModal">Mickie Nagel</div></div>
      <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/ericBergerson.jpg" alt="Eric Bergerson" data-toggle="modal" data-target=".ericBergersonModal"><div class="caption inline-modal " data-toggle="modal" data-target=".ericBergersonModal">Eric Bergerson</div></div>
    </div>
      <h3 class="aboutSubText">Stony Brook University</h3>
      <div class="row">
        <div class="col-xs-6"><img src="<?php bloginfo('template_url'); ?>/img/patriciaWright.jpg" alt="Patricia Wright" data-toggle="modal" data-target=".patriciaWrightModal"><div class="caption inline-modal " data-toggle="modal" data-target=".patriciaWrightModal">Patricia Wright</div></div>
        <div class="col-xs-6"><img src="<?php bloginfo('template_url'); ?>/img/jesseMckinney.jpg" alt="Jesse McKinney" data-toggle="modal" data-target=".jesseMckinneyModal"><div class="caption inline-modal " data-toggle="modal" data-target=".jesseMckinneyModal">Jesse McKinney</div></div>
      </div>
      <h3 class="aboutSubText">Advisory Council</h3>
      <div class="row">
        <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/peterSmall.jpg" alt="Peter Small" data-toggle="modal" data-target=".peterSmallModal"><div class="caption inline-modal " data-toggle="modal" data-target=".peterSmallModal">Peter Small</div></div>
        <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/petarDjuric.jpg" alt="Petar Djuric" data-toggle="modal" data-target=".petarDjuricModal"><div class="caption inline-modal " data-toggle="modal" data-target=".petarDjuricModal">Petar Djuric</div></div>
        <div class="col-xs-4"><img src="<?php bloginfo('template_url'); ?>/img/robKukta.jpg" alt="Rob Kukta" data-toggle="modal" data-target=".robKuktaModal"><div class="caption inline-modal " data-toggle="modal" data-target=".robKuktaModal">Rob Kukta</div></div>
      </div>
      <h3 class="aboutSubText">Contributors</h3>
      <div class="row">
        <div class="col-sm-12"><div class="caption"><a href="http://tjsalgado.com" target="_blank">TJ Salgado &mdash; Web Design</a></div></div>
      </div>
  </div>
</div><!--./aboutPage -->
<?php get_footer(); ?>
