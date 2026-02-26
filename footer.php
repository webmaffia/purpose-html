<footer class="footer">
	<div class="footer__inner">
		<div class="footer__top">
			<nav class="footer__nav" aria-label="Footer navigation">
				<div class="footer__nav-col">
					<a href="#" class="footer__link"><span class="footer__link-text">News &amp; Events</span></a>
					<a href="#" class="footer__link"><span class="footer__link-text">We Are Catalysts</span></a>
					<a href="#" class="footer__link"><span class="footer__link-text">Purpose Highlights</span></a>
				</div>
				<div class="footer__nav-col">
					<a href="#" class="footer__link"><span class="footer__link-text">Leader Speak</span></a>
					<a href="catalyst-chronicles.php" class="footer__link"><span class="footer__link-text">Catalyst Chronicles</span></a>
					<a href="#" class="footer__link"><span class="footer__link-text">Wall Of Hope</span></a>
				</div>
			</nav>
			<!-- <div class="footer__subscribe">
				<h3 class="footer__subscribe-title">SUBSCRIBE US</h3>
				<form class="footer__form" action="#" method="post">
					<input type="email" name="email" class="footer__input" placeholder="Email Id" required />
					<button type="submit" class="footer__submit" aria-label="Subscribe">
						<img src="assets/images/social-icons/arrowbutton.svg" alt="" width="24" height="24" />
					</button>
				</form>
			</div> -->
            
		</div>
		<div class="footer__divider" role="presentation"></div>
		<div class="footer__middle">
			<!-- <div class="footer__social">
				<a href="#" class="footer__social-link" aria-label="X (Twitter)"><img src="assets/images/social-icons/x.com.svg" alt="" width="24" height="24" /></a>
				<a href="#" class="footer__social-link" aria-label="Facebook"><img src="assets/images/social-icons/facebook.svg" alt="" width="24" height="24" /></a>
				<a href="#" class="footer__social-link" aria-label="Instagram"><img src="assets/images/social-icons/insta.svg" alt="" width="24" height="24" /></a>
				<a href="#" class="footer__social-link" aria-label="LinkedIn"><img src="assets/images/social-icons/linkedin.svg" alt="" width="24" height="24" /></a>
				<a href="#" class="footer__social-link" aria-label="YouTube"><img src="assets/images/social-icons/youtube.svg" alt="" width="24" height="24" /></a>
			</div> -->
			<div class="footer__contact">
				<a href="mailto:corporatecommunication@lupin.com" class="footer__contact-item">
					<img src="assets/images/social-icons/mail.svg" alt="" class="footer__contact-icon" width="20" height="20" />
					<span>corporatecommunication@lupin.com</span>
				</a>
				<a href="tel:+912240189999" class="footer__contact-item">
					<img src="assets/images/social-icons/call.svg" alt="" class="footer__contact-icon" width="20" height="20" />
					<span>+91 22 4018 9999</span>
				</a>
			</div>
		</div>
		<div class="footer__divider" role="presentation"></div>
		<div class="footer__bottom">
			<div class="footer__bottom-left">
				<div class="footer__legal">
					<a href="#">Privacy</a><span class="footer__sep">|</span><a href="#">Disclaimer</a><span class="footer__sep">|</span><a href="#">Sitemap</a>
				</div>
				<p class="footer__copyright">© 2025 Lupin. All Rights Reserved</p>
			</div>
			<a href="https://www.lupin.com" target="_blank" rel="noopener noreferrer" class="footer__website">www.lupin.com</a>
		</div>
	</div>
</footer>
<script>
    if ( navigator.serviceWorker ) {
        navigator.serviceWorker.register("sw.js")
            .then( function(reg){
                console.log('Service worker registration', reg);
            })
            .catch( function(err){
                console.error('Service Worker Error', err);
            });

        window.addEventListener('beforeinstallprompt', function (event) {
            var e = event;

            e.preventDefault();

            /*
                document.getElementById('some_id').onclick = function (e) {
                    e.prompt().then(function (result) {
                        if ( result.outcome === 'accepted' ) {
                            // do something
                        }
                    });
                }
            */
        });
    }
</script>
<script>
!function () {
    var baseName = '<?php echo basename($_SERVER['PHP_SELF']); ?>',
        assets = 'assets',
        libs = [assets + '/build/common.js'],
        scripts = [],
        loadScript = function (i) {
            var script = scripts[i];

            if (script) {
                script = document.createElement('script');
                script.async = true;
                script.crossorigin = 'anonymous';
                script.src = scripts[i];
                document.head.appendChild(script);

                script.onload = function (e) {
                    script = undefined;
                    loadScript(i+1);
                };

                script.onerror = function (e) {
                    console.error('No more scripts will be loaded because "' + script.src + '" failed to load!');
                };
            } else {
                loadScript = script_file = scripts = undefined;
            }
        };

    // insert any dependencies (if required) here according to each page and then load scripts
    if ( baseName === 'index.php' ) {
        scripts.push(assets + '/build/front.js');
    } else {
        scripts.push(assets + '/build/inner.js');

        switch (baseName) {
            case '':
            break;
        }
    }

    // concat all scripts
    scripts = libs.concat(scripts);

    // start loading scripts
    loadScript(0);
}();
</script>
