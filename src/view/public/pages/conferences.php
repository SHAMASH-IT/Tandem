<?php  
 
 $page_title = "Nos conférences | Tandem Training Center";

require_once 'src/view/public/includes/header.php';
?>

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Nos Conférences</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="index-one.html">Accueil</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item"><a href="#">Conférences</a></li>
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
<style>
    .edu-event-list .thumbnail {
        max-width: unset;
    }
</style>
<div class="edu-event-area event-area-1 section-gap-equal">
    <div class="container" style="max-width: fit-content;">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event-list event-list-2">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="<?=URL_LINK?>conferences/itti">
                                        <img src="<?=URL_LINK?>public/assets/images/itti/event-itti.png" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="event-meta">
                                        <li><i class="icon-27"></i>5-6 Février, 2024</li>
                                        <li><i class="icon-33"></i>08:00AM</li>
                                    </ul>
                                    <h4 class="title"><a href="<?=URL_LINK?>conferences/itti">ITTI - International TEFL Training Institute: <br>Innovate methods to motivate learners</a></h4>
                                    <span class="event-location"><i class="icon-40"></i>Hammamet - Hotel</span>
                                    <p>ITTi TEFL Tunisia le fournisseur unique de certificat TEFL TESOL.</p>
                                    <div class="read-more-btn"  style="text-align: right;">
                                        <a class="edu-btn btn-medium btn-border" href="<?=URL_LINK?>conferences/itti">Voir plus <i class="icon-4"></i></a>
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

<?php 
require_once 'src/view/public/includes/footer.php';
?>