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
                <button class="filter-btn" data-country="switzerland">Switzerland</button>
                <button class="filter-btn" data-country="philippines">Philippines</button>
                <button class="filter-btn" data-country="mexico">Mexico</button>
                <button class="filter-btn active" data-country="india">India</button>
            </div>

            <!-- photobooth images (same grid structure as Paint Our Purpose below) -->
            <div class="photobooth__images" id="photobooth-images">
                <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/101.png" alt="">
                <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/102.png" alt="">
                <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/103.png" alt="">
                <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/104.png" alt="">
                <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/105.png" alt="">
                <img src="assets/images/photobooth/news-and-events/purpose-photobooth/India/121.png" alt="">
            </div>
            <div class="photobooth-wrapper">
                <button id="viewAllBtn" class="photobooth-btn">
                    View All
                </button>
            </div>
        </div>
    </section>


    <!-- PAINT OUR PURPOSE SECTION -->
    <section class="paint-purpose">

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

        <div class="paint-purpose-wrapper">
            <button id="viewAllBtn" class="paint-purpose-btn">
                View All
            </button>
        </div>

    </section>

    <!-- Footer -->
    <?php require_once 'footer.php' ?>

</body>

<!-- Purpose Photobooth: filter buttons change images by country -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const PHOTOBOOTH_BASE = "assets/images/photobooth/news-and-events/purpose-photobooth/";
        const photoboothImageSets = {
            india: { folder: "India/", files: ["101.png", "102.png", "103.png", "104.png", "105.png", "121.png"] },
            uk: { folder: "UK/", files: ["81.png", "85.png", "87.png", "89.png", "92.png", "95.png"] },
            philippines: { folder: "Philippines/", files: ["53.png", "57.png", "64.png", "66.png", "72.png", "74.png"] },
            mexico: { folder: "Mexico/", files: ["3.png", "7.png", "8.png", "11.png", "15.png", "20.png"] },
            switzerland: { folder: "India/", files: ["101.png", "102.png", "103.png", "104.png", "105.png", "121.png"] }
        };
        const photoboothGrid = document.getElementById("photobooth-images");
        const filterBtns = document.querySelectorAll(".purpose-photobooth__filters .filter-btn");
        function setPhotoboothCountry(countryKey) {
            const data = photoboothImageSets[countryKey];
            if (!data || !photoboothGrid) return;
            photoboothGrid.innerHTML = "";
            data.files.forEach(function (filename) {
                var img = document.createElement("img");
                img.src = PHOTOBOOTH_BASE + data.folder + filename;
                img.alt = "";
                photoboothGrid.appendChild(img);
            });
        }
        filterBtns.forEach(function (btn) {
            btn.addEventListener("click", function () {
                var country = this.getAttribute("data-country");
                if (!photoboothImageSets[country]) return;
                filterBtns.forEach(function (b) { b.classList.remove("active"); });
                this.classList.add("active");
                setPhotoboothCountry(country);
            });
        });
    });
</script>

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

</html>