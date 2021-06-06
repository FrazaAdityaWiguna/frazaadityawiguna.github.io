<?php 

/**
 * Function Styles
 */
function fraza_register_styles(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('fraza-style', get_template_directory_uri(). '/style.css', [], $version, 'all');
  wp_enqueue_style('fraza-styleSwitche', get_template_directory_uri(). '/assets/css/styleSwitche.css', [], $version);
}

add_action('wp_enqueue_scripts', 'fraza_register_styles');

/**
 * Function Javascript
 */
function fraza_register_scripts(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script('fraza-script', get_template_directory_uri(). '/assets/js/script.js', [], $version, true);
  wp_enqueue_script('fraza-styleSwitcher', get_template_directory_uri(). '/assets/js/styleSwitcher.js', [], $version, true);
}

add_action('wp_enqueue_scripts', 'fraza_register_scripts');
?>