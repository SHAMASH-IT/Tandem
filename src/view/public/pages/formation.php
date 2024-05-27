<?php

    $page_title = $formation['formation_title'] ?? '';

    $str = $formation['formation_title'];
    $link = '';

    $formation_id = $formation['formation_id'];
    $image = fetch_array("SELECT * FROM images WHERE identifier = '$formation_id'");

    $descriptions = json_decode($formation['formation_description'] ?? '', true);
    if(!empty($descriptions)){
        $description = $descriptions[0]['title'];
    }

    if(isset($image))
    {
        $image = $image['image_src'];
    }else{
        $image = URL_LINK . "public/assets/images/logo.png"; 
    }

    $meta_facebook_image = URL_LINK . "public/assets/uploads/" . $image;
    $meta_facebook_title = "TANDEM Tunisie";
    $meta_facebook_description = $description;
    $meta_facebook_width = "1600";
    $meta_facebook_height = "1200";

    require_once 'src/view/public/includes/header.php';


    // if(strpos(strtolower($str), 'anglais') !== false && strpos(strtolower($str), 'intensif') !== false){
    //     $link = URL_LINK . "public/assets/images/affiche/affiche apprendre anglais cours intensif.png";
    // }elseif(strpos(strtolower($str), 'anglais') !== false && strpos(strtolower($str), 'extensif') !== false){
    //     $link = URL_LINK . "public/assets/images/affiche/affiche apprendre anglais cours extensif.png";
    // }elseif(strpos(strtolower($str), 'allemand') !== false){
    //     $link = URL_LINK . "public/assets/images/affiche/affiche apprendre allemand cours intensif.png";
    // }elseif(strpos(strtolower($str), 'allemand') !== false && strpos(strtolower($str), 'extensif') !== false){
    //     $link = URL_LINK . "public/assets/images/affiche/affiche apprendre allemand cours extensif.png";
    // }
?>

    <style>
        p{
            font-size: 2rem;
        }
        .course-details-content .entry-content .thumbnail:after {
            content: unset;
        }
        .ball:hover {
            animation: float 3.5s ease-in-out infinite;
            filter: drop-shadow(0 0.5rem 1rem rgba(0, 0, 0, .3));
            cursor: pointer;
        }        
        @keyframes float {
            0% {
                transform: translatey(0px);
            }
            50% {
                transform: translatey(-30px);
            }
            100% {
                transform: translatey(0px);
            }
        }

        a.edu-btn-test-level {
            text-align: center;
            border-radius: 5px;
            display: inline-block;
            height: 60px;
            line-height: 62px;
            color: var(--edu-btn-color);
            background: var(--color-danger) !important;
            z-index: 1;
        }
        p {
            text-align: justify !important;
        }
    </style>

        <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--21" style="padding: 100px 0 180px !important;">
            <div class="container">
                <div class="breadcrumb-inner">
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=URL_LINK?>">Accueil</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="<?=URL_LINK?>category/adultes/langues">Cours</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$formation['formation_title']?></li>
                    </ul>
                    <div class="page-title">
                        <h1 class="title" style="text-transform: uppercase;"><?=$formation['formation_title']?></h1>
                        <!-- <p class="text-white"><?=$formation['formation_slogan']?></p> -->
                    </div>
                    <ul class="course-meta">
                        <li class="text-white"><i class="icon-58"></i><?=$formation['enrolled']?></li>
                        <li class="text-white"><i class="icon-59"></i><?=$formation['language']?></li>
                        <!-- <li class="course-rating">
                            <div class="rating">
                                <i class="icon-23"></i>
                                <i class="icon-23"></i>
                                <i class="icon-23"></i>
                                <i class="icon-23"></i>
                                <i class="icon-23"></i>
                            </div>
                            <span class="rating-count">(720 Rating)</span>
                        </li> -->
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

        <section class="edu-section-gap course-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col">
                            <div class="read-more-btn position-relative">
                                <a href="https://tandem.mtderp.com/Tandem/Questions/testniveau" class="edu-btn edu-btn-test-level position-relative" style="font-size: 3rem;">Testez Votre Langue <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="course-details-content course-details-3">

                            <div class="entry-content">
                               
                                <!-- <ul class="course-meta">
                                    <li><i class="icon-58"></i>by Edward Norton</li>
                                    <li><i class="icon-59"></i>English</li>
                                    <li class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(720 Rating)</span>
                                    </li>
                                </ul> -->
                                <div class="thumbnail">
                                    <?php
                                        $title = $formation['formation_title'];

                                        if(isset($image))
                                        {;
                                        ?>
                                            <img src="<?=URL_LINK?>public/assets/uploads/<?=$image?>" alt="affiche TANDEM <?=$title?>">

                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Description</button>
                                </li>
                            </ul> -->

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab"> <div class="course-tab-content">
                                        <div class="course-overview">
                                            <h3 class="heading-title">Description</h3>
                                            <?php
                                                $descriptions = json_decode($formation['formation_description'] ?? '', true);
                                                if(!empty($descriptions)){
                                                    foreach($descriptions as $description):
                                                ?>


                                                    <p class="title" style="font-size: 2rem;"><?=nl2br(html_entity_decode($description['title']))?></p>
                                                    <p class="mb--60"><?=nl2br(html_entity_decode($description['description']))?></p>
                                                <?php endforeach; ?>
                    
                                            <?php } ?>
                                                <div class="row" id="ball-levels">
                                                    <div class="col-12">
                                                        <h3 class="heading-title">Niveaux: </h3>
                                                    </div>
                                            <?php
                                                $formation_modules = json_decode($formation['formation_modules'] ?? '', true);                                                
                                                if(!empty($formation_modules))
                                                {
                                                    $index = 0;
                                                    foreach($formation_modules as $key => $value):
                                                        $index++;
                                            ?>

                                                    
                                                    <div class="col d-flex justify-content-center">
                                                        <div class="align-content-center d-grid justify-content-center ball" style="background-image: url('<?=URL_LINK?>public/assets/images/cercle-niveaux/cer-<?=$index?>.png');background-size: contain; background-position: center; height: 90px; width: 90px; background-repeat: no-repeat; font-size: 2rem; color: #000">
                                                            <?php echo $value['title'] ?>
                                                        </div>
                                                    </div>
                                             <?php
                                                    endforeach;
                                                }
                                            ?>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-sidebar-3">
                            <div class="edu-course-widget widget-course-summery">
                                <div class="inner">
                                    <div class="content">
                                        <h4 class="widget-title">Informations:</h4>
                                        <ul class="course-item">
                                            <li>
                                                <span class="label"><i class="icon-60"></i>Prix:</span>
                                                <span class="value price"><?=$formation['prix']?></span>
                                            </li>
                                            <li>
                                                <span class="label"><i class="icon-61"></i>Durée:</span>
                                                <span class="value"><?=$formation['duration']?></span>
                                            </li>
                                            <li>
                                                <span class="label"><i class="icon-24"></i>Lessons:</span>
                                                <span class="value"><?=$formation['lessons']?></span>
                                            </li>
                                            <li>
                                                <span class="label"><i class="icon-63"></i>Type:</span>
                                                <span class="value"><?=$formation['type']?></span>
                                            </li>
                                            <li>
                                                <span class="label"><i class="icon-64"></i>Cadence:</span>
                                                <span class="value"><?=$formation['cadence']?></span>
                                            </li>
                                            <li>
                                                <span class="label"><i class="icon-64"></i>Période:</span>
                                                <span class="value"><?=$formation['period']?></span>
                                            </li>
                                            <li>
                                                <span class="label"><i class="icon-61"></i>Nb d'heures:</span>
                                                <span class="value"><?=$formation['hours']?></span>
                                            </li>
                                            <li>
                                                <span class="label"><i class="icon-61"></i>Horaire:</span>
                                                <span class="value"><?=$formation['horaire']?></span>
                                            </li>
                                            <li>
                                                <span class="label"><i class="icon-59"></i>Langue:</span>
                                                <span class="value"><?=$formation['language']?></span>
                                            </li>
                                        </ul>
                                        <div class="read-more-btn">
                                            <a href="<?=URL_LINK?>inscription?formation=<?=$formation['formation_title']?>" class="edu-btn">Participer <i class="icon-4"></i></a>
                                        </div>
                                        <div class="share-area">
                                            <h4 class="title">Partager:</h4>
                                            <ul class="social-share">
                                                <li><a href="https://www.facebook.com/tandemTC.tn"><i class="icon-facebook"></i></a></li>
                                                <li><a href="https://www.youtube.com/@tandem.tunisie"><i class="icon-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="thumbnail">
                                        <img src="<?=URL_LINK?>public/assets/images/course/course-46.jpg" alt="Courses">
                                        <a href="https://www.youtube.com/watch?v=xcM1tmmwZ8M" class="play-btn video-popup-activation"><i class="icon-18"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <div class="gap-bottom-equal">
            <div class="container">
                <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <h3 class="title">More Courses for You</h3>
                </div>
                <div class="row g-5">
                    <div class="col-12 col-xl-4 col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-5 inline" data-tipped-options="inline: 'inline-tooltip-1'">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img src="<?=URL_LINK?>public/assets/images/course/course-15.jpg" alt="Course Meta">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="course-price price-round">$30</div>
                                    <span class="course-level">Cooking</span>
                                    <h5 class="title">
                                        <a href="course-details.html">Healthy Sushi Roll - Japanese Popular Cooking Class</a>
                                    </h5>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5)</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor.</p>
                                    <ul class="course-meta">
                                        <li><i class="icon-24"></i>15 Lessons</li>
                                        <li><i class="icon-25"></i>42 Students</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div id="inline-tooltip-1" style="display:none">
                            <div class="course-layout-five-tooltip-content">
                                <div class="content">
                                    <span class="course-level">Cooking</span>
                                    <h5 class="title">
                                        <a href="course-details.html">Healthy Sushi Roll - Japanese Popular Cooking Class</a>
                                    </h5>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5)</span>
                                    </div>
                                    <ul class="course-meta">
                                        <li>15 Lessons</li>
                                        <li>35 hrs</li>
                                        <li>Beginner</li>
                                    </ul>
                                    <div class="course-feature">
                                        <h6 class="title">What You’ll Learn?</h6>
                                        <ul>
                                            <li>Professional Japanese cooking from beginners to experts</li>
                                            <li>Will be able to cook authentic Italian recipes in their own kitchen</li>
                                            <li>Understand the HOW of cooking, before thinking of the WHAT to cook.</li>
                                        </ul>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" class="edu-btn btn-medium">Add to Cart</a>
                                        <a href="#" class="wishlist-btn btn-outline-dark"><i class="icon-22"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-xl-4 col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-5 inline" data-tipped-options="inline: 'inline-tooltip-2'">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img src="<?=URL_LINK?>public/assets/images/course/course-16.jpg" alt="Course Meta">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="course-price price-round">$40</div>
                                    <span class="course-level">Cooking</span>
                                    <h5 class="title">
                                        <a href="course-details.html">Nutrition Kitchen - Basics of Cooking for Busy People</a>
                                    </h5>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.8)</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor.</p>
                                    <ul class="course-meta">
                                        <li><i class="icon-24"></i>35 Lessons</li>
                                        <li><i class="icon-25"></i>80 Students</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div id="inline-tooltip-2" style="display:none">
                            <div class="course-layout-five-tooltip-content">
                                <div class="content">
                                    <span class="course-level">Cooking</span>
                                    <h5 class="title">
                                        <a href="course-details.html">Nutrition Kitchen - Basics of Cooking for Busy People</a>
                                    </h5>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.8)</span>
                                    </div>
                                    <ul class="course-meta">
                                        <li>35 Lessons</li>
                                        <li>28 hrs</li>
                                        <li>Advanced</li>
                                    </ul>
                                    <div class="course-feature">
                                        <h6 class="title">What You’ll Learn?</h6>
                                        <ul>
                                            <li>Prepare a huge variety of simple, delicious, healthy recipes.</li>
                                            <li>Professional Indian cooking from beginners to experts</li>
                                            <li>Serve delicious and healthy meals for your loved ones.</li>
                                        </ul>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" class="edu-btn btn-medium">Add to Cart</a>
                                        <a href="#" class="wishlist-btn btn-outline-dark"><i class="icon-22"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-5 inline" data-tipped-options="inline: 'inline-tooltip-3'">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img src="<?=URL_LINK?>public/assets/images/course/course-17.jpg" alt="Course Meta">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="course-price price-round">$50</div>
                                    <span class="course-level">Cooking</span>
                                    <h5 class="title">
                                        <a href="course-details.html">Vegan Thai Cooking Classes Popular Vegan Recipes</a>
                                    </h5>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5)</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor.</p>
                                    <ul class="course-meta">
                                        <li><i class="icon-24"></i>8 Lessons</li>
                                        <li><i class="icon-25"></i>20 Students</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div id="inline-tooltip-3" style="display:none">
                            <div class="course-layout-five-tooltip-content">
                                <div class="content">
                                    <span class="course-level">Cooking</span>
                                    <h5 class="title">
                                        <a href="course-details.html">Vegan Thai Cooking Classes Popular Vegan Recipes</a>
                                    </h5>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5)</span>
                                    </div>
                                    <ul class="course-meta">
                                        <li>8 Lessons</li>
                                        <li>20 hrs</li>
                                        <li>All Levels</li>
                                    </ul>
                                    <div class="course-feature">
                                        <h6 class="title">What You’ll Learn?</h6>
                                        <ul>
                                            <ul>
                                                <li>Cook much loved recipes like ravioli, pizza and pesto from scratch</li>
                                                <li>Cook better than restaurant Thai food at home</li>
                                                <li>Keep your food safe from harmful bacteria and disease.</li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" class="edu-btn btn-medium">Add to Cart</a>
                                        <a href="#" class="wishlist-btn btn-outline-dark"><i class="icon-22"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <?php require_once 'src/view/public/pages/inscription.php'; ?>
    <?php require_once 'src/view/public/includes/footer.php'; ?>