<header class="site-header">
	<div class="site-header__inner">
		<a href="index.php" class="site-header__logo" aria-label="Lupin Home">
			<img src="assets/images/logo.svg" alt="Lupin" width="85" height="102" />
		</a>
		<button type="button" class="site-header__hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="site-header__drawer">
			<span class="site-header__hamburger-bar"></span>
			<span class="site-header__hamburger-bar"></span>
			<span class="site-header__hamburger-bar"></span>
		</button>
		<div class="site-header__drawer" id="site-header__drawer" aria-hidden="true">
			<nav class="site-header__nav-cards" aria-label="Main navigation">
				<a href="index.php#leaders-speak" class="site-header__nav-card">
					<img src="assets/images/homepage-icons/nav1.svg" alt="" width="170" height="149" />
				</a>
				<a href="catalyst-chronicles.php" class="site-header__nav-card">
					<img src="assets/images/homepage-icons/nav2.svg" alt="" width="170" height="149" />
				</a>
				<a href="wall-of-hope.php" class="site-header__nav-card">
					<img src="assets/images/homepage-icons/nav3.svg" alt="" width="170" height="149" />
				</a>
			</nav>
			<ul class="site-header__drawer-list" aria-label="Main navigation">
				<li><a href="index.php#leaders-speak">Leaders Speak</a></li>
				<li><a href="catalyst-chronicles.php">Catalyst Chronicles</a></li>
				<li><a href="wall-of-hope.php">Wall of Hope</a></li>
				<li><a href="index.php#news-events">News &amp; Events</a></li>
				<li><a href="index.php#purpose-highlights">Purpose Highlights</a></li>
			</ul>
			<nav class="site-header__utility" aria-label="Utility navigation">
				<a href="index.php" class="site-header__utility-link is-active"><span class="site-header__utility-link-text">Home</span></a>
				<span class="site-header__utility-sep" aria-hidden="true"></span>
				<a href="index.php#news-events" class="site-header__utility-link"><span class="site-header__utility-link-text">News &amp; Events</span></a>
				<span class="site-header__utility-sep" aria-hidden="true"></span>
				<a href="index.php#purpose-highlights" class="site-header__utility-link"><span class="site-header__utility-link-text">Purpose Highlights</span></a>
			</nav>
		</div>
		<div class="site-header__overlay" aria-hidden="true"></div>
	</div>
</header>
<script>
document.addEventListener('DOMContentLoaded', function() {
	var btn = document.querySelector('.site-header__hamburger');
	var drawer = document.getElementById('site-header__drawer');
	var overlay = document.querySelector('.site-header__overlay');
	var body = document.body;
	function open() {
		body.classList.add('site-header-menu-open');
		if (btn) btn.setAttribute('aria-expanded', 'true');
		if (drawer) drawer.setAttribute('aria-hidden', 'false');
		if (overlay) overlay.setAttribute('aria-hidden', 'false');
	}
	function close() {
		body.classList.remove('site-header-menu-open');
		if (btn) btn.setAttribute('aria-expanded', 'false');
		if (drawer) drawer.setAttribute('aria-hidden', 'true');
		if (overlay) overlay.setAttribute('aria-hidden', 'true');
	}
	if (btn && drawer) {
		btn.addEventListener('click', function() { body.classList.contains('site-header-menu-open') ? close() : open(); });
		if (overlay) overlay.addEventListener('click', close);
		drawer.querySelectorAll('a').forEach(function(a) { a.addEventListener('click', close); });
	}
});
</script>
