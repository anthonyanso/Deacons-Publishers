<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products || Deacons Publishers</title>
    <!-- <link rel="stylesheet" href="./assets/css/product.css" /> -->
    <link rel="stylesheet" href="./assets/css/product2.css" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="./assets/img/logo/ROUNDED DEACONS LOGO.png" type="image/x-icon" />
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"
        rel="stylesheet" />
    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/vendor/aos/aos.css" />
    <script src="./assets/vendor/aos/aos.js"></script>
    <!-- swiper -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> -->
</head>

<body>
    <?php
    require('./include/header1.php');
    ?>

    <swiper-container class="mySwiper" slides-per-view="3" centered-slides="true" space-between="30">
        <!-- <swiper-slide>
            <img src="./assets/products/waec/English.jpg" alt="english waec">
            <div class="text">
                <p>English</p>
            </div>
        </swiper-slide>
        <swiper-slide>
            <img src="./assets/products/waec/Biology.jpg" alt="biology waec">
            <div class="text">
                <p>Biology</p>
            </div>
        </swiper-slide>
        <swiper-slide>
            <img src="./assets/products/waec/Chemistry.jpg" alt="chemistry waec">
            <div class="text">
                <p>Chemistry</p>
            </div>
        </swiper-slide>
        <swiper-slide>
            <img src="./assets/products/waec/Geography.jpg" alt="geography waec">
            <div class="text">
                <p>Geography</p>
            </div>
        </swiper-slide> -->
    </swiper-container>

    <!-- ========= Section one -->
    <div class="u-s-p-b-60" id="home">
        <div class="section__intro u-s-m-b-16" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-12">
                        <div class="section__text-wrap" data-aos="zoom-out" data-aos-delay="400">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">
                                TOP TRENDING
                            </h1>
                            <span class="section__span u-c-silver">CHOOSE CATEGORY</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__content">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filter-category-container">
                            <div class="filter__category-wrapper">
                                <button
                                    class="btn filter__btn filter__btn--style-1 js-checked"
                                    type="button"
                                    data-filter="*">
                                    ALL
                                </button>
                            </div>                         
                            <div class="filter__category-wrapper">
                                <button
                                    class="btn filter__btn filter__btn--style-1"
                                    type="button"
                                    onclick="window.location='#waec_section';">
                                    WAEC
                                </button>
                            </div>
                            <div class="filter__category-wrapper">
                                <button
                                    class="btn filter__btn filter__btn--style-1"
                                    type="button"
                                    onclick="window.location='#jamb_section';">
                                    JAMB
                                </button>
                            </div>
                            <div class="filter__category-wrapper">
                                <button
                                    class="btn filter__btn filter__btn--style-1"
                                    type="button"
                                    onclick="window.location='#basis_section';">
                                    BASIC
                                </button>
                            </div>
                            
                        </div>
                        <div class="filter__grid-wrapper u-s-m-t-30" data-aos="fade-up" data-aos-delay="100" >
                            <div class="row" data-aos="zoom-out" data-aos-delay="400" >

                                <div id="waec_section" data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/English.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">English Language</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/Mathematics.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Mathematics</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/Biology.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Biology</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/Chemistry.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Chemistry</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/Physics.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Physics</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/Geography.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Geography</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/FutherMaths.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Further Mathematics</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/Economics.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Economics</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/Governments.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Governments</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/Literature.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Literature</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/CRS.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Christian Religious Studies</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="100"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/waec/FinancialAccount.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Financial Accounting</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>

                            <div class="row" data-aos="zoom-out" data-aos-delay="400">

                                <div id="jamb_section"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/jamb/Mathematics.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Mathematics</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/jamb/English.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">English Language</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/jamb/Physic.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Physics</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products/jamb/Biology.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Biology</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>


    <!-- ========== Section two -->
    <div class="u-s-p-b-60">
        <div class="section__intro u-s-m-b-46">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap" data-aos="fade-up" data-aos-delay="600">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">
                                DEAL OF THE DAY
                            </h1>

                            <span class="section__span u-c-silver"> Explore Today's Best Commercial Deals! Limited Time Offer.</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__content" id="basis_section">
            <div class="container">
                <div class="row" data-aos="zoom-out" data-aos-delay="400">
                    <div class="col-lg-6 col-md-6 u-s-m-b-30">
                        <div 
                            class="product-o product-o--radius product-o--hover-off u-h-100">
                            <div class="product-o__wrap">
                                <a
                                    class="aspect aspect--bg-grey aspect--square u-d-block"
                                    href="#" onclick="return false">
                                    <img
                                        class="aspect__img"
                                        src="./assets/products/Jss1/english.jpg"
                                        alt="" /></a>
                            </div>

                            <span class="product-o__category">

                                <span class="product-o__name">
                                    <a href="#" onclick="return false">English Language For Entrance Exams into Jss1</a></span>
                                <div class="product-o__rating gl-rating-style">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>

                                <!-- <span class="product-o__price">&#8358;27500.00
                                    <span class="product-o__discount">&#8358;31000.00</span></span>
                                <a href="https://prep50books.prep50mobileapp.com.ng/" class="button-link" target="_blank">
                                    <button class="button-28" role="button">Get now</button>
                                </a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 u-s-m-b-30">
                        <div
                            class="product-o product-o--radius product-o--hover-off u-h-100">
                            <div class="product-o__wrap">
                                <a
                                    class="aspect aspect--bg-grey aspect--square u-d-block"
                                    href="#" onclick="return false">
                                    <img
                                        class="aspect__img"
                                        src="./assets/products/Jss1/Mathematics.jpg"
                                        alt="" /></a>
                                <div class="product-o__special-count-wrap">
                                    <div
                                        class="countdown countdown--style-special"
                                        data-countdown="2020/05/01"></div>
                                </div>

                            </div>

                            <span class="product-o__category">
                                <span class="product-o__name">
                                    <a href="#" onclick="return false">Mathematics For Entrance Exams into Jss1</a></span>
                                <div class="product-o__rating gl-rating-style">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <!-- <span class="product-o__price">&#8358;13000.00
                                    <span class="product-o__discount">&#8358;18000.00</span></span>
                                <a href="https://prep50books.prep50mobileapp.com.ng/" class="button-link" target="_blank">
                                    <button class="button-28" role="button">Get now</button>
                                </a> -->
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="zoom-out" data-aos-delay="400">
                    <div class="col-lg-6 col-md-6 u-s-m-b-30">
                        <div
                            class="product-o product-o--radius product-o--hover-off u-h-100">
                            <div class="product-o__wrap">
                                <a
                                    class="aspect aspect--bg-grey aspect--square u-d-block"
                                    href="#" onclick="return false">
                                    <img
                                        class="aspect__img"
                                        src="./assets/products 2/Waec_Commercial.jpg"
                                        alt="" /></a>
                            </div>

                            <span class="product-o__category">

                                <span class="product-o__name">
                                    <a href="#" onclick="return false">Waec Commercial</a></span>
                                <div class="product-o__rating gl-rating-style">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>

                                <span class="product-o__price">&#8358;18000.00
                                    <span class="product-o__discount"></span></span>
                                <a href="https://prep50books.prep50mobileapp.com.ng/" class="button-link" target="_blank">
                                    <button class="button-28" role="button">Get now</button>
                                </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 u-s-m-b-30">
                        <div
                            class="product-o product-o--radius product-o--hover-off u-h-100">
                            <div class="product-o__wrap">
                                <a
                                    class="aspect aspect--bg-grey aspect--square u-d-block"
                                    href="#" onclick="return false">
                                    <img
                                        class="aspect__img"
                                        src="./assets/products 2/jamb_commercial.jpg"
                                        alt="" /></a>
                                <div class="product-o__special-count-wrap">
                                    <div
                                        class="countdown countdown--style-special"
                                        data-countdown="2020/05/01"></div>
                                </div>

                            </div>

                            <span class="product-o__category">
                                <span class="product-o__name">
                                    <a href="#" onclick="return false">Jamb Commercial</a></span>
                                <div class="product-o__rating gl-rating-style">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <span class="product-o__price">&#8358;13000.00
                                    <span class="product-o__discount"></span></span>
                                <a href="https://prep50books.prep50mobileapp.com.ng/" class="button-link" target="_blank">
                                    <button class="button-28" role="button">Get now</button>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--====== Section three ======-->
    <div class="u-s-p-b-60">
        <div class="section__intro u-s-m-b-16">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="section__text-wrap">
                            <span class="section__span u-c-silver">GET UP FOR NEW ARRIVALS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__content">
            <div class="container">
                <div class="row" data-aos="zoom-out" data-aos-delay="400">
                    <div class="col-lg-12">
                        <div class="filter__grid-wrapper u-s-m-t-30">

                            <div class="row">

                                <div id="waec_art"
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products 2/waec_art.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Waec Arts</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="product-o__price">&#8358;18000.00
                                            <span class="product-o__discount"></span></span>
                                        <a href="https://prep50books.prep50mobileapp.com.ng/" class="button-link" target="_blank">
                                            <button class="button-28" role="button">Get now</button>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products 2/jamb_art.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Jamb Arts</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="product-o__price">&#8358;13000.00
                                            <span class="product-o__discount"></span></span>
                                        <a href="https://prep50books.prep50mobileapp.com.ng/" class="button-link" target="_blank">
                                            <button class="button-28" role="button">Get now</button>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products 2/waec_science.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Waec Sciences</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="product-o__price">&#8358;18000.00
                                            <span class="product-o__discount"></span></span>
                                        <a href="https://prep50books.prep50mobileapp.com.ng/" class="button-link" target="_blank">
                                            <button class="button-28" role="button">Get now</button>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                    <div
                                        class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">
                                            <a
                                                class="aspect aspect--bg-grey aspect--square u-d-block">
                                                <img
                                                    class="aspect__img"
                                                    src="./assets/products 2/jamb_science.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <span class="product-o__name">
                                            <a href="#" onclick="return false">Jamb Sciences</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="product-o__price">&#8358;13000.00
                                            <span class="product-o__discount"></span></span>
                                        <a href="https://prep50books.prep50mobileapp.com.ng/" class="button-link" target="_blank">
                                            <button class="button-28" role="button">Get now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>





    <div class="u-s-p-b-60">
        <!--====== Section Content ======-->
        <div class="section__content" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row" data-aos="zoom-in" data-aos-delay="400">
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="Services u-h-100">
                            <div class="Services__icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="Services__info-wrap">
                                <span class="Services__info-text-1">Shipping</span>

                                <span class="Services__info-text-2">Free shipping on all orders within Nigeria or orders above &#8358;300,600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="Services u-h-100">
                            <div class="Services__icon"><i class="fas fa-redo"></i></div>
                            <div class="Services__info-wrap">
                                <span class="Services__info-text-1">Shop with Confidence</span>

                                <span class="Services__info-text-2">Our Protection covers your purchase from click to
                                    delivery</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="Services u-h-100">
                            <div class="Services__icon">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <div class="Services__info-wrap">
                                <span class="Services__info-text-1">24/7 Help Center</span>

                                <span class="Services__info-text-2">Round-the-clock assistance for a smooth shopping
                                    experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>


    <!-- footer -->
    <?php
    include('./include/footer.php');
    ?>


    <!-- <div id="cookieConsent" class="cookie-consent" data-aos="fade-down" data-aos-delay="100">
        <p data-aos="fade-up" data-aos-delay="200">This website uses cookies to ensure you get the best experience on our website.</p>
        <button id="acceptCookies" class="cookie-button" data-aos="fade-right" data-aos-delay="200">Accept</button>
    </div> -->
    <!-- footer ends -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


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