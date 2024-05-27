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
                        <h3 class="fw-bold mb-0">Update option</h3>
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
        <form method="post" action="">
        
        
            <div class="row g-3 mb-3">  
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Basic information</h6>
                        </div>
                        <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">Option</label>
                                        <input type="text" class="form-control" name="option_key" value="<?=$option_key ?? ''?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Value</label>
                                        <input type="text" class="form-control" name="option_value" value="<?=$option_value ?? ''?>">
                                    </div>
                                    
                                   
                                </div>
                        </div>
                    </div>
                    
                    
                    <button type="submit" name="update_option" class="btn btn-primary mt-2 py-2 px-5 text-uppercase btn-set-task w-sm-100 mb-3">Save</button>
                </div>
        </form>
               
            </div>
    </div>