<?php
function metaShowAll(){
    include VIEW_DIR."/admin/meta/index.php";
}

function metaUpdate(){
    $errors = [];
    $updated = false;
    extract(sanitize_array_assoc($_REQUEST));
    if($_SERVER['REQUEST_METHOD'] == "POST"):
        if(isset($update_meta) && isset($formation_id) && !empty($formation_id)){
            if(empty($meta_title)) $errors [] = "meta SEO title is empty!";
            if(empty($meta_description)) $errors [] = "meta SEO description is empty!";
            if(empty($meta_index)) $errors [] = "meta index is empty!";
            
            if(empty($errors)){
                $updated = query("UPDATE meta SET meta_title = '$meta_title', meta_description = '$meta_description', meta_index = '$meta_index' WHERE id_formation = '$formation_id'");
                if(!$updated) $errors [] = "Update Table Meta Error: Somthing wrong happen!";
                else redirect('admin/meta');
            }
        }
    endif; 
    if(isset($formation_id)){
        $data = fetch_array("SELECT * FROM meta WHERE id_formation = '$formation_id' ");
        if(empty($data)){
            redirect('admin/meta');
        } 
        extract($data);
    }else{
        redirect('admin/meta');
    }
    include VIEW_DIR."/admin/meta/update.php";
}
