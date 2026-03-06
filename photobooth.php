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
                <button class="filter-btn">UK</button>
                <button class="filter-btn">Switzerland</button>
                <button class="filter-btn">Philippines</button>
                <button class="filter-btn">Mexico</button>
                <button class="filter-btn active">India</button>
            </div>

            <!-- 3D Carousel Area -->
            <div class="carousel__container">
                <div class="carousel">
                    <div class="carousel__face"></div>
                    <div class="carousel__face"></div>
                    <div class="carousel__face"></div>
                    <div class="carousel__face"></div>
                    <div class="carousel__face"></div>
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


    // place cards
    faces.forEach((face, i) => {
        face.dataset.index = i;
        face.style.transform = `rotateY(${i * angle}deg) translateZ(430px)`;
    });


    // update depth (opacity + scale)
    function updateCarousel() {

        carousel.style.transform = `rotateY(${rotation}deg)`;

        faces.forEach((face, i) => {

            let cardAngle = (i * angle + rotation) % 360;
            if (cardAngle < 0) cardAngle += 360;

            let distance = Math.abs(cardAngle);
            if (distance > 180) distance = 360 - distance;

            const opacity = 1 - (distance / 180) * 0.8;
            const scale = 1 - (distance / 180) * 0.25;

            face.style.opacity = opacity;

            face.style.transform =
                `rotateY(${i * angle}deg) translateZ(430px) scale(${scale})`;
        });
    }


    // animation loop
    function animate() {

        if (autoRotate && !isDragging) {
            rotation += 0.1;
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

</html>