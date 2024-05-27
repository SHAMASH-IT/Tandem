<?php
    $meta_facebook_image = URL_LINK . "public/assets/images/affiche-summer-camp-site-min.png";
    $meta_facebook_title = "TANDEM Tunisie Kids Annual Sessions";
    $meta_facebook_description = "";
    $meta_facebook_width = "1600";
    $meta_facebook_height = "1200";

    require_once 'src/view/public/includes/header.php';
?>
    <style>
        .edu-breadcrumb-area {
            height: calc(70vh - 159px);
            /* background: radial-gradient(circle at 10% 20%, rgb(255, 200, 124) 0%, rgb(252, 251, 121) 90%) !important; */
            background-image: url('<?=URL_LINK?>public/assets/images/kids/banniere-kids.png');
            padding: 5px 0 85px !important;
            height: 660px !important;
            background-color: #42c6e4 !important;
            background-size: contain;
        }
        .video {
            /* background-image: url('<?=URL_LINK?>/public/assets/videos/summer camp 2024.gif') !important; */
            position: absolute;
            width: fit-content;
            height: 70%;
            background-repeat: no-repeat;
            z-index: -1;
            left: 0; 
            right: 0; 
            margin-left: auto; 
            margin-right: auto;
            background: white;
            padding: 30px 30px 100px 30px;
            border-radius: .5rem;
        }
        .breadcrumb-style-2:before{
            content: unset;
        }
        p{
            text-align: justify;
            font-size: 2rem;
        }
        .breadcrumb-style-2 .page-title{
            width: 100%;
        }
        
        .swiper {
        width : 100%;
        height: 100%;
        }

        .swiper-slide {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        }

        .swiper-slide img {
        display: block;
        width: 700px;
        }

        @media only screen and (min-width: 769px) {
        .swiper-slide:first-child {
            transition: transform 100ms;
        }

        .swiper-slide:first-child img {
            transition: box-shadow 500ms;
        }

        .swiper-slide.swiper-slide-active:first-child {
            transform: translateX(50%);
            z-index: 2;
        }

        .swiper-slide.swiper-slide-active:first-child img {
            box-shadow: 0px 32px 80px rgba(0, 0, 0, 0.35);
        }

        .swiper-slide:nth-child(2) {
            transition: transform 100ms;
        }

        .swiper-slide.swiper-slide-next:nth-child(2) {
            transform: translateX(55%);
            z-index: 1;
        }

        .swiper[dir="rtl"] .swiper-slide.swiper-slide-active:first-child {
            transform: translateX(-50%);
        }

        .swiper[dir="rtl"] .swiper-slide.swiper-slide-next:nth-child(2) {
            transform: translateX(-55%);
        }
        }

        .course-area-12 ul {
            list-style: none;
        }

        .course-area-12 ul li {
            font-size: var(--font-size-b1);
            line-height: var(--line-height-b1);
            margin-top: 10px;
            margin-bottom: 10px;
            color: var(--color-body);
        }

        .course-area-12 ul .slider-nav-wrapper {
            text-align: right;
            margin-top: -140px;
            margin-bottom: 55px;
        }

        .mySwiperSumerTeenWorkShop {
            width: 100% !important;
            height: 700px !important;
            margin-right: -2.6%;
            /* padding: 0rem 0 0rem 5rem; */
            background: #000;
        }

        .mySwiperSumerTeenWorkShop .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #000;
        }

        .mySwiperSumerTeenWorkShop .swiper-slide img {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
            left: 50%;
            top: 50%;
        }

        @media only screen and (min-width: 769px){
            .swiper-slide.swiper-slide-active:first-child {
                transform: translateX(0%) !important;
            }
        }
    </style>

    <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--21 shadow-lg">
        <!-- <div class="video shadow-lg">
            <img src="https://placehold.co/1480x660" alt="" style="height: 100%;" />
        </div> -->
        <div class="container">
            <div class="breadcrumb-inner" style="    filter: drop-shadow(2px 4px 6px black);">
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=URL_LINK?>">Accueil</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="<?=URL_LINK?>category/adultes/langues">Cours</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Enfnats</li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Sessions Annuelle</li>
                </ul>
                <div class="page-title">
                    <h1 class="title" style="text-transform: uppercase;">Sessions Annuelles des langues</h1>
                </div>
                </ul>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1">
                <span></span>
            </li>
            <li class="shape-2 scene"><img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="shape"></li>
            <li class="shape-3 scene"><img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-15.png" alt="shape"></li>
            <li class="shape-4">
                <span></span>
            </li>
            <li class="shape-5 scene"><img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-07.png" alt="shape"></li>
        </ul>
    </div>

    <div class="edu-course-area course-area-1 gap-tb-text hero-style-10 shadow-lg" style="top: unset !important">
        <div class="container">
            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Cours Enfants EXTENSIVES</span>
                <h2 class="title">Choisissez un cours pour commencer</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-md-4 col-lg-4 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-3 course-box-shadow h-100 bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/programme-fle-pour-la-langue-franccedilaise">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-07.jpg" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                </div>
                            </div>
                            <div class="content">
                                
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/programme-fle-pour-la-langue-franccedilaise">PROGRAMME FLE POUR LA LANGUE FRANÇAISE</a>
                                </h5>
                                <p>Notre méthode se concentre sur la communication...</p>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-60" style="font-size: 3rem;"></i>
                                    </div>
                                    <span class="rating-count"> 270 DT</span>
                                </div>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-small btn-secondary" href="<?=URL_LINK?>formation/programme-fle-pour-la-langue-franccedilaise">Plus... <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-3 course-box-shadow h-100 bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-prive">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-08.jpg" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                </div>
                            </div>
                            <div class="content">
                                
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-prive">SOUTIEN SCOLAIRE - SYSTÈME PRIVÉ</a>
                                </h5>
                                <p>Des cours spécifiquement conçus pour les progra...</P>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-60" style="font-size: 3rem;"></i>
                                    </div>
                                    <span class="rating-count"> -</span>
                                </div>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-small btn-secondary" href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-prive">Plus... <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-3 course-box-shadow h-100 bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/session-annuelle-de-langues-extensives">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-09.jpg" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                </div>
                            </div>
                            <div class="content">
                                
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/session-annuelle-de-langues-extensives">SESSION ANNUELLE DE LANGUES (EXTENSIVES)</a>
                                </h5>
                                <p>Notre centre linguistique est ravi de vous prés...</P>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-60" style="font-size: 3rem;"></i>
                                    </div>
                                    <span class="rating-count"> -</span>
                                </div>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-small btn-secondary" href="<?=URL_LINK?>formation/session-annuelle-de-langues-extensives">Plus... <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-3 course-box-shadow h-100 bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/soutien-scolaire-systeme-tunisien">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-008.png" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                </div>
                            </div>
                            <div class="content">
                                
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/soutien-scolaire-systeme-tunisien">SOUTIEN SCOLAIRE SYSTÉME TUNISIEN</a>
                                </h5>
                                <p>Le soutien scolaire dans le système éducatif...</P>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-60" style="font-size: 3rem;"></i>
                                    </div>
                                    <span class="rating-count"> 280 DT</span>
                                </div>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-small btn-secondary" href="<?=URL_LINK?>formation/soutien-scolaire-systeme-tunisien">Plus... <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-3 course-box-shadow h-100 bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/enfant-atelier-robotique">
                                    <img src="<?=URL_LINK?>public/assets/images/kids/club robotique tandem.jpeg" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                </div>
                            </div>
                            <div class="content">
                                
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/enfant-atelier-robotique">ATELIER ROBOTIQUE</a>
                                </h5>
                                <p>Les enfants auront l'occasion de construire...</P>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-60" style="font-size: 3rem;"></i>
                                    </div>
                                    <span class="rating-count"> -</span>
                                </div>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-small btn-secondary" href="<?=URL_LINK?>formation/enfant-atelier-robotique">Plus... <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-3 course-box-shadow h-100 bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/enfant-atelier-peinture">
                                    <img src="<?=URL_LINK?>public/assets/images/kids/techniques peinture tandem.jpeg" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                </div>
                            </div>
                            <div class="content">
                                
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/enfant-atelier-peinture">ATELIER DE PEINTURE</a>
                                </h5>
                                <p>Nos ateliers de peinture offrent un espace...</P>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-60" style="font-size: 3rem;"></i>
                                    </div>
                                    <span class="rating-count"> -</span>
                                </div>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-small btn-secondary" href="<?=URL_LINK?>formation/enfant-atelier-peinture">Plus... <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Course Area  -->
    <div class="business-course edu-course-area course-area-12 gap-tb-text bg-image shadow-lg">
        <div class="row edublink-animated-shape" style="margin-right: 0;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12 sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="color-primary" style="padding: 50px 30px;">
                        <div class="content text-center">
                            <h2 class="title" style="font-size: 5rem; text-transform: uppercase;">À propos</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <div class="edu-faq-content sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="faq-accordion" id="faq-accordion2">
                                    <div class="accordion">
                                        <div class="accordion-item">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true">
                                                    
                                                </button>
                                            </h5>
                                            <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion2" style="">
                                                <div class="accordion-body">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 style="text-align: justify;"></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-xs-12">
                    <ul>
                        <li>
                            <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Popular Pack</span>
                                <h2 class="title" style="font-size: 5rem; text-transform: uppercase;">Les sessions annuelles extensives pour enfants</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                        </li>
                        <!-- <li>
                            <div class="slider-nav-wrapper" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                                <div class="swiper-navigation">
                                    <div class="swiper-btn-nxt">
                                        <i class="icon-west"></i>
                                    </div>
                                    <div class="swiper-btn-prv">
                                        <i class="icon-east"></i>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                    <div #swiperRef="" class="swiper mySwiperSumerTeenWorkShop">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/session-annuelle/rentrée 2018 amicales_page-0001.jpg" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/session-annuelle/rentrée 2018 amicales_page-0002.jpg" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/session-annuelle/rentrée 2018 amicales_page-0003.jpg" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/session-annuelle/rentrée 2018 amicales_page-0004.jpg" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/session-annuelle/rentrée 2018 amicales_page-0005.jpg" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/session-annuelle/rentrée 2018 amicales_page-0006.jpg" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/session-annuelle/rentrée 2018 amicales_page-0007.jpg" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/session-annuelle/rentrée 2018 amicales_page-0008.jpg" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <img data-depth="-1.5" src="<?=URL_LINK?>public/assets/images/others/shape-34.png" alt="Shape" style="transform: translate3d(25.2px, 3.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                </li>
                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <img data-depth="1.5" src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="Shape" style="transform: translate3d(-23px, -3.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-1 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img src="<?=URL_LINK?>public/assets/images/others/shape-18.png" alt="Shape">
            </li>
        </ul>
    </div>
    <!-- End Course Area -->

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiperSumerTeenWorkShop", {
            lazy: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }
        });
    </script>

<?php require_once 'src/view/public/pages/inscription.php'; ?>
<?php require_once 'src/view/public/includes/footer.php'; ?>