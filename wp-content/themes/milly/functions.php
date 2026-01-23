<?php if( file_exists( get_stylesheet_directory().'/jedi-apprentice/jedi-apprentice-import.php' ) && !defined('JEDI_APPRENTICE_PATH') ) {include_once( get_stylesheet_directory().'/jedi-apprentice/jedi-apprentice-import.php' );} ?><?php

// Milly Check License
require_once( get_stylesheet_directory() . '/admin/milly-license.php' );
// Load the API Key library if it is not already loaded.
if ( class_exists( 'Milly_License_Theme' ) ) {
  new Milly_License_Theme( __FILE__, 61715, '1.2', 'theme', 'https://divilover.com/', 'Milly' );
}	

// Milly Load Styles
add_action( 'wp_enqueue_scripts', 'milly_enqueue_styles');
function milly_enqueue_styles() {
    $parenthandle = 'divi-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'milly-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
}


// Milly Load Scripts 
add_action( 'wp_enqueue_scripts', 'milly_enqueue_scripts', 40 );
function milly_enqueue_scripts() {
  
  // Milly Parallax Effect
  $dlov_enable_parallax = et_get_option('dlov_enable_parallax', 'on');
  if ($dlov_enable_parallax == 'on') {
    wp_enqueue_script('gsap', get_stylesheet_directory_uri() . '/js/gsap.min.js', array( 'jquery' ), '', true);
  }
  
  // Milly Carousels and Sliders
  $dlov_enable_sliders = et_get_option('dlov_enable_sliders', 'on');
  if ($dlov_enable_sliders == 'on') {
    wp_enqueue_script('milly-flickity', get_stylesheet_directory_uri() . '/js/flickity.min.js', array( 'jquery' ), '', true);
  }
  
  wp_enqueue_script('milly-scripts', get_stylesheet_directory_uri() . '/js/milly-scripts.js', array( 'jquery' ), '', true);
  
  $dlov_values = array(
    'dlov_overlay_icon' => get_option('dlov_overlay_icon', 'dlov_icon1'),
    'dlov_overlay_click' => et_get_option('dlov_overlay_click', ''),
    'dlov_overlay_escape' => et_get_option('dlov_overlay_escape', ''),
    'dlov_enable_parallax' => et_get_option('dlov_enable_parallax', 'on'),
    'dlov_enable_sliders' => et_get_option('dlov_enable_sliders', 'on')
  );
  wp_localize_script( 'milly-scripts', 'dlov_values', $dlov_values);

}

// Add Theme Options Panel
include('admin/milly-theme-options.php');
 
// Add Inline CSS to the Head
include('admin/milly-inline-css.php');
  
  
// Add Dashboard Scripts & Styles
add_action('admin_enqueue_scripts', 'milly_admin_enqueue', 999);
function milly_admin_enqueue() {
	wp_enqueue_style('milly-admin-style', get_stylesheet_directory_uri().'/admin/milly-admin-styles.css');
  wp_enqueue_script( 'milly-admin-js', get_stylesheet_directory_uri() . '/admin/milly-admin-scripts.js', array( 'jquery' ), '', true );
}

// Milly Preloader
include('preloaders.php');

// Milly WooCommerce
if ( class_exists( 'WooCommerce' ) ) {
  include('woocommerce/woo-functions.php');
}

