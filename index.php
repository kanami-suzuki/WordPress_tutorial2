<?php get_header(); ?>

<!--スライドショー-->
<aside id="mainimg">
<img src="<?php echo get_theme_file_uri('images/1.jpg') ?>" alt="" class="slide0">
<img src="<?php echo get_theme_file_uri('images/1.jpg') ?>" alt="" class="slide1">
<img src="<?php echo get_theme_file_uri('images/2.jpg') ?>" alt="" class="slide2">
<img src="<?php echo get_theme_file_uri('images/3.jpg') ?>" alt="" class="slide3">
</aside>

<div id="contents" class="inner">
<div id="contents-in">

<div id="main">

<section>



  <h2>本日出勤のキャスト</h2>

  <!-- サブクエリ -->
  <?php
  // 取得する投稿の条件を指定する
  $argc = array( //変数 = 配列
    'post_type' => 'staff', //投稿タイプはスタッフであると指定している
  );

  //上記の条件に基づいて投稿情報を取得する
  $query = new WP_Query($argc); //new WQ_Query()はクラス。クラスを定義することによって投稿を取得することになる。()の中に条件を入れる。今回は$argcの中にstaff投稿の中身が入っている

  //ループ処理を行う(カスタム投稿：スタッフ)
  if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
  ?>

    <div class="list">
      <a href="<?php the_permalink(); ?>">
        <figure>
          <?php the_post_thumbnail('medium'); ?>
        </figure>
        <h4><?php the_title(); ?></h4>
        <?php the_content(); ?>
        <span class="mark1">人気</span>
      </a>
    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>


</section>

<section id="new">
<h2>更新情報・お知らせ</h2>
<dl>
<dt>2021/12/14</dt>
<dd>tableを小さな端末で見た場合に、切れて見える場合がありました。既にご利用中のお客様で対応したい場合、style.cssの<br>
.ta1 {overflow-x: auto;min-width: 800px;}<br>
を、以下にして下さい。<br>
.ta-box .ta1 {overflow-x: auto;min-width: 800px;}</dd>
<dt>2019/02/21</dt>
<dd>全面リニューアル。</dd>
<dt>2014/09/12</dt>
<dd>tp_108配布開始。</dd>
<dt>20XX/00/00</dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00</dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00</dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00</dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00</dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00</dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
</dl>
<p class="r">&raquo;&nbsp;<a href="#">過去ログ</a></p>
</section>

<section>

<h2>テンプレートのご利用前に必ずお読み下さい</h2>

<h3>利用規約のご案内</h3>
<p>このテンプレートは、<a href="https://template-party.com/">Template Party</a>にて無料配布している『水商売(クラブ,キャバクラ等)サイト向け 無料ホームページテンプレート tp_108』です。必ずダウンロード先のサイトの<a href="https://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。</p>
<p><strong class="color1">■HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。</strong><br>
わざと見えなく加工する事も禁止です。</p>
<p><strong class="color1">■下部の著作を外したい場合は</strong><br>
<a href="https://template-party.com/">Template-Party</a>の<a href="https://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。</p>

<h3>当テンプレートにはお問い合わせフォーム（自動フォーム：試用版）がセットされています</h3>
<p><a href="contact.html">contact.html</a>と同じ３項目のお問い合わせフォームを簡単に使えるようにセットしています。</p>
<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="https://template-party.com/file/formgen_manual_set2.html" target="_blank">詳しくはこちらのマニュアルをご覧下さい。</a></p>
<p><strong class="color1">■自動フォームを使わない場合</strong><br>
テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p>

<h3>メニューなどの開閉ブロック（openclose.js）について</h3>
<p>当テンプレートの開閉ブロックパーツは<a href="https://www.crytus.info/" target="_blank">クリタス様</a>提供のプログラムを使用しています。openclose.jsファイルは改変せずにご利用下さい。</p>

<h3>当テンプレートの詳しい使い方は</h3>
<p><a href="company.html">こちらをご覧下さい。</a></p>

</section>

</div>
<!--/main-->

<div id="sub">

<nav class="box1">
<h2>Contents</h2>
<ul class="submenu">
<li><a href="company.html">会社概要</a></li>
<li><a href="link.html">リンク</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
</ul>
</nav>

<nav class="box1">
<ul class="submenu">
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
</ul>
</nav>

<div class="box1 c">
<h2 class="mb10">アクセス</h2>
<p>東京都XX区XXXXビル３F<br>
TEL：03-0000-0000<br>
定休日：月曜日</p>
</div>

</div>
<!--/#sub-->

</div>
<!--/#contents-in-->

<div id="side">

<nav>
<h2>Contents</h2>
<ul class="submenu">
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
</ul>
</nav>

<section>

<h2>人気キャスト</h2>

<div class="list-sub">
<a href="staff.html">
<figure><img src="<?php echo get_theme_file_uri('images/photo1.png') ?>" alt=""></figure>
<h4>sample name</h4>
<p>簡単な説明を入れます。</p>
</a>
</div>

<div class="list-sub">
<a href="staff.html">
<figure><img src="<?php echo get_theme_file_uri('images/photo1.png') ?>" alt=""></figure>
<h4>sample name</h4>
<p>簡単な説明を入れます。</p>
</a>
</div>

<div class="list-sub">
<a href="staff.html">
<figure><img src="<?php echo get_theme_file_uri('images/photo1.png') ?>" alt=""></figure>
<h4>sample name</h4>
<p>簡単な説明を入れます。</p>
</a>
</div>

<div class="list-sub">
<a href="staff.html">
<figure><img src="<?php echo get_theme_file_uri('images/photo1.png') ?>" alt=""></figure>
<h4>sample name</h4>
<p>簡単な説明を入れます。</p>
</a>
</div>

</section>

<p>
<a href="recruit.html"><img src="<?php echo get_theme_file_uri('images/banner1.jpg') ?>" alt="採用情報" class="pc border1"></a>
<a href="recruit.html"><img src="<?php echo get_theme_file_uri('images/banner1_sh.jpg') ?>" alt="採用情報" class="sh border1"></a>
</p>
<p>上のバナー画像は、801px以上の端末と800px以下とで画像２種類が切り替わります。<br>
<a href="company.html#banner">詳しい説明はこちら。</a></p>

</div>
<!--/#side-->

</div>
<!--/#contents-->

<?php get_footer(); ?>