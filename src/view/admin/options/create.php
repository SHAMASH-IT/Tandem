<?php $page_title = 'options'; ?>
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
                    <h3 class="fw-bold mb-0">New Option</h3>
                </div>
            </div>
        </div> <!-- Row end  -->  
        
        <div class="row g-3 mb-3">
            <div class="col-lg-12">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Basic information</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label class="form-label">Option</label>
                                    <input type="text" name="option_key" class="form-control" value="<?=$option_key?? ''?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Value</label>
                                    <input type="text" name="option_value" class="form-control" value="<?=$option_value?? ''?>" required>

                                </div>
                                
                                
                            </div>
                            
                            <button type="submit" name="create_option" class="btn btn-primary mt-5 py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>
                        </form>
                    </div>
                </div>
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
                <?php elseif($created): ?>
                        <div class="alert alert-success">
                            Option created!
                        </div>

                <?php endif; ?>
            </div>
        </div><!-- Row end  --> 

    </div>
</div>    

</div>  
<?php include VIEW_DIR."/admin/footer.php"; ?>