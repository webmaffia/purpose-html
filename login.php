<!doctype html>
<html class="no-js" lang="en">
<head>
	<?php require_once 'head.php'; ?>
	<title>Login</title>
</head>
<body class="login-page">
	<div class="login">
		<!-- Left: Hero section -->
		<section class="login__hero">
			<div class="login__hero-bg" style="background-image: url('assets/images/hero/login-banner.png');"></div>
			<a href="index.php" class="login__logo" aria-label="Lupin Home">
				<img src="assets/images/logo.svg" alt="Lupin" width="32.118" height="39" />
			</a>
			<div class="login__hero-tagline-wrap">
				<h1 class="login__tagline">POWERING<br />PROGRESS. TOGETHER.</h1>
			</div>
		</section>

		<!-- Right: Login form + petals -->
		<section class="login__panel">
			<div class="login__petals" role="presentation">
				<img src="assets/images/wall-of-hopes/cardsbg-right-center.svg" alt="" class="login__petals-img login__petals-img--desktop" />
				<img src="assets/images/wall-of-hopes/petals-flip.png" alt="" class="login__petals-img login__petals-img--mobile" />
			</div>
			<div class="login__form-wrap">
				<button type="button" class="login__btn-microsoft" aria-label="Login with Microsoft">
					<img src="assets/images/login/image 1.svg" alt="" class="login__btn-icon" width="21" height="21" />
					<span class="login__btn-text login__btn-text--full">Login with Microsoft</span>
					<span class="login__btn-text login__btn-text--short">Login</span>
				</button>
			</div>
		</section>
	</div>
</body>
</html>
