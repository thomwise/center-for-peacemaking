<?php

function peacemaking_files() {

  wp_enqueue_style('peacemaking_main_styles', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'peacemaking_files')

?>