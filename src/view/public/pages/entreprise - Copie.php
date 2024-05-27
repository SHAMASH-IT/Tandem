<?php 
require_once 'src/view/public/includes/header.php';?>
<!-- 

<style>
    .entreprise{
        background-image:url(<?=URL_LINK?>/public/assets/images/entreprise.png);
        background-size: cover;
        background-repeat: no-repeat;
    }
    .entreprise h2{
        color: red;
    }
    .entreprise ul{
        list-style: none;
        padding: 0;
    }
    .entreprise ul li {
        font-size: var(--font-size-b1);
        line-height: var(--line-height-b1);
        color: black;
        margin: 0;
    }
    .entreprise ul li::before {
        content: '\2022'; 
        color: #ff0000;
        margin-right: 0.5em;
    }
    .entreprise-content {
        margin: 8px 8px 8px 25%;
        background-color: #e4e4ff82;
        padding: 8px;
        box-shadow: 0px 0px 4px #000;
    }
</style>
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
<section class="entreprise">
    <div class="entreprise-content">

        <h2>PROGRAMMES DES COURS <br> DE LANGUES POUR <br> ENTREPRISES <br> ET ORGANISATIONS</h2>
        <ul>
            <li>Français général</li>
            <li>Français techniques de communication</li>
            <li>Français des affaires</li>
            <li>Club de Conversation en Français</li>
            <li>Anglais général</li>
            <li>Anglais des affaires</li>
            <li>English Conversation Club</li>
            <li>Cours d’allemand</li>
            <li>Cours d’arabe Classique ou dialecte Tunisien</li>
            <li>Cours d’espagnol</li>
            <li>Cours d’italien</li>
        </ul>

        <h2>Programmes spécialises</h2>
        <ul>
            <li>English for Banking</li>
            <li>English for Journalists</li>
            <li>English for Customer Care</li>
            <li>English for Negotiating</li>
            <li>English for Presentations</li>
            <li>English for Professors and Researchers</li>
            <li>English for Telecoms</li>
            <li>English for Professionals</li>
            <li>English for Medical Profession</li>
        </ul>

        <h2>SEJOUR LINGUISTIQUE</h2>
        <p style="color:black">Tous les cycles de formation sont pris en charge par la TFP</p>
    </div>

</section>

 -->













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