<?php

  function theme_enqueue_files() {
    //cssの読み込み
    wp_enqueue_style('theme-style', get_theme_file_uri('/css/style.css'));
  }

  add_action('wp_enqueue_scripts', 'theme_enqueue_files');

?>