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
                    <div class="carousel__face">
                        <div class="carousel__face-inner">
                            <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/1.png" />
                            <span class="carousel__face-index">1</span>
                        </div>
                    </div>
                    <div class="carousel__face">
                        <div class="carousel__face-inner">
                            <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/2.png" />
                            <span class="carousel__face-index">2</span>
                        </div>
                    </div>
                    <div class="carousel__face">
                        <div class="carousel__face-inner">
                            <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/3.png" />
                            <span class="carousel__face-index">3</span>
                        </div>
                    </div>
                    <div class="carousel__face">
                        <div class="carousel__face-inner">
                            <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/4.png" />
                            <span class="carousel__face-index">4</span>
                        </div>
                    </div>
                    <div class="carousel__face">
                        <div class="carousel__face-inner">
                            <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/5.png" />
                            <span class="carousel__face-index">5</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile / Tablet Slider -->
            <div class="mobile-slider">
                <div class="mobile-carousel">
                    <div class="mobile-card">
                        <div class="mobile-card__inner">
                            <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/1.png">
                            <span class="mobile-card__index">1</span>
                        </div>
                    </div>
                    <div class="mobile-card">
                        <div class="mobile-card__inner">
                            <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/2.png">
                            <span class="mobile-card__index">2</span>
                        </div>
                    </div>
                    <div class="mobile-card">
                        <div class="mobile-card__inner">
                            <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/3.png">
                            <span class="mobile-card__index">3</span>
                        </div>
                    </div>
                    <div class="mobile-card">
                        <div class="mobile-card__inner">
                            <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/4.png">
                            <span class="mobile-card__index">4</span>
                        </div>
                    </div>
                    <div class="mobile-card">
                        <div class="mobile-card__inner">
                            <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/5.png">
                            <span class="mobile-card__index">5</span>
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
            <div class="purpose-photobooth__header">
                <h2>PAINT OUR PURPOSE</h2>

                <div class="paint-purpose__locations">
                    <span class="tag" data-location="uk">UK</span>
                    <span class="tag" data-location="us">Somerset, New Jersey, US</span>
                    <span class="tag" data-location="mexico">Mexico</span>
                    <span class="tag" data-location="africa">South Africa</span>
                    <span class="tag highlight" data-location="india">Global HR Offsite, India</span>
                </div>
            </div>

            <!-- Right Image Grid (images update on location tag click) -->
            <div class="paint-purpose__images" id="paint-purpose-images">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-1.png"
                    alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-2.png"
                    alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-3.png"
                    alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-4.png"
                    alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-5.png"
                    alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-6.png"
                    alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-7.png"
                    alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-8.png"
                    alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-9.png"
                    alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-10.png"
                    alt="">
                <img src="assets/images/photobooth/news-and-events/Purpose/global-hr-offsite-India/paint-purpose-11.png"
                    alt="">
            </div>

        </div>
        <div class="leadership__button-wrapper">
            <button id="viewAllBtn" class="leadership__view-btn">
                View All
            </button>
        </div>

    </section>

    <!-- Footer -->
    <?php require_once 'footer.php' ?>

</body>

<!-- Paint Our Purpose: location tag click → load images for that city -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const BASE = "assets/images/photobooth/news-and-events/Purpose/";
        const paintPurposeImages = {
            india: {
                folder: "global-hr-offsite-India/",
                files: ["paint-purpose-1.png", "paint-purpose-2.png", "paint-purpose-3.png", "paint-purpose-4.png", "paint-purpose-5.png", "paint-purpose-6.png", "paint-purpose-7.png", "paint-purpose-8.png", "paint-purpose-9.png", "paint-purpose-10.png", "paint-purpose-11.png"]
            },
            uk: {
                folder: "UK/",
                files: ["UK-1.png", "UK-2.png", "UK-3.png", "UK-4.png", "UK-5.png", "UK-6.png", "UK-7.png", "UK-8.png", "UK-9.png", "UK-10.png", "UK-11.png"]
            },
            us: {
                folder: "somerset-new-jersey-US/",
                files: ["US-1.png", "US-2.png", "US-3.png", "US-4.png", "US-5.png", "US-6.png", "US-7.png", "US-8.png"]
            },
            mexico: {
                folder: "mexico/",
                files: ["mexico-1.png", "mexico-2.png", "mexico-3.png", "mexico-4.png", "mexico-5.png", "mexico-6.png", "mexico-7.png", "mexico-8.png", "mexico-9.png", "mexico-10.png", "mexico-11.png"]
            },
            africa: {
                folder: "south-africa/",
                files: ["africa-1.png", "africa-2.png", "africa-3.png", "africa-4.png", "africa-5.png", "africa-6.png", "africa-7.png", "africa-8.png", "africa-9.png", "africa-10.png"]
            }
        };

        const gridEl = document.getElementById("paint-purpose-images");
        const tags = document.querySelectorAll(".paint-purpose__locations .tag");

        function setLocation(locationKey) {
            const data = paintPurposeImages[locationKey];
            if (!data || !gridEl) return;
            const folder = data.folder;
            const files = data.files;
            gridEl.innerHTML = "";
            files.forEach(function (filename) {
                const src = BASE + folder + encodeURIComponent(filename);
                const img = document.createElement("img");
                img.src = src;
                img.alt = "";
                gridEl.appendChild(img);
            });
        }

        tags.forEach(function (tag) {
            tag.addEventListener("click", function () {
                const locationKey = this.getAttribute("data-location");
                if (!locationKey || !paintPurposeImages[locationKey]) return;
                tags.forEach(function (t) { t.classList.remove("highlight"); });
                this.classList.add("highlight");
                setLocation(locationKey);
            });
        });
    });
</script>

<!-- Carousel button switch logic -->
<script>
    document.addEventListener("DOMContentLoaded", function () {

        /* Each country has an array of "rounds"; each round is an array of image URLs.
           Add more rounds later, e.g. india: [ round1, round2, ... ] */
        const imageSets = {

            uk: [
                [
                    "assets/images/photobooth/news-and-events/purpose-photobooth/UK/1.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/UK/2.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/UK/3.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/UK/4.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/UK/5.png"
                ]
                // Add more rounds: [ "UK/6.png", "UK/7.png", ... ],
            ],

            philippines: [
                [
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Philippines/1.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Philippines/2.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Philippines/3.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Philippines/4.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Philippines/5.png"
                ]
            ],

            mexico: [
                [
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/1.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/2.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/3.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/4.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/5.png"
                ]
            ],

            india: [
                [
                    "assets/images/photobooth/news-and-events/purpose-photobooth/India/1.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/India/2.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/India/3.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/India/4.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/India/5.png"
                ],
                [
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/1.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/2.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/3.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/4.png",
                    "assets/images/photobooth/news-and-events/purpose-photobooth/Mexico/5.png"
                ]
                // Add more rounds: [ "India/6.png", "India/7.png", ... ],
            ]
        };

        const buttons = document.querySelectorAll(".filter-btn");

        /* Desktop carousel: images and index spans */
        const desktopImages = document.querySelectorAll(".carousel__face img");
        const desktopIndices = document.querySelectorAll(".carousel__face-index");

        /* Mobile carousel images and index spans */
        const mobileImages = document.querySelectorAll(".mobile-carousel .mobile-card img");
        const mobileIndices = document.querySelectorAll(".mobile-card__index");

        /* Mobile swipe carousel cards */
        let cards = document.querySelectorAll(".mobile-carousel .mobile-card");

        let position = 0;
        const total = cards.length;

        /* Current country (from active filter) and round index for multi-round cycling */
        let currentCountry = "india";
        let currentRoundIndex = 0;

        function updateCarousel() {

            cards.forEach((card, i) => {

                const offset = i - position;

                const rotate = offset * 10;
                const translate = offset * 220;

                card.style.transform =
                    `rotateY(${rotate}deg) translateX(${translate}px)`;

                card.style.zIndex = total - Math.abs(offset);
                card.style.opacity = Math.abs(offset) > 2 ? 0 : 1;

                card.classList.toggle("is-front", offset === 0);
            });

        }

        updateCarousel();

        /**
         * Switch carousel to a country and optional round.
         * @param {string} country - Country key (uk, philippines, mexico, india)
         * @param {number} [roundIndex=0] - Index of the round (each round is an array of image URLs)
         */
        function changeImages(country, roundIndex) {

            roundIndex = roundIndex ?? 0;
            const rounds = imageSets[country];
            if (!rounds || !rounds.length) return;

            const round = rounds[roundIndex % rounds.length];
            const urls = round;

            currentCountry = country;
            currentRoundIndex = roundIndex % rounds.length;

            /* Desktop: update image src and index label (continues across rounds: 1-5, then 6-10, etc.) */
            const indexOffset = currentRoundIndex * urls.length;
            desktopImages.forEach((img, i) => {
                img.src = urls[i] ?? "";
            });
            desktopIndices.forEach((el, i) => {
                el.textContent = String(indexOffset + i + 1);
            });

            /* Mobile: update image src and index label */
            mobileImages.forEach((img, i) => {
                img.src = urls[i] ?? "";
            });
            mobileIndices.forEach((el, i) => {
                el.textContent = String(indexOffset + i + 1);
            });

            /* Reset swipe position */
            position = 0;
            updateCarousel();
        }

        /* Whenever a face moves from center to "just behind" center, assign it the next image in sequence */
        const faceCount = 5;
        let nextImageIndexToAssign = faceCount;

        function applyNextImageToFace(faceIndex) {
            const rounds = imageSets[currentCountry];
            if (!rounds || !rounds.length) return;
            const roundIndex = Math.floor(nextImageIndexToAssign / faceCount) % rounds.length;
            const imageInRound = nextImageIndexToAssign % faceCount;
            const url = rounds[roundIndex][imageInRound];
            const displayIndex = nextImageIndexToAssign + 1;
            desktopImages[faceIndex].src = url ?? "";
            desktopIndices[faceIndex].textContent = String(displayIndex);
            nextImageIndexToAssign++;
            if (nextImageIndexToAssign % faceCount === 0) {
                currentRoundIndex = (nextImageIndexToAssign / faceCount - 1) % rounds.length;
                const roundUrls = rounds[currentRoundIndex];
                mobileImages.forEach((img, i) => { img.src = roundUrls[i] ?? ""; });
                const indexOffset = currentRoundIndex * roundUrls.length;
                mobileIndices.forEach((el, i) => { el.textContent = String(indexOffset + i + 1); });
            }
        }

        setInterval(function () {
            const faceAtBack = window.carouselFaceAtBack;
            if (faceAtBack !== undefined && faceAtBack !== null) {
                window.carouselFaceAtBack = null;
                applyNextImageToFace(faceAtBack);
            }
        }, 20);

        buttons.forEach(btn => {

            btn.addEventListener("click", function () {

                const country = this.dataset.country;

                buttons.forEach(b => b.classList.remove("active"));
                this.classList.add("active");

                nextImageIndexToAssign = faceCount;
                currentRoundIndex = 0;
                changeImages(country, 0);

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

            if (diff > 50) {
                position = position > 0 ? position - 1 : total - 1;
            } else if (diff < -50) {
                position = position < total - 1 ? position + 1 : 0;
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

    window.carouselPreviousFrontFaceIndex = 0;
    const facePreviousAngles = new Array(faces.length);

    // update depth (opacity + scale)
    function updateCarousel() {

        carousel.style.transform =
            `rotateX(${tilt}deg) rotateY(${rotation}deg)`;

        let frontFaceIndex = 0;
        let minDistance = 180;

        faces.forEach((face, i) => {

            let cardAngle = (i * angle + rotation) % 360;
            if (cardAngle < 0) cardAngle += 360;

            const prevAngle = facePreviousAngles[i];
            if (prevAngle !== undefined && prevAngle < 180 && cardAngle >= 180) {
                window.carouselFaceAtBack = i;
            }
            facePreviousAngles[i] = cardAngle;

            let distance = Math.abs(cardAngle);
            if (distance > 180) distance = 360 - distance;

            if (distance < minDistance) {
                minDistance = distance;
                frontFaceIndex = i;
            }

            const opacity = 1 - (distance / 180) * 0.8;
            const scale = 1 - (distance / 180) * 0.25;

            face.style.opacity = opacity;

            face.style.transform =
                `translate(-50%, -50%) rotateY(${i * angle}deg) translateZ(${depth}px) scale(${scale})`;

            face.classList.toggle("is-front", i === frontFaceIndex);
        });

        if (frontFaceIndex !== window.carouselPreviousFrontFaceIndex) {
            window.carouselPreviousFrontFaceIndex = frontFaceIndex;
        }
    }


    // animation loop
    function animate() {

        if (autoRotate && !isDragging) {
            rotation += 0.12;
        }

        window.carouselRotation = rotation;
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

                const rotate = offset * 5;
                const translate = offset * -220;
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

                card.classList.toggle("is-front", offset === 0);
            });

        }

        updateCarousel();

        let startX = 0;

        slider.addEventListener("touchstart", e => {
            startX = e.touches[0].clientX;
        });

        slider.addEventListener("touchend", e => {

            const diff = e.changedTouches[0].clientX - startX;

            if (diff > 50) {
                position = position > 0 ? position - 1 : total - 1;
            } else if (diff < -50) {
                position = position < total - 1 ? position + 1 : 0;
            }

            updateCarousel();

        });

        const autoSlideInterval = 4000;
        let autoSlideTimer = setInterval(() => {
            position = (position + 1) % total;
            updateCarousel();
        }, autoSlideInterval);

        slider.addEventListener("touchstart", () => {
            clearInterval(autoSlideTimer);
        }, { passive: true });
        slider.addEventListener("touchend", () => {
            autoSlideTimer = setInterval(() => {
                position = (position + 1) % total;
                updateCarousel();
            }, autoSlideInterval);
        });

    });
</script>

</html>