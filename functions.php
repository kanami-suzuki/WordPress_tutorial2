<?php

  function theme_enqueue_files() {
    //cssの読み込み
    wp_enqueue_style('theme-style', get_theme_file_uri('/css/style.css'));

    //JSの読み込み
    wp_enqueue_script('openclose', get_theme_file_uri('/js/openclose.js'), array(), null, false);
    wp_enqueue_script('fixmenu_pagetop', get_theme_file_uri('/js/fixmenu_pagetop.js'), array(), null, false);
    wp_enqueue_script('fixmenu', get_theme_file_uri('/js/fixmenu.js'), array(), null, false);
  }

  add_action('wp_enqueue_scripts', 'theme_enqueue_files');

?>