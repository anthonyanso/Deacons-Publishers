<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prep50 Mobile App || Deacons Publishers</title>
    <link href="./assets/css/prep50app.css" rel="stylesheet" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="./assets/img/logo/ROUNDED DEACONS LOGO.png" type="image/x-icon" />
    <!-- icons -->
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"
        rel="stylesheet" />
    <link
        href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet" />
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="./assets/vendor/aos/aos.css" />
    <script src="./assets/vendor/aos/aos.js"></script>

</head>

<body>
    <?php
    // Include the header
    require("./include/header2.php");
    ?>
    <main class="containe">

        <!-- hero section -->
        <section class="hero" id="home">
            <div class="hero-content">
                <h1 data-aos="zoom-in" data-aos-delay="400">Prep50 Mobile App</h1>
                <p data-aos="fade-up" data-aos-delay="500">Your Ultimate Learning Companion.</p>
                <p data-aos="fade-up" data-aos-delay="500">Access premium educational resources, mock tests, and study guides anytime, anywhere.</p>
                <div class="cta-buttons" data-aos="fade-up" data-aos-delay="500">
                    <a href="https://play.google.com/store/apps/details?id=com.prep50.prep50" tabIndex="0" target="_blank"><img class="bn45" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/2560px-Google_Play_Store_badge_EN.svg.png" alt="bn45" /></a>
                </div>
            </div>
            <div class="hero-image">
                <img data-aos="fade-right" data-aos-delay="100" src="./assets/img/web 1.png" alt="Prep50 Mobile App">
            </div>
        </section>

        <section class="service-section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 align-items-center justify-content-between">
                    <div class="service" data-aos="fade-up" data-aos-delay="200">
                        <div class="text">
                            <p>Why Choose Prep50 Mobile App?</p>
                        </div>
                        <div class="contents">
                            <div class="items">
                                <div data-aos="fade-up">
                                    <div class="service-icon">
                                        <i class="ri-dashboard-line"></i>
                                    </div>
                                    <h3>Personalized Dashboard</h3>
                                    <p>
                                        Track your progress, goals, and saved questions in one place.
                                    </p>
                                </div>
                                <div data-aos="fade-up">
                                    <div class="service-icon">
                                        <i class="ri-calendar-check-line"></i>
                                    </div>
                                    <h3>Interactive Study Planner</h3>
                                    <p>
                                        Plan and schedule your study sessions and mock exams efficiently.
                                    </p>
                                </div>
                                <div data-aos="fade-up">
                                    <div class="service-icon">
                                        <i class="ri-bar-chart-box-line"></i>
                                    </div>
                                    <h3>Performance Analytics</h3>
                                    <p>
                                        Gain insights into your strengths and weaknesses.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="itmes">
                <div class="item">
                    <img data-aos="fade-right" data-aos-delay="100" src="./assets/img/web 2.png" alt="">
                </div>
                <div class="item">
                    <h2 data-aos="fade-up" data-aos-delay="100">How it Works</h2>
                    <ul>
                        <li>Download the app from Play Store or App Store.</li>
                        <li>Create an account or log in if you already have one.</li>
                        <li>Explore the dashboard to access various features.</li>
                        <li>Use the study planner to schedule your study sessions.</li>
                        <li>Take mock tests and review your performance analytics.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="download">
            <h2 data-aos="fade-up" data-aos-delay="100">Get Prep50 Mobile App Today</h2>
            <p>Start your journey to academic excellence with Prep50 Mobile App. Available on Android.</p>
            <div class="cta-buttons">
                <a href="https://play.google.com/store/apps/details?id=com.prep50.prep50" tabIndex="0" target="_blank"><img class="bn45" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/2560px-Google_Play_Store_badge_EN.svg.png" alt="bn45" /></a>
            </div>
        </section>

    </main>
    <!-- footer -->
    <?php
    // Include the header
    require("./include/footer.php");
    ?>
    <!-- footer ends -->

    <!-- <div id="cookieConsent" class="cookie-consent" data-aos="fade-down" data-aos-delay="100">
        <p data-aos="fade-up" data-aos-delay="200">This website uses cookies to ensure you get the best experience on our website.</p>
        <button id="acceptCookies" class="cookie-button" data-aos="fade-right" data-aos-delay="200">Accept</button>
    </div> -->

    <script>
        // cookies
        document.addEventListener("DOMContentLoaded", function() {
            const cookieConsent = document.getElementById("cookieConsent");
            const acceptCookies = document.getElementById("acceptCookies");

            if (!localStorage.getItem("cookiesAccepted")) {
                cookieConsent.style.display = "flex";
            }

            acceptCookies.addEventListener("click", function() {
                localStorage.setItem("cookiesAccepted", "true");
                cookieConsent.style.display = "none";
            });
        });

        // AOS
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false,
        });
    </script>
</body>

</html>