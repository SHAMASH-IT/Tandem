<style>
    .testimonial-grid .thumbnail img {
        border-radius: unset;
    }

    .testimonial-grid {
        background-color: transparent !important;
        background: transparent !important;
        box-shadow: unset !important;
        margin-left: unset !important;
        margin-right: unset !important;
    }
    .testimonial-coverflow .testimonial-grid:before {
        background-color: transparent !important;
    }
    .pr-3 {
        padding-right: 3rem;
    }
    .pl-3 {
        padding-left: 3rem;
    }
    .swiper-pagination-home {
        bottom: 115px !important;
    }

    .swiper .thumbnail img {
        height: 60% !important;
    }
    .swiper-home {
        width: 90% !important;
    }
    .banner-content .title {
        text-align: center;
    }

    .thumbnail img {
        box-shadow: unset !important;
    }
    .swiper {
        height : unset;
        background-color: var(--color-white);
        border-radius: 10px;
        padding: 0;
        box-shadow: 0px 20px 40px 0px rgba(0, 0, 0, 0.1);
    }
    .swiper .swiper-slide img {
        margin: 20px;
        box-shadow: unset;
    }
    .mb-15 {
        margin-bottom: 15rem !important;
    }
    /* h1.title span:first-child {
        font-size: 15rem; text-transform: uppercase; text-wrap: nowrap;
    }
    h1.title span:nth-child(2) {
        font-size: 6.8rem !important; text-transform: uppercase; text-wrap: nowrap;
    }
    @media screen and (max-width: 680px){
        h1.title span:first-child {
            font-size: 1in !important;
        }
        h1.title span:nth-child(2) {
            font-size: 2.25pc !important;
        }
    } */
    .tandem-title-logo {
        width: 90vw;
        height: auto;
    }
</style>


<div class="hero-banner hero-style-1">
    <div class="col-12 pl-3 pr-3 pt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 order-2 order-xs-2 order-sm-2 order-md-1">
                <div class="banner-content">
                    <img class="tandem-title-logo" src="<?=URL_LINK?>public/assets/images/logo-v2.png" alt="tandem name" />
                    <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">
                        <!-- <span>Tandem</span>
                        <span  class="color-primary">Trainign center</span><br> -->
                        <span class="color-primary">B</span>e <span class="color-primary">T</span>he <span class="color-primary">B</span>est
                    </h1>
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper mySwiper-logo">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="<?URL_LINK?>kids/summer-club">
                                        <img src="<?=URL_LINK?>public/assets/images/home-slider/affiche-club-d'été-v2.png" alt="Testimonial">
                                    </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?URL_LINK?>language-village">
                                        <img src="<?=URL_LINK?>public/assets/images/home-slider/language-village.png" alt="Testimonial">
                                    </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?URL_LINK?>sejour-linguistique">
                                        <img src="<?=URL_LINK?>public/assets/images/home-slider/séjour-lingustique.png" alt="Testimonial">
                                    </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?URL_LINK?>junior/summer-sessions">
                                        <img src="<?=URL_LINK?>public/assets/images/home-slider/affiche-summer-camp-site-min.png" alt="Testimonial">
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-1 order-xs-1 order-sm-1 order-md-2">
                <div class="banner-thumbnail">
                    <div class="thumbnail d-flex justify-content-center align-content-center" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                        <img src="<?=URL_LINK?>public/assets/images/banner/girl-1.webp" alt="Girl Image">
                    </div>
                    <div class="instructor-info" data-sal-delay="600" data-sal="slide-up" data-sal-duration="1000">
                        <div class="inner">
                            <h5 class="title">Enseignants</h5>
                            <div class="media">
                                <div class="thumb">
                                    <img src="<?=URL_LINK?>public/assets/images/banner/author-1.png" alt="Images">
                                </div>
                                <div class="content">
                                    <span>48+</span> Enseignants
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        
    </script>