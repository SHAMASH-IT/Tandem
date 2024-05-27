<?php 
require_once 'src/view/public/includes/header.php';

$tag_name = ucwords(str_replace(['-', '/'], ' ', $tag));

?>
<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title"><?=$tag_name?></h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="index-one#">Accueil</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page"><?=$tag_name?></li>
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

<div class="edu-course-area course-area-1 gap-tb-text">
    <div class="container">
        <div class="row g-5">
            <?php           
            if(!empty($formations)){
                foreach($formations as $formation){

                    $formation_link = URL_LINK.'formation/'.$formation['formation_slug'];
                    $formation_id = $formation['formation_id'];
                    $image = fetch_array("SELECT * FROM images WHERE identifier = '$formation_id'"); 
                    $image_src = $image['image_src'] ?? ''; 
                    $image_title = $image['image_title'] ?? ''; 
                    $image_alt = $image['image_alt'] ?? ''; 
                    $info = fetch_array("SELECT * FROM info WHERE id_formation = '{$formation['formation_id']}'");

            ?>
            <!-- Start Single Course  -->
            <div class="col-md-6 col-lg-4 col-xl-3" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-course course-style-1 course-box-shadow hover-button-bg-white">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="<?=$formation_link?>">
                                <img src="<?=URL_LINK?>public/assets/uploads/<?=$image_src?>" alt="<?=$image_alt?>" title="<?=$image_title?>">
                            </a>
                            <div class="time-top">
                                <span class="duration"><i class="icon-61"></i><?=$info['duration']?></span>
                            </div>
                        </div>
                        <div class="content">
                            <a class="course-level" href="https://tandem.mtderp.com/Tandem/Questions/testniveau">Tester votre niveau</a>

                            <h6 class="title">
                                <a href="<?=$formation_link?>"><?=$formation['formation_title']?></a>
                            </h6>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(5.0 /9 Avis)</span>
                            </div>
                            <div class="course-price"><?=$info['prix']?></div>
                            <a href="<?=URL_LINK?>inscription?formation_title=<?=$formation['formation_title']?>" class="edu-btn btn-secondary btn-small">Participer <i class="icon-4"></i></a>
                            <ul class="course-meta">
                                <li><i class="icon-24"></i><?=$info['lessons']?> </li>
                                <li><i class="icon-25"></i><?=$info['enrolled']?></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- End Single Course  -->
            <?php } } ?>
        </div>
    </div>
</div>


<?php require_once 'src/view/public/includes/footer.php'; ?>