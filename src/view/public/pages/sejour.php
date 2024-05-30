<?php

    $page_title = "Séjour linguistique | Tandem Training Center";

    $meta_facebook_image = URL_LINK . "public/assets/images/brochures/séjour-l'inguistique/cover.jpg";
    $meta_facebook_title = "TANDEM SÉJOUR L'INGUISTIQUE";
    $meta_facebook_description = "Les programmes de résidence linguistique offrent des expériences d'immersion linguistique innovantes soigneusement conçues pour enrichir l'apprentissage des langues grâce à une immersion culturelle profonde.";
    $meta_facebook_width = "1600";
    $meta_facebook_height = "1200";

    require_once 'src/view/public/includes/header.php';
?>

<style>
    @import url('https://fonts.cdnfonts.com/css/raillinc');

    .raillinc {
        font-family: 'Raillinc', sans-serif !important;
        text-transform: uppercase !important;
        color: black !important;
    }

    .demo-feature .inner .icon img {
        max-height: 90%;
    }

    .mt-10-em {
        margin-top: 10em;
    }
    .row-pays::before {
        /*content: '';*/
        /*position: absolute;*/
        /*left: 0;*/
        /*top: 0;*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*background-image: url('*/<?php //=URL_LINK?>/*>public/assets/images/bg/bg-image-2.svg');*/
        /*-webkit-filter: brightness(0) saturate(100%) invert(96%) sepia(2%) saturate(484%) hue-rotate(339deg) brightness(103%) contrast(95%);*/
        /*filter: brightness(0) saturate(100%) invert(96%) sepia(2%) saturate(484%) hue-rotate(339deg) brightness(103%) contrast(95%);*/
        /*background-position: center top;*/
        /*background-repeat: no-repeat;*/
        /*background-size: cover;*/
        /*z-index: -1;*/
    }
    .pv-cta-area::before {
        filter: invert(1) !important;
    }
    .thumbnail {
        background-color: var(--color-white);
        border-radius: 10px;
        padding: 20px;
    }
    p, li:not(.header-info li){
        text-align: justify !important;
        font-size: 2rem !important;
    }
    .header-top .header-info li a {
        font-size: 14px !important;
    }

    .hero-banner .banner-content .title{
        margin-bottom: 18px !important;
    }
    .mySwiper2{
        width: 100%;
        height: 400px !important;
    }

    video {
        aspect-ratio: 16/9;
        width: 100%;
        height: 540px;
        background: black;
    }

    .swiper {
        width: 100%;
    }

    .swiper-wrapper {
        align-items: center;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-slide {
        width: 100%;
    }

    .mySwiperSejour {
        height: 600px;
        width: 800px;
    }

    .mySwiperSejour .swiper {
            height: 770px;
            width: auto;
            cursor: url('<?=URL_LINK?>public/assets/images/cursor-arrow-down.png'), n-resize;
            border-radius: .7rem !important;
        }

    .mySwiperSejour    .swiper-slide {
            text-align: center;
            font-size: 18px;
            height: 770px;
            width: auto;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 !important;
        }

    .mySwiperSejour    .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            box-shadow: unset !important;
        }

    .autoplay-progress {
        position: absolute;
        right: 16px;
        bottom: 16px;
        z-index: 10;
        width: 75px;
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: black;
    }

    .autoplay-progress svg {
        --progress: 0;
        position: absolute;
        left: 0;
        top: 0px;
        z-index: 10;
        width: 100%;
        height: 100%;
        stroke-width: 4px;
        stroke: black;
        fill: none;
        stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
        stroke-dasharray: 125.6;
        transform: rotate(-90deg);
    }

    .hero-banner.hero-style-9 .slider .health-slider-main {
        width: calc(44vw + 80px);
         height: 500px;
         overflow: hidden;
         margin: unset;
        position: absolute;
        left: calc(60% - 125px);
         top: unset;
    }

    .ball {
        z-index: -1;
        animation: float 3.5s ease-in-out infinite;
        height: 200px;
        width: 200px;
        border-radius: 50%;
        position: relative;

        background: radial-gradient(
                circle at 75% 30%,
                white 5px,
                aqua 8%,
                darkblue 60%,
                aqua 100%
        );
        box-shadow: inset 0 0 20px #fff, inset 10px 0 46px #eaf5fc,
        inset 88px 0px 60px #c2d8fe, inset -20px -60px 100px #fde9ea,
        inset 0 50px 140px #fde9ea, 0 0 90px #fff;
    }

    @keyframes float {
        0% {
            transform: translatey(0px);
        }
        50% {
            transform: translatey(-80px);
        }
        100% {
            transform: translatey(0px);
        }
    }

    @keyframes expand {
        0%,
        100% {
            transform: scale(0.5);
        }

        50% {
            transform: scale(1);
        }
    }

    @media only screen and (max-width: 500px) {
        .ball {
            animation: float 4.5s ease-in-out infinite;
            height: 120px;
            width: 120px;

            background: radial-gradient(
                    circle at 65% 35%,
                    white 5px,
                    aqua 15%,
                    darkblue 50%,
                    aqua 100%
            );
            box-shadow: inset 0 -20px 30px #fff, inset 40px 0 46px #eaf5fc,
            inset 58px 0px 60px #c2d8fe, inset -8px -30px 100px #fde9ea,
            inset 0 20px 110px #fde9ea, 0 0 90px #fff;
        }

        @keyframes float {
            0% {
                transform: translatey(0px);
            }
            50% {
                transform: translatey(-50px);
            }
            100% {
                transform: translatey(0px);
            }
        }
    }

    h1{
        padding-bottom: 35px;
    }

    .hero-style-4 {
        padding-top: 50px;
        padding-right: 50px;
        padding-left: 50px;
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
            margin-bottom: 50px !important;
        }

        .swiper-pagination-bullet-active {
            color: #fff;
            background: #007aff;
        }
        .swiper-pagination-vertical.swiper-pagination-bullets .swiper-pagination-bullet, .swiper-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
           

</style>


<div class="hero-banner hero-style-4 hero-style-11 motivation-banner">
    <div class="col-12 edublink-animated">
        <div class="row">
            <div class="col-12">
                <div class="banner-content sal-animate pb-0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000">
                    <h1 class="title sal-animate raillinc mb-0" style="text-align: center;" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Séjour Linguistique</h1>
                    <p class="sal-animate" style="text-align: left; margin-left: 0;"></p>
                    <!-- <div class="row">
                        <div class="col d-flex justify-content-center">
                            <div class="ball"></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7 edu-order-md-1 mx-auto">
                <div class="">
                    <div class="thumbnail sal-animate shadow-lg" data-sal-delay="150" data-sal="slide-left" data-sal-duration="1000">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (1).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (2).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (3).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (4).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (5).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (6).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (7).jpeg" />
                                </div><div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (8).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (9).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (10).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (11).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (12).jpeg" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="autoplay-progress">
                                <svg viewBox="0 0 48 48">
                                    <circle cx="24" cy="24" r="20"></circle>
                                </svg>
                                <span></span>
                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (1).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (2).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (3).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (4).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (5).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (6).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (7).jpeg" />
                                </div><div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (8).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (9).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (10).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (11).jpeg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?=URL_LINK?>public/assets/images/séjour/photo (12).jpeg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 edu-order-md-2">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-content-center">
                        <video height="500px" controls="" class="video-shadow">
                            <source src="<?=URL_LINK?>public/assets/videos/video séjour linguistique.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <span></span>
            </li>
            <li class="shape-2 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" src="<?=URL_LINK?>public/assets/images/banner/shape-13.png" alt="Shape">
            </li>
            <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="2.5" style="transform: translate3d(-1.3px, -9.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
            </li>
        </ul>
    </div>
    <ul class="shape-group">
        <li class="shape-5 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="z-index:9; transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <img data-depth="1" src="<?=URL_LINK?>public/assets/images/about/shape-02.png" alt="Shape" style="transform: translate3d(-1.2px, -9.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
        </li>
        <li class="shape-6 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <img data-depth="-1" src="<?=URL_LINK?>public/assets/images/about/shape-18.png" alt="Shape" style="transform: translate3d(1.3px, 9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
        </li>
    </ul>
</div>

<div class="hero-banner hero-style-9 mb--90 mt--50">
    <div class=" container">
        <div class="">
            <div class="row">
                <div class="col col-sm-12 d-flex justify-content-center align-content-center align-items-center">
                    <h1 class="title" style="text-align: center;">Séjour linguistique 2024 <br> à patir de 30 juin <br> ou à partir 1 aôut <br></h1>
                </div>
                <div class="col col-sm-12 ">
                    <div class="swiper mySwiperSejour">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/cover.jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (1).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (2).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (3).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (4).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (5).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (6).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (7).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (8).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (9).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (10).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (11).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (12).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (13).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (14).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (15).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (15) 2.png">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/séjour-linguistique/brochure_séjour_lingustique_page (16).jpg">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <!-- end slider-main -->
            <ul class="shape-group">
                <li class="shape-1">
                    <span></span>
                </li>
                <li class="shape-2">
                    <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-25.png" alt="Shape">
                </li>
            </ul>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/others/health-shape-33.png" alt="Shape" style="transform: translate3d(-24.6px, 13.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
        </li>
        <li class="shape-4 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/others/health-shape-34.png" alt="Shape" style="transform: translate3d(-27.5px, 14.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
        </li>
        <li class="shape-5">
            <img src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="image">
        </li>
        <li class="shape-6 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="" style="transform: translate3d(35.5px, -19.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
        </li>
    </ul>
    <div class="hero-slider-bg-controls">
        <div class="swiper-slide-controls slide-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-159d281cd1caa237">
            <i class="icon-west"></i>
        </div>
        <div class="swiper-slide-controls slide-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-159d281cd1caa237">
            <i class="icon-east"></i>
        </div>
    </div>
</div>

<div class="pv-cta-area bg-image">
    <div class="container">
        <div class="cta-content">
            <h2>
                <span style="font-size: unset !important;" class="subtitle sal-animate raillinc maj" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">TANDEM Séjour Linguistique</span>
            </h2>
            <h3 class="text-white sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" style="text-align: justify; color: black !important;">
                Les programmes de résidence linguistique offrent des expériences d'immersion linguistique innovantes soigneusement conçues pour enrichir l'apprentissage des langues grâce à une immersion culturelle profonde.
            </h3>
            <h3 class="text-white sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" style="text-align: justify; color: black !important;">
                Ce programme vise à offrir aux participants une variété d'avantages au-delà des compétences linguistiques, en favorisant une compréhension culturelle approfondie et le développement personnel.
            </h3>

        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="shape" style="transform: translate3d(-30.7px, -0.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
        </li>
        <li class="shape-2 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="1000">
            <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-35.png" alt="shape">
        </li>
        <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-07.png" alt="shape" style="transform: translate3d(23.8px, 0.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
        </li>
        <li class="shape-4 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <span data-depth="2.5" style="transform: translate3d(-32.6px, -0.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
        </li>
    </ul>
</div>

<div class="pv-features-area">
    <div class="container">
        <div class="section-title section-center splash-title">
            <span class="pre-title sal-animate" data-sal="slide-up" data-sal-duration="1000">TANDEM FEATURES</span>
            <h2 class="title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Avoir accès à TANDEM <br> Séjour Linguistique</h2>
        </div>
        <div class="row row--20 row-cols-1 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/London.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title">Londres <br> Angleterre</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Brighton.jpeg" alt="Preview Images">
                        </div>
                        <h6 class="title">Brighton <br> Angleterre</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Portsmouth.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title">Portsmouth <br> Angleterre</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Manchester.png" alt="Preview Images">
                        </div>
                        <h6 class="title">Manchester <br> Angleterre</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Bournemouth.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title">Bournemouth <br> Angleterre</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Paris.png" alt="Preview Images">
                        </div>
                        <h6 class="title">Paris <br> France</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Montpellier.png" alt="Preview Images">
                        </div>
                        <h6 class="title">Montpellier <br> France</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Bordeaux.png" alt="Preview Images">
                        </div>
                        <h6 class="title">Bordeaux <br> France</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Rochelle.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title">La Rochelle <br> France</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Île de Ré.png" alt="Preview Images">
                        </div>
                        <h6 class="title">Île de Ré  <br> France</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Freiburg.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title">Fribourg  <br> Allemagne</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Berlin.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title">Berlin  <br> Allemagne</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/München.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title">Munich  <br> Allemagne</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Heidelberg.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title">Heidelberg  <br> Allemagne</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Edinburgh.png" alt="Preview Images">
                        </div>
                        <h6 class="title">Édimbourg  <br> Écosse</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Glasgow.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title">Glasgow  <br> Écosse</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Ireland.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title"><br> Ireland</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Barcelona.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title">Barcelone<br> Espagne</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/Cyprus.png" alt="Preview Images">
                        </div>
                        <h6 class="title">Chypre<br> Turquie</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/new-york.jpg" alt="Preview Images">
                        </div>
                        <h6 class="title"><br> Les États-Unis d'Amérique</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="demo-feature">
                    <div class="inner">
                        <div class="icon">
                            <img src="<?=URL_LINK?>public/assets/images/pays/malta.png" alt="Preview Images">
                        </div>
                        <h6 class="title"><br> Malte</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pv-shop-area bg-image pv-cta-area row-pays">
    <div class="wrapper">
        <div class="container-custom-1520">
            <div class="section-title section-center splash-title">
                <span class="pre-title sal-animate" data-sal="slide-up" data-sal-duration="1000">TANDEM Pays</span>
                <!-- <h2 class="title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Avoir accès à TANDEM <br> Séjour L'inguistique</h2> -->
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title section-left splash-title">
                        <h2 class="title sal-animate text-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Angleterre</h2>
                        <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">Découvrez une immersion linguistique sans pareille avec notre centre de formation linguistique, offrant des voyages inoubliables dans les destinations captivantes du Royaume-Uni.</p>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-2">
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Londres</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Chaque recoin de Londres offre des opportunités d'apprendre et d'explorer, depuis la visite de monuments célèbres comme Big Ben, le Londres Eye et Buckingham Palace jusqu'aux promenades dans les quartiers pittoresques comme Covent Garden et Notting Hill.
                            </p>
                        </div>
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Brighton</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Découvrez la vie balnéaire animée de Brighton, connue pour sa jetée emblématique, sa plage de galets et sa scène artistique. Explorez l'historique The Lanes, dégustez la cuisine locale dans des cafés branchés et pratiquez des sports nautiques le long du littoral pittoresque.
                            </p>
                        </div>
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Portsmouth</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Découvrez l'histoire maritime de Portsmouth, siège de la Royal Navy. Visitez le célèbre HMS Victory et le musée Mary Rose, découvrez le passé fascinant de la ville dans le chantier naval historique et profitez de vues panoramiques depuis la tour Spinnaker.
                            </p>
                        </div>
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Manchester</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Découvrez la vitalité culturelle de Manchester, ville emblématique du nord de l'Angleterre. Découvrez son riche patrimoine industriel, visitez des musées fascinants tels que le Musée des sciences et de l'industrie et plongez-vous dans la scène artistique et musicale vibrante de la ville.
                            </p>
                        </div>
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Bournemouth</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Profitez de la tranquillité de Bournemouth, une ville balnéaire célèbre pour ses plages de sable doré et ses jardins côtiers pittoresques. Entre deux spectacles passionnants, vous pourrez vous détendre sur la plage, vous promener le long de la jetée ou explorer les sentiers côtiers offrant une vue fantastique sur la Manche.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <div class="shop-thumbnail">
                        <div class="shop-thumbnail-images">
                            <img class="shop-demo-main sal-animate" src="<?=URL_LINK?>public/assets/images/flags/flag-of-the-united-kingdom-flag-city.png" data-sal-delay="200" data-sal="fade" data-sal-duration="800" alt="Shop Images">
                            <!--                            <img class="shop-demo-left sal-animate" src="assets/images/preview/shop-demo-left.webp" data-sal-delay="500" data-sal="slide-right" data-sal-duration="1000" alt="Shop Images">-->
                            <!--                            <img class="shop-demo-right sal-animate" src="assets/images/preview/shop-demo-right.webp" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000" alt="Shop Images">-->

                            <ul class="shape-group">
                                <li class="shape-1 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-25.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <span data-depth="-3" style="transform: translate3d(14.6px, -9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title section-left splash-title">
                        <h2 class="title sal-animate text-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">France</h2>
                        <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Chaque destination offre une expérience unique, alliant l'apprentissage de la langue française à la découverte de la culture, de l'histoire et des plaisirs culinaires de la France
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Paris</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Plongez dans le charme de Paris, la Ville Lumière, de culture et d'art. Explorez des monuments emblématiques tels que la Tour Eiffel, le musée du Louvre et la cathédrale Notre-Dame, promenez-vous dans les charmantes rues de Montmartre et dégustez la célèbre cuisine française dans des bistrots traditionnels.
                            </p>
                        </div>
                    </div>
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Montpellier</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Découvrez le charme méridional de Montpellier, une ville vibrante qui allie histoire, culture et modernité. Promenez-vous dans le centre historique, visitez la place animée de la Comédie et profitez de moments de détente sur les plages méditerranéennes voisines.
                            </p>
                        </div>
                    </div>
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Bordeaux</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Plongez dans le monde du vin et de l'architecture de Bordeaux, connu pour ses vignobles de renommée mondiale et son patrimoine historique. Explorez les châteaux viticoles, dégustez les vins locaux et explorez le port de plaisance animé le long de la Garonne.
                            </p>
                        </div>
                    </div>
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">La Rochelle</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Profitez du charme maritime de La Rochelle, une ville portuaire pittoresque au bord de l'océan Atlantique. Visitez le vieux port, flânez dans les rues médiévales et pratiquez des sports nautiques sur les plages environnantes ou sur l'île de Ré voisine.
                            </p>
                        </div>
                    </div>
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">L'Île de Ré</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Profitez de la tranquillité et de la beauté naturelle de l'Île de Ré, un paradis paisible aux paysages magnifiquement préservés. Explorez des villages authentiques, des plages de sable fin, des pistes cyclables pittoresques et dégustez des fruits de mer frais dans les restaurants locaux.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2">
                    <div class="shop-thumbnail">
                        <div class="shop-thumbnail-images">
                            <img class="shop-demo-main sal-animate" src="<?=URL_LINK?>public/assets/images/flags/Flag_map_of_France.svg.png" data-sal-delay="200" data-sal="fade" data-sal-duration="800" alt="Shop Images">
                            <ul class="shape-group">
                                <li class="shape-1 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-31.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/dark-shape-20.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <span data-depth="-3" style="transform: translate3d(14.6px, -9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title section-left splash-title">
                        <h2 class="title sal-animate text-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Allemagne</h2>
                        <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Chaque destination offre une expérience unique, alliant l'apprentissage de la langue allemande à la découverte de l'histoire, de la culture et des traditions de l'Allemagne.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-2">
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Berlin</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Plongez-vous dans l'histoire et la culture vibrante de la capitale allemande, Berlin. Visitez des sites historiques tels que le mur de Berlin, le musée commémoratif de l'Holocauste et le Reichstag, découvrez l'art contemporain dans les galeries et les musées et admirez la cuisine diversifiée de la ville.
                            </p>
                        </div>
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Freiburg</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Découvrez le charme médiéval de Fribourg au cœur de la Forêt-Noire. Explorez la vieille ville et ses rues pavées, visitez la célèbre cathédrale de Fribourg et profitez de l'ambiance animée des marchés locaux.
                            </p>
                        </div>
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">München</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Découvrez la tradition et l'élégance bavaroises à Munich, une ville célèbre pour son Oktoberfest et son art de vivre. Visitez le jardin anglais, le château de Nymphenburg et explorez la scène artistique et culturelle dynamique de la ville.
                            </p>
                        </div>
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Heidelberg</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Profitez de l'atmosphère romantique d'Heidelberg, la ville universitaire historique. Admirez la vue panoramique sur le château d'Heidelberg, promenez-vous le long de la rivière Neckar et explorez les rues pittoresques de la vieille ville.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <div class="shop-thumbnail">
                        <div class="shop-thumbnail-images">
                            <img class="shop-demo-main sal-animate" src="<?=URL_LINK?>public/assets/images/flags/flag-of-germany" data-sal-delay="200" data-sal="fade" data-sal-duration="800" alt="Shop Images">
                            <!--                            <img class="shop-demo-left sal-animate" src="assets/images/preview/shop-demo-left.webp" data-sal-delay="500" data-sal="slide-right" data-sal-duration="1000" alt="Shop Images">-->
                            <!--                            <img class="shop-demo-right sal-animate" src="assets/images/preview/shop-demo-right.webp" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000" alt="Shop Images">-->

                            <ul class="shape-group">
                                <li class="shape-1 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-25.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <span data-depth="-3" style="transform: translate3d(14.6px, -9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title section-left splash-title">
                        <h2 class="title sal-animate text-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Écosse</h2>
                        <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Chaque destination offre une expérience unique, alliant l'apprentissage de la langue anglaise à la découverte de l'histoire, de la culture et des paysages époustouflants de l'Écosse.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Édimbourg</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Profitez de la grandeur historique d'Édimbourg, la capitale de l'Écosse. Visitez le château d'Édimbourg, construit sur la pierre volcanique, explorez la vieille ville médiévale avec ses rues pavées et ses bâtiments historiques, et promenez-vous sur le Royal Mile avec ses boutiques et pubs traditionnels.
                            </p>
                        </div>
                    </div>
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Glasgow</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Plongez dans la vie culturelle et artistique dynamique de Glasgow, la plus grande ville d'Écosse. Explorez des galeries d'art renommées et des musées fascinants tels que la galerie d'art et musée Kelvingrove, et découvrez l'architecture éclectique de la ville, du victorien au moderne.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2">
                    <div class="shop-thumbnail">
                        <div class="shop-thumbnail-images">
                            <img class="shop-demo-main sal-animate" src="<?=URL_LINK?>public/assets/images/flags/Flag_map_of_Scotland.svg" data-sal-delay="200" data-sal="fade" data-sal-duration="800" alt="Shop Images">
                            <ul class="shape-group">
                                <li class="shape-1 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-31.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/dark-shape-20.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <span data-depth="-3" style="transform: translate3d(14.6px, -9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-10-em">
                <div class="col-12">
                    <div class="section-title section-left splash-title">
                        <h2 class="title sal-animate text-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Irlande</h2>
                        <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Chaque destination en Irlande offre une expérience unique, combinant l'apprentissage de la langue anglaise à la découverte de l'hospitalité irlandaise, des traditions séculaires et des paysages naturels remarquables.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-2">
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <span class="pre-title sal-animate" data-sal="slide-up" data-sal-duration="1000"></span>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Découvrez l'énergie de Dublin, la capitale de l'Irlande. Visitez des sites emblématiques tels que le Trinity College et son ancienne bibliothèque qui abrite le Livre de Kells, explorez le quartier animé de Temple Bar avec ses pubs traditionnels et sa scène musicale, et explorez l'histoire au château de Dublin.
                            </p>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Profitez de l'atmosphère chaleureuse de Galway, une ville côtière réputée pour sa scène artistique et musicale dynamique. Promenez-vous le long du quai, découvrez l'artisanat local au marché de Saint-Nicolas et profitez des magnifiques paysages de la région du Connemara.
                            </p>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Profitez de l'atmosphère conviviale de Cork, la deuxième plus grande ville d'Irlande. Visitez St. Cathédrale de Finbarr, promenez-vous dans le quartier commerçant animé de St. Patrick's Street et dégustez la cuisine locale dans les bars et restaurants de la ville.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <div class="shop-thumbnail">
                        <div class="shop-thumbnail-images">
                            <img class="shop-demo-main sal-animate" src="<?=URL_LINK?>public/assets/images/flags/flag-map-of-ireland.svg.png" data-sal-delay="200" data-sal="fade" data-sal-duration="800" alt="Shop Images">
                            <!--                            <img class="shop-demo-left sal-animate" src="assets/images/preview/shop-demo-left.webp" data-sal-delay="500" data-sal="slide-right" data-sal-duration="1000" alt="Shop Images">-->
                            <!--                            <img class="shop-demo-right sal-animate" src="assets/images/preview/shop-demo-right.webp" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000" alt="Shop Images">-->

                            <ul class="shape-group">
                                <li class="shape-1 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-25.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <span data-depth="-3" style="transform: translate3d(14.6px, -9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-10-em">
                <div class="col-12">
                    <div class="section-title section-left splash-title">
                        <h2 class="title sal-animate text-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Espagne</h2>
                        <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Chaque destination offre une expérience unique, alliant l'apprentissage de la langue espagnole à la découverte de la culture vibrante, de la cuisine savoureuse et des traditions passionnantes de l'Espagne.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Barcelona</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Plongez dans le charme culturel et artistique de Barcelone, la capitale de la Catalogne. Visitez la Sagrada Familia, le parc Güell et la Casa Batlló pour découvrir l'architecture unique d'Antoni Gaudi. Promenez-vous le long des Ramblas animées, explorez le quartier gothique et ses rues médiévales et profitez des plages ensoleillées de la Costa Brava.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2">
                    <div class="shop-thumbnail">
                        <div class="shop-thumbnail-images">
                            <img class="shop-demo-main sal-animate" src="<?=URL_LINK?>public/assets/images/flags/flag-map-of-spain.png" data-sal-delay="200" data-sal="fade" data-sal-duration="800" alt="Shop Images">
                            <ul class="shape-group">
                                <li class="shape-1 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-31.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/dark-shape-20.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <span data-depth="-3" style="transform: translate3d(14.6px, -9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-10-em">
                <div class="col-12">
                    <div class="section-title section-left splash-title">
                        <h2 class="title sal-animate text-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Turquie</h2>
                        <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Chaque destination offre une expérience unique, alliant l'apprentissage de la langue espagnole à la découverte de la culture vibrante, de la cuisine savoureuse et des traditions passionnantes de l'Espagne.
                        </p>
                    </div>
                </div>  
                <div class="col-lg-7 order-lg-2">
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="pre-title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">CHYPRE</h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Découvrez la magie de Chypre, une île méditerranéenne imprégnée des cultures grecque et turque. Explorez la ville historique de Nicosie, où l'Orient rencontre l'Occident, et admirez le magnifique mur de séparation. Visitez le site archéologique de Courlande et ses ruines antiques, plongez dans les eaux cristallines de la plage de Paphos, explorez des villages de montagne pittoresques et admirez de superbes vues panoramiques.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <div class="shop-thumbnail">
                        <div class="shop-thumbnail-images">
                            <img class="shop-demo-main sal-animate" src="<?=URL_LINK?>public/assets/images/flags/flag-map-of-turkey.png" data-sal-delay="200" data-sal="fade" data-sal-duration="800" alt="Shop Images">
                            <ul class="shape-group">
                                <li class="shape-1 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-31.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/dark-shape-20.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <span data-depth="-3" style="transform: translate3d(14.6px, -9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-10-em">
                <div class="col-12">
                    <div class="section-title section-left splash-title">
                        <h2 class="title sal-animate text-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Les États-Unis d'Amérique</h2>
                        <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                        Chaque destination aux États-Unis offre une expérience unique, combinant l'apprentissage de la langue anglaise à la découverte de l'histoire, de la culture, et des attractions emblématiques du pays.
                        </p>
                    </div>
                </div> 
                <div class="col-lg-7 order-lg-1">
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000"></h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Plongez dans l'énergie de New York, la ville qui ne dort jamais. Visitez des lieux emblématiques tels que Times Square, Central Park, la Statue de la Liberté et explorez des quartiers animés tels que Manhattan, Brooklyn et Harlem.
                            </p>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Profitez de l'atmosphère bohème et de l'innovation technologique de San Francisco. Explorez le Golden Gate Bridge, Alcatraz, Fisherman's Wharf et explorez la diversité culturelle de quartiers comme Chinatown et Castro.
                            </p>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Explorez Washington, la capitale politique et culturelle des États-Unis, visitez des sites emblématiques tels que le Capitole, la Maison-Blanche, le National Mall et explorez les célèbres musées Smithsonian.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2">
                    <div class="shop-thumbnail">
                        <div class="shop-thumbnail-images">
                            <img class="shop-demo-main sal-animate" src="<?=URL_LINK?>public/assets/images/flags/flag-map-of-usa.png" data-sal-delay="200" data-sal="fade" data-sal-duration="800" alt="Shop Images">
                            <ul class="shape-group">
                                <li class="shape-1 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-31.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/dark-shape-20.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <span data-depth="-3" style="transform: translate3d(14.6px, -9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-10-em">
                <div class="col-12">
                    <div class="section-title section-left splash-title">
                        <h2 class="title sal-animate text-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Malta</h2>
                        <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                            Chaque destination à Malte offre une expérience unique alliant apprentissage de l'anglais et découverte des richesses culturelles et naturelles de l'île.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-2">
                    <div class="shop-content">
                        <div class="section-title section-left splash-title">
                            <h2 class="title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000"></h2>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Explorez la magnifique capitale de Malte, La Valette, site classé au patrimoine mondial de l'UNESCO. Admirez l'impressionnante forteresse, visitez le majestueux Saint-Pierre. John et découvrez des trésors d'art au Musée Archéologique National.
                            </p>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Profitez des eaux cristallines de la Méditerranée tout en vous relaxant sur les plages de sable doré telles que Golden Bay, Mellieha Bay et Ramla Bay. Participez à des activités nautiques comme la plongée, la planche à voile ou une croisière sur l'île.
                            </p>
                            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate">
                                Découvrez la culture maltaise en visitant les temples mégalithiques de Tarxien et Ħaġar Qim, en explorant les marchés traditionnels et en dégustant une délicieuse cuisine méditerranéenne dans les restaurants locaux.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <div class="shop-thumbnail">
                        <div class="shop-thumbnail-images">
                            <img class="shop-demo-main sal-animate" src="<?=URL_LINK?>public/assets/images/flags/flag-map-of-malta.png" data-sal-delay="200" data-sal="fade" data-sal-duration="800" alt="Shop Images">
                            <ul class="shape-group">
                                <li class="shape-1 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-31.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/dark-shape-20.png" alt="shape" style="transform: translate3d(-18.1px, 11.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                    <span data-depth="-3" style="transform: translate3d(14.6px, -9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pv-inner-page-area bg-image">
    <div class="container">
        <div class="section-title section-center splash-title">
            <span class="number">385+</span>
            <h2 class="title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Follow Us</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
            <p data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" class="sal-animate"></p>
        </div>
    </div>
    <div class="pv-gallery-wrapper">
        <div class="background-marque margque-inner-page" style="background-position-x: -5790px; background-image: url('<?=URL_LINK?>public/assets/images/séjour/wide-séjour.png') !important; background-size: cover; filter: drop-shadow(0px 5px 15px rgba(100, 100, 111, 0.35));"></div>
    </div>
    <ul class="shape-group">
        <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="slide-right" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <img data-depth="1.2" src="<?=URL_LINK?>public/assets/images/counterup/shape-03.png" alt="shape" style="transform: translate3d(-39px, 16px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
        </li>
        <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="slide-right" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="shape" style="transform: translate3d(31.7px, -15.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
        </li>
        <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="slide-right" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <span data-depth="3" style="transform: translate3d(-29.9px, 13.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
        </li>
    </ul>
</div>

<?php require_once 'src/view/public/pages/inscription.php'; ?>
<?php require_once 'src/view/public/includes/footer.php'; ?>