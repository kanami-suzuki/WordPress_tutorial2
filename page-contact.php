<?php get_header(); ?>

	<div id="contents" class="inner">
		<div id="contents-in">

			<div id="main">

				<section>

					<p class="check">当ページ（contact.html）はフォームの見本ページです。実際の自動フォームには使いませんのでご注意下さい。</p>

					<h2>お問い合わせ</h2>

					<p>当ページと同じ３項目のお問い合わせフォーム（自動フォーム試用版）を簡単に使えるようにセットしています。</p>
					<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
						あなたのメールアドレス設定と、簡単な編集だけで使えます。<a
							href="https://template-party.com/file/formgen_manual_set2.html"
							target="_blank">こちらのマニュアルをご覧下さい。</a></p>
					<p><strong class="color1">■自動フォームを使わない場合</strong><br>
						テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p>

					<table class="ta1">
						<tr>
							<th>お名前※</th>
							<td><input type="text" name="お名前" size="30" class="ws"></td>
						</tr>
						<tr>
							<th>メールアドレス※</th>
							<td><input type="text" name="メールアドレス" size="30" class="ws"></td>
						</tr>
						<tr>
							<th>お問い合わせ詳細※</th>
							<td><textarea name="お問い合わせ詳細" cols="30" rows="10" class="wl"></textarea></td>
						</tr>
					</table>

					<p class="c">
						<input type="submit" value="内容を確認する" class="btn">
					</p>

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