<?php

function formationShowAll(){
 
    query("DELETE FROM formations WHERE formation_title = '' AND formation_slug = '' AND formation_slogan = '' AND formation_code = '' AND formation_description = '' AND formation_short_description = '' AND formation_modules = '' AND formation_list = '' ");

    query("DELETE FROM tags WHERE id_formation NOT IN (SELECT formation_id FROM formations)");

    query("DELETE FROM images WHERE identifier LIKE 'F%' AND identifier NOT IN (SELECT formation_id FROM formations)");

    query("DELETE FROM info WHERE id_formation NOT IN (SELECT formation_id FROM formations)");

    query("DELETE FROM meta WHERE id_formation NOT IN (SELECT formation_id FROM formations)");

    query("DELETE FROM categories_formations WHERE id_formation NOT IN (SELECT formation_id FROM formations)");

    extract(sanitize_array_assoc($_REQUEST));
    include VIEW_DIR."/admin/formations/index.php";
}

function formationDelete(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($formation_id)){
        $deleted = query("UPDATE formations SET deleted = 1 WHERE formation_id = '$formation_id'");
        redirect('admin/formations');
    }
    
}
function formationModules($modules){
    $ret = array();
    if(is_array($modules)){
        $len = (int) sizeof($modules);
        for($i=0;$i<$len-1;$i+=2){
            if(!empty($modules[$i]['title']) || !empty($modules[$i]['description'])){
                $ret[] = array('title'=>trim(json_encode($modules[$i]['title']), '"'), 'description'=>trim(json_encode($modules[$i+1]['description']), '"'));
            }
        }
    }
    return json_encode($ret);
}

function formationUpdate(){
    $errors = [];
    $updated = false;
    extract(sanitize_array_assoc($_REQUEST));
    if($_SERVER['REQUEST_METHOD'] == "POST"):
        if(isset($delete_formation)){
            formationDelete();
        }
        if(isset($update_formation) && isset($formation_id) && !empty($formation_id)){

            $formation_title = $formation_title ?? ''; 
            $formation_title = trim($formation_title, ' '); 
            $formation_slogan = $formation_slogan ?? ''; 
            $formation_code = $formation_code ?? ''; 
            $formation_short_description = $formation_short_description ?? ''; 
            $formation_description = formationModules($formation_description ?? ''); 
            $formation_modules = formationModules($formation_modules ?? ''); 
            $formation_list = $formation_list ?? ''; 
            $formation_published = $formation_published ?? ''; 
            $formation_slug = $formation_slug ?? ''; 
            if(empty($formation_slug) && !empty($formation_title)){
                $formation_slug = $formation_title;
            }
            $formation_slug = str_replace(' ', '-', $formation_slug);
            $formation_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $formation_slug)); 

            $updated = query("UPDATE formations SET 

            formation_title = '$formation_title',  
            formation_slug = '$formation_slug',  
            formation_slogan = '$formation_slogan',  
            formation_code = '$formation_code',  
            formation_description = '$formation_description',  
            formation_short_description = '$formation_short_description',  
            formation_modules = '$formation_modules',  
            formation_list = '$formation_list',  
            formation_published = '$formation_published',
            formation_type = '$formation_type'
            
            WHERE formation_id = '$formation_id' AND deleted = 0 
            ");

            if(!$updated) $errors [] = "Update Table Formations Error: Somthing wrong happen!";
            
            
            $lessons = $lessons ?? ''; 
            $duration = $duration ?? ''; 
            $enrolled = $enrolled ?? ''; 
            $language = $language ?? ''; 

            $period = $period ?? ''; 
            $prix = $prix ?? ''; 
            $type = $type ?? ''; 
            $horaire = $horaire ?? ''; 
            $cadence = $cadence ?? ''; 
            $hours = $hours ?? ''; 
            
            query("UPDATE info SET period = '$period', lessons = '$lessons', duration = '$duration', enrolled = '$enrolled', language = '$language', horaire = '$horaire', cadence = '$cadence', hours = '$hours', prix = '$prix', type = '$type'  WHERE id_formation = '$formation_id'");

            $id_category = $id_category ?? '';
            $select_categories_formations = fetch_array("SELECT * from categories_formations WHERE id_formation = '$formation_id'");

            if(!empty($select_categories_formations))
            {
                query("UPDATE categories_formations  SET id_category = '$id_category' WHERE id_formation = '$formation_id'  ");
            }else{
                query("INSERT INTO `categories_formations` (id_formation, id_category) VALUES ('$formation_id', '$id_category')");
            }

            if($updated) redirect('admin/formations');
        }
    endif;
    if(isset($formation_id)){
        $data_formations = fetch_array("SELECT * FROM formations WHERE formation_id = '$formation_id' AND deleted = 0 ");
        $data_info = fetch_array("SELECT * FROM info WHERE id_formation = '$formation_id' ");
        $data_meta = fetch_array("SELECT * FROM meta WHERE id_formation = '$formation_id' ");
        $data_categories_formations = fetch_array("SELECT * FROM categories_formations WHERE id_formation = '$formation_id' ");
        
        if(empty($data_formations)){
            query("INSERT INTO `formations` (formation_id) VALUES ('$formation_id')");
            $data_formations = fetch_array("SELECT * FROM formations WHERE formation_id = '$formation_id' AND deleted = 0 ");
        }

        if(empty($data_info)){
            query("INSERT INTO `info` (id_formation) VALUES ('$formation_id')");
            $data_info = fetch_array("SELECT * FROM info WHERE id_formation = '$formation_id'");
        }

        if(empty($data_meta)){
            query("INSERT INTO `meta` (id_formation) VALUES ('$formation_id')");
        }

        if(empty($data_categories_formations)){
            query("INSERT INTO `categories_formations` (id_formation) VALUES ('$formation_id')");
            $data_categories_formations = fetch_array("SELECT * FROM categories_formations WHERE id_formation = '$formation_id' ");
        }
        
        extract($data_formations ?? []);
        extract($data_info ?? []);
        extract($data_categories_formations ?? []);

        // $extracted = extract_from_text($formation_modules);
        // dd($extracted);
    }else{
        redirect('admin/formations');
    }

    include VIEW_DIR."/admin/formations/update.php";
}

function formationFetch($slug = ''){
    $formation = fetch_array("SELECT * FROM formations, info WHERE formation_slug = '$slug' AND formation_published = 1 AND id_formation = formation_id AND deleted = 0 ");
    if(empty($formation)){
        redirect('404');  
    }
    $images = fetch_all("SELECT image_src, image_title, image_alt FROM images WHERE identifier = '".$formation['formation_id']."' ORDER BY image_order");

    include VIEW_DIR."/public/pages/formation.php";
}

function formationToggleStatus(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($formation_id)){
        $ok = query("UPDATE formations SET formation_published = formation_published * -1 WHERE formation_id = '$formation_id'");
        if($ok){
            exit(json_encode(array('status'=> true)));
        }
    }else{
        exit(json_encode(array('status'=> false)));
    }
}




function fetchSummerSessionLanguages(){
    $formations = fetch_all("SELECT * FROM `formations`, info WHERE formation_slug like  '%intensif%' AND formation_type like 'teen' AND formation_published = 1 AND id_formation = formation_id AND deleted = 0;");
    $formations2 = fetch_all("SELECT * FROM `formations`, info WHERE formation_slug like  '%ielts%' AND formation_type like 'teen' AND formation_published = 1 AND id_formation = formation_id AND deleted = 0;");
    
    //if(empty($formations)) redirect('404');    

    //$images = fetch_all("SELECT image_src, image_title, image_alt FROM images WHERE identifier = '".$formation['formation_id']."' ORDER BY image_order");

    include VIEW_DIR. "/public/pages/summer-sessions-languages.php";
}