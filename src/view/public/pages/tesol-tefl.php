<?php 

require_once 'src/view/public/includes/header.php';?>

    <style>
        h1{
            color: #bcd74c !important; filter: drop-shadow(2px 4px 3px rgba(0, 0, 0, .5));
        }
        .thumbnail {
            /* background-image: url('<?=URL_LINK?>public/assets/images/shape 3.png'); */
        }
        .thumbnail::before{
            content: unset !important;
        }
        .thumbnail img {
            transform: scale(1);
            filter: drop-shadow(0 1rem 3rem rgba(0,0,0,.175));
        }
        .thumbnail img:nth-child(2) {
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            transform: scale(1.2);
        }
        .thumbnail img:nth-child(3) {
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            transform: scale(1.4);
            opacity: .5;
        }
        .play-button {
            cursor: pointer;
            width: 150px;
            height: 150px;
            background-size: contain;
            background-repeat: no-repeat;
            position: absolute;
            border-radius: 50%;
            background-color: white;
            transform: translate(50%, 50%);
            left: calc(50% - 150px);
            top: calc(50% - 150px);
            transition: all 500ms ease-in;
        }
        .play-button:hover{
            filter: blur(1px) invert(1);
        }
        .play-button:before {
            height: 150px;
            width: 150px;
            left: calc(50% - 75px);
            top: calc(50% - 75px);
            -webkit-animation: ripple_3 2.5s linear 1s infinite;
            animation: ripple_3 2.5s linear 1s infinite;
            content: '';
            display: block;
            position: absolute;
            z-index: -1;
            -webkit-transition: var(--transition);
            transition: var(--transition);
            border-radius: 50%;
            border: 3px solid #FFF;
        }
        #video-tefel-tesol-resume{
            height: 75vh;
        }
        .categorie-area-6 .categorie-grid.color-info:hover .icon {
            background-color: #0dcaf0 !important;
        }
        .categorie-area-6 .categorie-grid.color-info:hover .icon i::before {
            color: white;
        }
        .hero-style-4{
            padding-top: 50px;
        }
    </style>

    <div class="hero-banner hero-style-4 motivation-banner overflow-hidden">
        <div class="container edublink-animated">
            <div class="row align-items-center">
                <div class="col-lg-8 edu-order-md-2">
                    <div class="banner-content sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000">
                        <h1 class="title sal-animate" style="text-align: left; text-transform: uppercase; text-wrap: nowrap;" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">  A remarkable  TESOL journey </h1>
                        <p class="sal-animate d-sm-none d-md-block" style="text-align: left; margin-left: 0;font-weight: bold; font-size: 3rem; text-align: justify">
                            Find out more about our center, our program curriculum and our trainers.<br>
                            Discover for yourself why pursuing your TESOL Certificate in <span style="color: darkblue">TANDEM</span> is the one and only choice.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 edu-order-md-1">
                    <div class="banner-thumbnail">
                        <!-- <div class="thumbnail sal-animate" data-sal-delay="150" data-sal="slide-left" data-sal-duration="1000">
                            <img src="<?=URL_LINK?>public/assets/images/tesol class.png" alt="Pi-chart Image">
                            <img src="<?=URL_LINK?>public/assets/images/shape tesol class.png" alt="Pi-chart Image">
                            <img src="<?=URL_LINK?>public/assets/images/shape tesol class.png" alt="Pi-chart Image">
                            <div class="play-button shadow-lg" style="background-image: url('<?=URL_LINK?>public/assets/images/play button tandem.png');" data-toggle="modal" data-target="#homeVideo" id="buttonTesolTeflResumeVideo"></div>
                        </div> -->
                        <div class="video-gallery video-gallery-5" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                            <div class="thumbnail">
                                <img src="<?=URL_LINK?>public/assets/images/tesol class.png" alt="Pi-chart Image">
                                <img src="<?=URL_LINK?>public/assets/images/shape tesol class.png" alt="Pi-chart Image">
                                <img src="<?=URL_LINK?>public/assets/images/shape tesol class.png" alt="Pi-chart Image">
                                <a href="https://www.youtube.com/watch?v=YtTR8AJUa5w?si=lThqO_tKF4UBQfUb" class="video-play-btn video-popup-activation">
                                    <i class="icon-18"></i>
                                </a>
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
            <li class="shape-5 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="1" src="<?=URL_LINK?>public/assets/images/about/shape-02.png" alt="Shape" style="transform: translate3d(-1.2px, -9.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
            <li class="shape-6 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="-1" src="<?=URL_LINK?>public/assets/images/about/shape-18.png" alt="Shape" style="transform: translate3d(1.3px, 9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
        </ul>
    </div>

    <div class="edu-categorie-area categorie-area-6">
        <div class="container">
            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title"></span>
                <h2 class="title">Useful Information</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-primary edublink-svg-animate">
                        <div class="icon">
                            <i class="icon-81"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Enrollment Procedure</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-secondary">
                        <div class="icon computer-science">
                            <i class="icon-20"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Eligibility</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-extra02">
                        <div class="icon">
                            <i class="icon-42"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Things to Bring</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5" style="margin-top: var(--bs-gutter-y);">
                <div class="col-lg-4 col-md-12 sal-animate">
                    <div class="row g-5" style="height: calc(100% + 3rem) !important;">
                        <div class="col-lg-12 sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-6 color-extra08 h-100">
                                <div class="icon">
                                    <i class="icon-60"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Cost of Living</h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 sal-animate">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-6 color-tertiary">
                                <div class="icon physical-activity">
                                    <i class="icon-50"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Dress Code</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-6 color-extra07">
                                <div class="icon physical-activity">
                                    <i class="icon-79"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Medical Services</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="categorie-grid categorie-style-6 color-info">
                                <div class="icon physical-activity">
                                    <i class="icon-24"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Book List</h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img src="<?=URL_LINK?>public/assets/images/others/shape-07.png" alt="Shape">
            </li>
            <li class="shape-2 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" src="<?=URL_LINK?>public/assets/images/others/shape-38.png" alt="Shape">
            </li>
            <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="2.5" style="transform: translate3d(-16.4px, 6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
            </li>
        </ul>
    </div>

    <div class="edu-section-gap edu-about-area about-style-4 programming-about mt-5" style="background-color: #f5f9fa;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-8">
                    <div class="about-image-gallery">
                        <div class="main-img-1 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                            <img src="<?=URL_LINK?>public/assets/images/app call.webp" alt="About Image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape" style="transform: translate3d(-36.7px, -2.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/others/shape-10.png" alt="Shape" style="transform: translate3d(31.1px, 2.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="1.5" src="<?=URL_LINK?>public/assets/images/faq/shape-05.png" alt="Shape" style="transform: translate3d(-31px, -1.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-4 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <span data-depth="-2.5" style="transform: translate3d(19.7px, 1.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="section-title section-left">
                            <span class="pre-title">About TEFL/TESOL</span>
                            <h2 class="title">Leading the <br> Way in 100% </br> Certificate TEFL/TESOL</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>A good programmer is someone who always looks both ways.</p>
                        </div>
                        <ul class="features-list">
                            <li>TEFL / TESOL</li>
                            <li>TEFL / TESOL</li>
                            <li>TEFL / TESOL</li>
                            <li>TEFL / TESOL</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tesolTeflResumeVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-5" style="width: max-content;">
            <div class="embed-responsive embed-responsive-16by9">
                <div class="row">
                    <div class="col">
                        <h2 style="text-align: center;width: max-content;">Start TESOL TEFL journey in Tandem</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                    <video id="video-tefel-tesol-resume" width="" controls="" class="video-background shadow-lg">
                        <source src="<?=URL_LINK?>public/assets/videos/TESOL-TEFL/1- Start TESOL TEFL journey in Tandem ( for correction ).mp4">
                    </video>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="<?=URL_LINK?>public/assets/js/vendor/jquery.min.js"></script>
    <script>
        $( document ).ready(function() {
            $('#buttonTesolTeflResumeVideo').on('click', function(){
                $('#tesolTeflResumeVideo').modal('toggle');
            });

            $('#tesolTeflResumeVideo').on('shown.bs.modal', function (e) {
                $("#video-tefel-tesol-resume")[0].play();
            })

            $('#tesolTeflResumeVideo').on('hidden.bs.modal', function (e) {
                $("#video-tefel-tesol-resume")[0].pause();
            })
        });
    </script>

<?php require_once 'src/view/public/pages/inscription.php'; ?>
<?php require_once 'src/view/public/includes/footer.php'; ?>