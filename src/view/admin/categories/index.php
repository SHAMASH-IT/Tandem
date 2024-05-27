<?php $page_title = 'categories'; ?>
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
                        <h3 class="fw-bold mb-0">Categorie List</h3>
                        <a href="<?=URL?>admin/categories/update?category_id=<?=strtoupper(uniqid('CAT'))?>" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Add Category</a>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 mb-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Formations</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $categories = fetch_all("SELECT * FROM categories WHERE category_parent = '0'");
                                    if(empty($categories)): ?>
                                        <tr>
                                            <td colspan="5">No Categories</td>
                                        </tr>
                                    <?php else: 
                                    function tr_recursive($category, $pre_ = ''){  
                                        $category_id = $category['category_id'];
                                        ?>
                                            <tr>
                                                <td><strong><?=$category_id?></strong></td>
                                                <td><?=$pre_.$category['category_name']?></td>
                                                <td><?=count_formation_category($category_id)?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="<?=URL?>admin/categories/update?category_id=<?=$category_id?>" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <a href="<?=URL.'admin/categories/delete?category_id='.$category_id?>"  class="btn btn-outline-secondary delete-alert"><i class="icofont-ui-delete text-danger"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        
                                        $cc = fetch_all("SELECT * FROM categories WHERE category_parent = '$category_id' ORDER BY category_name");
                                        
                                        if(!empty($cc)){
                                            foreach($cc as $c){
                                                if(category_has_child($category_id)){
                                                    tr_recursive($c, $pre_.$category['category_name'].' > ');
                                                }else{
                                                    tr_recursive($c, $pre_);
                                                }
                                            }
                                        }
                                    }

                                            foreach($categories as $category):
                                                tr_recursive($category);
                                            endforeach;
                                        endif; 
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> 
<?php include VIEW_DIR."/admin/footer.php"; ?>