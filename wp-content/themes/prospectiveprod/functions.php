<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more($more) {
   return '';
}
add_filter('excerpt_more', 'custom_excerpt_more');

add_action( 'init', 'cptui_register_my_cpts_carousel' );
function cptui_register_my_cpts_carousel() {
	$labels = array(
		"name" => __( 'Carousel Images', 'sage' ),
		"singular_name" => __( 'Carousel Image', 'sage' ),
		"menu_name" => __( 'Carousel', 'sage' ),
		);

	$args = array(
		"label" => __( 'Carousel Images', 'sage' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
				"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "carousel", "with_front" => true ),
		"query_var" => true,
		
		"supports" => array( "title", "editor", "thumbnail" ),					);
	register_post_type( "carousel", $args );

// End of cptui_register_my_cpts_carousel()
}