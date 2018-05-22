<!DOCTYPE html>
<html>
	<head>
		<title>Tugas WEB</title>
		<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("images/dark-wood.jpg");
				background-position: center;
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin: 0px;}
			.wrapper {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 2px solid #000000;
				background-color: #ffffff;}
			header {
				height: 160px;
				background-image: url(images/up.jpg);}
			h1 {
				text-indent: -9999px;
				width: 940px;
				height: 130px;
				margin: 0px;}
			nav, footer {
				clear: both;
				color: #ffffff;
				background-color: #aeaca8;
				height: 30px;}
			nav ul {
				list-style:none;
				margin: 0px;
				padding: 5px 0px 5px 35px;}
			nav li {
				display: inline;
				margin-right: 40px;
  background: #A9A9A9;
  list-style-type: none;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, nav li a.current {
				color: #000000;}
 nav ul, li{
  list-style-type: none;
 }
 nav ul.sub{
				color: #ffffff;
  display: none;
 }
nav ul.utama li{
  display: inline-block;
 }
 nav ul.utama li:hover ul.sub{
  display: block;
  position: absolute;
 }
 nav ul.sub li{
  display: block;
 }
			section.courses {
				float: left;
				width: 659px;
				border-right: 1px solid #eeeeee;}
			article {
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			figure {
				float: left;
				width: 290px;
				height: 290px;
				padding: 5px;
				margin: 20px;
				border: 1px solid #eeeeee;}
			figcaption {
				font-size: 90%;
				text-align: left;}
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
				color: #de6581;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
		</style>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>Kuliner Jogja</h1>
				<nav>
					<ul class="utama">
						<li><a href="index.html"> beranda</a></li>
						<li><a href="tentang.php" >tentang</a></li>
						<li><a href="" class="current">jenis makanan</a>
						<ul class="sub">
							<li><a href="k_kering.php">kue kering</a></li>
							<li><a href="k_basah.php">kue basah</a></li>
							<li><a href="m_kuah.php" >makanan berkuah</a></li>
							<li><a href="m_berat.php" >makanan berat</a><li>
							<li><a href="m_ringan.php" >makanan ringan</a><li>
							<li><a href="lainnya.php">lainnya</a></li>
						</ul>
						</li>
					</ul>
				</nav>
			</header>
			<section class="courses">
				<article>
					<figure>
						<img src="images/ar.jpg" alt="pecel" />
						<figcaption>Gudeg</figcaption>
					</figure>
					<hgroup>
						<h2>Gudeg Yuyah</h2>
						<h3>Makanan dengan aneka ragam masakan</h3>
					</hgroup>
					<p>gudeg yuyah adalah salah satu tempat makanan yang berada di jogja yang menyajikan makanan gudeg dan berbagai macam jenis makanan lainnya.buka pada jam 24.00 - habis lokasi gudeg ini berada padsa jalan magelang km 2 disebelah toko elektronik atakrib.</p>
				</article>
			</section>
			<aside>
				<section class="popular-recipes">
					<h2>Kuliner Recommended</h2>
					<a href="">Mie Ayam tumini</a>
					<a href="">Sate Klatak pak pong</a>
					<a href="">Enthok slenget kang tanir</a>
					<a href="">Tengkleng Gadjah</a>
				</section>
				<section class="contact-details">
					<h2>Kontak</h2>
					<p>Kuliner Jogja<br />
						di seluruh wilayah Jogjakarta
				</section>
			</aside>
			<footer>
				&copy; 2018 Kuliner Jogja
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
