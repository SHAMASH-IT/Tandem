<div class="edu-course-area course-area-1 edu-section-gap bg-lighten01 ">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <span class="pre-title">Cours Populaires</span>
            <h2 class="title">Choisissez un cours pour commencer</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="row g-5">
            <?php 
            $formations = get_undercat_formation('CAT657B063B4C3E8', 'LIMIT 8');
            if(empty($formations)){
                $formations = fetch_formations_for_category('CAT657B063B4C3E8', 'LIMIT 8');
            }
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
                            <a href="<?=$formation_link?>" rel="link course" alt="<?=$formation["formation_title"]?>" title="<?=$formation["formation_title"]?>">
                                <img src="<?=URL_LINK?>public/assets/uploads/<?=$image_src?>" alt="<?=$formation["formation_title"]?>" title="<?=$formation["formation_title"]?>">
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