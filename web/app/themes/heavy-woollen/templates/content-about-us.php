<?php if ( !have_posts() ) : ?>
  <div class="alert alert-warning">
    <?php _e( 'Sorry, page not found.', 'sage' ); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part( 'templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format() ); ?>
  </div>
<?php endwhile; ?>
