<?php if ( !have_posts() ) : ?>
  <div class="alert alert-warning">
    <?php _e( 'Sorry, page not found.', 'sage' ); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="row">
  <div class="col-md-6">
    <div class="row">
      <div class="contact-us-image-container">
        <?php the_post_thumbnail( [600,600] ); ?>
      </div>
    </div>
    <div class="row">
      <div class="contact-us-text-container">
        <?php get_template_part( 'templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format() ); ?>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="contact-us-map-container">
      <?php echo do_shortcode('[google_map_easy id="1"]')?>
    </div>
  </div>
</div>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="contact-us-form-container">
        <?php echo do_shortcode("[supsystic-form id='11']");?>
      </div>
    </div>
  </div>
<?php endwhile; ?>
