<?php

function upload_images(){
    if($_SERVER['REQUEST_METHOD'] == "POST"):
        extract(sanitize_array_assoc($_REQUEST));
        $paths = upload_files('file', ASSETS_DIR.'uploads/');
        $uploaded = true;
        foreach($paths as $path){
            $uploaded = $uploaded && query("INSERT INTO images (image_src, identifier, image_title, image_alt, image_order) VALUES ('$path', '$identifier', '', '', '1')");
        }
        if($uploaded ){
            exit(json_encode(array('status'=> true, 'data' => $paths)));
        }
        exit(json_encode(array('status'=> false)));
    endif;
}

function delete_image(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($image_src)){
        $deleted = query("DELETE FROM images WHERE image_src = '$image_src'");
        if($deleted){
            exit(json_encode(array('status'=> true)));
        }
        exit(json_encode(array('status'=> false)));
    }
}
function update_image(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($image_src) && !empty($image_src)){
        $image_order = $image_order ?? 1;
        $image_alt = $image_alt ?? '';
        $image_title = $image_title ?? '';
        $updated = query("UPDATE images SET image_order = '$image_order', image_alt = '$image_alt', image_title = '$image_title' WHERE image_src = '$image_src'");
        if($updated){
            exit(json_encode(array('status'=> true)));
        }
    }
    exit(json_encode(array('status'=> false)));
}