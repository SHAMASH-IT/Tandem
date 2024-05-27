<?php
    $meta_facebook_image = URL_LINK . "public/assets/images/";
    $meta_facebook_title = "TANDEM Tunisie SESSIONS VACANCES (HIVER/PRINTEMPS)";
    $meta_facebook_description = "Rejoignez nos passionnants ateliers de langues pour adolescents cet été et plongez-vous dans une expérience d'apprentissage des langues passionnante et enrichissante.";
    $meta_facebook_width = "1600";
    $meta_facebook_height = "1200";

    require_once 'src/view/public/includes/header.php';
?>
    <style>
        .breadcrumb-style-2 {
            position: relative;
            z-index: 1;
            padding: 150px 0 150px;
        }
    </style>

    <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--21 shadow-lg">
        <!-- <div class="video shadow-lg">
            <img src="https://placehold.co/1480x660" alt="" style="height: 100%;" />
        </div> -->
        <div class="container">
            <div class="breadcrumb-inner" style="    filter: drop-shadow(2px 4px 6px black);">
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=URL_LINK?>">Accueil</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="<?=URL_LINK?>category/adultes/langues">Cours</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Juniors</li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Sessions Annuelles</li>
                </ul>
                <div class="page-title">
                    <h1 class="title" style="text-transform: uppercase;">Sessions Annuelles de langues (Extensives)</h1>
                </div>
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

    <?php
        if(!empty($formations))
        {
    ?>
    <div class="edu-course-area course-area-1 gap-tb-text hero-style-10" style="top: unset !important">
        <div class="container">
            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Cours Juniors Intensives</span>
                <h2 class="title">Choisissez un cours pour commencer</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <?php
                    foreach ($formations as $formation)
                    {
                        $id = $formation['formation_id'];
                        $photo = fetch_array("SELECT * FROM images WHERE identifier = '$id' AND deleted = 0 ");

                        if(empty($photo)) $photo['image_src'] = '';
                ?>
                    <div class="col-md-6 col-lg-4 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-3 course-box-shadow h-100 bg-white">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="<?=URL_LINK?>formation/<?=$formation['formation_slug']?>">
                                        <img src="<?=URL_LINK?>public/assets/uploads/<?=$photo['image_src']?>" alt="Course Meta">
                                    </a>
                                    <div class="time-top">
                                        <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        <a href="<?=URL_LINK?>formation/<?=$formation['formation_slug']?>"><?=$formation['language']?></a>
                                    </h5>
                                    <p>
                                        <?=substr($formation['formation_slogan'],0,90)?>...
                                    </p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-60" style="font-size: 3rem;"></i>
                                        </div>
                                        <span class="rating-count"><?=$formation['prix']?></span>
                                    </div>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-small btn-secondary" href="<?=URL_LINK?>formation/<?=$formation['formation_slug']?>">Plus... <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <?php
        }
    ?>


<?php require_once 'src/view/public/pages/inscription.php'; ?>
<?php require_once 'src/view/public/includes/footer.php'; ?>