<?php 
$page_title = 'category';
$css_link = '<link rel="stylesheet" href="'.URL_LINK.ASSETS_DIR.'css/home-version-3.css">';
?>
<?php include VIEW_DIR.'/public/header.php';?>
      <!-- home version-3 Hero  banner Start-->
      <section class="hero-banner-v3 position-relative bg-dark d-flex align-items-center">
        <div class="container"> 
          <div class="banner-content text-center">
            <h1 class="banner-heading text-white">To expand your career, get in touch with us.</h1>
            <p class="banner-brief text-white mt-3 my-md-4">Here you can select the best course for your career from a wide range of courses.</p><a class="btn btn-primary" href="<?=URL?>inscription">Start now</a>
          </div>
        </div>
      </section>
      <!-- home version-3 Hero  banner End-->
      <!-- skilify info card Start-->
      <section class="skilify-info-sec">
        <div class="container"> 
          <ul class="d-flex flex-wrap align-items-center justify-content-center skilify-info-points bg-white position-relative p-2">
            <li class="skilify-info-point d-flex align-items-center p-2 p-md-4">
              <div class="skilify-info-point-img me-3"><img src="<?=ASSETS_DIR?>images/svg/courses.svg" alt="Image Description"></div>
              <div class="skilify-info-point-txt"> 
                <h3 class="card-title m-0">100k Online Courses</h3>
              </div>
            </li>
            <li class="skilify-info-point info-point-primary d-flex align-items-center p-2 p-md-4">
              <div class="skilify-info-point-img me-3"><img src="<?=ASSETS_DIR?>images/svg/expert.svg" alt="Image Description"></div>
              <div class="skilify-info-point-txt"> 
                <h3 class="card-title m-0">Expert Instruction</h3>
              </div>
            </li>
            <li class="skilify-info-point d-flex align-items-center p-2 p-md-4">
              <div class="skilify-info-point-img me-3"><img src="<?=ASSETS_DIR?>images/svg/courses.svg" alt="Image Description"></div>
              <div class="skilify-info-point-txt"> 
                <h3 class="card-title m-0">Lifetime Access</h3>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- skilify info card End-->
      <!-- Categories cards v3 sec Start-->
      <section class="categories-crd-sec-v3 py-8 bg-secondary"> 
        <div class="container"> 
                <div class="sec-header mb-5 d-md-flex align-items-center justify-content-between text-center text-md-start">
                  <h2 class="m-0 sec-heading">Top categories</h2>
                  <div class="sec-header-btn mt-4 m-md-0"><a class="btn btn-primary" href="<?=URL?>inscription">Start now</a></div>
                </div>
          <div class="sec-content"> 
            <div class="row categories-crd-list categories-crd-list-v3"> 
            <?php 
            
            $subCategories = fetch_all("SELECT * FROM categories WHERE category_parent = '$category_id'"); 
            
              if(!empty($subCategories)){
                foreach($subCategories as $category):
                  $category_id = $category['category_id'];
                  $categorySlug = get_category_predecessors($category_id);
                  
                  $image = fetch_array("SELECT * FROM images WHERE identifier = '$category_id'");
              ?>

              <div class="col-sm-6 col-lg-4 col-xl-3">
                <a class="categories-crd bg-white text-center" href="<?=URL?>category<?=$categorySlug?>">
                  <div class="categories-crd-img">
                    <picture> 
                      <img src="<?=ASSETS_DIR?>uploads/<?=$image['image_src'] ?? ''?>" alt="<?=$image['image_alt'] ?? ''?>">
                    </picture>
                  </div>
                  <div class="crd-content">
                    <h3 class="card-title mt-3 mb-0 text-primary"><?=$category['category_name']?></h3>
                  </div>
                </a>
              </div>

              <?php
                endforeach;
              }
              ?>
            </div>
          </div>
        </div>
      </section>
      <!-- Categories cards v3 sec End-->
      <!-- Know About Platform Sec-v2 Start-->
      <section class="py-8 learn-steps-sec-v2">
        <div class="container"> 
                <div class="sec-header mb-5 d-md-flex align-items-center justify-content-between text-center text-md-start">
                  <h2 class="m-0 sec-heading">Know about best online learning platform</h2>
                  <div class="sec-header-btn mt-4 m-md-0"><a class="btn btn-primary" href="<?=URL?>inscription">Start now</a></div>
                </div>
          <div class="row learn-steps-content align-items-center"> 
            <div class="col-md-6 learn-steps-list"> 
              <div class="d-flex learn-step position-relative">
                <div class="step-left-side">
                  <h3 class="card-title">01.</h3><span class="learn-step-line d-block"> </span>
                </div>
                <div class="step-right-side ps-3">
                  <h3 class="card-title mb-3">Unlimited Course & Students</h3>
                  <p class="card-text">We offer unlimited course options to our students from which they can select the best for them.</p>
                </div>
              </div>
              <div class="d-flex learn-step py-5">
                <div class="step-left-side position-relative">
                  <h3 class="card-title">02.</h3><span class="learn-step-line d-block"> </span>
                </div>
                <div class="step-right-side ps-3">
                  <h3 class="card-title mb-3">Learn from industry experts</h3>
                  <p class="card-text">You will learn from our experts who have many years of experience in their respective fields. </p>
                </div>
              </div>
              <div class="d-flex learn-step">
                <div class="step-left-side position-relative">
                  <h3 class="card-title">03.</h3><span class="learn-step-line d-block"></span>
                </div>
                <div class="step-right-side ps-3">
                  <h3 class="card-title mb-3">Earn A Certificate Or Degree</h3>
                  <p class="card-text">Once you complete your course, you will earn a certificate or degree fr]or the same from our institute. </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 learn-steps-images d-none d-md-block position-relative text-center"> 
              <div class="d-md-flex align-items-end justify-content-center mb-4">
                <div class="learn-step-img-wrap bg-white me-3 position-relative"> 
                  <picture class="text-center">
                    <source srcset="<?=ASSETS_DIR?>images/webp/girl-with-laptop2.webp" type="image/webp"><img class="learn-step-img1" src="<?=ASSETS_DIR?>images/img/girl-with-laptop2.png" alt="Image Description">
                  </picture><span class="bg-secondary mt-2"> </span><span class="bg-secondary mt-2"></span><span class="bg-secondary mt-2"></span>
                </div>
                <div class="learn-step-img-wrap bg-white position-relative ms-3"> 
                  <picture>
                    <source srcset="<?=ASSETS_DIR?>images/webp/girl-with-laptop.webp" type="image/webp"><img class="learn-step-img2 bg-white" src="<?=ASSETS_DIR?>images/img/girl-with-laptop.png" alt="Image Description">
                  </picture>
                </div>
              </div>
              <div class="learn-step-img-wrap text-center bg-white position-relative d-inline-block"> 
                <picture>
                  <source srcset="<?=ASSETS_DIR?>images/webp/girl-with-laptop3.webp" type="image/webp"><img class="learn-step-img3 bg-white" src="<?=ASSETS_DIR?>images/img/girl-with-laptop3.png" alt="Image Description">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Know About Platform Sec-v2 End-->
      <!-- Course card slider sec Start-->
      <section class="crd-slider-sec py-8 custom-slider-btn custom-slider-dots bg-secondary">
        <div class="container"> 
                <div class="sec-header mb-5 d-md-flex align-items-center justify-content-between text-center text-md-start">
                  <h2 class="m-0 sec-heading">Get choice of your course</h2>
                  <div class="sec-header-btn mt-4 m-md-0"><a class="btn btn-primary" href="<?=URL?>inscription">Start now</a></div>
                </div>
          <div class="sec-content">
            <div class="crd-slider-list">
              <?php
              ?>
              <div class="crd-item">
                  <div class="course-card">
                    <div class="crd-img-wrap position-relative"> 
                      <a href="#">
                        <picture> 
                          <img class="crd-img" src="<?=ASSETS_DIR?>images/webp/crd-img.webp" alt="Image Description">
                        </picture></a>
                    </div>
                    <div class="crd-content">
                      <div class="crd-info py-2 d-flex align-items-center justify-content-between">
                        <div class="crd-info-item d-flex align-items-center"><img class="me-1" src="<?=ASSETS_DIR?>images/svg/star.svg" alt="Image Description"><span class="crd-info-txt">4.5</span></div>
                        <div class="crd-info-item d-flex align-items-center"><img class="me-1" src="<?=ASSETS_DIR?>images/svg/crd-play.svg" alt="Image Description"><span class="crd-info-txt">9</span></div>
                      </div>
                      <a href="#">
                        <h3 class="card-title my-3 text-center">Learn Python Programming Beginner</h3>
                      </a>
                      <div class="crd-bottom d-flex align-items-center justify-content-between">   
                        <a class="crd-profile d-flex align-items-center">   
                          <span class="profile-name ms-2">#code-01</span></a>
                        <a href="#" class="crd-price d-flex align-items-baseline">
                          <span>S'inscrire</span>
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
              <?php
              ?>
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
      <!-- Know about platform sec Start-->
      <section class="py-8 bg-primary remote-learning-sec position-relative overflow-hidden">
        <div class="patterns-wrap d-none d-xl-block"><img class="remote-circle2" src="<?=ASSETS_DIR?>images/img/circle2.png" alt="Image Description"></div>
        <div class="container"> 
          <div class="position-relative remote-learning-content-wrap py-8">
            <div class="patterns-wrap"><img class="remote-circle1 d-none d-sm-block" src="<?=ASSETS_DIR?>images/img/circle1.png" alt="Image Description"><img class="remote-circle3 d-none d-lg-block" src="<?=ASSETS_DIR?>images/svg/circle.svg" alt="Image Description"><img class="remote-circle4 d-none d-md-block" src="<?=ASSETS_DIR?>images/img/circle3.png" alt="Image Description"></div>
            <div class="remote-learning-content text-center position-relative z-index-2">
              <h2 class="sec-heading">Select the best from various online courses. </h2>
              <p class="sec-brief mb-5 mt-4">Our online video courses give you the freedom to learn remotely, and our experts will guide you properly.</p><a class="btn btn-primary" href="<?=URL?>inscription">Inscription</a>
            </div>
            <div class="patterns-wrap"><img class="remote-circle5 d-none d-lg-block" src="<?=ASSETS_DIR?>images/img/circle5.png" alt="Image Description"><img class="remote-circle6 d-none d-sm-block" src="<?=ASSETS_DIR?>images/svg/circle.svg" alt="Image Description"><img class="remote-circle7 d-none d-lg-block" src="<?=ASSETS_DIR?>images/img/circle6.png" alt="Image Description"><img class="remote-circle8 d-none d-sm-block" src="<?=ASSETS_DIR?>images/img/circle7.png" alt="Image Description"></div>
          </div>
        </div>
      </section>
      <!-- Know about platform sec End-->
<?php include VIEW_DIR.'/public/footer.php';?>