<?php  require_once 'src/view/public/includes/header.php'; ?>

    <style>
        .loader-parent{
            position: fixed;
            top: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, .5);
            z-index: 22;
        }
        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid #FFF;
            border-bottom-color: #bcdc4c;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        } 
    </style>

    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Contact</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=URL_LINK?>">Accueil</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
            <li class="shape-5 scene"><img data-depth="2" src="<?=URL_LINK?>public/assets/images/about/shape-07.png" alt="shape"></li>
        </ul>
    </div>

    <!--=====================================-->
    <!--=       Contact Me Area Start       =-->
    <!--=====================================-->
    <section class="contact-us-area">
        <div class="loader-parent d-flex justify-content-center align-items-center d-none">
            <span class="loader"></span>
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-us-info">
                        <h3 class="heading-title">Nous sommes toujours impatients de recevoir de vos nouvelles!</h3>
                        <ul class="address-list">
                            <li>
                                <h5 class="title">Adresse</h5>
                                <p>03 Rue Ibn Koutaiba, BELVÉDÈRE 1002</p>
                            </li>
                            <li>
                                <h5 class="title">E-mail</h5>
                                <p><a href="mailto:info@tandem-tunisie.com">info@tandem-tunisie.com</a></p>
                            </li>
                            <li>
                                <h5 class="title">Téléphone</h5>
                                <p><a href="tel:+21698336336 ">(+216) 98 33 63 36 </a></p>
                                <p><a href="tel:+21671289884"> (+216) 71 28 98 84</a></p>
                                <p><a href="tel:+21655764764"> (+216) 55 76 47 64</a></p>
                                <p><a href="tel:+21654684684"> (+216) 54 68 46 84 </a></p>
                            </li>
                        </ul>
                        <ul class="social-share">
                            <li><a href="https://www.facebook.com/tandemtrainingcenter"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/@tandem.tunisie"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-xl-2 col-lg-6">
                    <div class="contact-form form-style-2">
                        
                        <div class="section-title">
                            <h4 class="title">Contactez-nous</h4>
                            <p>Remplissez ce formulaire pour réserver une séance de conseil avec un consultant.</p>
                        </div>
                        <div class="row row--10">
                            <div class="form-group col-12">
                                <label style="display: none;" id="error-msg" class="list-group-item rounded-3 py-3 bg-danger text-white" for="listGroupCheckableRadios1">
                                    <h4 class="text-white" style="margin-top: 20px;">Vérifiez vos données !</h4>
                                </label>
                                <label style="display: none;" id="success-msg" class="list-group-item rounded-3 py-3 bg-success text-white" for="listGroupCheckableRadios1">
                                    <h4 class="text-white" style="margin-top: 20px;">E-mail envoyé avec succès</h4>
                                </label>
                            </div>
                            <div class="form-group col-12">
                                <input type="text" name="name" id="name" placeholder="Votre nom et prénom">
                            </div>
                            <div class="form-group col-12">
                                <input type="email" name="email" id="email" placeholder="Votre E-mail">
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" name="phone" id="phone" placeholder="Téléphone">
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" name="subject" id="subject" placeholder="Sujet">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-12">
                                <button class="rn-btn edu-btn btn-medium submit-btn" name="submit" id="submit-contact-us">Envoyer <i class="icon-4"></i></button>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene"><img data-depth="1" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="Shape"></li>
                            <li class="shape-2 scene"><img data-depth="-1" src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="Shape"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="google-map-area">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51097.75350290525!2d10.150642628225906!3d36.82787412838715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd3488cb472617%3A0xe55e3f8fe07ac107!2sTANDEM%20TRAINING%20CENTER!5e0!3m2!1sen!2stn!4v1702633869407!5m2!1sen!2stn" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    
<?php require_once 'src/view/public/includes/footer.php'; ?>