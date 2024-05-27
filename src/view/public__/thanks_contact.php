<?php $page_title = 'Merci';?>
<?php include VIEW_DIR.'/public/header.php';?>
      <!-- Hero banner Start-->
      <section class="hero-banner pb-8 bg-primary index-banner position-relative">
        <div class="container"> 
          <div class="row align-items-center"> 
            <div class="col-md-7">
              <div class="banner-content text-center text-md-start"> 
                <h1 class="banner-heading"><?=$page_title?></h1>
                <p class="banner-brief text-secondary mt-3 my-md-4">Pick from over 100,000 online video courses with new additions published every month.</p>
                <form class="pt-1 py-5 pe-md-5" action="courses.html">
                  <div class="input-group index-banner-form banner-form">
                    <input class="index-banner-search form-control py-sm-3 py-2 px-sm-4 px-3 border-0" placeholder="Search your favourite course" name="srch-term" type="text">
                    <button class="btn btn-primary" type="submit"><img src="<?=ASSETS_DIR?>images/svg/search-white.svg" alt="Image Description"></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-5 text-center text-md-end">
              <div class="index-banner-img pe-5 d-inline-block">
                <picture>
                  <source srcset="<?=ASSETS_DIR?>images/webp/page404.webp" type="image/webp"><img src="<?=ASSETS_DIR?>images/img/page404.webp" alt="Image Description">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero banner End-->
<?php include VIEW_DIR.'/public/footer.php';?>