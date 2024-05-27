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
        .hero-style-4{
            padding-top: 50px;
        }
    </style>

    <div class="hero-banner hero-style-4 motivation-banner">
        <div class="container edublink-animated">
            <div class="row align-items-center">
                <div class="col-lg-8 edu-order-md-2">
                    <div class="banner-content sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000">
                        <h1 class="title sal-animate" style="text-align: left;" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">On-Site TEFL/TESOL Course</h1>
                        <p class="sal-animate" style="text-align: left; margin-left: 0;">
                            In Tandem Training Center we offer in-Class <code>TEFL</code> (Teaching English as a Foreign Language) and <code>TESOL</code> (Teaching English to Speakers of Other Languages) courses.
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
                                <a href="https://www.youtube.com/watch?v=DUMDl4-nirI?si=FXZnEA3lTHrLujDc" class="video-play-btn video-popup-activation">
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

    <div class="edu-about-area photography-about-style section-gap-equal">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center">
                <h2 class="title">About</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 mx-auto sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <p style="text-align: justify; font-size: 2rem">
                            Throughout the training, participants will participate in daily training sessions covering teaching methods, classroom management, accent reduction techniques, dynamic grammar instruction, and more. The majority of the course is devoted to preparing, implementing, and evaluating EFL lessons.
                        </p>
                        <p style="text-align: justify; font-size: 2rem">
                            Our student teachers range from English-speaking travelers and immigrants to non-English-speaking locals from around the world. This TEFL-TESOL course is of great value and suitable for both experienced teachers and those new to teaching English. Experienced EFL teachers can ensure that their teaching skills are on point through detailed analysis of TEFL practices.
                        </p>
                        <p style="text-align: justify; font-size: 2rem">
                            New EFL teachers have many practical opportunities to gradually acquire new skills and apply them in a teaching environment, while receiving immediate feedback from experienced TEFL trainers. Additionally, this course offers comprehensive career support services, including assistance with resume and cover letter writing, access to school lists and recruiter recommendations, and instant access to real TEFL job openings. To do.
                        </p>
                        <p style="text-align: justify; font-size: 2rem">
                            Our online TESOL courses are easily accessible through LinkedIn and provide additional opportunities for professional development. For more information on the scenic locations where our courses are held, please visit the specific locations page on our website. Upon completing the full-time program, all TEFL graduates have free access to specialized 50-hour TEFL courses in teaching business English, teaching young learners, or teaching business readiness. This additional training enhances their academic background and becomes a valuable asset in their career development.
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
                <li class="shape-4 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
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
                <div class="col-lg-9">
                    <div class="edu-faq-content">
                        <div class="section-title section-left sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">FAq’s</span>
                            <h2 class="title text-justify">
                                LOOK INSIDE OUR BEST ONLINE TEFL/TESOL COURSE CURRICULUM
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="faq-accordion sal-animate row" id="faq-accordion" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" style="margin-bottom: 30px">
                            <div class="accordion col-md-12">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="true">
                                            Foreign Language Experience
                                        </button>
                                    </h5>
                                    <div id="collapse0" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body" style="text-justify: justify">
                                            <p>
                                                This course consists of three short sessions that immerse TEFL course participants in an unfamiliar language. This will help you understand the following important aspects:
                                            </p>
                                            <ol>
                                                <li>
                                                    Starting the course in a situation where there is no common language between the participants.
                                                </li>
                                                <li>
                                                    Empathize with potential EFL students' initial experiences when they start learning English.
                                                </li>
                                                <li>
                                                    Implement alternative teaching methods for difficult aspects of language that improve students' understanding of fundamental concepts.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion sal-animate row" id="faq-accordion" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true">
                                            Classroom Management
                                        </button>
                                    </h5>
                                    <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                TEFL students learn important skills in classroom management, building teacher-student relationships, managing classroom behavior, effectively dealing with disruption, and creating dynamic and engaging learning environments.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true">
                                            Student Profile Project
                                        </button>
                                    </h5>
                                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Participants in the TEFL course learn techniques to assess students' EFL proficiency. These assessments serve as the basis for creating student assessments and provide constructive feedback and strategies to improve English proficiency in various subject areas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true">
                                            Grammar Awareness
                                        </button>
                                    </h5>
                                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                In the English Grammar Review, TEFL course participants review sample grammar activities that serve as valuable examples for creating engaging grammar lessons for EFL students.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true">
                                            EFL Methodology
                                        </button>
                                    </h5>
                                    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Our TEFL course begins with an overview of the history of language teaching and traces its evolution over the centuries to the present day. Students will learn the basics of language teaching and gradually learn how to foster the development of students' language skills. You will also learn skills to teach grammar and vocabulary effectively. The key to this course is to structure individual lessons so that students can recognize their progress. Additionally, TEFL graduates will understand assessment strategies and the different assessment systems used around the world.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true">
                                            Phonology
                                        </button>
                                    </h5>
                                    <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Students will learn various aspects of accent reduction, including word and phrase stress, intonation, connecting and connecting sounds, and individual sounds. By the end of the course, TEFL graduates will have the skills to design engaging phonological activities that will enable EFL students to return to the classroom enthusiastically and confidently demonstrate their knowledge of English phonology. I can.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true">
                                            Lesson Planning
                                        </button>
                                    </h5>
                                    <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                After completing the TEFL program, participants will gain a deep understanding of the components of lesson planning, including the development of planning skills and the different orders associated with vocabulary/grammar segments. You will be able to create lesson plans that help students effectively achieve their learning goals. Our courses place a special emphasis on lesson planning, where a teacher's true expertise is demonstrated, and well-developed lesson plans are often a prerequisite for employment in educational institutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true">
                                            Lesson Observations
                                        </button>
                                    </h5>
                                    <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                To facilitate the acquisition of essential teaching skills, TEFL students observe and evaluate the activities of other students. This experiential learning approach promotes critical thinking and allows students to more effectively evaluate their own teaching methods.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true">
                                            Material’s Creation
                                        </button>
                                    </h5>
                                    <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                                During their teaching practicum, TEFL students are required to create their own materials for the class (worksheets, photos, flashcards, PowerPoint presentations). They learn how to help themselves in situations where resources are scarce. This situation can potentially arise if you study abroad in Africa, a poor country in Asia, or an isolated region in South America. During their teaching practicum, TEFL students are required to create their own materials for the class (worksheets, photos, flashcards, PowerPoint presentations). They learn how to help themselves in situations where resources are scarce. This situation can potentially arise if you study abroad in Africa, a poor country in Asia, or an isolated region in South America.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="edu-faq-gallery">
                        <div class="faq-thumbnail thumbnail-1 sal-animate" data-sal-delay="50" data-sal="slide-left" data-sal-duration="800">
                            <img src="<?=URL_LINK?>public/assets/images/others/faq-6.webp" alt="Faq Images">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span></span>
                            </li>
                            <li class="shape-2 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span></span>
                            </li>
                            <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                <img data-depth="1.5" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape Images" style="transform: translate3d(-22.1px, 4.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            </li>
                            <li class="shape-4 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img class="rotateit" src="<?=URL_LINK?>public/assets/images/faq/shape-04.png" alt="Shape Images">
                            </li>
                            <li class="shape-5 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="<?=URL_LINK?>public/assets/images/others/shape-39.png" alt="Shape">
                            </li>
                        </ul>
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
                            <a href="https://www.youtube.com/watch?v=DUMDl4-nirI?si=FXZnEA3lTHrLujDc" class="video-play-btn video-popup-activation">
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