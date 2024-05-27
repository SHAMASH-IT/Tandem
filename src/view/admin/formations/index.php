<?php $page_title = 'formations'; ?>
<?php include VIEW_DIR."/admin/header.php"; ?>
<!-- main body area -->
<div class="main px-lg-4 px-md-4"> 

<!-- Body: Header -->
<div class="header">
    <nav class="navbar py-4">
    </nav>
</div>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Formations List</h3>
                    <a href="<?=URL?>admin/formations/update?formation_id=<?=strtoupper(uniqid('F'))?>" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Add new formation</a>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-3">
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
                <div class="sticky-lg-top">
                    <div class="card mb-3">
                        <div class="categories">
                            <div class="show" id="category">
                                <form action="" autocomplete="on">
                                    <div class="filter-category d-flex">
                                        <input type="search" class="form-control" id="query" name="query" placeholder="Search ..." value="<?= $query ?? ''?>"  autocomplete="on">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="categories">
                            <div class="filter-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="show" id="category">
                                <div class="filter-category">
                                    <ul class="category-list">
                                        <li class="sub-category" ><a href="<?=PATH?>" >All</a>
                                        </li>
                                    <?php
                                    function li($cp, $pre_ = ''){
                                        $category_id = $cp['category_id'];
                                        $nb = $cp['category_parent'] != '0' ? ' ('.count_formation_category($category_id).')':'';
                                        echo '<li class="sub-category">
                                        <a href="'.PATH.'?filter_by_category_id='.$cp['category_id'].'" >
                                        '.$pre_.$cp['category_name'].$nb.'
                                        </a>
                                        </li>';
                                        
                                        $cc = fetch_all("SELECT * FROM categories WHERE category_parent = '$category_id' ORDER BY category_name");
                                            if(!empty($cc)){
                                                foreach($cc as $c){
                                                    if(category_has_child($category_id)){
                                                        li($c, $pre_.' > ');
                                                    }else{
                                                        li($c, $pre_);
                                                    }
                                                }
                                            }
                                    }
                                        $categories_parent = fetch_all("SELECT * FROM categories WHERE category_parent = '0' ORDER BY category_name");
                                        foreach($categories_parent as $cp):
                                            li($cp);
                                        endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="size-block">
                            <div class="filter-title">
                                <a class="title" data-bs-toggle="collapse" role="button" aria-expanded="true">Tags</a>
                            </div>
                            <div class="collapse show">
                                <div class="filter-size">
                                    <ul>
                                        <?php
                                        $tags = fetch_all("SELECT DISTINCT keyword FROM tags, formations WHERE formation_id = id_formation AND deleted = '0'");
                                        foreach($tags as $tag):
                                        ?>
                                        <li><a href="<?=PATH?>?filter_by_tag=<?=$tag['keyword']?>"><?=$tag['keyword']?></a></li>
                                        <?php 
                                        endforeach;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9">
                <div class="card mb-3 bg-transparent p-2">
                <?php 
                
                    // function getsubcat($category_id){
                    //     $row = query("SELECT * FROM categories WHERE category_id = '$category_id'");
                    //     if($row->num_rows > 0){
                    //         $row = $row->fetch_array(MYSQLI_ASSOC);
                    //         return getsubcat($row['category_parent']);
                    //     }else{
                    //         return  $row->fetch_array(MYSQLI_ASSOC);
                    //     }
                    // }

                    if(isset($filter_by_category_id)){
                        
                        $formations = query("SELECT * FROM formations, categories_formations WHERE id_category = '$filter_by_category_id' AND id_formation = formation_id AND deleted = 0 order by date_creation desc");
                        
                    }else if(isset($filter_by_tag)){
                        
                        $formations = query("SELECT * FROM formations, tags WHERE keyword = '$filter_by_tag' AND id_formation = formation_id AND deleted = 0 order by date_creation desc");
                        
                    }else if(isset($query)){
                        
                        $formations = query("SELECT * FROM formations WHERE (formation_title LIKE '%$query%' OR formation_code LIKE '%$query%') AND deleted = '0' order by date_creation desc");
                        
                    }else{

                        $formations = fetch_all("SELECT * FROM formations WHERE deleted = 0 order by date_creation desc");
                    }

                    foreach($formations as $formation):
                        $formation_id = $formation['formation_id'];
                        $category = fetch_array("SELECT category_id, category_name FROM formations as f, categories as c, categories_formations as cf WHERE cf.id_formation = '$formation_id' AND cf.id_category = c.category_id");
                        
                        $image = fetch_array("SELECT * FROM images WHERE identifier = '$formation_id' AND image_type = 'primary' limit 1");
                ?>
                    <div class="card border-0 mb-1">
                        <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3">
                            <div>
                                <?php if($formation['formation_published'] == '1'): ?>
                                    <input class="form-check-input toggle-formation-status" data-id="<?=$formation_id?>" type="checkbox" id="Eaten-switch<?=$formation_id?>" checked="">
                                    <label class="form-check-label" for="Eaten-switch<?=$formation_id?>">Published</label>
                                <?php else: ?>
                                    <input class="form-check-input toggle-formation-status" data-id="<?=$formation_id?>"  type="checkbox" id="Eaten-switch<?=$formation_id?>">
                                    <label class="form-check-label" for="Eaten-switch<?=$formation_id?>">Draft</label>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-check form-switch position-absolute bottom-0 end-0 py-3 px-3">
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <a href="<?=URL?>admin/formations/update?formation_id=<?=$formation_id?>" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                <a href="<?=URL?>admin/formations/delete?formation_id=<?=$formation_id?>"  name="delete_image" class="btn btn-outline-secondary deleterow delete-alert"><i class="icofont-ui-delete text-danger"></i></a>
                            </div>
                        </div>
                        <div class="card-body d-flex align-items-center flex-column flex-md-row">
                            <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                <h6 class="mb-3 fw-bold"><?=$formation['formation_title']?> <a href="<?=URL?>formation/<?=$formation['formation_slug']?>" target="_blank"><i class="fa fa-external-link"></i></a> 
                                <span class="text-muted small fw-light d-block">
                                    <?php 
                                    if($category):
                                        echo '<a href="'.PATH.'?filter_by_category_id='.$category['category_id'].'" >'.trim(get_category_breadcrumbs($category['category_id']), ' >').'</a> ';
                                    endif;
                                    ?>
                                </span></h6>
                                    <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                        <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                            <div class="text-muted small">Created Date</div>
                                            <strong><?=$formation['date_creation']?></strong>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>

</div> 
<?php ob_start(); ?>
<script src="<?=VIEW_DIR?>/admin/assets/js/main.js"> </script>
<?php $script .= ob_get_contents(); ?>
<?php ob_end_clean(); ?>
<?php include VIEW_DIR."/admin/footer.php"; ?>