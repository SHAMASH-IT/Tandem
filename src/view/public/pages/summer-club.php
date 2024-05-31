<?php
   // $page_title = "Club d'été";

    $page_title = "Club d'été | Tandem Training Center";
    
    $meta_facebook_image = URL_LINK . "public/assets/images/kids/club-summer-2/brochure-club-d'été4-2-1.png";
    $meta_facebook_title = "TANDEM est un avenir meilleur pour les enfants";
    $meta_facebook_description = "Plongez dans une expérience estivale inoubliable qui combine l'apprentissage des langues avec une variété d'activités passionnantes.";
    $meta_facebook_width = "1200";
    $meta_facebook_height = "1600";

    require_once 'src/view/public/includes/header.php';
?>

    <style>
        @import url('https://fonts.cdnfonts.com/css/blugie');
        @import url('https://fonts.cdnfonts.com/css/ubuntu-title');

        @keyframes blur {
            0% { -webkit-filter: blur(0px);}
            50% { -webkit-filter: blur(5px);}
            100% { -webkit-filter: blur(0px);}
        }
        .responsive-text {
            font-size: 2.5rem; /* Default font size for desktop */
        }

        .swiper-slide-2 {
            
            height: 700px;
            
        }

        .thumbnail-2{

        }

        .shape-5, .shape-3, .thumbnail-2 {
            width: 350px;
        }

        .shape-7 {
            width: 200px;
            right: 15% !important;
        }

        #section-2 {
            top: -100px;
        }

        #section-1 .cloud {
            content: '';
            position: absolute;
            height: 164px;
            width: 430px;
            opacity: .3;
            left: 0;
            top: 0;
            background-image: url('<?=URL_LINK?>public/assets/images/one-cloud.png');
            animation: MoveLR 15s infinite linear;
        }

        #section-1 .cloud:nth-child(2){
            left: 350px;
            top: 200px;
            animation: MoveLR-1 13.5s infinite linear;
        }

        #section-1 .cloud:nth-child(3){
            left: 450px;
            top: 100px;
            animation: MoveLR-2 6.75s infinite ease-in-out;
        }

        #section-1 .cloud:nth-child(4){
            left: 65%;
            top: 22px;
            animation: MoveLR-3 7.5s infinite ease-in-out;
        }

        li.shape-1 {
            width: 300px;
            height: 500px;
            animation: MoveLR-4 6.75s infinite ease-in-out;
        }

        .up-down {
            animation: MoveUpDown 10s infinite ease-in-out;
            position: absolute;
        }

        @keyframes MoveUpDown {
            0%, 100% {
                bottom: 0;
            }
            50% {
                bottom: 100px;
            }
        }

        @keyframes MoveLR {
            0% {
                transform: translateX(-430px);
            }
            100% {
                transform: translateX(100vw);
            }
        }

        @keyframes MoveLR-1 {
            0%, 100% {
                transform: translateX(-730px);
            }
            100% {
                transform: translateX(100vw);
            }
        }

        @keyframes MoveLR-2 {
            0%, 100% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(145px);
            }
        }

        @keyframes MoveLR-3 {
            0%, 100% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(125px);
            }
        }

        .hero-banner.hero-style-7 .shape-group li.shape-1 {
            left: calc(50% - 150px) !important;
        }

        .hero-banner.hero-style-7 .shape-group li.shape-5 {
            top: -109px !important;
            right: -136px !important;
        }

        .fixed-sun {
            position: absolute;
            z-index: 11111;
            opacity: 1 !important;
        }

        .hero-banner.hero-style-4 .shape-group li.shape-2 img {
            width: 350px !important;
        }

        .txt-club {
            font-family: 'Ubuntu-Title-fr', sans-serif;
            font-size: 15rem;
            text-wrap: nowrap;
            font-weight: 400 !important;
            color: white;
            -webkit-text-stroke: 5px rgba(64,192,247,1);
            text-shadow: 5px 4px 4px black;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 20px #2d9da9;
            }
            to {
                text-shadow: 0 0 50px #34b3c1, 0 0 10px #4dbbc7;
            }
        }

        .date-club {
            font-size: 5rem !important;
            font-family: 'Ubuntu-Title-fr', sans-serif;
            font-weight: 400 !important;
            text-wrap: nowrap;
            font-weight: bolder;
            color: white !important;
            width: 100% !important;

            font-family: 'Teko', sans-serif;
            font-size: 10rem;
            text-transform: uppercase;
            animation: glow 2s ease-in-out infinite alternate;
            text-align: center;
        }

        .club-date {
            background: url('<?=URL_LINK?>public/assets/images/kids/club-summer/club-date.png');
        }

        .hero-banner.hero-style-4::before{
            /*background: linear-gradient(180deg, rgba(64,192,247,1) 0%, rgba(198,159,104,1) 53%, rgba(255,142,1,1) 100%);*/
            background-image: url("<?=URL_LINK?>public/assets/images/kids/club-summer-2/background.jpg");
            background-size: cover;
            background-position: center;
        }
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
            .responsive-text {
                font-size: 1.2rem; /* Adjust the font size for mobile devices */
            }
            .swiper-slide-2 {
            
            height: 400px;
            
        }
        }
        .about-style-3 .about-image-gallery .main-img-2.en{
            right: unset;
            left: 0;
        }
        .about-style-3 .about-content .tab-content .features-list li::before {
            color: #bcd74c;
        }
        .mainmenu-nav .mainmenu li.has-droupdown .submenu li a::after {
            content: unset !important;
            position: unset !important;
            top: unset !important;
            right: unset !important;
            background-color: unset !important;
            height: unset !important;
            width: unset !important;
            transform: unset !important;
            z-index: unset !important;
        }
        .mainmenu-nav .mainmenu li.has-droupdown .submenu li a.parent {
            width: max-content !important;
        }
        .accordion-body p{
            text-align: justify;
        }
        .style-blue {
            background-color: #3498db !important;
        }
        .price-round {
            color:  var(--color-primary) !important;
        }

        .stage {
            height: 170px;
            width: 500px;
            margin: auto;
            perspective: 9999px;
            transform-style: preserve-3d;
            left: -100px;
            position: relative;
        }

        .layer {
            height: 100%;
            position: absolute;
            transform-style: preserve-3d;
            animation: ಠ_ಠ 5s infinite alternate ease-in-out -7.5s;
            animation-fill-mode: forwards;
            transform: rotateY(40deg) rotateX(33deg) translateZ(0);
        }

        .layer:after {
            font: 150px/0.65 "Pacifico", "Kaushan Script", Futura, "Roboto", "Trebuchet MS", Helvetica, sans-serif;
            content: "CLUB d'été";
            white-space: pre;
            text-align: center;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 50px;
            color: whitesmoke;
            letter-spacing: -2px;
            text-shadow: 4px 0 10px rgba(0, 0, 0, 0.13);
        }

        .layer:nth-child(1):after {
            transform: translateZ(0px);
        }

        .layer:nth-child(2):after {
            transform: translateZ(-1.5px);
        }

        .layer:nth-child(3):after {
            transform: translateZ(-3px);
        }

        .layer:nth-child(4):after {
            transform: translateZ(-4.5px);
        }

        .layer:nth-child(5):after {
            transform: translateZ(-6px);
        }

        .layer:nth-child(6):after {
            transform: translateZ(-7.5px);
        }

        .layer:nth-child(7):after {
            transform: translateZ(-9px);
        }

        .layer:nth-child(8):after {
            transform: translateZ(-10.5px);
        }

        .layer:nth-child(9):after {
            transform: translateZ(-12px);
        }

        .layer:nth-child(10):after {
            transform: translateZ(-13.5px);
        }

        .layer:nth-child(11):after {
            transform: translateZ(-15px);
        }

        .layer:nth-child(12):after {
            transform: translateZ(-16.5px);
        }

        .layer:nth-child(13):after {
            transform: translateZ(-18px);
        }

        .layer:nth-child(14):after {
            transform: translateZ(-19.5px);
        }

        .layer:nth-child(15):after {
            transform: translateZ(-21px);
        }

        .layer:nth-child(16):after {
            transform: translateZ(-22.5px);
        }

        .layer:nth-child(17):after {
            transform: translateZ(-24px);
        }

        .layer:nth-child(18):after {
            transform: translateZ(-25.5px);
        }

        .layer:nth-child(19):after {
            transform: translateZ(-27px);
        }

        .layer:nth-child(20):after {
            transform: translateZ(-28.5px);
        }

        .layer:nth-child(n+10):after {
            -webkit-text-stroke: 3px rgba(0, 0, 0, 0.25);
        }

        .layer:nth-child(n+11):after {
            -webkit-text-stroke: 15px dodgerblue;
            text-shadow: 6px 0 6px #00366b, 5px 5px 5px #002951, 0 6px 6px #00366b;
        }

        .layer:nth-child(n+12):after {
            -webkit-text-stroke: 15px #0077ea;
        }

        .layer:last-child:after {
            -webkit-text-stroke: 17px rgba(0, 0, 0, 0.1);
        }

        .layer:first-child:after {
            color: #fff;
            text-shadow: none;
        }

        @keyframes ಠ_ಠ {
            100% {
                transform: rotateY(-40deg) rotateX(-43deg);
            }
        }

        .features-list .title, .banner-content h1, #container {
            font-family: "Ubuntu Mono";
        }

        #container {
            color: white;
            text-transform: uppercase;
            font-size: 48px;
            font-weight:bold;
            width:100%;
            bottom:45%;
            display:flex;
            padding-bottom: 5rem;
            display: flex;
            place-content: center;
        }

        #flip {
            height: 70px;
            overflow:hidden;
        }

        #flip > div > div {
            color:#000;
            padding: 0px 12px;
            height:45px;
            margin-bottom:45px;
            display:inline-block;
            text-shadow: none;
            font-weight: bolder;
        }

        #flip div:first-child {
            animation: show 5s linear infinite;
            animation-direction: reverse;
        }

        @keyframes show {
            0% {margin-top:-270px;}
            5% {margin-top:-180px;}
            33% {margin-top:-180px;}
            38% {margin-top:-90px;}
            66% {margin-top:-90px;}
            71% {margin-top:0px;}
            99.99% {margin-top:0px;}
            100% {margin-top:-270px;}
        }
        .logo-2024 {
            height: 80px;
        }
        #flip .first > div > img {
            height: 85px !important;
        }
        
        @keyframes sunrise {
            from {
                transform: rotate(-45deg);
            }

            to {
                transform: rotate(315deg);
            }
        }

        .swiper {
            height: 700px;
            width: unset;
            border-radius: .7rem !important;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            width: unset;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 !important;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 700px;
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
        .course-area-12 .business-course-activation {
            margin: 0 -33% 0 0;
        }
        .swiper-brochure-summer-club .swiper-wrapper .swiper-slide{
            padding: 0 15px !important;
            width: 600px !important;
            transition: all ease-in-out 500ms;
        }
        .swiper-brochure-summer-club .swiper-wrapper .swiper-slide-active{
            width: 900px !important;
        }

        .swiperBrochureSummerClub{
            height: 700px !important;
            width: auto !important;
        }

        .swiperBrochureSummerClub .swiper-slide{
            height: 700px !important;
            width: auto !important;
        }

        .swiperBrochureSummerClub .swiper-slide {
            
        }

        .swiperBrochureSummerClub .swiper-slide:nth-child(2n) {
            width: 80% !important;
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

        .mySwiperSumerClub2 {
            width: 993px !important;
            height: min-content !important;
            background: #000;
        }

        .mySwiperSumerClub2 .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #000;
        }

        .mySwiperSumerClub2 .swiper-slide img {
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
    </style>

    <div class="hero-banner hero-style-7 hero-style-4" id="section-1">
        <div class="cloud"></div>
        <div class="cloud"></div>
        <div class="cloud"></div>
        <div class="cloud"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="banner-content">
                        <h1 class="title keyboard-writer text-white" data-sal-delay="100" data-sal="slide-up" data-sal-duration="500" style="filter: drop-shadow(2px 4px 6px black);"></h1>

                        <div class="thumbnail thumbnail-1" data-sal-delay="500" data-sal="slide-up" data-sal-duration="1000">
                            <img src="<?=URL_LINK?>public/assets/images/kids/club-summer-2/logo-club-d'été.png" width="800"/>
                        </div>
                        <div class="features-list pt-0" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <div class="thumbnail thumbnail-1" data-sal-delay="500" data-sal="slide-up" data-sal-duration="1000">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/kids/club-summer-2/activities.png" alt="Shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-gallery">
            <div class="thumbnail thumbnail-1" data-sal-delay="500" data-sal="slide-up" data-sal-duration="1000">
                <img src="<?=URL_LINK?>public/assets/images/banner/kid-3.webp" alt="Girl Image">
            </div>
            <div class="thumbnail thumbnail-2" data-sal-delay="500" data-sal="slide-down" data-sal-duration="1000">
                <img src="<?=URL_LINK?>public/assets/images/banner/kid-4.webp" alt="Girl Image">
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="up-down" data-depth="2" src="<?=URL_LINK?>public/assets/images/kids/club-summer-2/parachute.png" alt="Shape">
            </li>
            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/kids/club-summer-2/cube alphabet.png" alt="Shape">
            </li>
            <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" data-depth="2" src="<?=URL_LINK?>public/assets/images/kids/club-summer-2/parasol.png" alt="Shape">
            </li>
            <li class="shape-4 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/banner/icon-2.png" alt="Shape">
            </li>
            <li class="shape-5  sal-animate"" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="fixed-sun" data-depth="2" src="<?=URL_LINK?>public/assets/images/kids/club-summer-2/soleil-inner.png" alt="Shape">
                <img class="rotateit" data-depth="2" src="<?=URL_LINK?>public/assets/images/kids/club-summer-2/soleil.png" alt="Shape">
            </li>
            <li class="shape-6" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-25.png" alt="Shape">
            </li>
            <li class="shape-7" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" data-depth="2" src="<?=URL_LINK?>public/assets/images/kids/club-summer-2/ballon.png" alt="Shape">
            </li>
        </ul>
    </div>

    <!-- Start Course Area  -->
    <div class="business-course edu-course-area course-area-12 gap-tb-text bg-image">
        <div class="row">
                    <div class="color-primary" style="padding: 50px 30px;">
                        <div class="content text-center">
                            <h2 class="title" style="text-transform: uppercase;">A propos</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            <p  style="text-align: center !important;" class="responsive-text shadow p-5 m-5">
                            Club d'été Tandem est un club d'été dynamique et amusant qui propose une large gamme d'activités éducatives et divertissantes pour les enfants de 5 à 12 ans. Situé à Tunis, notre club offre un environnement sûr et stimulant où les enfants peuvent s'épanouir, apprendre et se faire de nouveaux amis.. Ces langues seront intégrées dans les activités pour une immersion linguistique enrichissante, permettant aux enfants de pratiquer et d'améliorer leurs compétences linguistiques tout en s'amusant.
                            
                            </p>
                            <br>
                            
                        </div>
                    </div>
                </div><div class="row edublink-animated-shape" style="margin-right: 0;">
            <div class="row">
                    <ul>
                        <li>
                            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <h2 class="title" style="text-transform: uppercase;">Pick A TANDEM Summer Club Pack 2024</h2>
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
                            </div>:
                        </li> -->
                    </ul>
                    <div #swiperref="" class="swiper mySwiperSumerClub2 swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-8d810411b723d373b" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-2979px, 0px, 0px);">
                            <div class="swiper-slide swipper-slide-2" style="width: 993px;" role="group" aria-label="1 / 11">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/1 - club d'été cover.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide swipper-slide-2" style="width: 993px;" role="group" aria-label="2 / 11">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/2 - club dété DATES DES SESSIONS.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide swipper-slide-2 swiper-slide-prev" style="width: 993px;" role="group" aria-label="3 / 11">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/3 - club d'été MATIÈRES.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide swipper-slide-2 swiper-slide-active" style="width: 993px;" role="group" aria-label="4 / 11">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/4 - club dété tarifs.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide swipper-slide-2 swiper-slide-next" style="width: 993px;" role="group" aria-label="5 / 11">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/5 - club d'été PLANNING A TITRE INDICATIF.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide swipper-slide-2" style="width: 993px;" role="group" aria-label="6 / 11">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/6 - club dété PLANNING p-1.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide swipper-slide-2" style="width: 993px;" role="group" aria-label="7 / 11">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/7 - club dété PLANNING p-2.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide swipper-slide-2" style="width: 993px;" role="group" aria-label="8 / 11">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/8 - club dété PLANNING p-3.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide swipper-slide-2" style="width: 993px;" role="group" aria-label="9 / 11">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/9 - club dété PLANNING p-4.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide swipper-slide-2" style="width: 993px;" role="group" aria-label="10 / 11">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/10 - club dété PLANNING p-5.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide swipper-slide-2" role="group" aria-label="11 / 11" style="width: 993px;">
                                <img loading="lazy" src="https://www.tandem-tunisie.com/public/assets/images/brochures/summer-club-2/11 - club dété MENU TANDEM.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                        </div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-8d810411b723d373b" aria-disabled="false"></div>
                        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-8d810411b723d373b" aria-disabled="false"></div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 9"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 10"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 11"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            <ul class="shape-group">
                <li class="shape-2 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <img data-depth="-1.5" src="https://www.tandem-tunisie.com/public/assets/images/others/shape-34.png" alt="Shape" style="transform: translate3d(2.9px, -10.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                </li>
                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <img data-depth="1.5" src="https://www.tandem-tunisie.com/public/assets/images/counterup/shape-02.png" alt="Shape" style="transform: translate3d(-5.8px, 10.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-1 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img src="https://www.tandem-tunisie.com/public/assets/images/others/shape-18.png" alt="Shape">
            </li>
        </ul>
    </div>
    <!-- End Course Area -->

    <div class="edu-course-area course-area-7" id="section-2">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title pre-textsecondary"></span>
                <h2 class="title text-uppercase">Activités et Club d'été</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="row g-5">
                                <div class="col-12 col-lg-6 col-md-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="edu-course course-style-7 bg-color-extra02">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="<?=URL_LINK?>formation/enfant-atelier-peinture">
                                                    <img src="<?=URL_LINK?>public/assets/images/kids/artificial intelligence tandem.jpeg" alt="Course Meta">
                                                </a>
                                                <div class="course-price price-round">new</div>
                                            </div>
                                            <div class="content">
                                                <span class="course-level">Technologies</span>
                                                <h5 class="title">
                                                    <a href="<?=URL_LINK?>formation/enfant-atelier-peinture">Artificial Intelligence</a>
                                                </h5>
                                                <ul class="course-meta">
                                                    <li><i class="icon-24"></i>8 Lessons</li>
                                                    <li><i class="icon-25"></i>20 Students</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="edu-course course-style-7 bg-color-secondary">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="<?=URL_LINK?>formation/enfant-atelier-robotique">
                                                    <img src="<?=URL_LINK?>public/assets/images/kids/Jeux Ludiques tandem.jpeg" alt="Course Meta">
                                                </a>
                                                <div class="course-price price-round">New</div>
                                            </div>
                                            <div class="content">
                                                <span class="course-level">Games</span>
                                                <h5 class="title">
                                                    <a href="<?=URL_LINK?>formation/enfant-atelier-robotique">Jeux Ludiques</a>
                                                </h5>
                                                <ul class="course-meta">
                                                    <li><i class="icon-24"></i>15 Lessons</li>
                                                    <li><i class="icon-25"></i>45 Students</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="edu-course course-style-7 bg-color-primary">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="<?=URL_LINK?>formation/atelier-fle">
                                                    <img src="<?=URL_LINK?>public/assets/images/kids/theatre enfant tandem.jpeg" alt="Course Meta">
                                                </a>
                                                <div class="course-price price-round">New</div>
                                            </div>
                                            <div class="content">
                                                <span class="course-level">Arts</span>
                                                <h5 class="title">
                                                    <a href="<?=URL_LINK?>formation/atelier-fle">Théâtre</a>
                                                </h5>
                                                <ul class="course-meta">
                                                    <li><i class="icon-24"></i>32 Lessons</li>
                                                    <li><i class="icon-25"></i>59 Students</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="edu-course course-style-7 bg-success">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-perfectionnement-langue">
                                                    <img src="<?=URL_LINK?>public/assets/images/kids/techniques peinture tandem.jpeg" alt="Course Meta">
                                                </a>
                                                <div class="course-price price-round">New</div>
                                            </div>
                                            <div class="content">
                                                <span class="course-level">Arts</span>
                                                <h5 class="title">
                                                    <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-perfectionnement-langue">Peintures</a>
                                                </h5>
                                                <ul class="course-meta">
                                                    <li><i class="icon-24"></i>32 Lessons</li>
                                                    <li><i class="icon-25"></i>59 Students</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="edu-course course-style-7 bg-info">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-prive">
                                                    <img src="<?=URL_LINK?>public/assets/images/kids/Activités Sportives enfants tandem.jpeg" alt="Course Meta">
                                                </a>
                                                <div class="course-price price-round">New</div>
                                            </div>
                                            <div class="content">
                                                <span class="course-level">Sport</span>
                                                <h5 class="title">
                                                    <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-prive">Activités Sportives</a>
                                                </h5>
                                                <ul class="course-meta">
                                                    <li><i class="icon-24"></i>32 Lessons</li>
                                                    <li><i class="icon-25"></i>59 Students</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="edu-course course-style-7 bg-dark">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-etatique">
                                                    <img src="<?=URL_LINK?>public/assets/images/kids/club robotique tandem.jpeg" alt="Course Meta">
                                                </a>
                                                <div class="course-price price-round">New</div>
                                            </div>
                                            <div class="content">
                                                <span class="course-level">Technique</span>
                                                <h5 class="title">
                                                    <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-etatique">Robotique</a>
                                                </h5>
                                                <ul class="course-meta">
                                                    <li><i class="icon-24"></i>32 Lessons</li>
                                                    <li><i class="icon-25"></i>59 Students</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 col-md-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="edu-course course-style-7 bg-warning">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-etatique">
                                                    <img src="<?=URL_LINK?>public/assets/images/kids/club Karaoké tandem.jpeg" alt="Course Meta">
                                                </a>
                                                <div class="course-price price-round">New</div>
                                            </div>
                                            <div class="content">
                                                <span class="course-level">Music</span>
                                                <h5 class="title">
                                                    <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-etatique">Karaoké</a>
                                                </h5>
                                                <ul class="course-meta">
                                                    <li><i class="icon-24"></i>32 Lessons</li>
                                                    <li><i class="icon-25"></i>59 Students</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="about-image-gallery pt-0" style="padding-left: 0 !important;">
                                <h2 class="bg-primary text-white" style="text-align: center; font-size: 4rem;text-align: center;
                                font-size: 4rem;
                                border-radius: 0.4rem;
                                padding: 13px;">CLUB D'ÉTÉ 2024</h2>
                                <div class="swiper swiperLanguagevillage shadow-lg">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-1.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-2.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-3.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-4.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-5.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-6.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-7.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-8.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-9.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-10.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-11.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-12.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-13.png" alt="Shape">
                                        </div>
                                        <div class="swiper-slide">
                                            <img data-depth="2" src="<?=URL_LINK?>public/assets/images/brochures/summer-club/brochure-club-d'été4-2-14.png" alt="Shape">
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
            </div>

            <ul class="shape-group">
                <li class="shape-1 scene">
                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/banner/icon-3.png" alt="Shape">
                </li>
                <li class="shape-2 scene">
                    <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/banner/icon-2.png" alt="Shape">
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-3 scene">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/banner/icon-4.png" alt="Shape">
            </li>
        </ul>
    </div>

    <div class="edu-event-area event-area-3 bg-image">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Rejoignez notre précédente événement</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Event Grid  -->
                <div class="col-lg-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-event-list event-list-3 bg-style-extra02">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid0jfirouaumY7v6haXEf1qFJE9Bm59G7QxyVswUPpZcC3LSNS3m2sZ32SDDULpteWhl">
                                    <img src="<?=URL_LINK?>public/assets/images/event/event-04.jpg" alt="Event Images">
                                </a>
                            </div>
                            <div class="content">
                                <ul class="event-meta">
                                    <li><i class="icon-27"></i>July 24, 2023</li>
                                </ul>
                                <h4 class="title"><a href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid0jfirouaumY7v6haXEf1qFJE9Bm59G7QxyVswUPpZcC3LSNS3m2sZ32SDDULpteWhl">Tandem Atelier de Robotique</a></h4>
                                <span class="event-location"><i class="icon-40"></i>TANDEM, Tunis</span>
                                <p>Lorem ipsum dolor sit amet consectur adipisicing elit.</p>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-medium curved-medium" href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid0jfirouaumY7v6haXEf1qFJE9Bm59G7QxyVswUPpZcC3LSNS3m2sZ32SDDULpteWhl">Attend <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Event Grid  -->
                <!-- Start Event Grid  -->
                <div class="col-lg-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-event-list event-list-3 bg-style-secondary">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid0Qk3xEtk8jDtPWTHQBKj9yWB1Xb9kvYUtd8qkT5qAALcCngZ1xWVDptPTwsABeDdFl">
                                    <img src="<?=URL_LINK?>public/assets/images/event/event-club-2023.jpg" alt="Event Images" width="190" height="270">
                                </a>
                            </div>
                            <div class="content">
                                <ul class="event-meta">
                                    <li><i class="icon-27"></i>July 05, 2023</li>
                                </ul>
                                <h4 class="title"><a href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid0Qk3xEtk8jDtPWTHQBKj9yWB1Xb9kvYUtd8qkT5qAALcCngZ1xWVDptPTwsABeDdFl">TANDEM Club d'été 2023</a></h4>
                                <span class="event-location"><i class="icon-40"></i>TANDEM, Tunis</span>
                                <p>Lorem ipsum dolor sit amet consectur adipisicing elit.</p>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-medium curved-medium" href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid0Qk3xEtk8jDtPWTHQBKj9yWB1Xb9kvYUtd8qkT5qAALcCngZ1xWVDptPTwsABeDdFl">Attend <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Event Grid  -->
                <!-- Start Event Grid  -->
                <div class="col-lg-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-event-list event-list-3 bg-style-extra05">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid02rJo7g4EyvndtRN24HaEJ7xdieJc222PHRapF5Uc6LdenKghQG3YaPGTFvhK8rGpzl">
                                    <img src="<?=URL_LINK?>public/assets/images/event/event-peintures.jpg" alt="Event Images" width="190" height="270">
                                </a>
                            </div>
                            <div class="content">
                                <ul class="event-meta">
                                    <li><i class="icon-27"></i>July 12, 2023</li>
                                </ul>
                                <h4 class="title"><a href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid02rJo7g4EyvndtRN24HaEJ7xdieJc222PHRapF5Uc6LdenKghQG3YaPGTFvhK8rGpzl">Tandem Peinture</a></h4>
                                <span class="event-location"><i class="icon-40"></i>TANDEM, Tunis</span>
                                <p>Lorem ipsum dolor sit amet consectur adipisicing elit.</p>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-medium curved-medium" href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid02rJo7g4EyvndtRN24HaEJ7xdieJc222PHRapF5Uc6LdenKghQG3YaPGTFvhK8rGpzl">Attend <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Event Grid  -->
                <!-- Start Event Grid  -->
                <div class="col-lg-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-event-list event-list-3 bg-style-primary">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid02tz6MTV7bukPpVtLjX2jyFkPe9ceCSKe5Y1moSDA4UrvfVJXKkzNjotd1Ju5r6tUDl">
                                    <img src="<?=URL_LINK?>public/assets/images/event/event-07.jpg" alt="Event Images">
                                </a>
                            </div>
                            <div class="content">
                                <ul class="event-meta">
                                    <li><i class="icon-27"></i>July 07, 2023</li>
                                </ul>
                                <h4 class="title"><a href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid02tz6MTV7bukPpVtLjX2jyFkPe9ceCSKe5Y1moSDA4UrvfVJXKkzNjotd1Ju5r6tUDl">TANDEM Clubs</a></h4>
                                <span class="event-location"><i class="icon-40"></i>TANDEM, Tunis</span>
                                <p>Lorem ipsum dolor sit amet consectur adipisicing elit.</p>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-medium curved-medium" href="https://www.facebook.com/tandemtrainingcenter/posts/pfbid02tz6MTV7bukPpVtLjX2jyFkPe9ceCSKe5Y1moSDA4UrvfVJXKkzNjotd1Ju5r6tUDl">Attend <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Event Grid  -->
            </div>

            <ul class="shape-group">
                <li class="shape-1 scene">
                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/banner/icon-2.png" alt="Shape">
                </li>
                <li class="shape-2 scene">
                    <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/banner/icon-1.png" alt="Shape">
                </li>
            </ul>
        </div>
    </div>

    <!-- <div class="edu-about-area about-style-6">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title pre-textsecondary">Nos activités et clubs</span>
                <h2 class="title">Sera satisfait de nos TANDEM activités</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <div class="main-img-1">
                            <img src="<?=URL_LINK?>public/assets/images/about/about-09.png" alt="About Image">
                        </div>
                        <div class="main-img-2 bounce-slide">
                            <img src="<?=URL_LINK?>public/assets/images/about/about-10.png" alt="About Image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1">
                                <img src="<?=URL_LINK?>public/assets/images/about/shape-11.png" alt="Shape">
                            </li>
                            <li class="shape-2">
                                <img src="<?=URL_LINK?>public/assets/images/about/shape-12.png" alt="Shape">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="1" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                            <div class="features-box features-style-4 color-primary-style">
                                <div class="icon">
                                    <i class="icon-84"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Summer Camp</h5>
                                    <p>Nos camps d'été offrent la combinaison parfaite d'apprentissage, d'aventure et de plaisir dans un environnement sûr et favorable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="features-box features-style-4 color-secondary-style">
                                <div class="icon">
                                    <i class="icon-85"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Museum Visit</h5>
                                    <p>Créez une expérience d'apprentissage unique pour votre enfant avec le programme du musée du Children's Language Center.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="features-box features-style-4 color-extra02-style">
                                <div class="icon">
                                    <i class="icon-17"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Peint Club</h5>
                                    <p>Bienvenue au club de dessin de notre centre de formation linguistique pour enfants. L’apprentissage des langues et la créativité artistique se conjuguent harmonieusement.</p>
                                    <p>Notre club d'art propose une expérience unique où les enfants peuvent développer leurs compétences linguistiques tout en libérant leur imagination artistique.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                            <div class="features-box features-style-4 color-extra03-style">
                                <div class="icon">
                                    <i class="icon-45"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Robotic Club</h5>
                                    <p>Notre club de robotique offre aux enfants une expérience amusante leur permettant d'explorer le monde de la robotique tout en développant leurs compétences linguistiques.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="edu-blog-area blog-area-4 edu-section-gap hero-style-11">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title pre-textsecondary">NOS ARTICLES</span>
                <h2 class="title">Consultez notre TANDEM dernier Cours</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-blog blog-style-3 h-100">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>kids/session-annuelles">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-07.jpg" alt="Blog Images">
                                </a>
                                <div class="read-more-btn">
                                    <a class="btn-icon-round" href="<?=URL_LINK?>kids/session-annuelles"><i class="icon-4"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <div class="category-wrap">
                                    <a href="#" class="blog-category">Sessions Annuelles Extensives</a>
                                </div>
                                <h5 class="title"><a href="<?=URL_LINK?>kids/session-annuelles"></a></h5>
                                <ul class="blog-meta">
                                    <li><i class="icon-27"></i>2024</li>
                                </ul>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-blog blog-style-3 h-100">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>kids/summer-club">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-08.jpg" alt="Blog Images">
                                </a>
                                <div class="read-more-btn">
                                    <a class="btn-icon-round" href="<?=URL_LINK?>kids/summer-club"><i class="icon-4"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <div class="category-wrap">
                                    <a href="#" class="blog-category">Club d’été</a>
                                </div>
                                <h5 class="title"><a href="<?=URL_LINK?>kids/summer-club"></a></h5>
                                <ul class="blog-meta">
                                    <li><i class="icon-27"></i>2024</li>
                                </ul>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-blog blog-style-3 h-100">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/club-des-vacances-pour-enfants">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-09.jpg" alt="Blog Images">
                                </a>
                                <div class="read-more-btn">
                                    <a class="btn-icon-round" href="<?=URL_LINK?>formation/club-des-vacances-pour-enfants"><i class="icon-4"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <div class="category-wrap">
                                    <a href="#" class="blog-category">CLUB DES VACANCES POUR ENFANTS</a>
                                </div>
                                <h5 class="title"><a href="<?=URL_LINK?>formation/club-des-vacances-pour-enfants"></a></h5>
                                <ul class="blog-meta">
                                    <li><i class="icon-27"></i>2024</li>
                                </ul>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=URL_LINK?>public/assets/js/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>
        var typed = new Typed('.keyboard-writer', {
            strings: ["Le meilleur Club d'été pour vos enfants : Tandem Summer Club"],
            typeSpeed: 100,
        });
    </script>

        
<?php require_once 'src/view/public/pages/inscription.php'; ?>

<?php require_once 'src/view/public/includes/footer.php'; ?>