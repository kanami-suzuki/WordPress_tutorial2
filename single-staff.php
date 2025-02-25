<?php get_header(); ?>

	<div id="contents" class="inner">
		<div id="contents-in">

			<div id="main">

				<article>

				<?php 
					if (have_posts()) : //if記事があったら下のwhileに進む
						while (have_posts()) : //記事がある間the_post()を繰り返す
							the_post() ; //記事の情報を取得
				?>

					<h2><?php the_title(); ?></h2>

					<div class="staff">

						<div class="left">

							<figure>
								<?php the_post_thumbnail('medium'); ?>
							</figure>

						</div>
						<!--/left-->

						<div class="right">

							<table class="ta1">
								<tr>
									<th>名前</th>
									<td><?php the_title(); ?></td>
								</tr>
								<tr>
									<th>年齢</th>
									<td><?php the_field('age'); ?></td>
								</tr>
								<tr>
									<th>スリーサイズ</th>
									<td><?php the_field('size'); ?></td>
								</tr>
								<tr>
									<th>趣味</th>
									<td><?php the_field('hobby'); ?></td>
								</tr>
								<tr>
									<th>タバコ</th>
									<td><?php the_field('tobacco'); ?></td>
								</tr>
							</table>

						</div>
						<!--/right-->

						<p class="c clear">&lt;&lt; <a href="javascript:history.back()">前のページに戻る</a></p>

					</div>
					<!--/staff-->
				<?php
						endwhile;
					endif;
				?>

				</article>

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