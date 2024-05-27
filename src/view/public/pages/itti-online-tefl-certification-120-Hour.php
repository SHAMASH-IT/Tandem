<?php require_once 'src/view/public/includes/header.php';?>
    <style>
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
        p{
            font-size: 3rem !important;
            text-align: justify !important;
        }
        .hero-style-4 {
            padding-top: 50px;
        }
    </style>

    <div class="hero-banner hero-style-9 hero-style-4 motivation-banner">
        <div class="container edublink-animated">
            <div class="row align-items-center">
                <div class="col-lg-6 edu-order-md-2">
                    <div class="banner-content sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000">
                        <h1 class="title sal-animate text-right" style="text-align: left;" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">
                            120-Hour TESOL/TEFL Certification with
                        </h1>
                        <h2 class="line-1" style="text-align: left;">Teaching Practicum</h2>
                    </div>
                </div>
                <div class="col-lg-6 edu-order-md-1">
                    <div class="banner-thumbnail">
                        <div class="thumbnail sal-animate" data-sal-delay="150" data-sal="slide-left" data-sal-duration="1000">
                            <img src="<?=URL_LINK?>public/assets/images/banner/motivation-speaker.webp" alt="Pi-chart Image" style="border-radius: 30% 70% 70% 30% / 78% 30% 70% 22%">
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <span></span>
                </li>
                <li class="shape-2 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-03.png" alt="Shape">
                </li>
                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <span data-depth="2.5" style="transform: translate3d(-17.1px, 11.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-5 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="1" src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="Shape" style="transform: translate3d(-15.6px, 11.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
            <li class="shape-6 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="-1" src="<?=URL_LINK?>public/assets/images/others/shape-38.png" alt="Shape" style="transform: translate3d(17px, -11.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
        </ul>
    </div>

    <div class="process-area-1 edu-section-gap">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-4">
                    <div class="process-gallery edublink-animated-shape sal-animate" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                        <div class="gallery-thumbnail">
                            <div class="thumbnail thumbnail-1">
                                <img src="<?=URL_LINK?>public/assets/images/process/process-1.webp" alt="Why Choose" style="border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ">
                            </div>
                            <div class="thumbnail thumbnail-2 sal-animate" data-parallax="{&quot;x&quot;: 0, &quot;y&quot;: -90}" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800" style="transform:translate3d(0px, -37.319px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -37.319px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                            <img class="main-img-2" src="<?=URL_LINK?>public/assets/images/itti/120-hour-online-tefl-tesol-certification.png" alt="About Image" width="150">
                            <img class="main-img-2" src="<?=URL_LINK?>public/assets/images/itti/120-hour-tesol-certificate.png" alt="About Image" width="150">
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <span data-depth="2" style="transform: translate3d(-23.9px, 5.9px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-2" src="<?=URL_LINK?>public/assets/images/others/shape-73.png" alt="Shape Images" style="transform: translate3d(34.6px, -8.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="process-content sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="section-title section-left">
                            <span class="pre-title color-primary">Few Step to success</span>
                            <h2 class="title">
                                Register for our new Signature 120-Hour TESOL/TEFL Certification program and get ready for teaching in class.
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p style="text-align: justify">TANDEM's 120-hour online TESOL certification and live online training are the ideal resources to prepare you for a rigorous education in a high-paying, high-quality environment in Asia, Europe, or the Middle East.</p>
                            <p style="text-align: justify">Completing an accredited, internationally recognized teacher certification program will make you a highly competitive candidate for the most sought-after teaching jobs.</p>
                            <p style="text-align: justify">Our programs provide comprehensive educational instruction, including engaging videos, academic textbooks, and carefully structured learning experiences. Units dedicated to mastering online teaching skills will prepare you for success in the virtual classroom.</p>
                            <p style="text-align: justify">Each software module includes hands-on activities that provide the hands-on lesson planning experience you need for dynamic and engaging lessons. Our goal is to give you the tools and experience you need to create courses that engage students from day one.</p>
                            <p style="text-align: justify">In addition to developing your skills as a lesson planner, classroom teacher, or English teacher, our program offers unparalleled career support. You have the opportunity to start your own online school on our professional platform with 6 level English course programs.</p>
                            <p style="text-align: justify">We provide training on how to use the platform and marketing strategies to help you reach your students.</p>
                            <p style="text-align: justify">Even if online learning isn't your thing, there are plenty of EFL education opportunities waiting for you. Education is a recession-proof sector and as an organization we operate in over 60 countries around the world.</p>
                            <p style="text-align: justify">Our partner schools are often in urgent need of teachers. In addition to these positions, you will have access to English schools around the world that offer a variety of educational opportunities.</p>
                        </div>
                        <h6 class="text-primary">Our Signature 120-Hour Online TEFL/TESOL Certification with Live Teaching Practicum features the following:</h6>
                        <div class="about-content sal-animate">
                            <ul class="features-list">
                                <li>more than 100 hours of guided theory training.</li>
                                <li>20 units including teaching online on a state-of-the-art learning platform.</li>
                                <li>plenty of videos to support your learning.</li>
                                <li>carefully scaffolded lessons lead to your success.</li>
                                <li>continuous assessment helps you stay on track.</li>
                                <li>live 18-hour online teaching practicum with real EFL students.</li>
                                <li>become an expert in designing high-energy classes.</li>
                                <li>gain access to a job portal with hundreds of teaching opportunities.</li>
                                <li>receive a certificate that states your teaching practicum and is the key to the best teaching job opportunities around the world.</li>
                                <li>the hard-copy certificate can be obtained.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gap-bottom-equal edu-about-area about-style-1 about-style-10 about-style-4 about-style-8 pt-5">
        <div class="container edublink-animated-shape">
            <h2 class="title text-center pb-5 mb-5">Benefits of the Signature 120-Hour TEFL/TESOL Certification with Teaching Practicum</h2>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 sal-animate" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                    <div class="about-image-gallery text-center">
                        <img width="390" class="main-img-1" src="<?=URL_LINK?>public/assets/images/about/about-24.webp" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="1" src="<?=URL_LINK?>public/assets/images/about/shape-44.png" alt="Shape" style="transform: translate3d(-17.3px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-1" src="<?=URL_LINK?>public/assets/images/about/shape-45.png" alt="Shape" style="transform: translate3d(18.5px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content">
                        <ul class="features-list">
                            <li>Internationally accredited, recognized teacher training.</li>
                            <li>Get continuing education credits and credits for your MA Education.</li>
                            <li>Become a candidate for any school around the world due to your live teaching practicum.</li>
                            <li>Start any time in spite of the pandemic and work at your own pace.</li>
                            <li>Tutor-guided, state-of-the-art online platform (LMS) program.</li>
                            <li>Plenty of videos to help you better understand the material.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 sal-animate" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content">
                        <ul class="features-list">
                            <li>Wide choice of teaching practicum dates.</li>
                            <li>Teach three different levels of EFL students from all over the world.</li>
                            <li>Benefit from our excellent career support. iTTi alone has over sixty locations with most of them operating English schools. In addition, you still have the entire world with so many available English schools.</li>
                            <li>Teach your own EFL students online in your ready-to-teach iTTi School of English upon graduation.</li>
                            <li>New Competitive tuition with installment-payment possibility.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                    <div class="about-image-gallery text-center">
                        <img class="main-img-1" src="<?=URL_LINK?>public/assets/images/about/about-04.webp" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="1" src="<?=URL_LINK?>public/assets/images/about/shape-44.png" alt="Shape" style="transform: translate3d(-17.3px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="-1" src="<?=URL_LINK?>public/assets/images/about/shape-45.png" alt="Shape" style="transform: translate3d(18.5px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu-faq-area faq-style-1 faq-style-6">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-12">
                    <div class="edu-faq-content">
                        <div class="section-title section-left sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title text-justify">
                                LOOK INSIDE OUR BEST TEFL/ TESOL COURSE CURRICULUM
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="faq-accordion sal-animate row" id="faq-accordion" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Introduction
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 1: Teachers and Learners
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 2: Grammar I: Parts of Speech & Syntax
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 3: Theories, Methods and Techniques
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 4: Lesson Planning
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 5: Grammar II: Nouns & Their Assistants
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 6: Teaching New Language
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 7: Teaching Pronunciation & Phonology
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 8: Grammar III: The Verb Tenses
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 9: Teaching Receptive Skills
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 10: Teaching Productive Skills
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 11: Grammar IV: Modifying Verbs
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 12: Managing Classes
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 13: Teaching Online
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 14: Teaching Special Groups
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 15: Grammar V: Building Complex Sentences
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 16: Evaluation and Testing
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 17: Equipment and Teaching Aids
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 18: Textbooks and Lesson Materials
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 19: Technology in Language Learning and Teaching
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 20: Project Work – Lesson Plan
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            UNIT 21- CAREER SUPPORT (everything from resume to cover letter, to recruiters and real job leads).
                                        </button>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="video-area-5 gap-bottom-equal">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 mx-auto">
                    <div class="video-gallery">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/bg-videos/chaima background tandem.png" alt="Thumb">
                            <a href="https://www.youtube.com/watch?v=PICj5tr9hcc" class="video-play-btn video-popup-activation">
                                <i class="icon-18"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<?php require_once 'src/view/public/pages/inscription.php'; ?>

<?php require_once 'src/view/public/includes/footer.php'; ?>