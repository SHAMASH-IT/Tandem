    <!-- Multi choice card sec Start-->
    <section id="formations" class="categories-crd-sec py-8"> 
        <div class="container"> 
                <div class="sec-header mb-5 d-md-flex align-items-center justify-content-between text-center text-md-start">
                  <h2 class="m-0 sec-heading text-center"><?=__('Découvrez votre potentiel caché avec la formation qui vous convient le mieux !')?></h2>
                  <div class="sec-header-btn mt-4 m-md-0"></div>
                </div>
          <div class="sec-content"> 
            <div class="row categories-crd-list"> 
              <?php 
              $categories = $parent_categories ?? get_parent_categories(); 
              // dd($categories);
              if(!empty($categories)){ 
                foreach($categories as $category):
                  $category_id = $category['category_id'];
                  $image = fetch_array("SELECT * FROM images WHERE identifier = '$category_id' AND image_order = '-1'"); 
                  $image_src = $image['image_src'] ?? ''; 
                  $image_title = $image['image_title'] ?? ''; 
                  $image_alt = $image['image_alt'] ?? ''; 


              ?>

              <div class="col-lg-6">
                <a class="categories-crd categories-crd-gray text-center" href="<?=URL?>category/<?=$category['category_slug']?>">
                  <div class="crd-content">
                    <!-- <img class="categories-crd-img" src="<?=ASSETS_DIR?>images/svg/courses.svg" alt="Image Description"> -->
                    <img class="categories-crd-img img-border-radius" src="<?=ASSETS_DIR?>uploads/<?=$image_src?>" title="<?=$image_title?>" alt="<?=$image_alt?>">
                    <h3 class="card-title mt-3 mb-2"><?=$category['category_name']?></h3>
                    <p class="card-text m-0"><?=$category['category_description']?></p>
                    <button class="btn btn-primary mt-40"><?=__('En svoir plus')?></button>
                  </div>
                </a>
              </div>
              <?php 
                endforeach;
              }?>
          </div>
        </div>
      </section>
      <!-- Multi choice card sec End-->