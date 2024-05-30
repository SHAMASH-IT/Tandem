<?php
   
    $page_title = "Langues pour les entreprises | Tandem Training Center";
    $meta_facebook_image = URL_LINK . "public/assets/images/business-cover/1.jpg";
    $meta_facebook_title = "TANDEM Tunisie Langues pour entreprises et organisations";
    $meta_facebook_description = "Propulsez la réussite de votre équipe avec nos cours de langues adaptés aux entreprises.";
    $meta_facebook_width = "1600";
    $meta_facebook_height = "1200";

    require_once 'src/view/public/includes/header.php';
?>
    <style>
        .no-bp{
            padding-bottom:0;
        }
        #prog.active{
            display: flex;
            gap:8px;
        }
        @media(max-width:768px){
            #prog.active {
                flex-wrap: wrap;
                gap: 0;
            }
        }
        .about-style-3 .about-image-gallery .main-img-2.en{
            right: unset;
            left: 0;
        }
        .about-style-3 .about-content .tab-content .features-list li::before {
            color: #bcd74c;
        }

        .loader-parent{
            position: fixed;
            top: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, .5);
        }
        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid #FFF;
            border-bottom-color: #bcdc4c;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        .swiper {
            width: auto !important;
            height: auto !important;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1;
            display: block;
        }
    </style>

    <div class="hero-banner hero-style-3 bg-image">
        <div class="swiper university-activator">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img data-transform-origin='center center' data-src="<?=URL_LINK?>public/assets/images/business-cover/1.jpg" class="swiper-lazy" alt="Tandem Training Center">
                    <div class="thumbnail-bg-content">
                        <div class="container edublink-animated-shape">
                            <div class="row">
                                <div class="col-7">
                                    <div class="banner-content">
                                        <span class="subtitle" data-sal="slide-up" data-sal-duration="1000">Tandem Training Center presente:</span>
                                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Langues pour entreprises et organisations</h1>
                                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Propulsez la réussite de votre équipe avec nos cours de langues adaptés aux entreprises.</p>
                                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                            <a href="#inscription" class="edu-btn btn-secondary">Inscription <i class="icon-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-bg-controls">
                <div class="swiper-slide-controls slide-prev">
                    <i class="icon-west"></i>
                </div>
                <div class="swiper-slide-controls slide-next">
                    <i class="icon-east"></i>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/others/shape-10.png" alt="Shape">
            </li>
            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="-3" src="<?=URL_LINK?>public/assets/images/others/shape-11.png" alt="Shape">
            </li>
            <li class="shape-3">
                <img src="<?=URL_LINK?>public/assets/images/others/shape-25.png" alt="Shape">
            </li>
        </ul>
    </div>

    <div class="features-area-3">
        <div class="container">
            <div class="features-grid-wrap">
                <div class="features-box features-style-3 color-primary-style edublink-svg-animate">
                    <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="36" viewBox="0 0 44 40" fill="none">
                            <path d="M41.37 34.7695C41.27 36.5695 39.78 37.9995 37.95 37.9995H5.42C3.6 37.9995 2.1 36.5695 2 34.7695H41.37ZM41.57 32.7695H1.81C0.81 32.7695 0 33.5795 0 34.5795C0 37.5695 2.43 39.9995 5.42 39.9995H37.95C40.94 39.9995 43.37 37.5695 43.37 34.5795C43.38 33.5795 42.57 32.7695 41.57 32.7695Z" fill="#bcd74c" style="stroke-dasharray: 178, 180; stroke-dashoffset: 0;"></path>
                            <path d="M38.3501 15.5801V33.6801H4.12012V9.27012C4.12012 8.77012 4.52012 8.37012 5.02012 8.37012H28.0001" stroke="#bcd74c" stroke-width="2" stroke-miterlimit="10" style="stroke-dasharray: 102, 104; stroke-dashoffset: 0;"></path>
                            <path d="M41.3801 2V14.27H31.9901C31.3001 14.27 30.6301 14.52 30.1101 14.96L29.1101 15.64V2H41.3801ZM41.5701 0H28.9201C27.9201 0 27.1101 0.81 27.1101 1.81V17.89C27.1101 18.39 27.5201 18.72 27.9401 18.72C28.1401 18.72 28.3501 18.64 28.5201 18.48L31.3501 16.54C31.5201 16.37 31.7501 16.27 31.9901 16.27H41.5701C42.5701 16.27 43.3801 15.46 43.3801 14.46V1.81C43.3801 0.81 42.5701 0 41.5701 0Z" fill="#bcd74c" style="stroke-dasharray: 117, 119; stroke-dashoffset: 0;"></path>
                            <path d="M32.0801 6.12988H38.4101" stroke="#bcd74c" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" style="stroke-dasharray: 7, 9; stroke-dashoffset: 0;"></path>
                            <path d="M33.8899 10.1396H36.5899" stroke="#bcd74c" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" style="stroke-dasharray: 3, 5; stroke-dashoffset: 0;"></path>
                            <path d="M10.9399 33.6701V26.7001C10.9399 24.5601 12.9599 22.8301 15.4599 22.8301C17.9599 22.8301 19.9799 24.5601 19.9799 26.7001V33.6701" stroke="#bcd74c" stroke-width="2" stroke-miterlimit="10" style="stroke-dasharray: 28, 30; stroke-dashoffset: 0;"></path>
                            <path d="M15.46 22.8302C16.9567 22.8302 18.17 21.6168 18.17 20.1202C18.17 18.6235 16.9567 17.4102 15.46 17.4102C13.9633 17.4102 12.75 18.6235 12.75 20.1202C12.75 21.6168 13.9633 22.8302 15.46 22.8302Z" stroke="#bcd74c" stroke-width="2" stroke-miterlimit="10" style="stroke-dasharray: 18, 20; stroke-dashoffset: 0;"></path>
                        </svg>
                    </div>
                    <div class="content">
                        <h4 class="title">Apprentissage à distance</h4>
                        <p>Flexibilité totale grâce à des cours en ligne interactifs et adaptés aux horaires professionnels.</p>
                    </div>
                </div>
                <div class="features-box features-style-3 color-secondary-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="<?=URL_LINK?>public/assets/images/animated-svg-icons/skilled-lecturers.svg" alt="animated icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Tuteurs professionnels</h4>
                        <p>Encadrement personnalisé par des experts linguistiques, accélérant la progression individuelle.</p>
                    </div>
                </div>
                <div class="features-box features-style-3 color-extra02-style edublink-svg-animate">
                    <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="37" viewBox="0 0 48 40" fill="none">
                        <path d="M29.1048 32.5521H2.67293C1.72721 32.5521 0.964844 31.7998 0.964844 30.8664V2.63786C0.964844 1.70453 1.72721 0.952148 2.67293 0.952148H45.3267C46.2724 0.952148 47.0348 1.70453 47.0348 2.63786V30.8664C47.0348 31.7998 46.2724 32.5521 45.3267 32.5521H41.8044" fill="none" stroke="#bcd74c" stroke-width="2" stroke-miterlimit="10" style="stroke-dasharray: 140, 142; stroke-dashoffset: 0;"></path>
                        <path d="M8.31836 9.33301H40.6658" fill="none" stroke="#bcd74c" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" style="stroke-dasharray: 33, 35; stroke-dashoffset: 0;"></path>
                        <path d="M8.31836 16.752H22.369" fill="none" stroke="#bcd74c" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" style="stroke-dasharray: 15, 17; stroke-dashoffset: 0;"></path>
                        <path d="M35.4355 28.2858C39.001 28.2858 41.8914 25.4332 41.8914 21.9144C41.8914 18.3956 39.001 15.543 35.4355 15.543C31.8699 15.543 28.9795 18.3956 28.9795 21.9144C28.9795 25.4332 31.8699 28.2858 35.4355 28.2858Z" fill="none" stroke="#bcd74c" stroke-width="2" stroke-miterlimit="10" style="stroke-dasharray: 41, 43; stroke-dashoffset: 0;"></path>
                        <path d="M30.5523 26.0762L28.0626 38.6286C28.0047 38.9238 28.3231 39.1428 28.5837 39L34.5668 35.619C35.0975 35.3143 35.7538 35.3143 36.2942 35.619L42.2773 39C42.5378 39.1524 42.8563 38.9238 42.7984 38.6286L40.3086 26.0762" fill="none" stroke="#bcd74c" stroke-width="2" stroke-miterlimit="10" style="stroke-dasharray: 43, 45; stroke-dashoffset: 0;"></path>
                    </svg>
                    </div>
                    <div class="content">
                        <h4 class="title">Certificat de réussite</h4>
                        <p>Reconnaissance officielle des compétences acquises, renforçant la crédibilité professionnelle de vos collaborateurs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu-about-area about-style-3 no-bp">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title">Anglais pour les entreprises</span>
                            <h2 class="title">Améliorez vos compétences linguistiques en <span class="color-primary">anglais</span></h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#prog" type="button" role="tab" aria-selected="true">Programmes spécialises</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#anglais" type="button" role="tab" aria-selected="true">Formation en anglais</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="prog" role="tabpanel">
                                <ul class="features-list">
                                        <li><a href="<?=URL_LINK?>/cours/adultes/langues/anglais">English for Banking</a></li>
                                        <li><a href="<?=URL_LINK?>formation/english-for-journalists">English for Journalists</a></li>
                                        <li><a href="<?=URL_LINK?>formation/english-for-customer-care">English for Customer Care</a></li>
                                        <li><a href="<?=URL_LINK?>formation/english-for-negotiating">English for Negotiating</a></li>
                                        <li><a href="<?=URL_LINK?>formation/english-for-presentations">English for Presentations</a></li>
                                </ul>
                                <ul class="features-list">
                                        <li><a href="<?=URL_LINK?>formation/english-for-professors-amp-researchers">English for Professors and Researchers</a></li>
                                        <li><a href="<?=URL_LINK?>formation/english-for-telecoms">English for Telecoms</a></li>
                                        <li><a href="<?=URL_LINK?>formation/english-for-legal-professionals">English for Professionals</a></li>
                                        <li><a href="<?=URL_LINK?>formation/english-for--medical-profession">English for Medical Profession</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade show" id="anglais" role="tabpanel">
                                <p>Personnalisez votre formation selon les besoins spécifiques de votre entreprise et améliorez vos compétences linguistiques pour une communication professionnelle efficace.</p>
                                <ul class="features-list">
                                        <li><a href="<?=URL_LINK?>formation/english-general">Anglais général</a></li>
                                        <li><a href="#en">Anglais des affaires</a></li>
                                        <li><a href="<?=URL_LINK?>formation/club-de-conversation">English Conversation Club</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" src="<?=URL_LINK?>public/assets/images/entreprise/en/1.png" alt="About Image">
                        <img class="main-img-2 en" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800" src="<?=URL_LINK?>public/assets/images/entreprise/en/2.png" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-39.png" alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-07.png" alt="Shape">
                            </li>
                            <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-5">
                <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-07.png" alt="Shape">
            </li>
            <li class="shape-6">
                <span></span>
            </li>
        </ul>
    </div>

    <div class="edu-about-area about-style-3 no-bp">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" src="<?=URL_LINK?>public/assets/images/entreprise/fr/1.png" alt="About Image">
                        <img class="main-img-2 en" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800" src="<?=URL_LINK?>public/assets/images/entreprise/fr/2.png" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-39.png" alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-07.png" alt="Shape">
                            </li>
                            <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title">Langue Française en Milieu Professionnel</span>
                            <h2 class="title">Perfectionnez vos compétences linguistiques en <span class="color-primary">français</span></span></h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#french" type="button" role="tab" aria-selected="true">Formation en français</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="french" role="tabpanel">
                                <p>Adaptez votre formation aux besoins spécifiques de votre entreprise et perfectionnez vos compétences linguistiques pour une communication professionnelle plus efficace.</p>
                                <ul class="features-list">
                                        <li><a href="#">Français Général</a></li>
                                        <li><a href="<?=URL_LINK?>formation/franccedilais-des-affaires">Français des Affaires</a></li>
                                        <li><a href="#">Club de Conversation en Français</a></li>
                                        <li><a href="<?=URL_LINK?>formation/franccedilais-technique-de-communication">Français techniques de communication</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-5">
                <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape">
            </li>
            <li class="shape-6">
                <span></span>
            </li>
        </ul>
    </div>

    <div class="edu-about-area about-style-3 no-bp">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title">Formation en Allemand pour Entreprises</span>
                            <h2 class="title">Optimisez vos compétences linguistiques en <span class="color-primary">allemand</span></h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#german" type="button" role="tab" aria-selected="true">Formation en allemand</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="german" role="tabpanel">
                                <p>Adaptez votre programme de formation aux besoins spécifiques de votre entreprise et perfectionnez vos compétences linguistiques pour une communication professionnelle efficace.</p>
                                <ul class="features-list">
                                        <li><a href="<?=URL_LINK?>formation/allemand-professionnel">Allemand Général</a></li>
                                        <li><a href="<?=URL_LINK?>formation/allemand-professionnel">Langue des Affaires en Allemand</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" src="<?=URL_LINK?>public/assets/images/entreprise/de/1.png" alt="About Image" style="transform: rotateY(180deg);">
                        <img class="main-img-2 en" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800" src="<?=URL_LINK?>public/assets/images/entreprise/de/2.png" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-39.png" alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-07.png" alt="Shape">
                            </li>
                            <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-5">
                <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape">
            </li>
            <li class="shape-6">
                <span></span>
            </li>
        </ul>
    </div>
    
    <div class="edu-about-area about-style-3">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" src="<?=URL_LINK?>public/assets/images/entreprise/x/1.png" alt="About Image">
                        <!-- <img class="main-img-2" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800" src="<?=URL_LINK?>public/assets/images/entreprise/x/2.png" alt="About Image"> -->
                        <ul class="shape-group">
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-39.png" alt="Shape">
                            </li>
                            <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title">Formations en Langues Étrangères pour Entreprises</span>
                            <h2 class="title">Développez vos <span class="color-primary">compétences</span> linguistiques</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#languages" type="button" role="tab" aria-selected="true">Nos Formations</button>
                            </li>
                            <li class="nav-item" role="examens">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#exam-prep" type="button" role="tab" aria-selected="true">Préparation aux Examens</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="languages" role="tabpanel">
                                <p>Explorez nos formations linguistiques diversifiées, notamment :</p>
                                <ul class="features-list">
                                        <li><a href="<?=URL_LINK?>formation/espagnol-professionnel">Cours d'espagnol</a></li>
                                        <li><a href="<?=URL_LINK?>formation/italien-professionnel">Cours d'italien</a></li>
                                        <li><a href="#">Cours d'arabe</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade show" id="exam-prep" role="tabpanel">
                                <p>Découvrez nos cours de préparation aux examens, tels que :</p>
                                <ul class="features-list">
                                        <li><a href="<?=URL_LINK?>formation/ielts-geacuteneacuteral">IELTS</a></li>
                                        <li><a href="<?=URL_LINK?>formation/toeic-learning-amp-preparation-course">TOEIC</a></li>
                                        <li><a href="<?=URL_LINK?>formation/toefl-toeic">TOEFL</a></li>
                                        <li><a href="<?=URL_LINK?>formation/delf-dalf-">DELF/DALF</a></li>
                                        <li><a href="<?=URL_LINK?>formation/tcf">TCF</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-5">
                <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape">
            </li>
            <li class="shape-6">
                <span></span>
            </li>
        </ul>
    </div>

    <section class="edu-section-gap contact-form-area">
        <div class="loader-parent d-flex justify-content-center align-items-center d-none">
            <span class="loader"></span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="inscription" class="contact-form">
                        <div class="section-title section-center">
                            <h3 class="title">Demander une offre</h3>
                        </div>
                        <div class="row row--10">
                            <div class="form-group col-12">
                                <label style="display: none;" id="error-msg" class="list-group-item rounded-3 py-3 bg-danger text-white" for="listGroupCheckableRadios1">
                                    <h4 class="text-white" style="margin-top: 20px;">Vérifiez vos données !</h4>
                                </label>
                                <label style="display: none;" id="success-msg" class="list-group-item rounded-3 py-3 bg-success text-white" for="listGroupCheckableRadios1">
                                    <h4 class="text-white" style="margin-top: 20px;">Offre envoyé avec succès</h4>
                                </label>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="raison" id="raison" placeholder="Raison sociale">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="responsable" id="responsable" placeholder="Responsable">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="email" name="email" id="email" placeholder="Votre Email">
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" name="phone" id="phone" placeholder="Téléphone">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="address" id="address" placeholder="Addresse">
                            </div>
                            
                            <h4 class="title" style="font-size: 14px;">Langue</h4>
                            <div class="form-group col-12">
                                <select name="formation" id="language" class="control-form" style="background: white;">
                                    <option value="français">Français</option>
                                    <option value="anglais">Anglais</option>
                                    <option value="espagnol">Espagnol</option>
                                    <option value="arabe">Arabe</option>
                                    <option value="allemand">Allemand</option>
                                    <option value="italien">Italien</option>
                                </select>
                            </div>

                            <div class="form-group col-12 text-center">
                                <button class="rn-btn edu-btn submit-btn" name="submit" id="submit-company-offer">Demander</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="video-area-2 bg-image--14 bg-image">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="video-banner-content">
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=PICj5tr9hcc" class="video-play-btn video-popup-activation">
                                <i class="icon-18"></i>
                            </a>
                        </div>
                        <h2 class="title">Take a Video Tour to Learn Intro of Campus</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<?php require_once 'src/view/public/includes/footer.php'; ?>