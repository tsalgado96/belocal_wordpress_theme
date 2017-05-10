<!--<?php /* Template Name: Community Page */ ?>
<?php get_header(); ?>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php echo get_theme_mod('community_heading', 'Community'); ?></h1>
        <p class="lead blog-description"><?php echo get_theme_mod('community_subheading', 'Active Projects'); ?></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div><!-- /.blog-post -->
<!--
        <?php endwhile; else : ?>
          <h1><?php _e( 'Sorry, no posts found.' ); ?></h1>
        <?php endif; ?>
        </div><!-- /.blog-main -->
<!--
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4><?php echo get_theme_mod('community_sidebar_heading', 'About'); ?></h4>
            <p><?php echo get_theme_mod('community_sidebar_text', 'Place description here'); ?></p>
          </div>
          <div class="sidebar-module">
            <h4>Projects</h4>
            <ol class="list-unstyled">
              <li><a href="#">Madagascar</a></li>
              <li><a href="#">Another Project</a></li>
              <li><a href="#">Another Project</a></li>
              <li><a href="#">Yet Another Project</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->
<!--
      </div><!-- /.row -->

    </div><!-- /.container -->
<!--
<?php get_footer(); ?>
-->