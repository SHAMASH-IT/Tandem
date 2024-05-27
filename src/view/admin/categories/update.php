<?php $page_title = 'categories'; ?>
<?php include VIEW_DIR."/admin/header.php"; ?>
<style>
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

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Category update</h3>
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
                            <input type="hidden" name="update_category">
                            <input type="hidden" name="category_id" value="<?=$category_id?>">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" value="<?=$category_name ?? ''?>" required>
                                </div>
                                <div class="col-md-6">

<label class="form-label">Category Parent</label>
<select class="form-control" name="category_parent">
    <option value="0">No parent</option>
    <?php
    function displayCategoryOptions($category, $prefix, $selectedCategoryId) {
        $category_id = $category['category_id'];
        echo '<option value="'.$category_id.'" '.($category_id == $selectedCategoryId ? 'selected' : '').'>'.$prefix.$category['category_name'].'</option>';

        $categories = fetch_all("SELECT * FROM categories WHERE category_parent = '$category_id' ORDER BY category_name");
        if (!empty($categories)) {
            foreach ($categories as $category) {
                    displayCategoryOptions($category, $prefix.' &gt; ', $selectedCategoryId);
            }
        }
    }

    $categories = fetch_all("SELECT * FROM categories WHERE category_parent = '0' ORDER BY category_name ASC");

    foreach ($categories as $category):
        displayCategoryOptions($category, '', $category_id);
    endforeach;
    ?>
</select>


                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Category Slug</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><?=URL?>category<?php
                                            if(isset($category_parent)){
                                               echo get_category_predecessors($category_parent).'/';
                                            }
                                            ?>
                                        </span>
                                        <input type="text" name="category_slug"  value="<?=$category_slug ?? ''?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Short Description</label>
                                    <textarea name="category_short_description" class="form-control" placeholder="Please add Description here"><?=$category_short_description ?? ''?></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Cover description</label>
                                    <textarea name="category_description" class="form-control" placeholder="Please add Description here"><?=$category_description ?? ''?></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Heading</label>
                                    <textarea name="category_heading" class="form-control" placeholder="Please add Description here"><?=$category_heading ?? ''?></textarea>
                                </div>
                                <div class="col-md-12">
                                        <label class="form-label">Descriptions</label>
                                        <div id="input-descriptions">
                                            <?php
                                            $descriptions = json_decode($category_descriptions ?? '', true);
                                            if(!empty($descriptions)){
                                                foreach($descriptions as $description):
                                                ?>
                                                <details open class="form-control">
                                                        <summary>
                                                            <input class="form-control" type="text" name="category_descriptions[][title]" placeholder="Titre de description" value="<?=$description['title']?>">
                                                        </summary>
                                                        <textarea rows="3" name="category_descriptions[][description]" class="form-control" placeholder="Description"><?=$description['description']?></textarea>
                                                </details>
                                                <?php
                                                endforeach;
                                            }
                                            ?>
                                        </div>
                                        <button id="add-description" class="btn btn-primary" style="" type="button">Add description</button>
                                    </div>
                            </div>
                            <input type="hidden" name="update_category">
                            <button type="submit" class="btn btn-primary mt-5 py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>
                            <a href="<?=URL.'admin/categories/delete?category_id='.$category_id?>" class="btn btn-danger mt-5 py-2 px-5 text-uppercase btn-set-task w-sm-100 delete-alert">Delete</a>
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
                <?php elseif($updated): ?>
                        <div class="alert alert-success">
                            Category updated!
                        </div>

                <?php endif; ?>
            </div>
        </div><!-- Row end  --> 
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
                                                $images = fetch_all("SELECT * FROM images WHERE identifier = '$category_id'");
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
                                                                <button type="button" name="delete_image" class="btn btn-outline-secondary deleterow delete-alert"  data-src="<?=$image_src?>"><i class="icofont-ui-delete text-danger"></i></button>
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
                    <input class="form-control" type="text" name="category_descriptions[][title]" placeholder="Titre de description">
                </summary>
                <textarea rows="3" name="category_descriptions[][description]" class="form-control" placeholder="Description"></textarea>
        </details>
        `
    );
});
 const category_id = document.querySelector('input[name=category_id]').value;   
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
                            <button type="button" name="delete_image" class="btn btn-outline-secondary deleterow delete-alert"  data-src="${image}"><i class="icofont-ui-delete text-danger"></i></button>
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
            let id = el.getAttribute('data-src');
            fetch(`api/image/delete?image_src=${id}`)
            .then((res)=>{ return res.text()})
            .then((res)=>{  
                if(JSON.parse(res).status == true){
                    el.parentNode.parentNode.parentNode.remove();
                }

            })
            .catch(error => { console.log(error.status); });   
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
  
  formData.append("identifier", category_id);
  
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