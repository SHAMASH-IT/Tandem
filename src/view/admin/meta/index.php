<?php $page_title = 'meta'; ?>
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
                    <h3 class="fw-bold mb-0">Meta List</h3>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-3">
            <div class="col-md-12 col-lg-12">
                <div class="checkout-table table-responsive">
                    <table id="myCartTable" class="table display dataTable table-hover align-middle" style="width:100%">
                        <thead>
                            <tr>
                            
                                <th class="option">ID Formation</th>
                                <th class="option">Titre de formation</th>
                                <th class="option">Indexing</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $meta = fetch_all("SELECT * FROM meta, formations WHERE id_formation = formation_id AND deleted = 0");
                            foreach($meta as $m):
                                $id_formation = $m['id_formation'];
                                $meta_title = $m['formation_title'];
                                $meta_index = $m['meta_index'];

                                $id=$m['id'];
                            ?>
                            <tr>
                                <form name="f<?=$m['id']?>" action="" method="post">
                                    
                                    <td> <?=$id_formation?> </td>
                                    <td> <?=$meta_title?> </td>
                                    <td> <?=$meta_index?> </td>
                                    
                                    <td>
                                    <div class="btn-group" role="group">
                                    <a href="<?=URL?>admin/meta/update?formation_id=<?= $m['id_formation'] ?>" name="update_option" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
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