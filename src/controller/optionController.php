<?php

function optionShowAll(){
    include VIEW_DIR."/admin/options/index.php";
}

function optionDelete(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($id) && is_numeric($id)){
        $deleted = query("DELETE FROM options WHERE id = '$id'");
        redirect('admin/options');
    }
}

function optionCreate(){
    $errors = [];
    $created = false;
    if($_SERVER['REQUEST_METHOD'] == "POST"):
        extract(sanitize_array_assoc($_REQUEST));
        if(isset($create_option)){
            if(empty($option_key)) $errors [] = "Option is empty!";
            if(empty($option_value)) $errors [] = "Option Value is empty!";

            if(empty($errors)){
                $sql = "INSERT INTO options (option_key,option_value) VALUES ('$option_key','$option_value')";
                $created = query($sql);
                if(!$created) $errors [] = "Error: Somthing wrong happen! ($sql)";
                else {
                    unset($option_key,$option_value);
                    redirect('admin/options');
                }
            }
        }
    endif;
    include VIEW_DIR."/admin/options/create.php";
}

function optionUpdate(){
   
    extract(sanitize_array_assoc($_REQUEST));
    $errors = [];
    $updated = false;
    if($_SERVER['REQUEST_METHOD'] == "POST"):
        if(isset($update_option)){
            if(empty($option_key)) $errors [] = "option  is empty!";
            if(empty($option_value)) $errors [] = "option value is empty!";
            if(empty($errors)){
                
                if(empty($path)){
                    $updated = query("UPDATE options SET option_key = '$option_key',option_value= '$option_value' WHERE id = '$id'");
                }
                if(!$updated) $errors [] = "Error: Somthing wrong happen!";
            }
        }
    endif;
    if(isset($id)){
        $data = fetch_array("SELECT * FROM options WHERE id = '$id'");
        if(!empty($data)){
            extract($data);
        }else{
            redirect('admin/options');
        } 
    }else{
        redirect('admin/options');
    }
    include VIEW_DIR."/admin/options/update.php";
}