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

        <h class="purpose__title">MONTHLY HIGHLIGHTS</h>

        <!-- Year Selector -->
        <div class="purpose__year-selector">
            <button class="year-btn active" data-year="2025">2025</button>
            <button class="year-btn" data-year="2026">2026</button>
        </div>

        <!-- Months -->
        <div class="purpose__months-wrapper">
            <div class="purpose__months"></div>
        </div>

        <!-- Video Section -->
        <section class="hero purpose-hero">
            <div class="purpose-hero__media">
                <div class="hero__poster" style="background-image: url('assets/images/hero/purpose-video-poster.png');">
                </div>
                <!-- Desktop video: shown above 414px -->
                <video class="hero__video hero__video--desktop" poster="assets/images/hero/purpose-video-poster.png"
                    playsinline muted loop>
                    <source src="assets/videos/Purpose November 2025 Highlights.mp4" type="video/mp4" />
                </video>
                <!-- Mobile video: shown at 414px and below -->
                <video class="hero__video hero__video--mobile" poster="assets/images/hero/purpose-video-poster.png"
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
            </div>
        </section>
    </section>


    <!-- footer -->
    <?php require_once 'footer.php'; ?>

</body>

<script>
    const monthsContainer = document.querySelector('.purpose__months');
    const yearBtns = document.querySelectorAll('.year-btn');
    const desktopVideo = document.querySelector('.hero__video--desktop');
    const mobileVideo = document.querySelector('.hero__video--mobile');

    const videoData = {
        "2025": {
            "November": "assets/videos/Purpose November 2025 Highlights.mp4",
            "December": "assets/videos/Purpose December 2025 Highlights.mp4"
        }
    };

    const monthsData = {
        "2025": ["November", "December"],
        "2026": [
            "January", "February", "March", "April",
            "May", "June", "July", "August",
            "September", "October", "November", "December"
        ]
    };

    function renderMonths(year) {
        monthsContainer.innerHTML = "";

        monthsData[year].forEach((month, index) => {
            const button = document.createElement('button');
            button.classList.add('month');
            if (index === 0) button.classList.add('active');
            button.dataset.month = month;
            button.textContent = month;

            button.addEventListener('click', function () {
                document.querySelectorAll('.month').forEach(m => m.classList.remove('active'));
                this.classList.add('active');
            });
            

            monthsContainer.appendChild(button);
        });
    }

    // Year switching
    yearBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            yearBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const selectedYear = this.dataset.year;
            renderMonths(selectedYear);
        });
    });

    // Initial load (2025 default)
    renderMonths("2025");
</script>

</html>