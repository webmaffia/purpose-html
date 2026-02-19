<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php require_once 'head.php'; ?>

	<title></title>

</head>
<body>
	<?php require_once 'header.php'; ?>

	<main class="wrapper">
		<section class="hero">
			<div class="hero__poster" style="background-image: url('assets/images/hero/poster.png');"></div>
			<!-- Desktop video: shown above 414px -->
			<video class="hero__video hero__video--desktop" poster="assets/images/hero/poster.png" playsinline muted loop>
				<source src="assets/videos/hero-desktop.mp4" type="video/mp4" />
			</video>
			<!-- Mobile video: shown at 414px and below -->
			<video class="hero__video hero__video--mobile" poster="assets/images/hero/poster.png" playsinline muted loop>
				<source src="assets/videos/hero-mobile.mp4" type="video/mp4" />
			</video>
			<button type="button" class="hero__play-wrap" aria-label="Play video">
				<span class="hero__animation-wrap" aria-hidden="true">
					<img src="assets/images/homepage-icons/Buttonanimation.svg" alt="" class="hero__animation" width="409" height="409" />
				</span>
				<span class="hero__play-wrap-inner" aria-hidden="true">
					<img src="assets/images/homepage-icons/Playbutton.svg" alt="" class="hero__play" width="186" height="186" />
				</span>
			</button>
		</section>

		<section class="section-hope">
			<div class="section-hope__content">
				<img src="assets/images/New folder/half-circle.svg" alt="" class="section-hope__half-circle" aria-hidden="true" />
				<p class="section-hope__tagline">We catalyze treatments</p>
				<h2 class="section-hope__title">HOPE INTO<br>HEALING</h2>
				<p class="section-hope__text">A purpose-driven journey of over five decades—improving Lives, Building sustainability, and delivering long-term value to our stakeholders. When you find your WHY. you find a WAY to make it happen. Our founder, Dr. Desh Bandhu Gupta, discovered our 'why' and established our mission—to ensure that no one is left without the quality care they deserve.</p>
			</div>
			<div class="section-hope__media">
				<img src="assets/images/New folder/happy-man-listening-music-park 1.png" alt="Person enjoying music outdoors" class="section-hope__img" />
			</div>
		</section>

		<section class="section-action">
			<h2 class="section-action__title">OUR PURPOSE IN ACTION</h2>
			<div class="section-action__cards">
				<article class="section-action__card">
					<img src="assets/images/homepage-icons/action1.svg" alt="" class="section-action__icon" width="120" height="120" />
					<h3 class="section-action__card-title">Leader Speak</h3>
					<p class="section-action__card-text">Our leaders share how our purpose guides decisions and inspires our work, driving us to create meaningful impact.</p>
					<a href="#" class="section-action__btn">Click here to explore!</a>
				</article>
				<article class="section-action__card">
					<img src="assets/images/homepage-icons/action2.svg" alt="" class="section-action__icon" width="120" height="120" />
					<h3 class="section-action__card-title">Catalyst Chronicles</h3>
					<p class="section-action__card-text">Lupinytts demonstrate our purpose daily, showing how small actions lead to significant change.</p>
					<a href="#" class="section-action__btn">Watch their stories</a>
				</article>
				<article class="section-action__card">
					<img src="assets/images/homepage-icons/action3.svg" alt="" class="section-action__icon" width="120" height="120" />
					<h3 class="section-action__card-title">Wall of Hope</h3>
					<p class="section-action__card-text">A growing mosaic of Lupinytt, each with a story, is committed to building a better tomorrow.</p>
					<a href="#" class="section-action__btn">Explore the wall</a>
				</article>
			</div>
		</section>
	</main>

	<?php require_once 'footer.php'; ?>
</body>
</html>