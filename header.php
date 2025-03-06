<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>水商売(クラブ,キャバクラ等)サイト向け 無料ホームページテンプレート tp_108</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<!--
<link rel="stylesheet" href="css/style.css">
<script src="js/openclose.js"></script>
<script src="js/fixmenu_pagetop.js"></script>
<script src="js/fixmenu.js"></script>
-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- ページ特有のクラスを入れることができる。WordPressが自動でクラスを出力してくれる -->

<header>
<div class="inner">
<h1 id="logo"><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_theme_file_uri('images/logo.png') ?>" alt="SAMPLE COMPANY"></a></h1>
<div id="contact">
<p class="tel">TEL:00-0000-0000<span>受付：00:00〜00:00　定休日：水曜日</span></p>
</div>
</div>
</header>

<!--PC用（801px以上端末）メニュー-->
<?php 
  wp_nav_menu( array(
    'theme_location' => 'global',
  ));
?>

<!-- <nav id="menubar" class="nav-fix-pos">
<ul class="inner">
<li><a href="cast.html">CAST<span>キャスト</span></a></li>
<li><a href="schedule.html">SCHEDULE<span>スケジュール</span></a></li>
<li><a href="system.html">SYSTEM<span>システム</span></a></li>
<li><a href="access.html">ACCESS<span>アクセス</span></a></li>
<li><a href="recruit.html">RECRUIT<span>キャスト募集</span></a></li>
<li><a href="contact.html">CONTACT<span>コンタクト</span></a></li>
</ul>
</nav> -->
<!--小さな端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li><a href="index.html">HOME<span>ホーム</span></a></li>
<li><a href="cast.html">CAST<span>キャスト</span></a></li>
<li><a href="schedule.html">SCHEDULE<span>スケジュール</span></a></li>
<li><a href="system.html">SYSTEM<span>システム</span></a></li>
<li><a href="access.html">ACCESS<span>アクセス</span></a></li>
<li><a href="recruit.html">RECRUIT<span>キャスト募集</span></a></li>
</ul>
</nav>