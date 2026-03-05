<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'head.php'; ?>

    <title></title>

</head>

<body>
    <!-- Header -->
    <?php require_once 'header.php' ?>

    <!-- Photos -->
    <!-- HERO SECTION -->
    <section class="purposebooth-hero">
        <img class="purposebooth-hero-image" src="assets/images/hero/photobooth-hero.png" alt="Hero section image"
            fetchpriority="high" />
    </section>


    <!-- PURPOSE PHOTOBOOTH SECTION -->
    <section class="purpose-photobooth">

        <!-- Section Title -->
        <div class="purpose-photobooth__header">
            <h2>PURPOSE PHOTOBOOTH</h2>
        </div>

        <!-- Blue Content Area -->
        <div class="purpose-photobooth__content">

            <!-- Country Filters -->
            <div class="purpose-photobooth__filters">
                <button class="filter-btn">UK</button>
                <button class="filter-btn">Switzerland</button>
                <button class="filter-btn">Philippines</button>
                <button class="filter-btn">Mexico</button>
                <button class="filter-btn active">India</button>
            </div>

            <!-- 3D Carousel Area -->
            <div class="purpose-carousel">
                <div class="purpose-carousel__track">
                    <div class="purpose-carousel__item">
                        <div class="purpsoe-carousel__inner">
                            <img src="assets/images/hero/photobooth-hero.png" alt="">
                        </div>
                    </div>
                    <div class="purpose-carousel__item">
                        <div class="purpsoe-carousel__inner">
                            <img src="assets/images/hero/photobooth-hero.png" alt="">
                        </div>
                    </div>
                    <div class="purpose-carousel__item">
                        <div class="purpsoe-carousel__inner">
                            <img src="assets/images/hero/photobooth-hero.png" alt="">
                        </div>
                    </div>
                    <div class="purpose-carousel__item">
                        <div class="purpsoe-carousel__inner">
                            <img src="assets/images/hero/photobooth-hero.png" alt="">
                        </div>
                    </div>
                    <div class="purpose-carousel__item">
                        <div class="purpsoe-carousel__inner">
                            <img src="assets/images/hero/photobooth-hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PAINT OUR PURPOSE SECTION -->
    <section class="paint-purpose">

        <div class="paint-purpose__container">

            <!-- Left Content -->
            <div class="paint-purpose__content">
                <img src="assets/images/photobooth/shapes/BG Icon.png" alt="">
                <h2>PAINT OUR<br> PURPOSE</h2>

                <div class="paint-purpose__locations">
                    <span class="tag" data-location="uk">UK</span>
                    <span class="tag" data-location="somerset">Somerset, New Jersey, US</span>
                    <span class="tag highlight" data-location="india">Global HR Offsite, India</span>
                </div>
            </div>

            <!-- Right Image Grid (images update on location tag click) -->
            <div class="paint-purpose__images" id="paint-purpose-images">
                <img src="assets/images/photobooth/HR-1.png" alt="">
                <img src="assets/images/photobooth/HR-2.png" alt="">
                <img src="assets/images/photobooth/HR-3.png" alt="">
            </div>

        </div>

    </section>

    <!-- Footer -->
    <?php require_once 'footer.php' ?>

</body>
<script>
    const items = document.querySelectorAll('.carousel-item');

    let index = 0;

    function updateCarousel() {
        items.forEach(item => {
            item.classList.remove('left', 'active', 'right');
        });

        items[index].classList.add('active');
        items[(index + 1) % items.length].classList.add('right');
        items[(index - 1 + items.length) % items.length].classList.add('left');
    }

    setInterval(() => {
        index = (index + 1) % items.length;
        updateCarousel();
    }, 3000);

    updateCarousel();

    // PAINT OUR PURPOSE: location tags switch images with smooth animation
    (function () {
        var imageSets = {
            uk: [
                'assets/images/photobooth/HR-1.png',
                'assets/images/photobooth/HR-2.png',
                'assets/images/photobooth/HR-3.png'
            ],
            somerset: [
                'assets/images/photobooth/HR-1.png',
                'assets/images/photobooth/HR-2.png',
                'assets/images/photobooth/HR-3.png'
            ],
            india: [
                'assets/images/photobooth/HR-1.png',
                'assets/images/photobooth/HR-2.png',
                'assets/images/photobooth/HR-3.png'
            ]
        };

        var container = document.getElementById('paint-purpose-images');
        var tags = document.querySelectorAll('.paint-purpose__locations .tag');
        var imgs = container ? container.querySelectorAll('img') : [];

        function setImages(urls) {
            if (!container || !urls || urls.length !== imgs.length) return;
            container.classList.add('is-transitioning');
            setTimeout(function () {
                urls.forEach(function (url, i) {
                    if (imgs[i]) imgs[i].src = url;
                });
                requestAnimationFrame(function () {
                    container.classList.remove('is-transitioning');
                });
            }, 400);
        }

        tags.forEach(function (tag) {
            tag.addEventListener('click', function () {
                var loc = this.getAttribute('data-location');
                if (!loc || !imageSets[loc]) return;
                tags.forEach(function (t) { t.classList.remove('highlight'); });
                this.classList.add('highlight');
                setImages(imageSets[loc]);
            });
        });
    })();
</script>

</html>