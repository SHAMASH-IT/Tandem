<?php 
require_once 'src/view/public/includes/header.php';?>

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Entreprise</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_LINK?>">Accueil</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Entreprise</li>
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
<section>
    <img src="<?=URL_LINK?>public/assets/images/entreprise.jpg" alt="Tandem programme d'entreprise" style="width:100%;">
</section>
<section class="edu-section-gap contact-form-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <div class="section-title section-center">
                        <h3 class="title">Demander une offre</h3>
                    </div>
                    <form class="rnt-contact-form rwt-dynamic-form" id="contact-form" method="POST" action="">
                        <div class="row row--10">
                            <div class="form-group col-lg-12">
                                <input type="text" name="raison" id="raison" placeholder="Raison sociale">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="responsable" id="responsable" placeholder="Responsable">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="email" name="email" id="contact-email" placeholder="Votre Email">
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" name="phone" id="contact-phone" placeholder="Téléphone">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="address" id="address" placeholder="Addresse">
                            </div>
                            
                            <h4 class="title" style="font-size: 14px;">Langue</h4>
                            <div class="form-group col-12">
                                <select name="formation" id="formation" class="control-form" style="background: white;">
                                    <option value="français">Français</option>
                                    <option value="anglais">Anglais</option>
                                    <option value="espagnol">Espagnol</option>
                                    <option value="arabe">Arabe</option>
                                    <option value="allemand">Allemand</option>
                                    <option value="italien">Italien</option>
                                </select>
                            </div>

                            <div class="form-group col-12 text-center">
                                <button class="rn-btn edu-btn submit-btn" name="submit" type="submit">Demander</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'src/view/public/includes/footer.php';
?>