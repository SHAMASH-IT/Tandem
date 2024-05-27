<?php
function clientShowAll(){
    include VIEW_DIR."/admin/clients/index.php";
}

function clientDelete(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($id) && is_numeric($id)){
        // $deleted = query("DELETE FROM clients WHERE id = '$id'");
        $deleted = query("UPDATE clients SET deleted = 1 WHERE id = '$id'");
        redirect('admin/clients');
    }
}