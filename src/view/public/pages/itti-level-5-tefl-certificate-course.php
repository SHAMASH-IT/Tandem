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
        .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100% !important;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .testimonial-grid {
        box-shadow: none;
    }
    .testimonial-grid p {
        font-size: 2rem !important;
        color: black;
    }
    .hero-style-4 {
        padding-top: 50px;
    }
  </style>

    <div class="hero-banner hero-style-4 motivation-banner overflow-hidden">
        <div class="container edublink-animated">
            <div class="row align-items-center">
                <div class="col-lg-8 edu-order-md-2">
                    <div class="banner-content sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000">
                        <h1 class="title sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" style="text-align: left;">
                            <code>TESOL/TEFL</code> Level 5 Certificate
                        </h1>
                        <p class="sal-animate">
                            In Tandem Training Center we offer <code>Level 5</code> Certificate In Teaching English As A Foreign Language.
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
                                <a href="https://www.youtube.com/watch?v=vQuDuOzBH9M?si=tWA-jONutrOqSiD_" class="video-play-btn video-popup-activation">
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
        </ul>
    </div>

    <div class="edu-about-area photography-about-style section-gap-equal">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center">
                <h2 class="title">Qualification Purpose</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 mx-auto sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <p style="text-align: justify; font-size: 2rem">
                            This standalone specialist qualification is designed for Teachers seeking to enhance their expertise in teaching English to non-native speakers. The course equips learners with a comprehensive understanding of the English language and effective teaching methodologies. Participants learn to assess learners' needs, create tailored lesson plans and materials, and adapt resources to suit the requirements of young learners.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="video-gallery video-gallery-5" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/iTTi_Official_Exclusive_Single_City_License_Partner_Badge2024.jpg" alt="Thumb">
                            <a href="https://www.youtube.com/watch?v=P47ElR2Ju8o?si=BpRLmgHW9_b0k1S8" class="video-play-btn video-popup-activation">
                                <i class="icon-18"></i>
                            </a>
                        </div>
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

    <div class="edu-brand-area brand-area-6 brand-motivition">
        <div class="container">
            <div class=" brand-style-2">
                <div class="brand-grid">
                    <div class="section-title section-left course-style-16 h-100">
                        <h2 class="title">Target Audience</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <div class="about-content">
                            <ul class="features-list">
                                <li>Learners with little or no experience of teaching English</li>
                                <li>Teachers who wish to specialize in teaching English</li>
                                <li>EFL teachers who wish to brush up on their knowledge and skills</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="brand-grid">
                    <div class="section-title section-left course-style-16 h-100">
                        <h2 class="title">Structure</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p>
                            Learners must achieve 29 credits from 11 mandatory units.
                        </p>
                        <div class="about-content">
                            <ul class="features-list">
                                <li>Principles of Teaching English as a Foreign Language</li>
                                <li>Understanding English Grammar</li>
                                <li>Teaching English Grammar</li>
                                <li>Teaching English Vocabulary</li>
                                <li>Teaching Productive Skills: Speaking and Writing</li>
                                <li>Teaching Receptive Skills: Listening and Reading</li>
                                <li>Materials and Aids for Teaching English</li>
                                <li>Teaching Pronunciation of English</li>
                                <li>Lesson Planning for Teaching English as a Foreign Language</li>
                                <li>Teaching English as a Foreign Language to Young Learners</li>
                                <li>Using Resources Effectively When Teaching English as a Foreign Language.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="brand-grid">
                    <div class="section-title section-left course-style-16 h-100">
                        <h2 class="title">Prerequisites</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <div class="about-content">
                            <ul class="features-list">
                                <li>Minimum age: 16 years and above</li>
                                <li>Minimum educational requirement: High School Diploma or equivalent</li>
                                <li>Initial skills assessment: English, mathematics, and ICT (Information Communication Technology)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brand-style-2">
                <div class="brand-grid">
                    <div class="section-title section-left course-style-16 h-100">
                        <h2 class="title">Guided Learning Hours</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p>
                            168
                        </p>
                    </div>
                </div>
                <div class="brand-grid">
                    <div class="section-title section-left course-style-16 h-100">
                        <h2 class="title">Total Qualification Time</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p>
                            290 hours includes independent study time.
                        </p>
                    </div>
                </div>
                <div class="brand-grid">
                    <div class="section-title section-left course-style-16 h-100">
                        <h2 class="title">Assessment</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p>
                            The qualification is assessed by internally set and marked assessments subject to external quality assurance. Examples of assessment methods include the following:
                        </p>
                        <div class="about-content">
                            <ul class="features-list">
                                <li>
                                    assignments, case studies, portfolio of evidence, online assessments, observations, projects, reflective learning journals, self-evaluations and action plans.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu-brand-area brand-area-1 brand-motivition mt-5 pt-5 pb-5 mb-5">
        <div class="container">
            <div class="edu-faq-content">
                <div class="tab-content sal-animate" id="v-pills-tabContent" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="faq-accordion" id="faq-accordion">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false">
                                            Distance Learning
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion" style="">
                                        <div class="accordion-body">
                                            <p>
                                                This course is designed for ambitious people with busy schedules who want to study independently. Our program provides 24/7 access to a learning management system that provides easy access to all course materials and resources. You can learn at your own pace, complete assignments, and set your own pace. If you have any questions or need help with the process, don't worry, our instructors are always available to assist you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true">
                                            Blended Learning
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion" style="">
                                        <div class="accordion-body">
                                            <p>
                                                With our program, you'll enjoy the benefits of online self-study, plus the added support of up to 12 hours of tutoring from experienced teachers. This includes instruction during 6 hours of training practice. Training schedules are flexible and will be arranged between you and your U.S. admissions consultant once you complete the online component.    
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                            In-Class Program
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>
                                            Throughout the in-class program, you'll convene daily with fellow students for interactive lessons led by seasoned instructors. Together, you'll engage in discussions on various subjects and apply course content to real-world industry situations. Additionally, the program includes teaching practice sessions with real TANDEM students, providing invaluable hands-on experience.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-area-17 section-gap-equal digital-marketing-testimonial edublink-animated-shape" style="background: url('<?=URL_LINK?>public/assets/images/bg/bg-image-36.webp'); background-repeat: round; background-color: gray;">
        <div class="container edublink-animated-shape">
            <div class="testimonial-heading-area">
                <div class="section-title section-center sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title">Level 5 TEFL Course By TANDEM</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="p-5">
                            <div class="testimonial-grid">
                                <div class="content">
                                    <h3 class="title">Highlights</h3>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <p>
                                        Receive 318 hours of comprehensive training, including 168 hours of instructor-led courses. Our programs are designed to give you professional experience, whether you're teaching business English to young students or preparing them for the IELTS or TOEFL exams. Gain hands-on experience by providing hands-on lessons with real TANDEM students. Plus, you'll have access to dedicated expert support to help you secure a teaching position in the location of your choice.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="p-5">
                            <div class="testimonial-grid">
                                <div class="content">
                                    <h3 class="title">Benefits of this Course</h3>
                                    <div class="rating-icon">
                                        <i class="icon-20"></i>
                                        <i class="icon-20"></i>
                                        <i class="icon-20"></i>
                                        <i class="icon-20"></i>
                                        <i class="icon-20"></i>
                                    </div>
                                    <p>
                                        The TEFL Level 5 certification provides future teachers with the most comprehensive training and equips them with the latest skills needed to succeed as an TANDEM teacher. Graduates of this program are in high demand at schools for several reasons. First, it has the versatility to meet a wide range of educational needs in schools. With specializations in English for Specific Purposes, Young Learners, and Test Preparation, we can teach in any area your school needs. Many schools strive to incorporate achievement testing into their curriculum, but there is a shortage of teachers with specialized training in this area. Our program ensures that our graduates become indispensable educators, capable of fulfilling a variety of educational roles. Additionally, experienced TANDEM teachers can also benefit from this course. This serves not only as a refresher, but also as an opportunity to update outdated teaching methods and continue professional development. For experienced teachers, gaining experience teaching business English to young students and preparing them for achievement tests (TOEFL/IELTS) can open up many new job opportunities that they may not have considered before. can.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class="gap-top-equal edu-about-area about-style-17 pb-5">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <div class="section-title section-left sal-animate"  style="text-align: center;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <h2 class="title">TANDEM TEFL Training Center</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="about-content sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <p class="p-5 m-5 shadow-lg bg-white testimonial-grid">
                            Earn your TEFL Level 5 qualification from TANDEM, the International TEFL Training Institute, one of the most experienced and certified TEFL course providers in the United States. Our comprehensive courses provide you with the skills and knowledge you need to start your English teaching journey, whether abroad or online. The TANDEM TEFL Level 5 course is available in two formats: a 340-hour online program and an in-person course. Both courses are taught by highly qualified and experienced ESL teachers, so you can be sure of top-notch instruction. Level 5 TEFL courses are regulated by TQUK, an accredited OFQUAL certification body, and are comparable in complexity to the Diploma in Higher Education (DipHE), foundation degrees, two years of university study, CELTA qualifications and Trinity. Equivalent to CertTESOL. .

                            What is the difference between Level 5 and TANDEM? Once you complete your studies, you will specialize in teaching business English to young learners and preparing them for IELTS/TOEFL, giving you a competitive edge in the job market.

                            Compared to other Level 5 course options, TANDEM Level 5 offers excellent value for your investment. In addition, TANDEM has a strong network of schools around the world, especially in the Middle East, offering numerous career opportunities to its graduates. Career support is seamlessly integrated into our programs, making your job search easier. Wait no longer – start your teaching career with TANDEM today!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-area-5 gap-bottom-equal pt-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 mx-auto">
                    <div class="video-gallery">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/others/video-5.webp" alt="Thumb">
                            <a href="https://www.youtube.com/watch?v=PICj5tr9hcc" class="video-play-btn video-popup-activation">
                                <i class="icon-18"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                    delay: 3000,
                    pauseOnMouseEnter: true,
                },
            loop : true
        });
    </script> 
<?php require_once 'src/view/public/pages/inscription.php'; ?>
<?php require_once 'src/view/public/includes/footer.php'; ?>