<?php $page_title = 'formations'; ?>
<?php 
$link = '';
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

progress::-moz-progress-bar,
progress::-webkit-progress-value {     
    background-color: #a5df41;
    background-image: linear-gradient(top, #a5df41, #4ca916);
}
progress { 
    color: #a5df41;
	width: 100%;
	height: 8px;
	border-radius: 8px;
	border: none;
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
                            Formation created!
                        </div>

                <?php endif; ?>
            <div class="row g-3 mb-3">   
                <div class="col-xl-4 col-lg-4">
                    <div class="sticky-lg-top">                 
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Publishing</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formation_published" value="1" <?=($formation_published ?? '') == '1'?'checked':''?> >
                                    <label class="form-check-label">
                                        Published
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formation_published" value="-1" <?=($formation_published ?? '') == '-1'?'checked':''?>
                                    <?=isset($formation_published)?'':'checked'?>
                                    >
                                    <label class="form-check-label">
                                        Draft
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Info</h6>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="formation_code" value="<?=$formation_code ?? ''?>" placeholder="Code"> 
                                <br>

                                <input type="text" class="form-control" value="<?=$lessons?>" name="lessons" id="lessons" placeholder="Lessons">
                                <br>

                                <input type="text" class="form-control" value="<?=$period?>" name="period" id="period" placeholder="period">
                                <br>
                                
                                <input type="text" class="form-control" value="<?=$enrolled?>" name="enrolled" id="enrolled" placeholder="Enrolled">
                                <br>
                                
                                <input type="text" class="form-control" value="<?=$duration?>" name="duration" id="duration" placeholder="Duration">
                                <br>
                            
                                <input type="text" class="form-control" value="<?=$language?>" name="language" id="language" placeholder="Language">
                                <br>
                            

                                <input type="text" class="form-control" value="<?=$prix?>" name="prix" id="prix" placeholder="Prix">
                                <br>
                            
                                <input type="text" class="form-control" value="<?=$type?>" name="type" id="type" placeholder="Type">
                                <br>
                            
                                <input type="text" class="form-control" value="<?=$horaire?>" name="horaire" id="horaire" placeholder="Horaire">
                                <br>
                            
                                <input type="text" class="form-control" value="<?=$cadence?>" name="cadence" id="cadence" placeholder="Cadence">
                                <br>
                            
                                <input type="text" class="form-control" value="<?=$hours?>" name="hours" id="hours" placeholder="Hours">
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Categories</h6>
                            </div>
                            <div class="card-body">
                                <?php
                                    function li($cp, $pre_, $cf){
                                        $category_id = $cp['category_id'];
                                        $nb = $cp['category_parent'] != '0' ? ' ('.count_formation_category($category_id).')':'';
                                        echo '<div class="form-check">
                                                <input class="form-check-input" name="id_category" type="radio" value="'.$category_id.'"'.(($category_id == $cf)?'checked':'').'>
                                                <label class="form-check-label">'.$pre_.$cp['category_name'].'</label>
                                            </div>';
                                        
                                        $cc = fetch_all("SELECT * FROM categories WHERE category_parent = '$category_id' ORDER BY category_name");
                                            if(!empty($cc)){
                                                foreach($cc as $c){
                                                    if(category_has_child($category_id)){
                                                        li($c, $pre_.' > ', $cf);
                                                    }else{
                                                        li($c, $pre_, $cf);
                                                    }
                                                }
                                            }
                                    } 
                                    $categories = fetch_all("SELECT * FROM categories WHERE category_parent = '0' ORDER BY category_name");
                                    $cf = fetch_array("SELECT id_category FROM categories_formations WHERE id_formation = '$formation_id' ");
                                    if(!empty($cf)){
                                        $cf = $cf['id_category'];
                                    }

                                    foreach($categories as $category): 
                                        li($category,'', $cf);
                                    endforeach;
                                    ?>
                            </div>
                        </div>
                        <?php
                            $tags = fetch_all("SELECT DISTINCT id, keyword FROM tags WHERE id_formation = '$formation_id' ");
                        ?>
                        <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Tags</h6>
                                </div>
                                <div class="card-body">
                                    <div class="filter-size">
                                        <div class="d-flex gap-2 justify-content-between">
                                            <input type="text"placeholder="#keyword" class="form-control" id="input_tag" pattern="[a-zA-Z0-9 ]+">
                                            <button id="add_tag" type="button" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                        
                                    <div id="display_tags" class="display_tags gap-2">
                                        <?php foreach($tags as $tag): ?>
                                            <div class="tag_container" style="width: fit-content;">
                                                <span class="tag_keyword">
                                                    <?=$tag['keyword']?>
                                                </span>
                                                <span class="delete_tag" data-id="<?=$tag['id']?>">&times;</span>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Formation</h6>
                        </div>
                        <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="formation_title" value="<?=$formation_title ?? ''?>"> 
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Type</label>
                                        <input type="text" class="form-control" name="formation_type" value="<?=$formation_type ?? ''?>"> 
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Slug</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><?=URL?></span>
                                            <input type="text" class="form-control" name="formation_slug" value="<?=$formation_slug ?? ''?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Intro</label>
                                        <textarea name="formation_slogan" class="form-control" placeholder="Slogan"><?=$formation_slogan ?? ''?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Meta description</label>
                                        <textarea name="formation_short_description" class="form-control" placeholder="Enter Formation Description Here"><?=$formation_short_description ?? ''?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Descriptions</label>
                                        <div id="input-descriptions">
                                            <?php
                                            $descriptions = json_decode($formation_description ?? '', true);
                                            if(!empty($descriptions)){
                                                foreach($descriptions as $description):
                                                ?>
                                                <details open class="form-control">
                                                        <summary>
                                                            <input class="form-control" type="text" name="formation_description[][title]" placeholder="Titre de description" value="<?=$description['title']?>">
                                                        </summary>
                                                        <textarea rows="3" name="formation_description[][description]" class="form-control" placeholder="Description"><?=$description['description']?></textarea>
                                                </details>
                                                <?php
                                                endforeach;
                                            }
                                            ?>
                                        </div>
                                        <button id="add-description" class="btn btn-primary" style="" type="button">Add description</button>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Modules</label>
                                        <div id="input-modules">
                                            <?php
                                            $modules = json_decode($formation_modules ?? '', true);
                                            if(!empty($modules)){
                                                foreach($modules as $module):
                                                ?>
                                                <details open class="form-control">
                                                        <summary>
                                                            <input class="form-control" type="text" name="formation_modules[][title]" placeholder="Titre de module" value="<?=$module['title']?>">
                                                        </summary>
                                                        <textarea rows="3" name="formation_modules[][description]" class="form-control" placeholder="Description"><?=$module['description']?></textarea>
                                                </details>
                                                <?php
                                                endforeach;
                                            }
                                            ?>
                                        </div>
                                        <button id="add-module" class="btn btn-primary" style="" type="button">Add module</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="update_formation" class="btn btn-primary mt-5 py-2 px-5 text-uppercase btn-set-task w-sm-50">Save</button>
                        <a href="<?=URL.'admin/formations/delete?formation_id='.$formation_id?>"  name="delete_formation" class="btn btn-danger mt-5 py-2 px-5 text-uppercase btn-set-task w-sm-50 delete-alert">Delete</a>
                    </div>
                </div>
            
            </div>
        <form>
        <div class="row g-3 mb-3">
            <div class="col-xl-12 col-lg-8">            
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Images</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <input id="uploadFiles" type="file" multiple data-id="<?=$formation_id?>">
                                    <progress id="progressBar" value="0" max="100"></progress>
                                </div>
                            </form>
                            <div class="col-md-12">
                                <div class="product-cart">
                                    <div class="checkout-table table-responsive">
                                        <table id="myCartTable" class="table display dataTable table-hover align-middle" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="product">Image</th>
                                                    <th class="product">Title</th>
                                                    <th class="product">Alt</th>
                                                    <th class="quantity">Order</th>
                                                    <th class="quantity">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="images_rows">
                                                <?php
                                                $images = fetch_all("SELECT * FROM images WHERE identifier = '$formation_id'");
                                                if(!empty($images)):
                                                foreach($images as $image):
                                                    $image_order = $image['image_order'];
                                                    $image_src = $image['image_src'];
                                                    $image_title = $image['image_title'];
                                                    $image_alt = $image['image_alt'];
                                                ?>
                                                <tr id="<?=$image_src?>">
                                                        <td>
                                                            <div class="product-cart d-flex align-items-center">
                                                                <div class="product-thumb">
                                                                    <img src="<?=URL.ASSETS_DIR.'uploads/'.$image_src?>" class="img-fluid avatar xl" alt="Product">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Title" name="image_title" value="<?=$image_title?>">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"  placeholder="Alt" name="image_alt" value="<?=$image_alt?>">
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control" name="image_order" value="<?=$image_order?>">
                                                        </td>
                                                        <td>
                                                        <div class="btn-group" role="group">
                                                                <button type="button" name="save_image" class="btn btn-outline-secondary saveimage" data-src="<?=$image_src?>"><i class="icofont-save text-success"></i></button>
                                                                <button type="button" name="delete_image" class="btn btn-outline-secondary deleterow"  data-src="<?=$image_src?>"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                </tr>
                                                <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>    

</div>
<script>
const add_description = document.getElementById('add-description');
add_description.addEventListener('click', ()=>{
    document.getElementById('input-descriptions').insertAdjacentHTML('beforeend',
        `
        <details open class="form-control">
                <summary>
                    <input class="form-control" type="text" name="formation_description[][title]" placeholder="Titre de description">
                </summary>
                <textarea rows="3" name="formation_description[][description]" class="form-control" placeholder="Description"></textarea>
        </details>
        `
    );
});
const add_module = document.getElementById('add-module');
add_module.addEventListener('click', ()=>{
    document.getElementById('input-modules').insertAdjacentHTML('beforeend',
        `
        <details open class="form-control">
                <summary>
                    <input class="form-control" type="text" name="formation_modules[][title]" placeholder="Titre de module">
                </summary>
                <textarea rows="3" name="formation_modules[][description]" class="form-control" placeholder="Description"></textarea>
        </details>
        `
    );
});

let display_tags = document.querySelector('#display_tags');
const formation_id = document.querySelector('#formation_id').value;
const add_tag = document.querySelector('#add_tag');
function refreshTagsDeleteListener(){
    let deleteTags = document.querySelectorAll('.delete_tag');
    deleteTags.forEach((el)=>{
        el.addEventListener('click', ()=>{
            let id = el.getAttribute('data-id');
            fetch(`api/tag/delete?id=${id}`)
            .then((res)=>{ return res.text()})
            .then((res)=>{  
                if(JSON.parse(res).status == true){
                    el.parentNode.remove();
                }

            })
            .catch(error => { console.log(error.status); });   
        });
    });
}
add_tag.addEventListener('click', ()=>{
    let input_tag = document.querySelector('#input_tag');
    if(input_tag.value != ''){
        fetch(`api/tag/add?formation_id=${formation_id}&keyword=${input_tag.value}`)
            .then((res)=>{ return res.text()})
            .then((res)=>{  
                if(JSON.parse(res).status == true){
                    let tags = JSON.parse(res).tags;
                    input_tag.value = '';
                    display_tags.innerHTML = '';
                    tags.map((el)=>{
                        display_tags.innerHTML += `
                        <div class="tag_container">
                            <span class="tag_keyword">
                                ${el.keyword}
                            </span>
                            <span class="delete_tag" data-id="${el.id}">&times;</span>
                        </div>
                        `;
                    });
                    refreshTagsDeleteListener();
                }

            })

            .catch(error => { console.log(error.status); }); 
    }
});
refreshTagsDeleteListener();


/* Images */
function generate_image_rows(images = []){
    let rows = '';
    images.forEach((image)=>{
        rows += `
            <tr id="${image}">
                    <td>
                        <div class="product-cart d-flex align-items-center">
                            <div class="product-thumb">
                                <img src="<?=URL.ASSETS_DIR?>uploads/${image}" class="img-fluid avatar xl" alt="Product">
                            </div>
                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control" placeholder="Title" name="image_title" value="">
                    </td>
                    <td>
                        <input type="text" class="form-control"  placeholder="Alt" name="image_alt" value="">
                    </td>
                    <td>
                        <input type="number" class="form-control" name="image_order" value="1">
                    </td>
                    <td>
                    <div class="btn-group" role="group">
                            <button type="button" name="save_image" class="btn btn-outline-secondary saveimage" data-src="${image}"><i class="icofont-save text-success"></i></button>
                            <button type="button" name="delete_image" class="btn btn-outline-secondary deleterow"  data-src="${image}"><i class="icofont-ui-delete text-danger"></i></button>
                        </div>
                    </td>
            </tr>
        `;
    });
    document.getElementById('images_rows').innerHTML += rows;
}

function imagesDeleteListener(){
    let deleteImages = document.querySelectorAll('button[name=delete_image]');
    deleteImages.forEach((el)=>{
        el.addEventListener('click', ()=>{
            if (confirm('Do you really want to delete?')){
                let id = el.getAttribute('data-src');
                fetch(`api/image/delete?image_src=${id}`)
                .then((res)=>{ return res.text()})
                .then((res)=>{  
                    if(JSON.parse(res).status == true){
                        el.parentNode.parentNode.parentNode.remove();
                    }
                    
                })
                .catch(error => { console.log(error.status); });   
            };
        });
    });
}
imagesDeleteListener();


function imagesSaveListener(){
    let saveImages = document.querySelectorAll('button[name=save_image]');
    saveImages.forEach((el)=>{
        el.addEventListener('click', ()=>{
            const id = el.getAttribute('data-src');
            const formData = new FormData();
            const xhr = new XMLHttpRequest();
            const image_alt = document.getElementById(id).querySelector('input[name=image_alt]').value;
            const image_title = document.getElementById(id).querySelector('input[name=image_title]').value;
            const image_order = document.getElementById(id).querySelector('input[name=image_order]').value;
            
            formData.append("image_alt", image_alt);
            formData.append("image_title", image_title);
            formData.append("image_order", image_order);
            
            xhr.open("POST", `api/image/save?image_src=${id}`, true);
            xhr.onload = function() {
                if (this.status === 200) {
                    alert('Data saved!');
                } else {
                console.error("Error uploading files");
                }
            };

            xhr.send(formData);
        });
    });
}
imagesSaveListener();

const fileInput = document.getElementById('uploadFiles');
const progressBar = document.getElementById("progressBar");
// const formation_id = fileInput.getAttribute('data-id');

fileInput.addEventListener('change', () => {
  const files = fileInput.files;
  const formData = new FormData();

  for (let i = 0; i < files.length; i++) {
    formData.append("file[]", files[i]);
  }
  
  formData.append("identifier", formation_id);
  
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "api/image/upload", true);

  xhr.upload.onprogress = function(e) {
    const percent = (e.loaded / e.total) * 100;
    progressBar.value = percent;
  };

  xhr.onload = function() {
    if (this.status === 200) {
        const images = JSON.parse(this.responseText).data;
        generate_image_rows(images);
        imagesDeleteListener();
        imagesSaveListener();
        console.log("Files uploaded successfully");
    } else {
      console.error("Error uploading files");
    }
  };

  xhr.send(formData);
});

</script>

<?php include VIEW_DIR."/admin/footer.php"; ?>