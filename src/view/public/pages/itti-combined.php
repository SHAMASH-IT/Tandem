<?php require_once 'src/view/public/includes/header.php';?>
    <style>
        .brand-grid-wrap-50 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            position: relative;
        }

        .brand-grid-wrap-50 .brand-grid{
            margin: 20px;
        }

        .brand-grid-wrap-50 .brand-grid .section-title{
            padding: 20px;
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
        p{
            font-size: 3rem !important;
            text-align: justify !important;
            width: 100% !important;
        }
        .hero-style-4{
            padding-top: 50px;
        }
    </style>

    <div class="hero-banner hero-style-4 motivation-banner">
        <div class="container edublink-animated">
            <div class="row align-items-center">
                <div class="col-lg-8 edu-order-md-2">
                    <div class="banner-content sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000" style="text-align: left;">
                        <h1 class="title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">
                            TESOL TEFL combined courses
                        </h1>
                        <p class="sal-animate" style="margin: 0">
                            In Tandem Training Center, we offer <code>TESOL/TEFL</code> combined courses.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 edu-order-md-1">
                    <div class="banner-thumbnail">
                        <div class="video-gallery video-gallery-5" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                            <div class="thumbnail sal-animate">
                                <img src="<?=URL_LINK?>public/assets/images/tesol class.png" alt="Pi-chart Image">
                                <img src="<?=URL_LINK?>public/assets/images/shape tesol class.png" alt="Pi-chart Image">
                                <img src="<?=URL_LINK?>public/assets/images/shape tesol class.png" alt="Pi-chart Image">
                                <a href="https://www.youtube.com/watch?v=e2_55D-84CQ?si=F8v4ceiDcDURin5l" class="video-play-btn video-popup-activation">
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
            <li class="shape-5 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="z-index: 1; transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img class="rotateit" data-depth="1" src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="Shape" style="transform: translate3d(-1.2px, -9.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
            <li class="shape-6 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="z-index: 1; transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img class="rotateit" data-depth="-1" src="<?=URL_LINK?>public/assets/images/about/shape-31.png" alt="Shape" style="transform: translate3d(1.3px, 9.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
        </ul>
    </div>

    <div class="edu-about-area photography-about-style section-gap-equal">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center">
                <h2 class="title">Combined <code>TESOL/TEFL</code> Courses</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 mx-auto sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <p style="text-align: justify; font-size: 2rem">
                            Our accredited TEFL/TESOL combo courses seamlessly combine online learning with hands-on educational experiences. The program begins with self-studying the principles and theory of teaching English online.
                        </p>
                        <p style="text-align: justify; font-size: 2rem">
                            After completing the theoretical component, participants receive 8 days of practical training at one of the training centers where real TANDEM students are mentored. The course duration is 170 hours and includes an additional 50 hours of his expertise, making a total of 220 hours.
                        </p>
                        <p style="text-align: justify; font-size: 2rem">
                            This course is designed for those who are unable to take a TEFL/TESOL course locally, but would like to undertake practical teaching practice, which is a requirement for a work visa in many countries.
                        </p>
                        <p style="text-align: justify; font-size: 2rem">
                            With a condensed 8-day on-site component, his TEFL Combo course is suitable for those who are unable to attend his traditional 4-week on-site program due to budget constraints or work commitments. Although shorter in duration, the combined course covers the same learning elements as the full-time program and results in a 120-hour TEFL/TESOL certificate.
                        </p>
                        <p style="text-align: justify; font-size: 2rem">
                            This certificate is accredited and carries credit like a full-time course. Graduates have the opportunity to continue their studies, including obtaining a master's degree in education. Upon completion, graduates receive comprehensive career support, including resume and cover letter preparation, access to school and recruiter information, and assistance with orientation specialists. Online courses that specialize in teaching business English, teaching young learners, or teaching TOEFL preparation give graduates increased earning potential from the get-go. Our commitment to providing comprehensive training ensures that our graduates are well-prepared to enter the teaching profession and become top candidates in the competitive TEFL job market.
                        </p>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape" style="transform: translate3d(-36.8px, 11.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                </li>
                <li class="shape-2 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="Shape">
                </li>
                <li class="shape-6 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img data-parallax="{&quot;x&quot;: 0, &quot;y&quot;: -70}" src="<?=URL_LINK?>public/assets/images/itti/Combined-bagde.png" width="250px" height="250px" alt="About Image" style="transform:translate3d(0px, -37.728px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -37.728px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-7 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape" style="transform: translate3d(-36.8px, 11.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
            <li class="shape-8 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <span></span>
            </li>
            <li class="shape-9 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="-2.5" style="transform: translate3d(17.3px, -5.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
            </li>
        </ul>
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

                        <h4 class="mt-5 pt-5">• Part 1</h4>
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
                                            Unit 2: The English Language
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 3: EFL Methodology – A Journey through History
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 4: Present Tenses
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 5: Successful Classroom Management
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 6: Past Tenses
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 7: Teaching New Language
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 8: Future Tenses
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 9: The Art of Lesson Design
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 10: Teaching & Technology – Making the Match
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 11: Partnering with Artificial Intelligence
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 12: Teaching Listening, Speaking, Reading & Writing
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 13: Teaching Pronunciation & Phonology
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 14: Course Books and Lesson Materials
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 15: Tradition & Innovation in Testing
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 16: Conditionals & Reported Speech
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
                                            Unit 18: Modals, Phrasal Verbs and Passive Voice
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 19: Teaching Special Groups
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Unit 20: Final lesson design task
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            UNIT 21: Career support (resume/CV, cover letter, school lists, recruiters, direct referrals, job leads, etc.) This is missing.
                                        </button>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <h4 class="mt-5 pt-5">• Part 2: 50-Hour In-Class Teaching Practicum</h4>
                        <div class="faq-accordion sal-animate row" id="faq-accordion" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Foreign Language Journal
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Lesson Observations
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Lesson Planning
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Lesson Execution
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Student Profile Project
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Textbook Evaluation
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Material’s Creation
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            Student Portfolio
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

    <div class="video-area-5 gap-bottom-equal">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 mx-auto">
                    <div class="video-gallery">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/bg-videos/chaima background tandem.png" alt="Thumb">
                            <a href="https://www.youtube.com/watch?v=e2_55D-84CQ?si=F8v4ceiDcDURin5l" class="video-play-btn video-popup-activation">
                                <i class="icon-18"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'src/view/public/pages/inscription.php'; ?>

<?php require_once 'src/view/public/includes/footer.php'; ?>