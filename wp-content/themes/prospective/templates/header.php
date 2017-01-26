<?php use Roots\Sage\Titles; ?>

<header class="banner">
  <div class="main-header container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri(); ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>

    <a class="unc" href="http://digitalinnovation.unc.edu"><img src="<?= get_template_directory_uri(); ?>/dist/images/dil-logo-dark.png" alt="UNC Digital Innovation Lab"></a>
  </div>
  <nav class="mobile_nav">
    <div class="container">
      <i id="mobile_menu" class="fa fa-bars" aria-hidden="true"></i>
    </div>
  </nav>
  <nav class="nav-primary" id="primary_nav">
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
  <div id="home-carousel"class="carousel" data-ride="carousel">
    <?php
      $images = get_posts('post_type=carousel&order=ASC');
    ?>
    <ol class="carousel-indicators">
      <?php
        $i = 0;
        foreach ($images as $image) {
          if ($i == 0) {
            echo '<li data-target="#home-carousel" data-slide-to="0" class="active"></li>';
          } else {
            echo '<li data-target="#home-carousel" data-slide-to="'. $i .'"></li>';
          }
          $i++;
        }
      ?>
    </ol>

    <div class="carousel-inner" role="listbox">
      <?php
        $i = 0;
        foreach ($images as $post) {
          setup_postdata($post);

          if ($i == 0) {
            echo '<div class="carousel-item active"><img src="'. get_the_post_thumbnail_url() .'" alt="'. get_the_title() .'"></div>';
          } else {
            echo '<div class="carousel-item"><img src="'. get_the_post_thumbnail_url() .'" alt="'. get_the_title() .'"></div>';
          }
          $i++;
        }
        wp_reset_postdata();
      ?>
    </div>
  </div>
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

<div class="page-header">
  <div class="container">
    <h1><?= Titles\title(); ?></h1>
  </div>
</div>
