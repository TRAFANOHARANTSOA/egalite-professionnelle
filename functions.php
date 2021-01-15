<?php
add_theme_support( 'post-thumbnails' );

$defaults = array (
    'default-color' => '',
    'default-image' => '',
    'default-repeat' => 'no-repeat',
    'default-position-x' => '',
    'default-attachment' => '',
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => ''
);
add_theme_support ('custom-background', $defaults);

function custom_logo() {
  $defaults = array(
  'height'      => 20,
  'width'       => 20,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'custom_logo' );


function home_widgets() {

  register_sidebar( array(
  'name' => 'img1',
  'id' => 'img1',
  'before_widget' => '',
  'after_widget' => '',
  ) );

  register_sidebar( array(
    'name' => 'btn1',
    'id' => 'btn1',
    'before_widget' => '',
    'after_widget' => '',
    ) );

  register_sidebar( array(

   'name' => 'img2',
   'id' => 'img2',
   'before_widget' => '',
   'after_widget' => '',
   ) );

   register_sidebar( array(
    'name' => 'btn2',
    'id' => 'btn2',
    'before_widget' => '',
    'after_widget' => '',
    ) );

   register_sidebar( array(

      'name' => 'img3',
      'id' => 'img3',
      'before_widget' => '',
      'after_widget' => ''
  ) );
  register_sidebar( array(
    'name' => 'btn3',
    'id' => 'btn3',
    'before_widget' => '',
    'after_widget' => '',
    ) );
}

  add_action( 'widgets_init', 'home_widgets' );



function register_assets() {
  wp_register_style('font',"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Slab:wght@600&display=swap");
  wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');

  wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', ['popper'], false, true);
  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);

  wp_enqueue_style('font');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('style', get_stylesheet_uri());

  wp_enqueue_script('script', get_template_directory_uri().'/assets/js/main.js', [], false, true);
  wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts', 'register_assets');

include 'functions/functionsCelia.php';
include 'functions/functionsSergio.php';
include 'functions/functionsTsiry.php';
