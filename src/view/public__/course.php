<?php 

$page_title = $formation['formation_title'] ?? '';
$css_link = '<link rel="stylesheet" href="'.URL_LINK.ASSETS_DIR.'css/course-detail.css">';
?>
<?php include VIEW_DIR.'/public/header.php';?>
<style>
  #course-detail-banner-bg{
    height:400px;
    width:100vw;
  }
</style>
      <!-- Course detail slider sec Start-->
      <section class="mt-160 course-detail-v1-main-sec position-relative pb-8 main-top-gap">
        <div class="container"> 
          <div class="course-detail-grid">
            <!-- course detail banner-->
            <div class="course-detail-item course-detail-banner py-8">
              <div class="bg-primary position-absolute" id="course-detail-banner-bg"></div>
              <h1 class="sec-heading"><?=$formation['formation_title']?></h1>
              <p class="sec-brief mt-4 mb-4"><?=$formation['formation_slogan']?> </p>
              <div class="course-related-info-list d-flex flex-wrap align-items-center">
                <!-- rating -->
                <div class="corse-info-item d-flex align-items-center me-3 my-2">
                  <span class="corse-info-txt">#Code: <strong><?=$formation['formation_code']?></strong></span>
                </div>
                <!-- views-->
                <div class="corse-info-item d-flex align-items-center me-3 my-2"><img class="me-1" src="<?=ASSETS_DIR?>images/svg/crd-view.svg" alt="Image Description"><span class="corse-info-txt"><?=$formation['enrolled']?></span></div>
                <!-- Time-->
                <div class="corse-info-item d-flex align-items-center me-3 my-2"><img class="me-1" src="<?=ASSETS_DIR?>images/svg/time-icon.svg" alt="Image Description"><span class="corse-info-txt"><?=$formation['duration']?></span></div>
                <!-- lesson -->
                <div class="corse-info-item d-flex align-items-center"><img class="me-1" src="<?=ASSETS_DIR?>images/svg/crd-play.svg" alt="Image Description"><span class="corse-info-txt"><?=$formation['lessons']?></span></div>
              </div>
            </div>
            <!-- course detail card -->
            <div class="course-detail-item course-detail-crd mt-8 p-3">
              <div class="course-detail-crd-img">
                <picture> 
                  <img src="<?=IMG_DIR?><?=$images[0]['image_src'] ?? ''?>" alt="<?=$images[0]['image_alt'] ?? ''?>" title="<?=$images[0]['image_title'] ?? ''?>">
                </picture>
              </div>
              <div class="course-detail-crd-content mt-3"> 
                <div class="course-detail-crd-head d-lg-block d-flex align-items-center justify-content-center flex-wrap justify-content-sm-between">
                  <a class="btn btn-primary my-4 course-detail-crd-btn" href="inscription"><?=__('Participer!')?></a>
                </div>
                <!-- tranining people -->
                <div class="tranining-people border-top border-bottom py-3 my-3">
                  <h4 class="card-subtitle mb-3">Plus d'information</h4>
                  <p class="card-text">
                    <?php $phone = get_option('phone');?>
                    <a href="tel:<?=$phone?>" class="text-focus">
                      <span class="text-focus">Appeler nous: <?=$phone?></span>
                    </a>
                  </p>
                </div>
                <!-- social icons -->
                <div class="share-social">
                  <h4 class="card-subtitle mb-3">Partager la formation</h4>
                  <ul class="social-icon-list d-flex align-items-center justify-content-between">
                    <li class="social-icon-item">
                      <!-- instagram--><a class="d-block" href="https://www.instagram.com/">
                        <svg class="insta-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32">
                          <lineargradient id="myGradient" gradienttransform="rotate(90)">
                            <stop offset="5%" stop-color="#DD2A7B"></stop>
                            <stop offset="95%" stop-color="#8134AF"></stop>
                          </lineargradient>
                          <path d="M150.715,137.679a3.154,3.154,0,0,0-1.807-1.807,5.269,5.269,0,0,0-1.768-.328c-1-.046-1.306-.056-3.848-.056s-2.844.01-3.848.055a5.273,5.273,0,0,0-1.768.328,3.155,3.155,0,0,0-1.808,1.807,5.271,5.271,0,0,0-.328,1.768c-.046,1-.056,1.305-.056,3.848s.01,2.844.056,3.848a5.27,5.27,0,0,0,.328,1.768,3.154,3.154,0,0,0,1.807,1.807,5.262,5.262,0,0,0,1.768.328c1,.046,1.305.055,3.848.055s2.844-.01,3.848-.055a5.262,5.262,0,0,0,1.768-.328,3.154,3.154,0,0,0,1.807-1.807,5.274,5.274,0,0,0,.328-1.768c.046-1,.055-1.306.055-3.848s-.01-2.844-.055-3.848A5.262,5.262,0,0,0,150.715,137.679Zm-7.424,10.506a4.89,4.89,0,1,1,4.89-4.89A4.89,4.89,0,0,1,143.292,148.185Zm5.083-8.831a1.143,1.143,0,1,1,1.143-1.143A1.143,1.143,0,0,1,148.375,139.355Zm0,0" transform="translate(-127.292 -127.295)"></path>
                          <path d="M213.349,210.174A3.174,3.174,0,1,1,210.174,207,3.174,3.174,0,0,1,213.349,210.174Zm0,0" transform="translate(-194.174 -194.174)"></path>
                          <path d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H29.692A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0Zm-4.56,19.788a6.741,6.741,0,0,1-.427,2.23,4.7,4.7,0,0,1-2.687,2.687,6.745,6.745,0,0,1-2.23.427c-.98.045-1.293.055-3.788.055s-2.808-.011-3.788-.055a6.745,6.745,0,0,1-2.23-.427A4.7,4.7,0,0,1,7.3,22.018a6.739,6.739,0,0,1-.427-2.23c-.045-.98-.056-1.293-.056-3.788s.01-2.808.055-3.788a6.741,6.741,0,0,1,.427-2.23A4.7,4.7,0,0,1,9.982,7.295a6.747,6.747,0,0,1,2.23-.427c.98-.045,1.293-.055,3.788-.055s2.808.011,3.788.056a6.748,6.748,0,0,1,2.23.427,4.7,4.7,0,0,1,2.687,2.687,6.74,6.74,0,0,1,.427,2.23c.045.98.055,1.293.055,3.788S25.177,18.808,25.132,19.788Zm0,0"></path>
                        </svg></a>
                    </li>
                    <li class="social-icon-item">
                      <!-- facebook--><a class="d-block" href="https://www.facebook.com/">
                        <svg class="fb-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32">
                          <path d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H17.094V19.625H12.938V14.781h4.156V11.217c0-4.134,2.524-6.384,6.211-6.384a34.181,34.181,0,0,1,3.726.19V9.344H24.489c-2.006,0-2.395.953-2.395,2.353v3.085h4.8l-.625,4.844H22.094V32h7.6A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0Zm0,0"></path>
                        </svg></a>
                    </li>
                    <li class="social-icon-item">
                      <!-- whatsapp--><a class="d-block" href="https://www.whatsapp.com/">
                        <svg class="whatsapp" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32">
                          <path d="M142.077,124.469a7.97,7.97,0,0,0-8.006,7.912,7.83,7.83,0,0,0,1.224,4.211l.19.3-.809,2.92,3.029-.786.292.171a8.058,8.058,0,0,0,4.073,1.1h0a7.97,7.97,0,0,0,8-7.913,7.821,7.821,0,0,0-2.342-5.6A8,8,0,0,0,142.077,124.469Zm4.707,11.314a2.479,2.479,0,0,1-1.624,1.131,3.337,3.337,0,0,1-1.515-.094,13.988,13.988,0,0,1-1.372-.5,10.678,10.678,0,0,1-4.11-3.592,4.6,4.6,0,0,1-.982-2.461,2.655,2.655,0,0,1,.842-1.984.889.889,0,0,1,.642-.3c.16,0,.321,0,.461.008s.346-.056.541.408.682,1.647.742,1.766a.435.435,0,0,1,.02.417,8.607,8.607,0,0,1-.6.814c-.106.131-.246.247-.106.486a7.186,7.186,0,0,0,1.338,1.648A6.593,6.593,0,0,0,143,134.711c.24.119.381.1.521-.059s.6-.695.762-.933.321-.2.541-.119,1.4.655,1.644.774.4.179.461.278A1.964,1.964,0,0,1,146.784,135.783Zm0,0" transform="translate(-125.736 -116.647)"></path>
                          <path d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H29.692A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0ZM16.339,25.316h0a9.572,9.572,0,0,1-4.576-1.165L6.682,25.482l1.359-4.961a9.577,9.577,0,1,1,8.3,4.795Zm0,0"></path>
                        </svg></a>
                    </li>
                    <li class="social-icon-item">
                      <!-- twitter--><a class="d-block" href="https://twitter.com/">
                        <svg class="twitter" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32">
                          <path d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H29.692A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0ZM23.305,12.475q.011.236.01.475A10.378,10.378,0,0,1,12.867,23.4h0a10.4,10.4,0,0,1-5.629-1.65,7.47,7.47,0,0,0,.876.051,7.369,7.369,0,0,0,4.561-1.572,3.677,3.677,0,0,1-3.431-2.551,3.66,3.66,0,0,0,1.659-.063,3.673,3.673,0,0,1-2.946-3.6c0-.017,0-.031,0-.047a3.647,3.647,0,0,0,1.663.459,3.676,3.676,0,0,1-1.137-4.9,10.427,10.427,0,0,0,7.57,3.837,3.674,3.674,0,0,1,6.258-3.349,7.366,7.366,0,0,0,2.332-.891,3.687,3.687,0,0,1-1.615,2.031,7.324,7.324,0,0,0,2.109-.578A7.463,7.463,0,0,1,23.305,12.475Zm0,0"></path>
                        </svg></a>
                    </li>
                    <li class="social-icon-item">
                      <!-- indeed--><a class="d-block" href="https://in.indeed.com/">
                        <svg class="indeed" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32">
                          <path d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H29.692A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0ZM11.351,24.188h-3.9V12.464h3.9ZM9.4,10.863H9.377a2.031,2.031,0,1,1,.051-4.051A2.032,2.032,0,1,1,9.4,10.863Zm16,13.324h-3.9V17.916c0-1.576-.564-2.651-1.974-2.651a2.133,2.133,0,0,0-2,1.425,2.668,2.668,0,0,0-.128.951v6.547h-3.9s.051-10.624,0-11.723h3.9v1.66a3.869,3.869,0,0,1,3.512-1.935c2.564,0,4.486,1.676,4.486,5.276Zm0,0"></path>
                        </svg></a>
                    </li>
                  </ul>
                </div>
                
              </div>
            </div>
            <!-- course detail tabs-->
            <div class="course-detail-item course-detail-accodians pt-8">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <!-- first tab-->
                <li class="me-4 my-2" role="presentation">
                  <button class="btn btn-secondary active" id="pills-overview-tab" data-bs-toggle="pill" data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview" aria-selected="true"><?=__('Description')?></button>
                </li>
                <!-- second tab-->
                <li class="me-4 my-2" role="presentation">
                  <button class="btn btn-secondary" id="pills-modules-tab" data-bs-toggle="pill" data-bs-target="#pills-modules" type="button" role="tab" aria-controls="pills-modules" aria-selected="false"><?=__('Programme de formation')?></button>
                </li>
              </ul>
              <div class="tab-content mt-5" id="pills-tabContent">
                <?php
                $descriptions = json_decode($formation['formation_description'] ?? '', true);
                if(!empty($descriptions)){
                ?>
                <!-- first pill-->
                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab"> 
                  <ul class="overview-list">
                  <?php foreach($descriptions as $description): ?>
                    <li class="overview-item mb-3"> 
                      <h3 class="card-title"><?=nl2br(html_entity_decode($description['title']))?></h3>
                      <p class="card-text"><?=nl2br(html_entity_decode($description['description']))?></p>
                    </li>
                  <?php endforeach; ?>
                  </ul>
                </div>
                <?php } ?>

                <?php
                $modules = json_decode($formation['formation_modules'] ?? '', true);
                if(!empty($modules)){
                  ?>
                <!-- Second pill-->
                <div class="tab-pane fade" id="pills-modules" role="tabpanel" aria-labelledby="pills-modules-tab"> 
                  <div class="accordion course-detail-accordion" id="accordionExample">
                  <?php 
                  $id = 0;
                  foreach($modules as $module): ?>
                    <div class="accordion-item">
                      <div class="accordion-header" id="headingOne<?=++$id?>">
                        <button class="accordion-button justify-content-between border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?=$id?>" aria-expanded="true" aria-controls="collapseOne<?=$id?>"><span class="card-subtitle"><?=nl2br(html_entity_decode($module['title']))?></span></button>
                      </div>
                      <div class="accordion-collapse collapse show" id="collapseOne<?=$id?>" aria-labelledby="headingOne<?=$id?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="lecture-info d-flex align-items-center justify-content-between pb-1 mb-1"><span class="card-text lecture-name"><?=nl2br(html_entity_decode($module['description']))?></span></div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Course card slider sec End-->
<?php
    $formation_id = $formation['formation_id'];

    $category = fetch_array("SELECT id_category FROM categories_formations WHERE id_formation = '$formation_id'");
    $category_id = $category['id_category'] ?? '';
    $category_url = URL.'category'.get_category_predecessors($category_id);

    $formations = fetch_all("SELECT * FROM formations f, categories_formations cf WHERE f.formation_id = cf.id_formation AND cf.id_category = '$category_id' AND f.deleted = '0' AND cf.id_formation <> '$formation_id'");
    if(!empty($formations)){
?>
      <!-- Course card slider sec Start-->
      <section class="crd-slider-sec py-8 custom-slider-btn custom-slider-dots bg-secondary">
        <div class="container"> 
                <div class="sec-header mb-5 d-md-flex align-items-center justify-content-between text-center text-md-start">
                  <h2 class="m-0 sec-heading"><?=__('Formations relatives')?></h2>
                  <div class="sec-header-btn mt-4 m-md-0"><a class="btn btn-primary" href="<?=$category_url?>"><?=__('Découvrir ce theme')?></a></div>
                </div>

          <div class="sec-content">
            <div class="crd-slider-list">
<?php   
            foreach($formations as $formation):
                $formation_link = URL.'formation/'.$formation['formation_slug'];
                $formation_id = $formation['formation_id'];
                $image = fetch_array("SELECT * FROM images WHERE identifier = '$formation_id'"); 
                $image_src = $image['image_src'] ?? ''; 
                $image_title = $image['image_title'] ?? ''; 
                $image_alt = $image['image_alt'] ?? ''; 
?>

              <div class="crd-item">
                <div class="course-card">
                    <div class="crd-img-wrap position-relative"> 
                        <a href="<?=$formation_link?>">
                            <picture> 
                                <img class="crd-img" src="<?=ASSETS_DIR?><?=empty($image_src)?'images/webp/crd-img.webp':'uploads/'.$image_src?>" alt="<?=$image_alt?>" title="<?=$image_title?>">
                            </picture>
                        </a>
                    </div>
                    <div class="crd-content">
                        <div class="crd-info py-2"> </div>
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
            <!-- slder arrows and dots-->
            <div class="crd-slider-btns d-flex justify-content-between">
              <button class="btn slide-btn slide-prev" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                  <path class="b" d="M5,11H16.86L13.23,6.64a1,1,0,0,1,1.54-1.28l5,6a1.19,1.19,0,0,1,.09.15.127.127,0,0,0,.07.13.961.961,0,0,1,0,.72.127.127,0,0,1-.07.13,1.19,1.19,0,0,1-.09.15l-5,6a1,1,0,1,1-1.54-1.28L16.86,13H5a1,1,0,0,1,0-2Z" transform="translate(0)"></path>
                </svg>
              </button>
              <button class="btn slide-btn slide-next" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                  <path class="b" d="M5,11H16.86L13.23,6.64a1,1,0,0,1,1.54-1.28l5,6a1.19,1.19,0,0,1,.09.15.127.127,0,0,0,.07.13.961.961,0,0,1,0,.72.127.127,0,0,1-.07.13,1.19,1.19,0,0,1-.09.15l-5,6a1,1,0,1,1-1.54-1.28L16.86,13H5a1,1,0,0,1,0-2Z" transform="translate(0)"></path>
                </svg>
              </button>
            </div>

          </div>


        </div>
      </section>
      <!-- Course card slider sec End-->
<?php } ?>
<?php include VIEW_DIR.'/public/footer.php';?>