<?php

function peacemaking_files() {

// Google Fonts          Name           |       Web CDN URL
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  
// Fontawesome Icons     Name    |       Web CDN URL
  wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  
// CSS                      Name            |  WP Function to get stylesheet "style.css" | Dependencies | Version
  wp_enqueue_style('peacemaking_main_styles', get_stylesheet_uri(),                            NULL,      microtime());

// Javascript          Name         | WP Function to find file path for js       |  Dependencies |   Version   | Load at bottom
  wp_enqueue_script('main-peace-js' , get_theme_file_uri('/js/scripts-bundled.js'),     NULL,      microtime(),      true);

}

add_action('wp_enqueue_scripts', 'peacemaking_files');

function peacemaking_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'peacemaking_features');