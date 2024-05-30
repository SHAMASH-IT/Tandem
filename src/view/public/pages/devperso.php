<?php //
//require_once 'src/view/public/includes/header.php';
//
//include 'src/view/public/sections/breadcrumb/breadcrumb1.php';
//include 'src/view/public/sections/hero/hero2.php';
//include 'src/view/public/sections/about/about1.php';
//include 'src/view/public/sections/cta/cta1.php';
//include 'src/view/public/sections/about/about2.php';
//include 'src/view/public/sections/testimonial/testimonial4.php';
//include 'src/view/public/sections/brand/brand1.php';
//require_once 'src/view/public/includes/footer.php';
//?>

<?php
    require_once 'src/view/public/includes/header.php'; 
    $page_title = 'Séminaire & développement personnel | Tandem Training Center';
    ?>

<style>
    @import url('https://fonts.cdnfonts.com/css/raillinc');

    .raillinc {
        font-family: 'Raillinc', sans-serif !important;
        text-transform: uppercase !important;
        color: black !important;
    }
    .thumbnail {
        background-color: var(--color-white);
        border-radius: 10px;
        padding: 20px;
        height: fit-content !important;
    }
    p, li:not(.header-info li){
        text-align: justify !important;
        font-size: 2rem !important;
    }
    .header-top .header-info li a {
        font-size: 14px !important;
    }

    video {
        aspect-ratio: 16/9;
        width: 100%;
        height: 540px;
    }

    .video-shadow{
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,1) !important;
    }

    .team-details-thumb .thumbnail img {
        aspect-ratio: 1 !important;
    }

    .video-background {
        position: absolute;
        left: 0;
        width: 100%;
        filter: blur(10px);
        object-fit: cover;
        z-index: -1;
    }
    button.accordion-button span, h5.title a, h3.title span {
        font-size: 3.5rem !important;
        filter: drop-shadow(2px 4px 6px black);
        color: white !important;
    }

    h5.title, h3.title {
        background-color: var(--color-primary) !important;
        padding: 10px;
        border-radius: 5px;
    }
    .faq-accordion .accordion-item .accordion-button {
        box-shadow: 3px 3px 18px rgba(0,0,0,.5) !important
    }
    .faq-accordion .accordion-item .accordion-button.collapsed {
        background-color: var(--color-primary) !important;
    }
    .mySwiper2{
        height: 400px;
    }
    h1{
        padding-bottom: 35px;
    }
    .hero-banner {
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 50px;
    }
</style>

    <div class="hero-banner hero-style-4 hero-style-11 motivation-banner">
        <div class="col-12 edublink-animated">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content sal-animate pb-0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000">
                        <h1 class="title sal-animate raillinc mb-0" style="text-align: center; font-size: 4rem;" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">
                            Séminaire et développement personnel
                        </h1>
                        <!-- div class="row">
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
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 2.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 1.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 3.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 4.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 5.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 6.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 7.jpg" />
                                    </div><div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 8.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 9.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 10.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 11.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 12.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 13.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 14.jpg" />
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
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 2.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 1.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 3.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 4.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 5.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 6.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 7.jpg" />
                                    </div><div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 8.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 9.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 10.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 11.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 12.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 13.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=URL_LINK?>public/assets/images/séminaire/image 14.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 edu-order-md-2">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-content-center position-relative">
                            <div class="position-relative" data-sal-delay="150" data-sal="slide-left" data-sal-duration="1000">
                                <video height="640px" controls="" class="video-foreground">
                                    <source src="<?=URL_LINK?>public/assets/videos/séminaire-2.mp4" type="video/mp4">
                                </video>
                                <video height="640px" controls="" class="video-background shadow-lg" controls="false" muted>
                                    <source src="<?=URL_LINK?>public/assets/videos/séminaire-2.mp4" type="video/mp4">
                                </video>
                            </div>
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

    <div class="gap-bottom-equal edu-about-area about-style-1">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" src="<?=URL_LINK?>public/assets/images/about/about-32.webp" alt="About Image">
                        <div class="video-box sal-animate" data-sal-delay="150" data-sal="slide-down" data-sal-duration="800">
                            <div class="inner">
                                <div class="thumb">
                                    <img src="<?=URL_LINK?>public/assets/images/about/about-02.webp" alt="About Image">
                                    <a href="https://www.youtube.com/watch?v=PICj5tr9hcc" class="popup-icon video-popup-activation">
                                        <i class="icon-18"></i>
                                    </a>
                                </div>
                                <div class="loading-bar">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="award-status bounce-slide">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-21"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title">29+</h6>
                                    <span class="subtitle">Wonderful Awards</span>
                                </div>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="1" src="<?=URL_LINK?>public/assets/images/about/shape-36.png" alt="Shape" style="transform: translate3d(-70.8px, 12.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-1" src="<?=URL_LINK?>public/assets/images/about/shape-37.png" alt="Shape" style="transform: translate3d(48.2px, -38.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="1" src="<?=URL_LINK?>public/assets/images/about/shape-02.png" alt="Shape" style="transform: translate3d(-27.5px, 18.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title"></span>
                            <h2 class="title">Communication interpersonnelle</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>
                                La communication interpersonnelle est bien plus qu'un simple échange de mots ; c'est l'art de transmettre efficacement des idées, des émotions et des informations entre les individus.
                            </p>
                            <p>
                                Dans notre centre de langue, nous croyons fermement en l'importance de développer les compétences en communication interpersonnelle pour réussir dans la vie personnelle et professionnelle.
                            </p>
                            <p>
                                Nos cours de communication interpersonnelle offrent un environnement d'apprentissage interactif où les étudiants peuvent acquérir les compétences nécessaires pour établir des relations solides, gérer les conflits, écouter activement et exprimer leurs idées de manière claire et convaincante:
                            </p>
                        </div>
                        <ul class="features-list">
                            <li>Grâce à des exercices pratiques.</li>
                            <li>des jeux de rôle et des discussions en groupe.</li>
                            <li>
                                les étudiants apprennent à naviguer efficacement dans diverses situations sociales et professionnelles.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 circle scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <span data-depth="-2.3" style="transform: translate3d(22.9px, -15px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                </li>
            </ul>
        </div>
    </div>

    <div class="edu-faq-area faq-style-1 about-style-8">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-12">
                    <div class="edu-faq-gallery">
<!--                        <div class="row g-5">-->
<!--                            <div class="col-6 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">-->
<!--                                <div class="faq-thumbnail thumbnail-1">-->
<!--                                    <img src="--><?php //=URL_LINK?><!--public/assets/images/faq/faq-01.jpg" alt="Faq Images">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-6 sal-animate" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800">-->
<!--                                <div class="faq-thumbnail thumbnail-2">-->
<!--                                    <img src="--><?php //=URL_LINK?><!--public/assets/images/faq/faq-02.jpg" alt="Faq Images">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-6 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">-->
<!--                                <div class="faq-thumbnail thumbnail-3">-->
<!--                                    <img src="--><?php //=URL_LINK?><!--public/assets/images/faq/faq-03.jpg" alt="Faq Images">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-6 sal-animate" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800">-->
<!--                                <div class="faq-thumbnail thumbnail-4">-->
<!--                                    <img src="--><?php //=URL_LINK?><!--public/assets/images/faq/faq-04.webp" alt="Faq Images">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <ul class="shape-group">
                            <li class="shape-1 scene shape-light sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/faq/shape-02.png" alt="Shape Images" style="transform: translate3d(-33.5px, 11px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-1 scene shape-dark sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="1.5" src="<?=URL_LINK?>public/assets/images/faq/dark-shape-02.png" alt="Shape Images" style="transform: translate3d(-25.2px, 8.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/faq/shape-03.png" alt="Shape Images" style="transform: translate3d(24.6px, -18.9px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/faq/shape-04.png" alt="Shape Images" style="transform: translate3d(-31.5px, 17.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-4 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/faq/shape-05.png" alt="Shape Images" style="transform: translate3d(41.9px, -19.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="edu-faq-content">
                        <div class="section-title section-left sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">FAq’s</span>
                            <h2 class="title" style="text-transform: uppercase;">thèmes Des Séminaires</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="faq-accordion sal-animate" id="faq-accordion" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                            <span>Adapter sa communication dans ses relations professionnelles</span>
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Dans le monde professionnel, la capacité à adapter sa communication est essentielle pour établir des relations fructueuses et réussir dans sa carrière.
                                            </p>
                                            <br>
                                            <p>
                                                Dans notre centre de langue <span class="color-secondary">TANDEM</span>, nous reconnaissons l'importance de cette compétence et offrons des cours spécialisés pour aider les individus à perfectionner leurs compétences en communication professionnelle.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZero" aria-expanded="false">
                                            <span>Les 5 outils de développement personnel pour optimiser ses relations professionnelles</span>
                                        </button>
                                    </h5>
                                    <div id="collapseZero" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Dans un monde professionnel en constante évolution, la maîtrise des outils de développement personnel est devenue essentielle pour optimiser les relations professionnelles et réussir dans sa carrière.
                                            </p>
                                            <br>
                                            <p>
                                                Dans notre centre de langue, nous proposons un programme spécialisé axé sur les cinq outils clés du développement personnel pour aider nos étudiants à atteindre leurs objectifs professionnels:
                                            </p>
                                            <div class="about-content">
                                                <ul class="features-list">
                                                    <li>
                                                        <span class="color-secondary">Intelligence émotionnelle :</span> Apprenez à reconnaître et à gérer vos émotions ainsi que celles des autres pour favoriser des interactions positives et constructives.
                                                    </li>
                                                    <li>
                                                        <span class="color-secondary">Communication assertive :</span> Acquérez les compétences pour exprimer vos opinions, besoins et limites de manière claire, respectueuse et efficace, tout en écoutant activement les autres.
                                                    </li>
                                                    <li>
                                                        <span class="color-secondary">Gestion du temps :</span> Maîtrisez les techniques de planification et d'organisation pour optimiser votre productivité, gérer les priorités et respecter les échéances.
                                                    </li>
                                                    <li>
                                                        <span class="color-secondary">Établissement d'objectifs :</span> Apprenez à définir des objectifs clairs, mesurables, réalisables, pertinents et temporellement définis (SMART) pour orienter vos actions et maximiser vos performances.
                                                    </li>
                                                    <li>
                                                        <span class="color-secondary">Gestion du stress :</span> Développez des stratégies efficaces pour faire face au stress professionnel, maintenir un équilibre entre vie professionnelle et personnelle, et préserver votre bien-être physique et mental.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                            <span>S’affirmer et sortir des conflits au quotidien - Assertivité</span>
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Dans le tumulte quotidien du monde professionnel, savoir s'affirmer tout en évitant les conflits est une compétence cruciale.
                                            </p>
                                            <br>
                                            <p>
                                                Notre programme sur l'assertivité, proposé dans notre centre de langue, offre aux participants les outils nécessaires pour s'exprimer de manière assertive, résoudre les conflits et maintenir des relations professionnelles harmonieuses.
                                            </p>
                                            <br>
                                            <p>
                                                Au sein de ce programme, les étudiants apprendront les principes fondamentaux de l'assertivité, y compris comment :
                                            </p>
                                            <div class="about-content">
                                                <ul class="features-list">
                                                    <li><span class="color-secondary">S'exprimer avec clarté et confiance: </span>Acquérir les compétences pour exprimer ses opinions, ses besoins et ses limites de manière directe et respectueuse.</li>
                                                    <li><span class="color-secondary">Écouter activement: </span>Apprendre à écouter attentivement les autres, à comprendre leurs perspectives et à répondre de manière empathique.</li>
                                                    <li><span class="color-secondary">Gérer les conflits: </span>Développer des stratégies pour résoudre les conflits de manière constructive, en recherchant des solutions gagnant-gagnant et en préservant les relations professionnelles.</li>
                                                    <li><span class="color-secondary">Dire non de manière appropriée: </span>Savoir dire non de manière polie mais ferme, sans se sentir coupable ou offensant.</li>
                                                    <li><span class="color-secondary">Gérer les situations difficiles: </span>Acquérir des compétences pour faire face aux situations difficiles ou inconfortables avec calme et assurance.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="1.5" src="<?=URL_LINK?>public/assets/images/about/shape-02.png" alt="Shape Images" style="transform: translate3d(-41.9px, 20.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <span data-depth="-2.2" style="transform: translate3d(22.2px, -11px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu-blog-area blog-area-3 edu-section-gap">
        <div class="container">
            <div class="section-title section-center sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Latest Techniques</span>
                <h2 class="title">Managment avec TANDEM</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 mt-5">
                <div class="edu-course course-style-5 inline shadow-lg" data-tipped-options="inline: 'inline-tooltip-1'">
                    <div class="inner d-flex p-4">
                        <div>
                            <div class="thumbnail shadow">
                                <a href="#">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-20.jpg" alt="Blog Images">
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            
                            <h5 class="title">
                                <a href="#">Gestion du temps et des priorités</a>
                            </h5>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(5)</span>
                            </div>
                            <p>
                                Dans un monde où le temps est une ressource précieuse, notre programme de gestion du temps et des priorités offre aux participants les outils nécessaires pour optimiser leur efficacité et leur productivité.
                            </p>
                            <br>
                            <p>
                                Les étudiants apprendront à identifier leurs priorités, à planifier efficacement leur emploi du temps, à éliminer les distractions et à gérer les interruptions de manière stratégique.
                            </p>
                            <br>
                            <p>
                                Grâce à ce programme, ils seront en mesure de mieux organiser leur travail, de respecter les échéances et de trouver un équilibre entre vie professionnelle et vie personnelle.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt-5">
                <div class="edu-course course-style-5 inline shadow-lg" data-tipped-options="inline: 'inline-tooltip-1'">
                    <div class="inner d-flex p-4">
                        <div class="thumbnail shadow">
                            <a href="#">
                                <img src="<?=URL_LINK?>public/assets/images/blog/blog-05.jpg" alt="Blog Images">
                            </a>
                        </div>
                        <div class="content">
                            
                            
                            <h5 class="title">
                                <a href="#">Gestion de stress</a>
                            </h5>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(5)</span>
                            </div>
                            <p>
                                Le stress est une réalité inévitable dans le monde professionnel, mais il est essentiel de savoir le gérer efficacement pour maintenir sa santé mentale et physique.
                            </p>
                            <br>
                            <p>
                                Notre programme de gestion du stress offre aux participants des stratégies pratiques pour identifier, prévenir et gérer le stress au travail. Les étudiants apprendront des techniques de relaxation, de respiration et de gestion des émotions pour faire face aux situations stressantes de manière calme et concentrée.
                            </p>
                            <br>
                            <p>
                                Grâce à ce programme, ils seront mieux équipés pour maintenir leur bien-être et leur performance au travail.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt-5">
                <div class="edu-course course-style-5 inline shadow-lg" data-tipped-options="inline: 'inline-tooltip-1'">
                    <div class="inner d-flex p-4">
                        <div class="thumbnail shadow">
                            <a href="#">
                                <img src="<?=URL_LINK?>public/assets/images/blog/blog-10.jpg" alt="Blog Images">
                            </a>
                        </div>
                        <div class="content">
                            
                            
                            <h5 class="title">
                                <a href="#">Mangement des équipes</a>
                            </h5>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(5)</span>
                            </div>
                            <p>
                                La capacité à gérer efficacement une équipe est essentielle pour tout responsable ou chef d'entreprise.
                            </p>
                            <br>
                            <p>
                                Notre programme de management des équipes offre aux participants les compétences nécessaires pour former, motiver et diriger une équipe performante.
                            </p>
                            <br>
                            <p>
                                Les étudiants apprendront à déléguer efficacement les tâches, à fournir un feedback constructif, à résoudre les problèmes d'équipe et à encourager la collaboration.
                            </p>
                            <p>
                                Grâce à ce programme, ils seront mieux équipés pour maximiser la productivité de leur équipe et atteindre les objectifs organisationnels.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt-5">
                <div class="edu-course course-style-5 inline shadow-lg" data-tipped-options="inline: 'inline-tooltip-1'">
                    <div class="inner d-flex p-4">
                        <div class="thumbnail shadow">
                            <a href="#">
                                <img src="<?=URL_LINK?>public/assets/images/blog/blog-06.jpg" alt="Blog Images">
                            </a>
                        </div>
                        <div class="content">
                            
                            
                            <h5 class="title">
                                <a href="#">Leadership</a>
                            </h5>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(5)</span>
                            </div>
                            <p>
                                Le stress est une réalité inévitable dans le monde professionnel, mais il est essentiel de savoir le gérer efficacement pour maintenir sa santé mentale et physique.
                            </p>
                            <br>
                            <p>
                                Notre programme de gestion du stress offre aux participants des stratégies pratiques pour identifier, prévenir et gérer le stress au travail.
                            </p>
                            <br>
                            <p>
                                Les étudiants apprendront des techniques de relaxation, de respiration et de gestion des émotions pour faire face aux situations stressantes de manière calme et concentrée.
                            </p>
                            <p>
                                Grâce à ce programme, ils seront mieux équipés pour maintenir leur bien-être et leur performance au travail.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu-course-area course-area-5 about-style-5 hero-style-5 hero-banner gap-tb-text d-block">
        <div class="container">
            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Popular Concepts</span>
                <h2 class="title">TANDEM concepts Interconnectés</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
        </div>
        <div class="container">
            <div class="row row--40">
                <div class="col-lg-4">
                    <div class="team-details-thumb shadow">
                        <div class="thumbnail">
                            <img class="shadow-lg" src="<?=URL_LINK?>public/assets/images/course/course-19.jpg" alt="team">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-details-content">
                        <div class="main-info">
                            <h3 class="title shadow-lg"><span>Estime de Soi</span></h3>
                        </div>
                        <div class="bio-describe">
                            <p>
                                Cette thématique se concentre sur l'importance de la confiance en soi, de la valorisation personnelle et de la reconnaissance de ses propres compétences linguistiques et communicatives.
                            </p>
                            <p>
                                Les activités et les programmes liés à ce thème visent à renforcer la confiance des apprenants en leur capacité à apprendre une langue étrangère et à interagir avec les autres de manière positive et efficace.
                            </p>
                            <p>
                                Les objectifs spécifiques incluent :
                            </p>
                            <div class="about-content">
                                <ul class="features-list">
                                    <li>Encourager une attitude positive envers l'apprentissage.</li>
                                    <li>Développer la capacité à s'exprimer</li>
                                    <li>Renforcer la résilience</li>
                                    <li>Favoriser la collaboration et l'échange</li>
                                    <li>Mettre en valeur les réussites individuelles</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row--40">
                <div class="col-lg-8">
                    <div class="team-details-content">
                        <div class="main-info">
                            <h3 class="title shadow-lg"><span>Intelligence émotionnelle</sapn></h3>
                        </div>
                        <div class="bio-describe">
                            <p>est une approche pédagogique axée sur le développement des compétences émotionnelles et sociales des apprenants.</p>
                            <p>Cette thématique reconnaît l'importance des émotions dans le processus d'apprentissage et vise à renforcer la compréhension, la gestion et l'expression émotionnelle des apprenants.</p>
                            <p>Voici un aperçu de ce que cela implique :</p>
                            <div class="about-content">
                                <ul class="features-list">
                                    <li>Comprendre ses propres émotions</li>
                                    <li>Développer l'empathie</li>
                                    <li>Gérer le stress et l'anxiété</li>
                                    <li>Renforcer les compétences sociales</li>
                                    <li>Favoriser le bien-être émotionnel</li>
                                </ul>
                            </div>
                            <p>
                                En intégrant le thème de l'intelligence émotionnelle dans les programmes d'apprentissage des langues, le centre TANDEM créent un environnement éducatif plus holistique et équilibré, qui prend en compte le bien-être émotionnel des apprenants et les prépare à une communication efficace et enrichissante dans divers contextes linguistiques et culturels.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="team-details-thumb shadow">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/course/course-48.jpg" alt="Course Meta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu-instagram-area instagram-area-1">
        <div class="container-fluid">
            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Follow Us On Instagram</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-3">
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="instagram-grid">
                        <a href="https://www.instagram.com/tandem_training_center/" target="_blank">
                            <div style="background: url('<?=URL_LINK?>public/assets/images/tandem/photo (<?=(rand(1,20));?>).jpeg'); background-size: cover;
                                    background-repeat: no-repeat;
                                    height: 196px; background-position: center" alt="instagram"></div>
                            <span class="user-info">
                                <span class="icon">
                                    <i class="icon-instagram"></i>
                                </span>
                                <span class="user-name">@tandem_training_center</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="instagram-grid">
                        <a href="https://www.instagram.com/tandem_training_center/" target="_blank">
                            <div style="background: url('<?=URL_LINK?>public/assets/images/tandem/photo (<?=(rand(1,20));?>).jpeg'); background-size: cover;
                                    background-repeat: no-repeat;
                                    height: 196px; background-position: center"" alt="instagram"></div>
                            <span class="user-info">
                                <span class="icon"><i class="icon-instagram"></i>
                                </span>
                                <span class="user-name">@tandem_training_center</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="instagram-grid">
                        <a href="https://www.instagram.com/tandem_training_center/" target="_blank">
                            <div style="background: url('<?=URL_LINK?>public/assets/images/tandem/photo (<?=(rand(1,20));?>).jpeg'); background-size: cover;
                                    background-repeat: no-repeat;
                                    height: 196px; background-position: center"" alt="instagram"></div>
                            <span class="user-info">
                                <span class="icon"><i class="icon-instagram"></i>
                                </span>
                                <span class="user-name">@tandem_training_center</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="instagram-grid">
                        <a href="https://www.instagram.com/tandem_training_center/" target="_blank">
                            <div style="background: url('<?=URL_LINK?>public/assets/images/tandem/photo (<?=(rand(1,20));?>).jpeg'); background-size: cover;
                                    background-repeat: no-repeat;
                                    height: 196px; background-position: center"" alt="instagram"></div>
                            <span class="user-info">
                                <span class="icon"><i class="icon-instagram"></i>
                                </span>
                                <span class="user-name">@tandem_training_center</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="instagram-grid">
                        <a href="https://www.instagram.com/tandem_training_center/" target="_blank">
                            <div style="background: url('<?=URL_LINK?>public/assets/images/tandem/photo (<?=(rand(1,20));?>).jpeg'); background-size: cover;
                                    background-repeat: no-repeat;
                                    height: 196px; background-position: center"" alt="instagram"></div>
                            <span class="user-info">
                                <span class="icon"><i class="icon-instagram"></i>
                                </span>
                                <span class="user-name">@tandem_training_center</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="instagram-grid">
                        <a href="https://www.instagram.com/tandem_training_center/" target="_blank">
                            <div style="background: url('<?=URL_LINK?>public/assets/images/tandem/photo (<?=(rand(1,20));?>).jpeg'); background-size: cover;
                                    background-repeat: no-repeat;
                                    height: 196px; background-position: center"" alt="instagram"></div>
                            <span class="user-info">
                                <span class="icon"><i class="icon-instagram"></i>
                                </span>
                                <span class="user-name">@tandem_training_center</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'src/view/public/pages/inscription.php'; ?>

    <?php require_once 'src/view/public/includes/footer.php'; ?>
    <script>
        $(document).ready(function () {
            // function playFile() {
            //     $("video").not(this).each(function () {
            //         $(this).get(0).pause();
            //     });
            //     this[this.get(0).paused ? "play" : "pause"]();
            // }
            //
            // $('video').on("click play", function () {
            //     playFile.call(this);
            // });

            document.addEventListener('scroll', function(e){
                console.log(window.scrollY);

                if (window.scrollY > 800)
                {
                    $('video').trigger('pause');
                }

            });

            let vid = $('.video-foreground');

            vid.on("click play", function () {
                $('.video-background').trigger('play');
            });

            vid.on("click pause", function () {
                $('.video-background').trigger('pause');
            });
        });
    </script>