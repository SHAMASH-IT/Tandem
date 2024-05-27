<?php 
$page_title = 'Category';
$css_link = '<link rel="stylesheet" href="'.URL_LINK.ASSETS_DIR.'css/home-version-2.css">';
$category_id = $category['category_id'];
$images = fetch_all("SELECT * FROM images WHERE identifier = '$category_id' ORDER BY image_order"); 

?>
<?php 
include VIEW_DIR.'/public/header.php';
?>
<style>
.sec-heading {
    font-size: 32px;
}
@media only screen and (max-width: 575px){
    .sec-heading {
        font-size: 24px;
    }
}
</style>
<!-- home version-2 Hero  banner Start--> 
    <section class="mt-160 hero-banner-v2 position-relative main-top-gap">
        <div class="container"> 
          <div class="row align-items-center pt-5"> 
            <div class="col-md-7">
              <div class="banner-content text-center text-md-start"> 
                <h1 class="banner-heading text-white"><?=$category['category_description']?></h1>
                <form class="pt-1 py-5 pe-md-5" role="search" action="<?=URL?>inscription">
                  <div class="input-group banner-form mt-40">
                    <a class="btn btn-primary" href="<?=PATH?>#formation-<?=$category['category_slug']?>"><?=__('Découvrir nos formations')?></a>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-5 text-center text-md-end">
              <div class="banner-img">
                <picture>
                    <?php
                    if(isset($images[0])){
                        $image_src = $images[0]['image_src'] ?? ''; 
                        $image_title = $images[0]['image_title'] ?? ''; 
                        $image_alt = $images[0]['image_alt'] ?? '';
                    ?>
                        <img src="<?=ASSETS_DIR?>uploads/<?=$image_src?>" title="<?=__($image_title)?>" alt="<?=__($image_alt)?>">
                        
                    <?php }else{ ?>

                        <img src="<?=ASSETS_DIR?>uploads/<?=$image_src?>" title="<?=__($image_title)?>" alt="<?=__($image_alt)?>">

                    <?php } ?>

                </picture>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- home version-2 Hero  banner End-->
    <!-- Multi course card sec Start-->
    <?php
        $formations = fetch_all("SELECT * FROM formations f, categories_formations cf WHERE f.formation_id = cf.id_formation AND cf.id_category = '$category_id' AND f.deleted = '0'");
        if(!empty($formations)){

    ?>
    <section id="formation-<?=$category['category_slug']?>" class="multi-course-crd-sec py-8 bg-secondary">
        <div class="container"> 
            <div class="sec-header mb-5 d-md-flex align-items-center justify-content-between text-center text-md-start">
                <h2 class="m-0 sec-heading"><?=__('Nos formations')?></h2>
            </div>
            <div class="sec-content"> 
                <div class="row multi-course-crd-list"> 
                    <?php 
                      
                            foreach($formations as $formation):
                                // $formation_link = URL.'category/'.$category['category_slug'].'/formation/'.$formation['formation_slug'];
                                $formation_link = URL.'formation/'.$formation['formation_slug'];
                                $formation_id = $formation['formation_id'];
                                $image = fetch_array("SELECT * FROM images WHERE identifier = '$formation_id'"); 
                                $image_src = $image['image_src'] ?? ''; 
                                $image_title = $image['image_title'] ?? ''; 
                                $image_alt = $image['image_alt'] ?? ''; 
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="course-card">
                            <div class="crd-img-wrap position-relative"> 
                                <a href="<?=$formation_link?>">
                                    <picture> 
                                        <img class="crd-img" src="<?=ASSETS_DIR?><?=empty($image_src)?'images/webp/crd-img.webp':'uploads/'.$image_src?>" alt="<?=$image_alt?>" title="<?=$image_title?>">
                                    </picture>
                                </a>
                            </div>
                            <div class="crd-content">
                                <div class="crd-info py-2">
                                </div>
                                <a href="<?=$formation_link?>">
                                    <h3 class="card-title my-3"><?=$formation['formation_title']?></h3>
                                    <div class="crd-bottom d-flex align-items-center justify-content-end">
                                        <div class="crd-price d-flex align-items-baseline">
                                            <span><?=__('Participer!')?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <?php }?>
    <!-- Multi course card sec End-->
    <!-- learn steps sec Start-->
    <section class="py-8 learn-steps-sec"> 
        <div class="container"> 
                <div class="sec-header mb-5 text-center">
                    <h2 class="m-0 sec-heading text-center"><?=__($category['category_heading'])?></h2>
                </div>
            <div class="row learn-steps-content align-items-center"> 
                <div class="col-md-6 learn-steps-images align-items-center d-none d-md-flex"> 
                    <div class="learn-step-img-wrap me-4">
                    <picture class="text-center mb-4">
                        <source srcset="<?=ASSETS_DIR?>images/webp/girl-with-laptop2.webp" type="image/webp"><img class="learn-step-img1" src="<?=ASSETS_DIR?>images/img/girl-with-laptop2.png" alt="<?=__('')?>">
                    </picture>
                    <picture>
                        <source srcset="<?=ASSETS_DIR?>images/webp/girl-with-laptop.webp" type="image/webp"><img class="learn-step-img2" src="<?=ASSETS_DIR?>images/img/girl-with-laptop.png" alt="<?=__('')?>">
                    </picture>
                    </div>
                    <div class="learn-step-img-wrap position-relative">
                    <picture>
                        <source srcset="<?=ASSETS_DIR?>images/webp/girl-with-laptop3.webp" type="image/webp"><img class="learn-step-img3" src="<?=ASSETS_DIR?>images/img/girl-with-laptop3.png" alt="<?=__('')?>">
                    </picture>
                    </div>
                </div>
                <?php
                $descriptions = json_decode($category['category_descriptions'] ?? '', true);
                if(!empty($descriptions)){
                    $counter = 1;
                ?>
<div class="col-md-6 learn-steps-list"> 
                  <?php foreach($descriptions as $description): ?>
                    <div class="d-flex learn-step py-4">
                        <div class="step-left-side">
                            <h3 class="card-title">0<?=$counter++?>.</h3><span class="learn-step-line d-block"> </span>
                        </div>
                        <div class="step-right-side ps-3">
                            <h3 class="card-title mb-3"><?=html_entity_decode($description['title'])?></h3>
                            <p class="card-text"><?=html_entity_decode($description['description'])?></p>
                        </div>
                    </div>
                  <?php endforeach; ?>

                <?php } ?>
</div>  
                    
                
            </div>
        </div>
    </section>
    <!-- learn steps sec End-->

<?php include VIEW_DIR.'/public/sections/banner_footer_category.php';?>
<?php include VIEW_DIR.'/public/footer.php';?>