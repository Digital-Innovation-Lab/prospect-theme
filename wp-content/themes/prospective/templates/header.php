<header class="banner">
  <div class="main-header container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" width="275" alt="<?php bloginfo('name'); ?>"></a>
    
    <a class="unc" href="http://unc.edu"><img src="<?= get_template_directory_uri(); ?>/assets/images/unc.png" alt="UNC"></a>
  </div>
  <nav class="nav-primary">
    <div class="container">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </div>
    </nav>
</header>
