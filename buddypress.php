<?php get_header(); ?>

  <div class="registration-page-wrap">
    <div class="container">
      <div class="blog-header">
        <h1 style="font-weight: 300;" class="blog-title text-center"><?php echo get_the_title(); ?></h1>
      </div>
        <div class="blog-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
            <?php the_content(); ?>
          </div><!-- /.blog-post -->
        <?php endwhile; else : ?>
          <h1><?php _e( 'Sorry, no page found.' ); ?></h1>
        <?php endif; ?>
        </div><!-- /.blog-main -->
    </div><!-- /.container -->
  </div>

<?php get_footer(); ?>
