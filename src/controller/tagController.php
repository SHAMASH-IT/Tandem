<?php

function addTag(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($formation_id) && isset($keyword)){
        $keyword = strtolower($keyword);
        $sql = "SELECT * FROM tags WHERE id_formation = '$formation_id' AND keyword = '$keyword'";
        $exists = query($sql)->num_rows > 0;
       
        if(!$exists){
            $sql = "INSERT INTO tags (id_formation, keyword) VALUES ('$formation_id', '$keyword')";
            if(query($sql)){
                $tags = fetch_all("SELECT DISTINCT id, keyword FROM tags WHERE id_formation = '$formation_id' ");
                exit(json_encode(array('status'=> true, 'tags'=> $tags)));
            }
        }
    }
    exit(json_encode(array('status'=> false)));
}


function deleteTag(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($id) && !empty($id)){
        if(query("DELETE FROM tags WHERE id = '$id'")){
            exit(json_encode(array('status'=> true)));
        }
    }
    exit(json_encode(array('status'=> false)));
}