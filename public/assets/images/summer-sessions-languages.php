<?php
    $meta_facebook_image = URL_LINK . "public/assets/images/affiche-summer-camp-site-min.png";
    $meta_facebook_title = "TANDEM Tunisie SESSIONS INTENSIVES";
    $meta_facebook_description = "Rejoignez nos passionnants ateliers de langues pour adolescents cet été et plongez-vous dans une expérience d'apprentissage des langues passionnante et enrichissante.";
    $meta_facebook_width = "1600";
    $meta_facebook_height = "1200";

    require_once 'src/view/public/includes/header.php';
?>
    <style>
        .edu-breadcrumb-area {
            /* background: radial-gradient(circle at 10% 20%, rgb(255, 200, 124) 0%, rgb(252, 251, 121) 90%) !important; */
            background-image: url('<?=URL_LINK?>/public/assets/images/teen-summer.webp');
            height: 660px !important;
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
      width: 100%;
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
        .breadcrumb-style-2 {
            position: relative;
            z-index: 1;
            padding: 103px 0 100px;
        }
    </style>

    <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--21">
        <div class="video shadow-lg">
            <img src="<?=URL_LINK?>/public/assets/images/tandem-teen-workshop-2024-session-intensif.gif" alt="" style="height: 100%;" />
            <div class="page-title">
                    <h1 class="title" style="text-transform: uppercase;     color: black; text-align: center;margin-top: 28px;">Sessions Intensives</h1>
                </div>
        </div>
        <div class="container" style="top: -70px; position: relative;">
            <div class="breadcrumb-inner" style="    filter: drop-shadow(2px 4px 6px black);">
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=URL_LINK?>">Accueil</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="<?=URL_LINK?>category/adultes/langues">Cours</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Langues</li>
                </ul>
                
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
            <li class="shape-5 scene">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-07.png" alt="shape">
            </li>
        </ul>
    </div>

    <?php
        if(!empty($formations))
        {
    ?>
    <div class="edu-course-area course-area-1 gap-tb-text hero-style-10" style="top: unset !important">
        <div class="container">
            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Cours Juniors Intensives</span>
                <h2 class="title">Choisissez un cours pour commencer</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <?php
                    foreach ($formations as $formation)
                    {
                        $id = $formation['formation_id'];
                        $photo = fetch_array("SELECT * FROM images WHERE identifier = '$id' AND deleted = 0 ");

                        if(empty($photo)) $photo['image_src'] = '';
                ?>
                    <div class="col-md-6 col-lg-4 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-3 course-box-shadow h-100 bg-white sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="<?=URL_LINK?>formation/<?=$formation['formation_slug']?>">
                                        <img src="<?=URL_LINK?>public/assets/uploads/<?=$photo['image_src']?>" alt="Course Meta">
                                    </a>
                                    <div class="time-top">
                                        <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        <a href="<?=URL_LINK?>formation/<?=$formation['formation_slug']?>"><?=$formation['language']?></a>
                                    </h5>
                                    <p>
                                        <?=substr($formation['formation_slogan'],0,90)?>...
                                    </p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-60" style="font-size: 3rem;"></i>
                                        </div>
                                        <span class="rating-count"><?=$formation['prix']?></span>
                                    </div>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-small btn-secondary" href="<?=URL_LINK?>formation/<?=$formation['formation_slug']?>">Plus... <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>

                <?php
                    foreach ($formations2 as $formation)
                    {
                        $id = $formation['formation_id'];
                        $photo = fetch_array("SELECT * FROM images WHERE identifier = '$id' AND deleted = 0 ");
                ?>
                    <div class="col-md-6 col-lg-4 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-3 course-box-shadow h-100 bg-white">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="<?=URL_LINK?>formation/<?=$formation['formation_slug']?>">
                                        <img src="<?=URL_LINK?>public/assets/uploads/<?=$photo['image_src']?>" alt="Course Meta">
                                    </a>
                                    <div class="time-top">
                                        <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <span class="course-level"><?=$formation['formation_title']?></span>
                                    <h5 class="title">
                                        <a href="<?=URL_LINK?>formation/<?=$formation['formation_slug']?>"><?=$formation['language']?></a>
                                    </h5>
                                    <p>
                                        <?=substr($formation['formation_slogan'],0,90)?>...
                                    </p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-60" style="font-size: 3rem;"></i>
                                        </div>
                                        <span class="rating-count"><?=$formation['prix']?></span>
                                    </div>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-small btn-secondary" href="<?=URL_LINK?>formation/<?=$formation['formation_slug']?>">Plus... <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <?php
        }
    ?>

    <!-- Start Course Area  -->
    <div class="business-course edu-course-area course-area-12 gap-tb-text bg-image">
        <div class="row edublink-animated-shape" style="margin-right: 0;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12 sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="color-primary" style="padding: 50px 30px;">
                        <div class="content text-center">
                            <h2 class="title" style="font-size: 5rem; text-transform: uppercase;">A propos</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <div class="edu-faq-content sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="faq-accordion" id="faq-accordion2">
                                    <div class="accordion">
                                        <div class="accordion-item">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true">
                                                    Langues proposée & Dates
                                                </button>
                                            </h5>
                                            <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion2" style="">
                                                <div class="accordion-body">
                                                    <p>
                                                        Anglais, Français, Allemand, Espagnol, Italien
                                                    </p>
                                                    <br>
                                                    <p>
                                                        Juin, Juillet, Août, Septembre 2024
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false">
                                                    Description 
                                                </button>
                                            </h5>
                                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion2">
                                                <div class="accordion-body">
                                                    <p>
                                                        Pendant cet été, offrez à vos enfants l'opportunité de renforcer leurs compétences linguistiques dans un environnement dynamique et interactif. Nos cours sont conçus pour les élèves du collège et du lycée, et sont adaptés à tous les niveaux, des débutants aux avancés.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false">
                                                    Objectifs
                                                </button>
                                            </h5>
                                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faq-accordion2">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li>Améliorer la compréhension orale et écrite</li>
                                                        <li>Renforcer la communication orale</li>
                                                        <li>Enrichir le vocabulaire et la grammaire</li>
                                                        <li>Développer des compétences de lecture et d'écriture</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false">
                                                    Méthodologie 
                                                </button>
                                            </h5>
                                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faq-accordion2">
                                                <div class="accordion-body">
                                                    <p>
                                                        Nos cours sont dispensés par des enseignants expérimentés et passionnés, qui utilisent des méthodes pédagogiques interactives et ludiques pour garantir un apprentissage efficace et motivant. Les leçons sont variées et incluent des activités telles que des jeux de rôle, des discussions en groupe, des exercices écrits, et des projets créatifs.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false">
                                                    Modalités pratiques 
                                                </button>
                                            </h5>
                                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faq-accordion2">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li>Horaires flexibles pour s'adapter à votre emploi du temps estival</li>
                                                        <li>Petits groupes pour une attention personnalisée</li>
                                                        <li>Matériel pédagogique inclus</li>
                                                        <li>Sessions en présentiel dans nos locaux sécurisés</li>
                                                        <li>Possibilité de cours en ligne pour plus de flexibilité</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false">
                                                    Inscription
                                                </button>
                                            </h5>
                                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#faq-accordion2">
                                                <div class="accordion-body">
                                                    <p>
                                                        Réservez dès maintenant votre place pour garantir la disponibilité. Les inscriptions sont ouvertes jusqu'au [date]. Contactez-nous pour plus d'informations sur les tarifs et les modalités d'inscription.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 style="text-align: justify;">Donnez à vos enfants un avantage linguistique cet été avec nos cours de langues passionnants !</h3>
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
                                <h2 class="title" style="font-size: 5rem; text-transform: uppercase;">Pick A TANDEM Summer Teen WorkShop 2024</h2>
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
                    <div #swiperRef="" class="swiper mySwiperSumerTeenWorkShop sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/summer-teen-workshop/affiche-summer-camp-site-corr.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/summer-teen-workshop/brochure-teen-workshop-SPECIAL-publi-2.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/summer-teen-workshop/brochure-teen-workshop-SPECIAL-publi-3.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/summer-teen-workshop/brochure-teen-workshop-SPECIAL-publi-4.png" alt="Course Meta">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?=URL_LINK?>public/assets/images/brochures/summer-teen-workshop/brochure-teen-workshop-SPECIAL-publi-5.png" alt="Course Meta">
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