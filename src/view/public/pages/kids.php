<?php require_once 'src/view/public/includes/header.php';

 $page_title = 'Cours et activités pour les enfants | Tandem Training Centerlabe';

?>

    <style>
        @import url('https://fonts.cdnfonts.com/css/blugie');
        @import url('https://fonts.cdnfonts.com/css/ubuntu-title');

        @keyframes blur {
            0% { -webkit-filter: blur(0px);}
            50% { -webkit-filter: blur(5px);}
            100% { -webkit-filter: blur(0px);}
        }

        .hero-banner.hero-style-7 {
            min-height: 660px !important;
        }
        
        .thumbnail-1 {
            animation: up-down 1.4s infinite ease-in-out alternate;
        }

        .thumbnail-2 {
            animation: up-down 1.4s infinite ease-in-out alternate .4s;
        }

        @keyframes up-down{
            from{
                transform: translatey(0px);
            }
            to{
                transform: translatey(-20px);
            }
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
            color: var(--color-primary) !important;
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

        .features-list .col {
            border-radius: .5rem;
        }
        .features-list img {
            width: 200px !important;
        }
        .features-list .title {
            margin-top: 18px;
            margin-bottom: 0px !important;
        }
        .features-list .about-image-gallery .main-img-1 {
            background-color: var(--color-white);
            padding: 20px;
            display: inline-block;
            border-radius: 20px;
            box-shadow: 0 20px 40px 0 rgba(42, 11, 88, 0.1);
        }
        .about-image-gallery {
            padding: 10px 0 10px !important;
        }
    </style>

    <div class="hero-banner hero-style-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Vivez les langues avec TANDEM</h1>
                        <div class="features-list pt-0" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="about-image-gallery">
                                            <div class="main-img-1 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                                <div class="row d-block">
                                                    <div class="col"><img src="<?=URL_LINK?>public/assets/images/kids/club-summer-2/brochure-club-d'été-mini.png" title="" alt="" /></div>
                                                    <div class="col"><a href="<?=URL_LINK?>kids/summer-club" class="mt-5 edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a></div>
                                                    <div class="col"><h6 class="title">Club d'été</h6></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="about-image-gallery">
                                            <div class="main-img-1 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                                <div class="row d-block">
                                                    <div class="col"><img src="<?=URL_LINK?>public/assets/images/kids/session-annuelles-mini.jpg" title="" alt="" /></div>
                                                    <div class="col"><a href="<?=URL_LINK?>kids/annual-sessions-children" class="mt-5 edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a></div>
                                                    <div class="col"><h6 class="title">Sessions Annuelles</h6></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="about-image-gallery">
                                            <div class="main-img-1 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                                <div class="row d-block">
                                                    <div class="col"><img src="<?=URL_LINK?>public/assets/images/kids/Jeux Ludiques tandem.jpeg" title="" alt="" /></div>
                                                    <div class="col"><a href="<?=URL_LINK?>formation/club-des-vacances-pour-enfants" class="mt-5 edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a></div>
                                                    <div class="col"><h6 class="title">Sessions Vacances</h6></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- <a href="<?=URL_LINK?>kids/summer-club" class="col bg-white p-3 m-2">
                                        <img src="<?=URL_LINK?>public/assets/images/kids/club-summer-2/brochure-club-d'été-mini.png" title="" alt="" />
                                        <h6 class="title">Club d'été</h6>
                                    </a>
                                    <a href="<?=URL_LINK?>kids/annual-sessions-children" class="col bg-white p-3 m-2">
                                        <img src="<?=URL_LINK?>public/assets/images/kids/session-annuelles-mini.jpg" title="" alt="" />
                                        <h6 class="title">Sessions annuelles des langues (extensives)</h6>
                                    </a>
                                    <a href="<?=URL_LINK?>" class="col bg-white p-3 m-2">
                                        <img src="<?=URL_LINK?>public/assets/images/kids/Jeux Ludiques tandem.jpeg" title="" alt="" />
                                        <h6 class="title">Sessions vacances (hiver/printemps)</h6>
                                    </a> -->
                                </div>
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
            <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/banner/icon-3.png" alt="Shape">
            </li>
            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/banner/icon-1.png" alt="Shape">
            </li>
            <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/banner/icon-5.png" alt="Shape">
            </li>
            <li class="shape-4 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/banner/icon-2.png" alt="Shape">
            </li>
            <li class="shape-5 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/banner/icon-4.png" alt="Shape">
            </li>
            <li class="shape-6" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-25.png" alt="Shape">
            </li>
            <li class="shape-7" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape">
            </li>
        </ul>
    </div>

    <div class="edu-course-area course-area-7" id="section-2">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Sessions Annuelles des langues (Extensives)</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-12 col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-7 bg-color-extra02">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/enfant-atelier-peinture">
                                    <img src="<?=URL_LINK?>public/assets/images/kids/techniques peinture tandem.jpeg" alt="Course Meta">
                                </a>
                                <!-- <div class="course-price price-round">$30</div> -->
                            </div>
                            <div class="content">
                                <span class="course-level">Arts & Design</span>
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/enfant-atelier-peinture">Atelier Peinture</a>
                                </h5>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>8 Lessons</li>
                                    <li><i class="icon-25"></i>20 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-7 bg-color-secondary">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/enfant-atelier-robotique">
                                    <img src="<?=URL_LINK?>public/assets/images/kids/club robotique tandem.jpeg" alt="Course Meta">
                                </a>
                                <!-- <div class="course-price price-round">$40</div> -->
                            </div>
                            <div class="content">
                                <span class="course-level">Techniques</span>
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/enfant-atelier-robotique">Atelier Robotique</a>
                                </h5>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>15 Lessons</li>
                                    <li><i class="icon-25"></i>45 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-7 bg-color-primary">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/atelier-fle">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-07.jpg" alt="Course Meta">
                                </a>
                                <!-- <div class="course-price price-round">270</div> -->
                            </div>
                            <div class="content">
                                <span class="course-level">Technique</span>
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/atelier-fle">FLE (Français Langue étrangère)</a>
                                </h5>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>32 Lessons</li>
                                    <li><i class="icon-25"></i>59 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-7 bg-success">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-perfectionnement-langue">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-08.jpg" alt="Course Meta">
                                </a>
                                <!-- <div class="course-price price-round">$50</div> -->
                            </div>
                            <div class="content">
                                <span class="course-level">Technique</span>
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-perfectionnement-langue">Perfectionnement</a>
                                </h5>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>32 Lessons</li>
                                    <li><i class="icon-25"></i>59 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-7 bg-info">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-prive">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-008.png" alt="Course Meta">
                                </a>
                                <!-- <div class="course-price price-round">$50</div> -->
                            </div>
                            <div class="content">
                                <span class="course-level">Technique</span>
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-prive">Soutien scolaire privé</a>
                                </h5>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>32 Lessons</li>
                                    <li><i class="icon-25"></i>59 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-7 bg-dark">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-etatique">
                                    <img src="<?=URL_LINK?>public/assets/images/blog/blog-09.jpg" alt="Course Meta">
                                </a>
                                <!-- <div class="course-price price-round">$50</div> -->
                            </div>
                            <div class="content">
                                <span class="course-level">Technique</span>
                                <h5 class="title">
                                    <a href="<?=URL_LINK?>formation/enfant-sessions-annuelles-soutien-scolaire-etatique">Soutien scolaire étatique</a>
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

    <div class="edu-faq-area faq-style-4">
        <div class="container">
            <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title pre-textsecondary">ÉDUCATION POUR TOUS</span>
                <h2 class="title">Âges auxquels nous rencontrons les enfants là où ils se trouvent</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 row--45 align-items-end">
                <div class="col-lg-6">
                    <div class="edu-faq-content">
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button style-extra02" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                            Club d’été (Langues et Activités)
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Plongez dans une expérience estivale inoubliable qui combine l'apprentissage des langues avec une variété d'activités passionnantes.</p>
                                            <br>
                                            <p>Notre club d'été offre aux participants une expérience dynamique d'immersion linguistique dans un environnement amusant et stimulant.</p>
                                            <br>
                                            <p>Que vous soyez débutant ou expérimenté dans votre langue préférée, nos clubs d'été sont ouverts à tous et vous garantissent des souvenirs inoubliables et de grands progrès dans votre voyage linguistique</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed style-extra05" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                            Sessions Vacances (Hiver/Printemps)
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Une expérience enrichissante pour les étudiants de tous âges et de tous niveaux. Nos cours d'hiver et de printemps offrent des opportunités uniques d'approfondir vos compétences linguistiques tout en découvrant de nouvelles cultures et en participant à des activités passionnantes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed style-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                            Sessions Annuelles des langues (Extensives)
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Consultez notre programme annuel de sessions linguistiques au Centre de Langues. Ce programme est conçu pour ceux qui souhaitent s'immerger pleinement dans l'apprentissage des langues tout au long de l'année.</p>
                                            <p>Nos cours approfondis offrent une approche progressive et approfondie de l’acquisition des langues, adaptée à tous les niveaux et à tous les âges.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-thumbnail">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/faq/faq-08.webp" alt="Faq Images">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <img data-depth="1" src="<?=URL_LINK?>public/assets/images/about/shape-12.png" alt="Shape Images">
                            </li>
                            <li class="shape-2 scene">
                                <img data-depth="-1" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape Images">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="1" src="<?=URL_LINK?>public/assets/images/faq/shape-15.png" alt="Shape Images">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu-section-gap edu-about-area about-style-4 programming-about edu-cta-banner-area">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-8">
                    <div class="about-image-gallery">
                        <div class="main-img-1 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                            <img src="http://localhost/tandem/public/assets/images/kids/club-summer-2/brochure-club-d'été-mini.png" alt="About Image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="2" src="http://localhost/tandem/public/assets/images/about/shape-09.png" alt="Shape" style="transform: translate3d(-18.4px, 8.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-2" src="http://localhost/tandem/public/assets/images/about/shape-35.png" alt="Shape" style="transform: translate3d(41.4px, -19.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="1.5" src="http://localhost/tandem/public/assets/images/faq/shape-05.png" alt="Shape" style="transform: translate3d(-28.4px, 12.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-4 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <span data-depth="-2.5" style="transform: translate3d(72.1px, -34.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="section-title section-left">
                            <span class="pre-title">À PROPOS d'été 2024</span>
                            <h2 class="title">Ouvrir la voie avec <br> Club D'été <br> <sapn class="text-success">TANDEM</sapn></h2>
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
        
<?php require_once 'src/view/public/pages/inscription.php'; ?>

<?php require_once 'src/view/public/includes/footer.php'; ?>

<script src="<?=URL_LINK?>public/assets/js/typed.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script>
    var typed = new Typed('.keyboard-writer', {
        strings: ["TANDEM offre un avenir meilleur aux enfants."],
        typeSpeed: 100,
    });
</script>