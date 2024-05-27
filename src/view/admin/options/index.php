<?php include VIEW_DIR."/admin/header.php"; ?>
 <!-- main body area -->
 <div class="main px-lg-4 px-md-4"> 

<!-- Body: Header -->
<div class="header">
    <nav class="navbar py-4">
    </nav>
</div>

<!-- Body: Body -->
<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
           
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Options List </h3>
                        <a href="<?=URL?>admin/options/create" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Add new Option</a>

                    </div>
                </div>
            </div> <!-- Row end  --> 
            <?php if(!empty($errors)): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php 
                                foreach($errors as $error):
                                    echo '<li>'.$error.'</li>';
                                endforeach;
                            ?>
                        </ul>
                    </div>
                <?php elseif($updated ?? false): ?>
                        <div class="alert alert-success">
                            option updated!
                        </div>
                <?php endif; ?>
        
                <div class="row g-3 mb-3">
                    <div class="col-xl-12 col-lg-8">            
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Options</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">

                                    <div class="col-md-12">
                                        <div class="formation-cart">
                                            <div class="checkout-table table-responsive">
                                                <table id="myCartTable" class="table display dataTable table-hover align-middle" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                        
                                                            <th class="option">Option</th>
                                                            <th class="option">Value</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $options = fetch_all("SELECT * FROM options");
                                                        foreach($options as $option):
                                                            $option_key = $option['option_key'];
                                                            $option_value= $option['option_value'];

                                                            $id=$option['id'];
                                                        ?>
                                                        <tr>
                                                            <form name="f<?=$option['id']?>" action="" method="post">
                                                                
                                                                <td>
                                                                   <?=$option_key?>
                                                                </td>
                                                                <td>
                                                                <?=$option_value?>
                                                                </td>
                                                              
                                                                <td>
                                                                <div class="btn-group" role="group">
                                                                <a href="<?=URL?>admin/options/update?id=<?= $option['id'] ?>" name="update_option" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                                <a href="<?=URL?>admin/options/delete?id=<?= $option['id'] ?>" name="delete_option" onclick="if (confirm('Do you really want to delete <?=$option_key?>?')){return true;}else{event.stopPropagation(); event.preventDefault();};" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>
                                                                 </div>
                                                                </td>
                                                            </form>
                                                        </tr>
                                                        <?php endforeach;?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div><!-- Row end  --> 
            </div>
    </div>
</div>       

</div
<?php include VIEW_DIR."/admin/footer.php"; ?>