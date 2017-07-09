<header class="banner">
  <div class="container">
    <a class="banner--logo-link" href="<?= esc_url(home_url('/')); ?>"><img class="banner--logo-image" src="<?= get_template_directory_uri(); ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>  
    </nav>
  </div>
</header>
