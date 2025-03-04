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

  //本文の抜粋文字数を30文字にする
  function custom_excerpt_length(){
    return 30;
  }
  add_filter('excerpt_length', 'custom_excerpt_length');

  //「続きを読む」リンクを設定
  function custom_excerpt_more(){
    return '<a href ="' . get_permalink(get_the_ID()) . '">(続きを読む)</a>';
  }
  add_filter('excerpt_more', 'custom_excerpt_more');

  //ウィジェットの設定
  function my_widget_init() {
    register_sidebar( array(
      'name' => 'サイドバーの設定',
      'id'   => 'sidebar',
      'before_widget'  => '<nav class="box1">', //ウィジェットの前に表示する要素
      'after_widget'   => '</nav>', //ウィジェットの後に表示する要素
    ));
  }
  add_action('widgets_init', 'my_widget_init');

?>