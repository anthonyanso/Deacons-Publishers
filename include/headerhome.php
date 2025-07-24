<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link
        rel="shortcut icon"
        href="./assets/img/logo/ROUNDED DEACONS LOGO.png"
        type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"
        rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


    <style>
        /* Fonts */
        :root {
            --default-font: "Roboto", system-ui, -apple-system, "Segoe UI", Roboto,
                "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --heading-font: "Nunito", sans-serif;
            --nav-font: "Inter", sans-serif;
        }

        /* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
        :root {
            --background-color: #eaeaea;
            --default-color: #212529;
            --heading-color: #131212;
            --accent-color: #cc6600;
            --surface-color: #faf9f6;
            --contrast-color: #faf9f6;
        }

        /* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
        :root {
            --nav-color: #212529;
            --nav-hover-color: #cc6600;
            --nav-mobile-background-color: #faf9f6;
            --nav-dropdown-background-color: #faf9f6;
            --nav-dropdown-color: #212529;
            --nav-dropdown-hover-color: #cc6600;
        }

        /* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

        .light-background {
            --background-color: #f3f9ff;
            --surface-color: #faf9f6;
        }

        .dark-background {
            --background-color: #cc6600;
            --default-color: #faf9f6;
            --heading-color: #faf9f6;
            --surface-color: #cc6600;
            --contrast-color: #faf9f6;
        }

        /*--------------------------------------------------------------
# General Styling & Shared Classes
--------------------------------------------------------------*/
        a {
            text-decoration: none;
            transition: 0.3s;
        }

        a:hover {
            color: color-mix(in srgb, var(--accent-color), transparent 25%);
            text-decoration: none;
        }

        /*--------------------------------------------------------------
        # Global Header
        --------------------------------------------------------------*/
        /* .header {
            --background-color: rgba(255, 255, 255, 0);
            color: var(--default-color);
            padding: 20px 0;
            transition: all 0.5s;
        } */

        /* .header .header-container {
            position: fixed;
            background: var(--surface-color); this
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0px 15px 4px rgba(0, 0, 0, 0.25);
            margin-top: 1.5em;
            border-radius: 15px;
            padding: 5px 25px; this
            padding: 0 30px;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
 */

        /* .header {
            --background-color: rgba(255, 255, 255, 0);
            color: var(--default-color);
            background-color: var(--background-color);
            padding: 20px 0;
            transition: all 0.5s;
            z-index: 1000;
        } */

        .header .header-container {
            background: var(--surface-color);
            border-radius: 15px;
            margin-top: 1.5em;
            /* padding: 5px 25px; */
            padding: 0 30px;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        }

        .scrolled .header .header-container {
            background: color-mix(in srgb, var(--surface-color), transparent 5%);
        }

        .header .logo {
            line-height: 1;
            padding-left: 5px;
        }

        .header .logo img {
            max-height: 120px;
            margin-right: 8px;
        }

        .header .btn-getstarted,
        .header .btn-getstarted:focus {
            color: var(--default-color);
            font-size: 16px;
            font-weight: 400;
            margin: 0 0 0 20px;
            text-align: center;
            padding: 10px 20px;
            border-radius: 9px;
            text-decoration: none;
            box-shadow: 0px 6px 4px rgba(204, 102, 0, 1);
            transition: 0.3s;
        }

        .header .btn-getstarted:hover,
        .header .btn-getstarted:focus:hover {
            color: var(--contrast-color);
            background: color-mix(in srgb, var(--accent-color), transparent 15%);
        }

        @media (max-width: 1200px) {
            .header {
                padding-top: 10px;
            }

            .header .header-container {
                margin-left: 10px;
                margin-right: 10px;
                padding: 10px 5px 10px 15px;
            }

            .header .logo {
                order: 1;
            }

            .header .btn-getstarted {
                order: 2;
                margin: 0 10px 0 0;
                padding: 6px 15px;
            }

            .header .navmenu {
                order: 3;
            }
        }

        /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
        /* Navmenu - Desktop */
        @media (min-width: 1200px) {
            .navmenu {
                padding: 0;
            }

            .navmenu ul {
                margin: 0;
                padding: 0;
                display: flex;
                list-style: none;
                align-items: center;
            }

            .navmenu li {
                position: relative;
            }

            .navmenu a,
            .navmenu a:focus {
                color: var(--nav-color);
                padding: 18px 15px;
                font-size: 16px;
                font-family: var(--nav-font);
                font-weight: 500;
                display: flex;
                align-items: center;
                justify-content: space-between;
                white-space: nowrap;
                transition: 0.3s;
            }

            .navmenu a i,
            .navmenu a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
                transition: 0.3s;
            }

            .navmenu li:last-child a {
                padding-right: 0;
            }

            .navmenu li:hover>a,
            .navmenu .active,
            .navmenu .active:focus {
                color: var(--nav-hover-color);
                text-decoration: underline;
                font-weight: 600;
            }

            .navmenu .dropdown ul {
                margin: 0;
                padding: 10px 0;
                background: var(--nav-dropdown-background-color);
                display: block;
                position: absolute;
                visibility: hidden;
                left: 14px;
                top: 130%;
                opacity: 0;
                transition: 0.3s;
                border-radius: 4px;
                z-index: 99;
                box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
            }

            .navmenu .dropdown ul li {
                min-width: 200px;
            }

            .navmenu .dropdown ul a {
                padding: 10px 20px;
                font-size: 15px;
                text-transform: none;
                color: var(--nav-dropdown-color);
            }

            .navmenu .dropdown ul a i {
                font-size: 12px;
            }

            .navmenu .dropdown ul a:hover,
            .navmenu .dropdown ul .active:hover,
            .navmenu .dropdown ul li:hover>a {
                /* color: var(--nav-dropdown-hover-color); */
                color: var(--background-color);
                background-color: var(--accent-color);
                border-radius: 15px;
            }

            .navmenu .dropdown:hover>ul {
                opacity: 1;
                top: 100%;
                visibility: visible;
            }

            .navmenu .dropdown .dropdown ul {
                top: 0;
                left: -90%;
                visibility: hidden;
            }

            .navmenu .dropdown .dropdown:hover>ul {
                opacity: 1;
                top: 0;
                left: -100%;
                visibility: visible;
            }
        }

        /* Navmenu - Mobile */
        @media (max-width: 1199px) {
            .mobile-nav-toggle {
                color: var(--nav-color);
                font-size: 28px;
                line-height: 0;
                margin-right: 10px;
                cursor: pointer;
                transition: color 0.3s;
            }

            .navmenu {
                padding: 0;
                z-index: 9997;
            }

            .navmenu ul {
                display: none;
                list-style: none;
                position: absolute;
                inset: 60px 20px 20px 20px;
                padding: 10px 0;
                margin: 0;
                border-radius: 6px;
                background-color: var(--nav-mobile-background-color);
                overflow-y: auto;
                transition: 0.3s;
                z-index: 9998;
                box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
            }

            .navmenu a,
            .navmenu a:focus {
                color: var(--nav-dropdown-color);
                padding: 10px 20px;
                font-family: var(--nav-font);
                font-size: 17px;
                font-weight: 500;
                display: flex;
                align-items: center;
                justify-content: space-between;
                white-space: nowrap;
                transition: 0.3s;
            }

            .navmenu a i,
            .navmenu a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                transition: 0.3s;
                background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
            }

            .navmenu a i:hover,
            .navmenu a:focus i:hover {
                background-color: var(--accent-color);
                color: var(--contrast-color);
            }

            .navmenu a:hover,
            .navmenu .active,
            .navmenu .active:focus {
                color: var(--nav-dropdown-hover-color);
            }

            .navmenu .active i,
            .navmenu .active:focus i {
                background-color: var(--accent-color);
                color: var(--contrast-color);
                transform: rotate(180deg);
            }

            .navmenu .dropdown ul {
                position: static;
                display: none;
                z-index: 99;
                padding: 10px 0;
                margin: 10px 20px;
                background-color: var(--nav-dropdown-background-color);
                border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
                box-shadow: none;
                transition: all 0.5s ease-in-out;
            }

            .navmenu .dropdown ul ul {
                background-color: rgba(33, 37, 41, 0.1);
            }

            .navmenu .dropdown>.dropdown-active {
                display: block;
                background-color: rgba(33, 37, 41, 0.03);
            }

            .mobile-nav-active {
                overflow: hidden;
            }

            .mobile-nav-active .mobile-nav-toggle {
                color: #fff;
                position: absolute;
                font-size: 32px;
                top: 15px;
                right: 15px;
                margin-right: 0;
                z-index: 9999;
            }

            .mobile-nav-active .navmenu {
                position: fixed;
                overflow: hidden;
                inset: 0;
                background: rgba(33, 37, 41, 0.8);
                transition: 0.3s;
            }

            .mobile-nav-active .navmenu>ul {
                display: block;
            }
        }
    </style>
</head>

<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
                <img
                    src="assets/img/logo/DEACONS LONG LOGO.png"
                    alt="Deacons Publishers logo"
                    title="Deacons Publishers logo" />
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="dropdown">
                        <a href="#">
                            <span>Services</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="https://prep50.ng/" target="_blank">
                                    Prep50 Mock <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="prep50_app.php">
                                    Prep50 Mobile App <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://tutorials.prep50mobileapp.com.ng/" target="_blank">
                                    Prep50 Online Tutorials <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            <span>Features</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="product.php">
                                    Products <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="career.php">
                                    Career <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            <span>Our Books</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="https://prep50books.prep50mobileapp.com.ng/" target="_blank">
                                    Prep50 Store <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#faq">Faq</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a
                class="btn-getstarted"
                href="contact.php"
                title="contact Deacons Publishers">Contact Us</a>
        </div>
    </header>

    <script>
        /**
         * Mobile nav toggle
         */
        const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

        function mobileNavToogle() {
            document.querySelector('body').classList.toggle('mobile-nav-active');
            mobileNavToggleBtn.classList.toggle('bi-list');
            mobileNavToggleBtn.classList.toggle('bi-x');
        }
        if (mobileNavToggleBtn) {
            mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
        }

        /**
         * Hide mobile nav on same-page/hash links
         */
        document.querySelectorAll('#navmenu a').forEach(navmenu => {
            navmenu.addEventListener('click', () => {
                if (document.querySelector('.mobile-nav-active')) {
                    mobileNavToogle();
                }
            });

        });

        /**
         * Toggle mobile nav dropdowns
         */
        document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
            navmenu.addEventListener('click', function(e) {
                e.preventDefault();
                this.parentNode.classList.toggle('active');
                this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
                e.stopImmediatePropagation();
            });
        });
    </script>
</body>

</html>