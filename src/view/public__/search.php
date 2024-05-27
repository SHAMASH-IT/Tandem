<?php 
$page_title = 'Search';
?>
<?php include VIEW_DIR.'/public/header.php';?>
<style>
  main{
    margin-top: 85px;
  }
</style>
      <!-- Hero banner Start-->
      <section class="mt-160 courses-banner py-8 bg-secondary position-relative">
        <div class="container"> 
          <div class="row align-items-center"> 
            <div class="col-md-4">
              <h1 class="banner-heading m-0"><?=__('Trouvez votre formation idéale')?></h1>
            </div>
            <div class="col-md-8 text-center mt-5 mt-md-0">
              <form role="search" action="search">
                <div class="input-group banner-form">
                  <input class="index-banner-search form-control py-sm-3 py-2 px-sm-4 px-3 border-0" placeholder="<?=__('Recherche...')?>" name="query" value="<?=$_GET['query'] ?? ''?>" type="text">
                  <button class="btn btn-primary" type="submit"><img src="<?=ASSETS_DIR?>images/svg/search-white.svg" alt="Image Description"></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero banner End-->
      <?php if(isset($_GET['query'])):?>
      <!-- Course main sec Start-->
      <section class="py-8 courses-search">
        <div class="container"> 
          <div class="sec-content tab-content" id="pills-tabContent">
            <!-- courses All-->
            <div class="tab-pane fade show active" id="courses-all-crd" role="tabpanel">
              <div class="row multi-course-crd-list">
                <?php
                  $query = $_GET['query'];
                  $formations = [];
                  if(!empty($query)){
                      $formations = fetch_all("SELECT * FROM formations WHERE (formation_title LIKE '%$query%' OR formation_code LIKE '%$query%') AND deleted = '0' order by date_creation desc");
                  }
                  if(empty($formations)){
                    echo '<h2 class="sec-heading text-center">No results found.</h2>';
                  }
                  foreach($formations as $formation):
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
                  <?php
                  endforeach;
                  ?>
            </div>
          </div>
        </div>
      </section>
      <!-- Course main sec End-->
      <?php endif; ?>
      <!-- Course main sec Start-->
      <section class="learn-steps-sec-v3 pb-8"> 
        <div class="container">
          <div class="row align-items-center learn-steps-v3-content position-relative py-5">
            <div class="col-md-6 mt-4 mt-md-0 order-5 order-md-0 px-4">
              <h2 class="sec-heading">Get more close with your courses.</h2>
              <p class="sec-brief mt-3 mb-4">We provide a wide range of courses for the different sectors you can choose from, which suits you perfectly</p>
              <ul class="know-about-points mb-5"> 
                <li class="know-about-point d-flex align-items-center mb-3"><img class="me-3" src="<?=ASSETS_DIR?>images/svg/check-point.svg" alt="Image Description">
                  <h6 class="card-text text-medium-bold">Detail description of each course</h6>
                </li>
                <li class="know-about-point d-flex align-items-center mb-3"><img class="me-3" src="<?=ASSETS_DIR?>images/svg/check-point.svg" alt="Image Description">
                  <h6 class="card-text text-medium-bold">Easy to understand language</h6>
                </li>
                <li class="know-about-point d-flex align-items-center"><img class="me-3" src="<?=ASSETS_DIR?>images/svg/check-point.svg" alt="Image Description">
                  <h6 class="card-text text-medium-bold">Simple and easy to learn courses.</h6>
                </li>
              </ul><a class="btn btn-primary" href="<?=URL?>inscription">Start now</a>
            </div>
            <div class="col-md-6 px-4">
              <picture> 
                <source srcset="<?=ASSETS_DIR?>images/webp/learn-step-v3.webp" type="image/webp"><img src="<?=ASSETS_DIR?>images/img/learn-step-v3.png" alt="Image Description">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- Course main sec End-->
<?php include VIEW_DIR.'/public/footer.php';?>