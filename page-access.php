<?php get_header(); ?>

	<div id="contents" class="inner">
		<div id="contents-in">

			<div id="main">

				<section>

					<h2>アクセス</h2>
					<p>ここにアクセス情報など入れて下さい。<br>
						<img src="<?php echo get_theme_file_uri('images/dummy_map_main.jpg') ?>" alt=""></p>

				</section>

			</div>
			<!--/#main-->

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
						<figure><img src="<?php echo get_theme_file_uri('images/photo1.png') ?>" alt="">
						</figure>
						<h4>sample name</h4>
						<p>簡単な説明を入れます。</p>
					</a>
				</div>

				<div class="list-sub">
					<a href="staff.html">
						<figure><img src="<?php echo get_theme_file_uri('images/photo1.png') ?>" alt="">
						</figure>
						<h4>sample name</h4>
						<p>簡単な説明を入れます。</p>
					</a>
				</div>

				<div class="list-sub">
					<a href="staff.html">
						<figure><img src="<?php echo get_theme_file_uri('images/photo1.png') ?>" alt="">
						</figure>
						<h4>sample name</h4>
						<p>簡単な説明を入れます。</p>
					</a>
				</div>

				<div class="list-sub">
					<a href="staff.html">
						<figure><img src="<?php echo get_theme_file_uri('images/photo1.png') ?>" alt="">
						</figure>
						<h4>sample name</h4>
						<p>簡単な説明を入れます。</p>
					</a>
				</div>

			</section>

			<p>
				<a href="recruit.html"><img src="<?php echo get_theme_file_uri('images/banner1.jpg') ?>"
						alt="採用情報" class="pc border1"></a>
				<a href="recruit.html"><img src="<?php echo get_theme_file_uri('images/banner1_sh.jpg') ?>"
						alt="採用情報" class="sh border1"></a>
			</p>
			<p>上のバナー画像は、801px以上の端末と800px以下とで画像２種類が切り替わります。<br>
				<a href="company.html#banner">詳しい説明はこちら。</a></p>

		</div>
		<!--/#side-->

	</div>
	<!--/#contents-->

<?php get_footer(); ?>