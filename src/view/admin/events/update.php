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
            <input type="hidden" id="event_id" name="event_id" value="<?=$event_id?>">
            
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
                            Event updated!
                        </div>

                <?php endif; ?>
            <div class="row g-3 mb-3">   
                <div class="col-xl-8 col-lg-8">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Event details</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" name="label" value="<?=$label ?? ''?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Enter Description Here"><?=$description ?? ''?></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Formation</label>
                                    <input type="text" class="form-control" id="formation_name" value="" placeholder="Search...">
                                    <div id="list-formations">
                                        <ul>
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                    <select style="display:none" name="id_formation" id="id_formation" class="form-control">
                                        <?php foreach($formations as $formation): ?>
                                                <option value="<?=$formation['formation_id']?>"><?=$formation['formation_title']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Date time</label>
                                    <input type="datetime-local" class="form-control" name="datetime" value="<?=$datetime ?? ''?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Place</label>
                                    <input type="text" class="form-control" name="place" value="<?=$place ?? ''?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="update_event" class="btn btn-primary mt-5 py-2 px-5 text-uppercase btn-set-task w-sm-50">Save</button>
                        <a href="<?=URL.'admin/events/delete?event_id='.$event_id?>"  class="btn btn-danger mt-5 py-2 px-5 text-uppercase btn-set-task w-sm-50">Delete</a>
                    </div>
                </div>
            
            </div>
        <form>
    </div>
</div>    

</div>
<script>
// Get the search input and select dropdown
const searchInput = document.getElementById('formation_name');
const selectDropdown = document.getElementById('id_formation');

// Add an event listener to the search input
searchInput.addEventListener('input', function() {
  // Get the user's search query
  const searchQuery = this.value.toLowerCase();

  // Loop through the options of the select dropdown
  for (let i = 0; i < selectDropdown.options.length; i++) {
    const option = selectDropdown.options[i];

    // Get the option's text and value, and convert them to lowercase
    const optionText = option.text.toLowerCase();
    const optionValue = option.value.toLowerCase();

    // Check if the option's text or value includes the search query
    if (optionText.includes(searchQuery)) {
      // If the option matches the search query, show it
      option.style.display = '';
    } else {
      // If the option doesn't match the search query, hide it
      option.style.display = 'none';
    }
  }
});
</script>
<?php include VIEW_DIR."/admin/footer.php"; ?>