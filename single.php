<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php the_title(); ?></h1>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

        
          <div class="blog-post">
            <?php the_content(); ?>
            <hr>
            <?php comments_template(); ?>
          </div><!-- /.blog-post -->
        <?php endwhile; else : ?>
          <h1><?php _e( 'Sorry, no posts found.' ); ?></h1>
        <?php endif; ?>
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4><?php echo get_theme_mod('community_sidebar_heading', 'About'); ?></h4>
            <p><?php echo get_theme_mod('community_sidebar_text', 'Place description here'); ?></p>
          </div>
          
          <?php if(is_active_sidebar('sidebar')): ?>
          <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>

        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer(); ?>
