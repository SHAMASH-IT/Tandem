<?php $page_title = 'formations'; ?>
<?php 

$rich_text_editor_libs = '
';


?>
<?php include VIEW_DIR."/admin/header.php"; ?>
<style>
.tag_container {
	padding: 4px 8px;
	padding-right: 0;
	background-color: #7258db;
	border-radius: 4px;
	margin: 2px;
	color: white;
	display: flex;
	justify-content: space-between;
	gap: 8px;
	align-items: center;
}
.delete_tag {
    border-radius: 4px;
	width: 24px;
	text-align: center;
	background-color: #ba2b6b;
	font-size: 16px;
	height: 24px;
}
.tag_keyword {
	font-size: 12px;
}
.tag_container:hover{
    cursor: pointer;
    background-color:#462cb1;
}
.delete_tag:hover{
    cursor: pointer;
    background-color:red;
}
.display_tags {
	padding-top: 16px;
}
input[type="date"], input[type="time"] {
	min-width: 80%;
}
</style>
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
        <form method="post" action="" enctype="multipart/form-data">
            <?php $formation_id = $formation_id ?? strtoupper(uniqid('F')); ?>
            <input type="hidden" id="formation_id" name="formation_id" value="<?=$formation_id?>">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">New Formation</h3>
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
                <?php elseif($created ?? false): ?>
                        <div class="alert alert-success">
                            Meta updated!
                        </div>

                <?php endif; ?>
            <div class="row g-3 mb-3">   
                <div class="col-xl-8 col-lg-8">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">SEO information</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title" value="<?=$meta_title ?? ''?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">meta Description</label>
                                    <textarea name="meta_description" class="form-control" placeholder="Enter SEO Description Here"><?=$meta_description ?? ''?></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Indexing</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="meta_index" value="dofollow" <?=$meta_index == 'dofollow'?'checked':''?>> 
                                        <label class="form-check-label">Do Follow</label>
                                    </div>
                                    
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="meta_index" value="nofollow" <?=$meta_index == 'nofollow'?'checked':''?>> 
                                        <label class="form-check-label">No Follow</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="update_meta" class="btn btn-primary mt-5 py-2 px-5 text-uppercase btn-set-task w-sm-50">Save</button>
                    </div>
                </div>
            
            </div>
        <form>
    </div>
</div>    

</div>
<?php include VIEW_DIR."/admin/footer.php"; ?>