<header class="banner">
  <div class="main-header container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
    
    <a class="unc" href="http://digitalinnovation.unc.edu"><img src="<?= get_template_directory_uri(); ?>/dist/images/dil-logo-dark.png" alt="UNC Digital Innovation Lab"></a>
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

<?php if (is_front_page()) : ?>
<div class="slider"><img src="http://localhost:8888/prospect-theme/wp-content/uploads/2016/09/unnamed-700x300.jpg"><aside><h1>Welcome to Prospect</h1>Prospect is a sophisticated web-app implemented as a plugin for WordPress that enables users to collect and curate data and then enable the wider public to visualize and access that data. The graphical representation of data – whether it be geographical information shown on maps, temporal data shown on timelines, interpersonal relationships shown as connected graphs, etc. – can facilitate end-users in comprehending it quickly and analyzing it in domain-specific ways. <a class="more" href="#">Read More</a></aside></div>

<div id="news">
  <div class="container"><h5>Latest News</h5></div>
</div>
<?php endif; ?>