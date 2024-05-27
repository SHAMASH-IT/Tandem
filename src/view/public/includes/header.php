<?php start_cache(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= $page_title ?? 'Tandem Training Center'?></title>
    
    <meta name="description" content="<?=$page_description ?? 'Tandem Training Tunisie est le leader centre de formation de langue en Tunisie. La compétence des formateurs sera votre atout et un facteur essentiel du succès'?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- begin facebook meta data -->
    <meta property="og:image" content="<?php echo isset($meta_facebook_image) ? $meta_facebook_image : 'Default Image'; ?>"/>
    <meta property="og:title" content="<?php echo isset($meta_facebook_title) ? $meta_facebook_title : 'TANDEM Title'; ?>"/>
    <meta property="og:description" content="<?php echo isset($meta_facebook_description) ? $meta_facebook_description : 'TANDEM description'; ?>"/>
    <meta property="og:image:width" content="<?php echo isset($meta_facebook_width) ? $meta_facebook_width : '0'; ?>"/>
    <meta property="og:image:height" content="<?php echo isset($meta_facebook_height) ? $meta_facebook_height : '0'; ?>"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:site_name" content="Tandem Training Center"/>
    <meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>"/>
    <!-- end facebook meta data -->


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=URL_LINK?>public/assets/images/favicon.png">
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/vendor/remixicon.css">
    <!-- <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/vendor/magnifypopup.min.css"> -->
    <!-- <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/vendor/odometer.min.css"> -->
    <!-- <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/lightbox.css"> -->
    <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/vendor/animation.min.css">
    <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/vendor/swiper-bundle.min.css">
    <!-- <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/vendor/tipped.min.css"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet">  
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="<?=URL_LINK?>public/assets/css/app.css">

    <!-- <script src="<?=URL_LINK?>public/assets/js/lightbox-plus-jquery.min.js"></script> -->

    
    <style>
        .rn-progress-parent {
            right: 2% !important;
        }
        .mainmenu-nav .mainmenu > li > a {
            height: unset !important;
            line-height: unset !important;
            margin: 20px 5px 20px 5px !important;
        }
        .mainmenu-nav .mainmenu > li.active-li > a:hover{
            color: var(--color-white) !important;
        }

        .swiper {
            width: 100%;
            height: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            width: 100%;
        }

        .mySwiper {
            height: 100px;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .autoplay-progress {
            position: absolute;
            right: 16px;
            bottom: 16px;
            z-index: 10;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: whitesmoke;
        }

        .autoplay-progress svg {
            --progress: 0;
            position: absolute;
            left: 0;
            top: 0px;
            z-index: 10;
            width: 100%;
            height: 100%;
            stroke-width: 4px;
            stroke: whitesmoke;
            fill: none;
            stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
            stroke-dasharray: 125.6;
            transform: rotate(-90deg);
        }
    </style>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");

       /*  lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        }) */

        const swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        const swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            }
        });
    </script>
    
    <style>
        .submenu.mega-sub-menu { padding-top: 0 !important; }
        .mainmenu-nav .mainmenu li.has-droupdown .submenu li a:hover {
            /* color: var(--color-primary) !important; */
            /* background: linear-gradient(20deg, rgb(64, 68, 72) 71%, rgb(188, 215, 76) 74%); */
            background-color: var(--color-darker)
        }
        .mainmenu-nav .mainmenu li.has-droupdown .submenu li a {
            position: relative;
        }
        .mainmenu-nav .mainmenu li.has-droupdown .submenu li a::after {
            content: '';
            position: absolute;
            top: 4px;
            right: -11px;
            background-color: var(--color-primary);
            height: 24px;
            width: 24px;
            transform: rotate(45deg);
            z-index: 1000;
        }
        .mainmenu-nav .mainmenu li.has-droupdown .submenu li.has-droupdown:hover .submenu {
            background-color: var(--color-primary)
        }
        .mainmenu-nav .mainmenu li.has-droupdown .submenu li.has-droupdown:hover .submenu a{
            color: #fff;
            background-color: var(--color-darker)
        }
        a.edu-btn, button.edu-btn {
            border-radius: 0px;
        }
        .header-top-bar { 
            background-color: var(--color-darker); 
        }

        [class^="icon-"], [class*=" icon-"],
        .header-top .header-notify a,
        .header-top .header-info li i, 
        .header-top .header-info li a:hover, 
        .header-top .header-info li.social-icon a:hover i {

            color: var(--color-primary);
        }
        .mainmenu-nav .mainmenu li.has-droupdown .submenu li a:hover {
            background-color: unset;
        }
        .header-top .header-info li a:hover i, 
        .header-top .header-info li.social-icon a:hover i,
        .social-share li a:hover i{
            color: #fff;
        }

        .faq-style-6 .faq-accordion .accordion-item .accordion-button.collapsed{
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            border-radius: 0 !important;
        }

        .accordion-item .accordion-collapse{
            background: aliceblue;
        }
        .main-page-itti-combined .faq-accordion .accordion-item .accordion-button.collapsed:before{
             content: "";
        }

        .main-page-itti-level5-tefl-certificate-course .brand-grid-wrap.brand-style-2 {
            grid-template-columns: repeat(3, 1fr);
        }

        .main-page-itti-level5-tefl-certificate-course .course-style-16 {
            background: var(--color-white);
            box-shadow: var(--shadow-darker);
            border-radius: 5px;
            padding: 30px 30px;
        }

        .main-page-itti-level5-tefl-certificate-course p{
            text-align:  justify !important;
        }

        .line-1{
            position: relative;
            top: 50%;  
            width: 24em;
            border-right: 2px solid rgba(255,255,255,.75);
            font-size: 180%;
            white-space: nowrap;
            overflow: hidden;
            transform: translateY(-50%);
            color: var(--color-primary);
        }

        /* Animation */
        .anim-typewriter{
            animation: typewriter 3s steps(44) 1s 1 normal both,
            blinkTextCursor 500ms steps(44) infinite normal;
        }
        @keyframes typewriter{
            from{width: 0;}
            to{width: 100%;}
        }
        @keyframes blinkTextCursor{
            from{border-right-color: rgba(255,255,255,.75);}
            to{border-right-color: transparent;}
        }

        .features-area-5 .features-box .content {
            box-shadow: unset;
        }
        .sub-menu-itti {
            opacity: 0 !important;
            top: 90% !important;
            -webkit-transition: all 0.3s !important;
            transition: all 0.3s !important;
            visibility: hidden !important;            
        }

        .menu-itti-specialized:hover .mega-sub-menu-specialized,
        .menu-itti-online:hover .mega-sub-menu-online {
            opacity: 1 !important;
            top: 0%  !important;
            visibility: visible !important;
        }
        .mainmenu-nav .mainmenu li.has-droupdown .submenu li a::after{
            content: "";
            height: 0;
            width: 0;
        }
        .mainmenu-nav .mainmenu li.has-droupdown .submenu li.has-droupdown > a::after {
            top: 4px;
            right: default;
            background: linear-gradient(45deg, transparent 50%, #bcd74c 0%);
            content: '';
            position: absolute;
            top: 4px;
            right: -11px;
            background-color: var(--color-primary);
            height: 24px;
            width: 24px;
            transform: rotate(45deg);
            z-index: 1000;
            top: 4px;
            right: default;
            background: linear-gradient(45deg, transparent 50%, #bcd74c 0%);
        }
        
        
        .sbuttons {
            bottom: 8%;
            position: fixed;
            margin: 1em;
            right: 0;
            z-index: 999;
        }
        .sbutton {
            display: block;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            color: white;
            margin: 20px auto 0;
            box-shadow: 0px 5px 11px -2px rgba(0, 0, 0, 0.18), 0px 4px 12px -7px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            -webkit-transition: all .1s ease-out;
            transition: all .1s ease-out;
            position: relative;
        }
        .sbutton > i {
        font-size: 38px;
        line-height: 60px;
        transition: all .2s ease-in-out;
        transition-delay: 2s;
        }
        .sbutton:active,
        .sbutton:focus,
        .sbutton:hover {
        box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
        }
        .sbutton {
            width: 40px;
            height: 40px;
            margin: 5px auto 0;
            opacity: 1;
        }
        .sbutton > i {
            font-size: 25px;
            line-height: 40px;
            transition: all .3s ease-in-out;
        }
        

        [tooltip]:before {
            font-weight: 600;
            border-radius: 2px;
            background-color: #585858;
            color: #fff;
            content: attr(tooltip);
            font-size: 12px;
            visibility: hidden;
            opacity: 0;
            padding: 5px 7px;
            margin-right: 10px;
            position: absolute;
            right: 100%;
            bottom: 20%;
            white-space: nowrap;
            transition: .3s all linear;
        }

        [tooltip]:hover:before,
        [tooltip]:hover:after {
            visibility: visible;
            opacity: 1;
        }
        .sbutton.mainsbutton {
        background: #2ab1ce;
        }
        .sbutton.gplus {
        background: #F44336;
        }
        .sbutton.youtube {
        background: #FF0000;
        }
        .sbutton.linkedin {
        background: #0077b5;
        }
        .sbutton.fb {
        background: #3F51B5;
        }
        .sbutton.instagram {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
        }
        .sbutton.whatsapp {
            background: #25D366;
        }
        .sbuttons a:hover{
            color: white !important;
        }
        .video-play-btn {
            background: var(--color-primary) !important;
        }

        .video-play-btn i {
            color: white !important;
        }
    </style>
</head>

<body class="sticky-header ">
    
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <div id="main-wrapper" class="main-wrapper">

        <header class="edu-header header-style-1 header-fullwidth">
            <?php require_once 'src/view/public/includes/header_topbar.php'; ?>
            

            <div id="edu-sticky-placeholder"></div>

            <?php 
                require_once 'src/view/public/includes/header_desktop.php'; 
                require_once 'src/view/public/includes/header_mobile.php'; 
            ?>
        </header>

        <div class="sbuttons">
            <a href="https://api.whatsapp.com/send?phone=98336336" target="_blank" class="sbutton whatsapp" tooltip="Whatsapp" title="link whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/tandem_training_center/" target="_blank" class="sbutton instagram" tooltip="Instagram" title="link instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/tandemTC.tn" target="_blank" class="sbutton fb" tooltip="Facebook"><i class="fab fa-facebook-f" title="link facebook"></i></a>
            <a href="https://www.linkedin.com/company/tandem-training-center/" target="_blank" class="sbutton linkedin" tooltip="Linkedin" title="link linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/@tandem.tunisie" target="_blank" class="sbutton youtube" tooltip="Youtube" title="link youtube"><i class="fab fa-youtube"></i></a>
        </div>  
