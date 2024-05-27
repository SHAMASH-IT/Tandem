<?php 
    $meta_facebook_image = URL_LINK . "public/assets/images/affiche-language-village.webp";
    $meta_facebook_title = "TANDEM Tunisie Language Village";
    $meta_facebook_description = "TANDEM fourniront un aperçu complet des fonctionnalités et activités passionnantes du Village linguistique qui engagent les étudiants dans cette riche communauté linguistique et culturelle";
    $meta_facebook_width = "1600";
    $meta_facebook_height = "1131";

    require_once 'src/view/public/includes/header.php';
?>

    <style>
        .hero-banner.presentation-hero-style .banner-content .title {
            margin-bottom: 0;
            padding-top: 80px;
        }
        .pv-course-details-area .course-thumbnail {
            text-align: center !important;
        }
        .hero-banner {
            /* background-image: url('<?=URL_LINK?>public/assets/images/sea.gif'); */
            max-height: 660px !important;
            min-height: 660px !important;
            overflow: hidden;
        }
        .hero-banner.presentation-hero-style::before {
            background-image: unset;
        }
        h1{
            color: white;
            text-transform: uppercase;
            font-size: 6rem;
        }

        body {
            /* Metal by Etienne Martin. https://unsplash.com/photos/v6uiP2MD6vs */
            --metal-tex: url(https://images.unsplash.com/photo-1501166222995-ff31c7e93cef?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTcyMDc2NzU&ixlib=rb-1.2.1&q=80);
        }

        .metal {
            position: relative;
            margin: 15vh auto;
            color: transparent;
            font-family: impact, sans-serif;
            font-size: 25vw;
            letter-spacing: 0.05em;
            background-image: var(--metal-tex);
            background-size: cover;
            background-clip: text;
            -webkit-background-clip: text;
        }

        .texture,
        .texture::after {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        
        .texture {
            background-image: linear-gradient(to bottom, blue, white 50%, red 65%, white);
            background-attachment: fixed;
            mix-blend-mode: color-dodge;
        }

        .texture::after {
            content: '';
            background-image: var(--metal-tex);
            background-size: cover;
            filter: saturate(0) brightness(0.8) contrast(4);
            mix-blend-mode: multiply;
        }
        .swiper {
            height: 770px;
            cursor: url('<?=URL_LINK?>public/assets/images/cursor-arrow-down.png'), n-resize;
            border-radius: .7rem !important;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            height: 770px;
            width: none;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 !important;
        }

        .swiper-slide img {
            display: block;
            height: unset;
            width: 100%;
            object-fit: cover;
            box-shadow: unset !important;
        }
        .swiper-pagination-vertical.swiper-pagination-bullets, .swiper-vertical>.swiper-pagination-bullets{
            top: 60%;
        }
        .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color: #000;
            opacity: 1;
            background: rgba(0, 0, 0, 0.2);
        }

        .swiper-pagination-bullet-active {
            color: #fff;
            background: #007aff;
        }
        .swiper-pagination-vertical.swiper-pagination-bullets .swiper-pagination-bullet, .swiper-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            margin-bottom: 5px !important;
        }
        p{
            font-size: 2.5rem !important;
            color: #000 !important;
        }
        .about-style-7 .about-content{
            padding-right: 0;
        }
        .swiper-pagination-vertical.swiper-pagination-bullets, .swiper-vertical>.swiper-pagination-bullets{
            right: -5px;
        }
        #hero-banner-video {
            width: 100vw;
            height: 660px;
            position: absolute;
            object-fit: cover;
            aspect-ratio: 1 / 1;
            pointer-events: none;
        }
    </style>

    <div class="hero-banner presentation-hero-style pv-hero-banner bg-image" id="intro">
        <video id="hero-banner-video" controls="false" muted autoplay loop playsinline>
            <source src="<?=URL_LINK?>public/assets/videos/sea-kilibia.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="banner-content">
                        <span class="subtitle sal-animate" data-sal="slide-up" data-sal-duration="1000"></span>
                        <h1 class="title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">TANDEM Language Village</h1>
                        <div class="banner-btn sal-animate d-flex justify-content-center align-content-center" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <img data-depth="2" height="300" width="300" src="<?=URL_LINK?>public/assets/images/language-village.png" alt="Shape" style="filter: drop-shadow(5px 5px 15px rgba(0, 0, 0, .3));transform: translate3d(-30.7px, -0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-gallery">
            <div class="thumbnail thumbnail-1 sal-animate" data-sal-delay="500" data-sal="slide-down" data-sal-duration="1000">

            </div>
            <div class="thumbnail thumbnail-2 sal-animate" data-sal-delay="500" data-sal="slide-up" data-sal-duration="1000">
                
            </div>
            <div class="thumbnail thumbnail-3 sal-animate" data-sal-delay="500" data-sal="slide-down" data-sal-duration="1000">

        </div>
            <div class="thumbnail thumbnail-4 sal-animate" data-sal-delay="500" data-sal="slide-up" data-sal-duration="1000">

        </div>
            <div class="thumbnail thumbnail-5 sal-animate" data-sal-delay="500" data-sal="slide-up" data-sal-duration="1000">

        </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape" style="transform: translate3d(-30.7px, -0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
            <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="Shape" style="transform: translate3d(26.2px, 0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
            <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-25.png" alt="Shape" style="transform: translate3d(-30.7px, -0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
            <li class="shape-4 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="-3" style="transform: translate3d(12.4px, 0.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
            </li>
        </ul>
    </div>

    <div class="section-gap-large edu-about-area about-style-7">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="section-title section-left sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">About</span>
                            <h2 class="title">TANDEM <span class="color-secondary">NEXT</span> Language Village</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p style="font-size: 2rem; text-align: justify">
                                TANDEM fourniront un aperçu complet des fonctionnalités et activités passionnantes du Village linguistique qui engagent les étudiants dans cette riche communauté linguistique et culturelle:
                            </p>
                        </div>
                        <ul class="features-list sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <li>Language Workshops</li>
                            <li>Conversation Clubs</li>
                            <li>Guest Speaker Sessions</li>
                            <li>Language Exchange Programs</li>
                            <li>Language Challenges and Competitions</li>
                            <li>Networking Opportunities</li>
                            <li>Community Projects</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-image-gallery">
                        <img class="main-img-1" src="<?=URL_LINK?>public/assets/images/affiche-language-village.webp" alt="About Image">
                        <img class="main-img-2 sal-animate" src="<?=URL_LINK?>public/assets/images/about/shape-12.png" data-sal-delay="150" data-sal="slide-down" data-sal-duration="800" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-38.png" alt="Shape" style="transform: translate3d(-41.7px, 21.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-37.png" alt="Shape" style="transform: translate3d(34.6px, -19.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-1.8" src="<?=URL_LINK?>public/assets/images/about/shape-04.png" alt="Shape" style="transform: translate3d(48.8px, -25.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-4 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="Shape" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200"></li>
        </ul>
    </div>

    <section class="why-choose-area-2 section-gap-large">
        <div class="row edublink-animated-shape">
            <div class="col-12">
                <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">about TANDEM Dar Kenza </span>
                    <h2 class="title">The Best <span class="color-secondary">Beneficial</span> Side <br> of TANDEM Students</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                <div class="about-image-gallery d-flex justify-content-center align-items-center">
                    <div class="main-img-1 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                        <img src="<?=URL_LINK?>public/assets/images/tableau-language-village.png" alt="About Image">
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="1" style="transform: translate3d(-43.7px, 7.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
            </li>
            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="shape" style="transform: translate3d(34.1px, -5.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
            <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="-1" style="transform: translate3d(43.7px, -7.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
            </li>
            <li class="shape-4 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-40.png" alt="shape" style="transform: translate3d(-22.6px, 4.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
        </ul>
    </section>

    <div class="edu-section-gap edu-about-area about-style-4 programming-about edu-cta-banner-area">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-8">
                    <div class="about-image-gallery">
                        <div class="main-img-1 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                            <img src="<?=URL_LINK?>public/assets/images/AFFICHE-language-village-v2.webp" alt="About Image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-09.png" alt="Shape" style="transform: translate3d(-35.8px, 18.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-35.png" alt="Shape" style="transform: translate3d(30.4px, -17.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="1.5" src="<?=URL_LINK?>public/assets/images/faq/shape-05.png" alt="Shape" style="transform: translate3d(-30.3px, 14.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-4 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <span data-depth="-2.5" style="transform: translate3d(19.2px, -9.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="section-title section-left">
                            <span class="pre-title">À PROPOS Été 2024</span>
                            <h2 class="title">Ouvrir la voie avec <br> le village linguistique <br> <sapn class="text-success">TANDEM</span></h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Un bon programmeur est quelqu’un qui regarde toujours des deux côtés.</p>
                        </div>
                        <ul class="features-list">
                            <li>Atteindre l’objectif de l’éducation.</li>
                            <li>L'été où l'apprentissage se rencontre.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-gap-large edu-about-area about-style-7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-left sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">About Tandem Language Village</span>
                            <h2 class="title">
                                Language Village offers an inclusive and supportive environment.
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p style="text-align: justify;">
                                Bienvenue dans notre village linguistique. C’est là que l’apprentissage des langues peut dépasser les frontières traditionnelles.
                            </p>
                            <p style="text-align: justify;">
                                Entouré de paysages sereins et imprégné de l’esprit vibrant de la diversité culturelle, notre village linguistique emmène les étudiants dans un voyage transformateur de découverte des langues.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-gallery" style="padding-left: 0 !important;">
                        <div class="swiper swiperLanguagevillage shadow-lg">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (1).webp" alt="tandem language village">
                                </div>
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (2).webp" alt="tandem language village">
                                </div>
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (3).webp" alt="tandem language village">
                                </div>
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (4).webp" alt="tandem language village">
                                </div>
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (5).webp" alt="tandem language village">
                                </div>
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (6).webp" alt="tandem language village">
                                </div>
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (7).webp" alt="tandem language village">
                                </div>
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (8).webp" alt="tandem language village">
                                </div>
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (9).webp" alt="tandem language village">
                                </div>
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (10).webp" alt="tandem language village">
                                </div>
                                <div class="swiper-slide">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/language-village/tandem language village brochure (11).webp" alt="tandem language village">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-38.png" alt="Shape" style="transform: translate3d(-40.3px, 4.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-37.png" alt="Shape" style="transform: translate3d(33.4px, -4.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-1.8" src="<?=URL_LINK?>public/assets/images/about/shape-04.png" alt="Shape" style="transform: translate3d(47.2px, -5.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-4 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="Shape" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200"></li>
        </ul>
    </div>

    <div class="edu-gallery-area edu-section-gap edu-cta-banner-area">
        <div class="container">
            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title"></span>
                <h2 class="title">Dar KENZA PHOTOS</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="isotope-wrapper">
                    <div class="isotope-list gallery-grid-wrap" style="position: relative; height: 989.859px;">
                        <div id="animated-thumbnials" lg-uid="lg0">


                        </div>
                    </div>
                </div>
            <div id="masonry-gallery" class="gallery-grid-wrap" style="position: relative; height: 1259.83px;">
                <div id="animated-thumbnials" lg-uid="lg0">
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-1.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-2.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-3.webp" alt="Gallery Image">
                        </div>
                    </a>                     
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-4.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-5.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-6.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-7.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-8.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-9.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-10.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-11.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-12.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-13.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-14.webp" alt="Gallery Image">
                        </div>
                    </a>
                    <a href="#" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap masonry-item" lg-event-uid="&amp;8" style="position: absolute; left: 33.25%; top: 659px;">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/dar-kenza/img-15.webp" alt="Gallery Image">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'src/view/public/pages/inscription.php'; ?>
<?php require_once 'src/view/public/includes/footer.php'; ?>