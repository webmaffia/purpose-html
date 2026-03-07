<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'head.php'; ?>

    <title></title>

</head>

<body>
    <!-- Header -->
    <?php require_once 'header.php' ?>

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
                <button class="filter-btn" data-country="uk">UK</button>
                <!-- <button class="filter-btn" data-country="switzerland">Switzerland</button> -->
                <button class="filter-btn" data-country="philippines">Philippines</button>
                <button class="filter-btn" data-country="mexico">Mexico</button>
                <button class="filter-btn active" data-country="india">India</button>
            </div>

            <!-- 3D Carousel (Desktop Only) -->
            <div class="carousel__container desktop-carousel">
                <div class="carousel">
                    <div class="carousel__face"><img
                            src="assets/images/photobooth/news-and-events/purpose-photobooth/India/1.png" /></div>
                    <div class="carousel__face"><img
                            src="assets/images/photobooth/news-and-events/purpose-photobooth/India/2.png" /></div>
                    <div class="carousel__face"><img
                            src="assets/images/photobooth/news-and-events/purpose-photobooth/India/3.png" /></div>
                    <div class="carousel__face"><img
                            src="assets/images/photobooth/news-and-events/purpose-photobooth/India/4.png" /></div>
                    <div class="carousel__face"><img
                            src="assets/images/photobooth/news-and-events/purpose-photobooth/India/5.png" /></div>
                </div>
            </div>

            <!-- Mobile / Tablet Slider -->
            <div class="mobile-slider">
                <div class="mobile-carousel">
                    <div class="mobile-card">
                        <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/1.png">
                    </div>
                    <div class="mobile-card">
                        <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/2.png">
                    </div>
                    <div class="mobile-card">
                        <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/3.png">
                    </div>
                    <div class="mobile-card">
                        <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/4.png">
                    </div>
                    <div class="mobile-card">
                        <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/5.png">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PAINT OUR PURPOSE SECTION -->
    <section class="paint-purpose">

        <div class="paint-purpose__container">
            <div class="svg">
                <img src="assets/images/photobooth/shapes/BG Icon.png" alt="">
            </div>
            <!-- Left Content -->
            <div class="paint-purpose__content">
                <h2>PAINT OUR<br> PURPOSE</h2>

                <div class="paint-purpose__locations">
                    <span class="tag" data-location="uk">UK</span>
                    <span class="tag" data-location="us">Somerset, New Jersey, US</span>
                    <span class="tag highlight" data-location="india">Global HR Offsite, India</span>
                </div>
            </div>

            <!-- Right Image Grid (images update on location tag click) -->
            <div class="paint-purpose__images" id="paint-purpose-images">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/1.png" alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/2.png" alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/3.png" alt="">
            </div>

        </div>

    </section>

    <!-- Footer -->
    <?php require_once 'footer.php' ?>

</body>
<!-- Bottom Grid images -->
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const imageSets = {
            uk: [
                'assets/images/photobooth/news-and-events/Purpose/UK/1.png',
                'assets/images/photobooth/news-and-events/Purpose/UK/2.png',
                'assets/images/photobooth/news-and-events/Purpose/UK/3.png'
            ],
            us: [
                'assets/images/photobooth/news-and-events/Purpose/somerset-new-jersey-US/1.png',
                'assets/images/photobooth/news-and-events/Purpose/somerset-new-jersey-US/2.png',
                'assets/images/photobooth/news-and-events/Purpose/somerset-new-jersey-US/3.png'
            ],
            india: [
                'assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/1.png',
                'assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/2.png',
                'assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/3.png'
            ]
        };

        const container = document.getElementById("paint-purpose-images");
        const images = container.querySelectorAll("img");
        const tags = document.querySelectorAll(".paint-purpose__locations .tag");

        function changeImages(location) {
            const urls = imageSets[location];

            container.classList.add("is-transitioning");

            setTimeout(() => {

                images.forEach((img, i) => {
                    img.src = urls[i];
                });

                container.classList.remove("is-transitioning");

            }, 300);
        }

        tags.forEach(tag => {
            tag.addEventListener("click", function () {

                const location = this.dataset.location;

                tags.forEach(t => t.classList.remove("highlight"));
                this.classList.add("highlight");

                changeImages(location);
            });
        });

    });
</script>

<!-- Carousel button switch logic -->
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const imageSets = {

            uk: [
                "assets/images/photobooth/news-and-events/purpose-photobooth/UK/1.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/UK/2.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/UK/3.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/UK/4.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/UK/5.png"
            ],

            philippines: [
                "assets/images/photobooth/news-and-events/purpose-photobooth/Philippines/1.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/Philippines/2.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/Philippines/3.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/Philippines/4.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/Philippines/5.png"
            ],

            mexico: [
                "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/1.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/2.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/3.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/4.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/5.png"
            ],

            india: [
                "assets/images/photobooth/news-and-events/purpose-photobooth/India/1.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/India/2.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/India/3.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/India/4.png",
                "assets/images/photobooth/news-and-events/purpose-photobooth/India/5.png"
            ]
        };

        const buttons = document.querySelectorAll(".filter-btn");

        /* Desktop carousel images */
        const desktopImages = document.querySelectorAll(".carousel__face img");

        /* Mobile carousel images (new structure) */
        const mobileImages = document.querySelectorAll(".mobile-carousel .mobile-card img");

        /* Mobile swipe carousel cards */
        let cards = document.querySelectorAll(".mobile-carousel .mobile-card");

        let position = 0;
        const total = cards.length;

        function updateCarousel() {

            cards.forEach((card, i) => {

                const offset = i - position;

                const rotate = offset * -10;
                const translate = offset * -220;

                card.style.transform =
                    `rotateY(${rotate}deg) translateX(${translate}px)`;

                card.style.zIndex = total - Math.abs(offset);
                card.style.opacity = Math.abs(offset) > 2 ? 0 : 1;

            });

        }

        updateCarousel();


        function changeImages(country) {

            const urls = imageSets[country];

            /* Desktop */
            desktopImages.forEach((img, i) => {
                img.src = urls[i];
            });

            /* Mobile */
            mobileImages.forEach((img, i) => {
                img.src = urls[i];
            });

            /* Reset swipe position */
            position = 0;
            updateCarousel();
        }


        buttons.forEach(btn => {

            btn.addEventListener("click", function () {

                const country = this.dataset.country;

                buttons.forEach(b => b.classList.remove("active"));
                this.classList.add("active");

                changeImages(country);

            });

        });


        /* Swipe Logic */

        let startX = 0;

        const slider = document.querySelector(".mobile-slider");

        slider.addEventListener("touchstart", e => {
            startX = e.touches[0].clientX;
        });

        slider.addEventListener("touchend", e => {

            const diff = e.changedTouches[0].clientX - startX;

            if (diff > 50 && position > 0) {
                position--;
            }

            else if (diff < -50 && position < total - 1) {
                position++;
            }

            updateCarousel();

        });

    });
</script>

<!-- 3D- Carousel Animation -->
<script>
    const carousel = document.querySelector(".carousel");
    const faces = document.querySelectorAll(".carousel__face");

    const total = faces.length;
    const angle = 360 / total;

    let rotation = 0;
    let startX = 0;
    let isDragging = false;
    let autoRotate = true;
    let depth;
    let tilt = -6; // controls vertical perspective
    let stageHeight;

    function updateDepth() {
        const w = window.innerWidth;

        if (w > 1800) {
            depth = 660;
            stageHeight = 720;
            tilt = -7;
        }
        else if (w > 1600) {
            depth = 520;
            stageHeight = 640;
            tilt = -6;
        }
        else if (w > 1200) {
            depth = 380;
            stageHeight = 520;
            tilt = -5;
        }
        else if (w > 900) {
            depth = 270;
            stageHeight = 420;
            tilt = -4;
        }
        else if (w > 600) {
            depth = 200;
            stageHeight = 360;
            tilt = -3;
        }
        else {
            depth = 130;
            stageHeight = 300;
            tilt = -2;
        }

        // apply dynamic height
        carousel.parentElement.style.height = stageHeight + "px";
    }

    updateDepth();
    window.addEventListener("resize", updateDepth);


    // place cards
    faces.forEach((face, i) => {
        face.dataset.index = i;
        face.style.transform = `rotateY(${i * angle}deg) translateZ(${depth}px)`;
    });


    // update depth (opacity + scale)
    function updateCarousel() {

        carousel.style.transform =
            `rotateX(${tilt}deg) rotateY(${rotation}deg)`;

        faces.forEach((face, i) => {

            let cardAngle = (i * angle + rotation) % 360;
            if (cardAngle < 0) cardAngle += 360;

            let distance = Math.abs(cardAngle);
            if (distance > 180) distance = 360 - distance;

            const opacity = 1 - (distance / 180) * 0.8;
            const scale = 1 - (distance / 180) * 0.25;

            face.style.opacity = opacity;

            face.style.transform =
                `translate(-50%, -50%) rotateY(${i * angle}deg) translateZ(${depth}px) scale(${scale})`;
        });
    }


    // animation loop
    function animate() {

        if (autoRotate && !isDragging) {
            rotation += 0.12;
        }

        updateCarousel();

        requestAnimationFrame(animate);
    }

    animate();


    // DRAG START
    carousel.addEventListener("mousedown", (e) => {
        isDragging = true;
        autoRotate = false;
        startX = e.clientX;
        carousel.style.cursor = "grabbing";
    });


    // DRAG
    window.addEventListener("mousemove", (e) => {

        if (!isDragging) return;

        const diff = e.clientX - startX;

        rotation += diff * 0.25;

        startX = e.clientX;
    });


    // DRAG END
    window.addEventListener("mouseup", () => {

        if (!isDragging) return;

        isDragging = false;
        carousel.style.cursor = "grab";
    });


    // HOVER
    carousel.addEventListener("mouseenter", () => autoRotate = false);
    carousel.addEventListener("mouseleave", () => {
        if (!isDragging) autoRotate = true;
    });
</script>

<!-- Swipe logic for mobile carousel -->
<script>
    document.addEventListener("DOMContentLoaded", () => {

        window.resetMobileCarousel = function () {
            position = 0;
            updateCarousel();
        };

        const cards = document.querySelectorAll(".mobile-card");
        const slider = document.querySelector(".mobile-slider");

        let position = 0;
        const total = cards.length;

        function updateCarousel() {

            cards.forEach((card, i) => {

                const offset = position - i;

                const rotate = offset * -5;
                const translate = offset * 220;
                const scale = offset === 0 ? 1 : 0.85;

                card.style.transform =
                    `translateX(${translate}px) rotateY(${rotate}deg) scale(${scale})`;

                card.style.zIndex = total - Math.abs(offset);

                if (offset === 0) {
                    card.style.opacity = 1;
                } else if (Math.abs(offset) === 1) {
                    card.style.opacity = 0.45;
                } else if (Math.abs(offset) === 2) {
                    card.style.opacity = 0.2;
                } else {
                    card.style.opacity = 0;
                }

            });

        }

        updateCarousel();

        let startX = 0;

        slider.addEventListener("touchstart", e => {
            startX = e.touches[0].clientX;
        });

        slider.addEventListener("touchend", e => {

            const diff = e.changedTouches[0].clientX - startX;

            if (diff > 50 && position < total - 1) {
                position++;
            }

            if (diff < -50 && position > 0) {
                position--;
            }

            updateCarousel();

        });

    });
</script>

</html>