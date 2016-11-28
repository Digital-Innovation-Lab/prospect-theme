<header class="banner">
  <div class="main-header container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri(); ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>

    <a class="unc" href="http://digitalinnovation.unc.edu"><img src="<?= get_template_directory_uri(); ?>/dist/images/dil-logo-dark.png" alt="UNC Digital Innovation Lab"></a>
  </div>
  <div class="mobile_nav">
    <p>Bruh</p>
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
<div class="slider">
  <!--<div id="home-carousel"class="carousel" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#home-carousel" data-slide-to="1"></li>
    <li data-target="#home-carousel" data-slide-to="2"></li>
  </ol>

    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active"><img src="http://localhost:8888/prospect-theme/wp-content/uploads/2016/09/unnamed-700x300.jpg"></div>
      <div class="carousel-item"><img src="http://localhost:8888/prospect-theme/wp-content/themes/prospective/screenshot.png"></div>
      <div class="carousel-item"><img src="http://localhost:8888/prospect-theme/wp-content/themes/prospective/screenshot.png"></div>
    </div>
  </div>-->
  <?php echo do_shortcode('[image-carousel]'); ?>
  <aside>
    <h1><?php the_field('hero_header'); ?></h1>
    <p><?php the_field('hero_text'); ?></p>
    <div class="buttons">
      <a class="more" href="<?php the_field('action_button_link'); ?>"><?php the_field('action_button_text'); ?></a>
      <a class="download" href="<?php the_field('download_button_link'); ?>"><?php the_field('download_button_text'); ?></a>
    </div>
  </aside>
</div>
<div id="news">
  <div class="container">
    <?php
      $args = array( "showposts" => 3 );
      query_posts($args);

      if (have_posts()) {
        while (have_posts()) {
          the_post();

          echo '<div>';
          echo '<h5>'. get_the_title() .'</h5>';
          echo '<p>'. get_the_excerpt() .'</p>';
          echo '<a href="'. get_permalink() .'">Read More</a>';
          echo '</div>';
        }

        wp_reset_query();
      }
    ?>
  </div>
</div>
<?php endif; ?>
