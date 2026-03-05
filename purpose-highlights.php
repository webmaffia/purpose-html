<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'head.php'; ?>

    <title></title>

</head>

<body>
    <!-- Header -->
    <?php require_once 'header.php'; ?>

    <!-- Monthly Highlights section -->
    <section class="monthly-highlights">
        <!-- Hero section -->
        <section class="purpose__hero">
            <img class="purpose__hero-image" src="assets/images/hero/purpose-highlights_hero-banner.png"
                alt="purpose section image" fetchpriority="high" />
        </section>

        <h1 class="purpose__title">MONTHLY HIGHLIGHTS</h1>

        <!-- Year Selector -->
        <div class="purpose__year-selector">
            <button class="year-btn active" data-year="2025">2025</button>
            <!-- <button class="year-btn" data-year="2026">2026</button> -->
        </div>

        <!-- Months -->
        <div class="purpose__months-wrapper">
            <div class="purpose__months"></div>
        </div>

        <!-- Video Section -->
        <section class="hero purpose-hero">
            <div class="purpose-hero__media">
                <div class="hero__poster" id="purpose-hero-poster" style="background-image: url('assets/images/hero/November.png');">
                </div>
                <!-- Desktop video: shown above 414px -->
                <video class="hero__video hero__video--desktop" poster="assets/images/hero/November.png"
                    playsinline muted loop>
                    <source src="assets/videos/Purpose November 2025 Highlights.mp4" type="video/mp4" />
                </video>
                <!-- Mobile video: shown at 414px and below -->
                <video class="hero__video hero__video--mobile" poster="assets/images/hero/November.png"
                    playsinline muted loop>
                    <source src="assets/videos/Purpose November 2025 Highlights.mp4" type="video/mp4" />
                </video>
                <button type="button" class="hero__play-wrap" aria-label="Play video">
                    <span class="hero__animation-wrap" aria-hidden="true">
                        <img src="assets/images/homepage-icons/Buttonanimation.svg" alt="" class="hero__animation"
                            width="409" height="409" />
                    </span>
                    <span class="hero__play-wrap-inner" aria-hidden="true">
                        <img src="assets/images/homepage-icons/Playbutton.svg" alt="" class="hero__play" width="186"
                            height="186" />
                    </span>
                </button>
                <button type="button" class="hero__pause-wrap" aria-label="Pause video" hidden>
                    <span class="hero__pause-wrap-inner" aria-hidden="true">
                        <img src="assets/images/homepage-icons/Pausebutton.svg" alt="" class="hero__pause" width="186"
                            height="186" />
                    </span>
                </button>
            </div>
        </section>
    </section>


    <!-- footer -->
    <?php require_once 'footer.php'; ?>

</body>

<script>
    const heroSection = document.querySelector('.monthly-highlights .hero.purpose-hero');
    const monthsContainer = document.querySelector('.purpose__months');
    const yearBtns = document.querySelectorAll('.year-btn');
    const desktopVideo = document.querySelector('.monthly-highlights .hero__video--desktop');
    const mobileVideo = document.querySelector('.monthly-highlights .hero__video--mobile');
    const playWrap = document.querySelector('.monthly-highlights .hero__play-wrap');
    const pauseWrap = document.querySelector('.monthly-highlights .hero__pause-wrap');

    const videoData = {
        "2025": {
            "November": "assets/videos/Purpose November 2025 Highlights.mp4",
            "December": "assets/videos/Purpose December 2025 Highlights.mp4"
        }
    };

    const posterData = {
        "2025": {
            "November": "assets/images/hero/November.png",
            "December": "assets/images/hero/December.png"
        }
    };

    const monthsData = {
        "2025": ["November", "December"],
        // "2026": [
        //     "January", "February", "March", "April",
        //     "May", "June", "July", "August",
        //     "September", "October", "November", "December"
        // ]
    };

    function getActiveVideo() {
        return window.matchMedia('(max-width: 414px)').matches ? mobileVideo : desktopVideo;
    }

    function getSelectedYear() {
        const active = document.querySelector('.year-btn.active');
        return active ? active.dataset.year : "2025";
    }

    function getSelectedMonth() {
        const active = document.querySelector('.monthly-highlights .month.active');
        return active ? active.dataset.month : null;
    }

    const posterEl = document.getElementById('purpose-hero-poster');

    function setVideoSource(src) {
        if (!src) return;
        desktopVideo.querySelector('source').src = src;
        mobileVideo.querySelector('source').src = src;
        desktopVideo.load();
        mobileVideo.load();
    }

    function setPoster(posterUrl) {
        if (!posterUrl) return;
        if (posterEl) posterEl.style.backgroundImage = "url('" + posterUrl + "')";
        if (desktopVideo) desktopVideo.setAttribute('poster', posterUrl);
        if (mobileVideo) mobileVideo.setAttribute('poster', posterUrl);
    }

    function updateVideoForActiveMonth() {
        const year = getSelectedYear();
        const month = getSelectedMonth();
        if (videoData[year] && videoData[year][month]) {
            setVideoSource(videoData[year][month]);
        }
        if (posterData[year] && posterData[year][month]) {
            setPoster(posterData[year][month]);
        }
    }

    function playVideo() {
        const video = getActiveVideo();
        if (!video || !heroSection) return;
        heroSection.classList.add('is-playing');
        if (pauseWrap) pauseWrap.removeAttribute('hidden');
        video.play();
    }

    function pauseVideo() {
        if (desktopVideo) desktopVideo.pause();
        if (mobileVideo) mobileVideo.pause();
        if (heroSection) heroSection.classList.remove('is-playing');
        if (pauseWrap) pauseWrap.setAttribute('hidden', '');
    }

    function renderMonths(year) {
        monthsContainer.innerHTML = "";

        monthsData[year].forEach((month, index) => {
            const button = document.createElement('button');
            button.classList.add('month');
            if (index === 0) button.classList.add('active');
            button.dataset.month = month;
            button.textContent = month;

            button.addEventListener('click', function () {
                document.querySelectorAll('.monthly-highlights .month').forEach(m => m.classList.remove('active'));
                this.classList.add('active');
                updateVideoForActiveMonth();
                pauseVideo();
            });

            monthsContainer.appendChild(button);
        });

        updateVideoForActiveMonth();
    }

    if (playWrap && heroSection) {
        playWrap.addEventListener('click', playVideo);
    }
    if (pauseWrap) {
        pauseWrap.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            pauseVideo();
        });
    }

    yearBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            yearBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const selectedYear = this.dataset.year;
            renderMonths(selectedYear);
            pauseVideo();
        });
    });

    if (desktopVideo) desktopVideo.addEventListener('ended', pauseVideo);
    if (mobileVideo) mobileVideo.addEventListener('ended', pauseVideo);

    renderMonths("2025");
</script>

</html>