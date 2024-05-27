<?php
function categoryShowAll(){
    query("DELETE FROM categories WHERE category_name IS NULL AND category_slug IS NULL ");
    include VIEW_DIR."/admin/categories/index.php";
} 
function categoryDescriptions($description){
    $ret = array();
    if(is_array($description)){
        $len = (int) sizeof($description);
        for($i=0;$i<$len-1;$i+=2){
            if(!empty($description[$i]['title']) || !empty($description[$i]['description'])){
                $ret[] = array('title'=>trim(json_encode($description[$i]['title']), '"'), 'description'=>trim(json_encode($description[$i+1]['description']), '"'));
            }
        }
    }
    return json_encode($ret);
}
function categoryDelete(){
    
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($category_id)){
        query("UPDATE categories SET category_parent = '0' WHERE category_parent = '$category_id'");
        $deleted = query("DELETE FROM categories WHERE category_id = '$category_id'");
        $deleted = $deleted && query("DELETE FROM categories_formations WHERE id_category = '$category_id'");
        if($deleted){
            redirect('admin/categories');
        }
    }
}

function categoryUpdate(){
    
    extract(sanitize_array_assoc($_REQUEST));
    $errors = [];
    $updated = false;
    if($_SERVER['REQUEST_METHOD'] == "POST"):
        if(isset($update_category) && isset($category_id)){
            if(empty($category_name)) $errors [] = "category name is empty!";
            if(empty($errors)){
                $category_parent = $category_parent ?? '0';
                $category_description = $category_description ?? '';
                $category_short_description = $category_short_description ?? '';
                $category_heading = $category_heading ?? '';
                $category_descriptions = categoryDescriptions($category_descriptions ?? '');
                $category_slug = empty($category_slug) ? $category_name : $category_slug;
                $category_slug = str_replace(' ', '-', $category_slug);
                $category_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $category_slug)); 
                if(empty($path)){
                    $updated = query("UPDATE categories SET 
                    category_name = '$category_name', 
                    category_description = '$category_description', 
                    category_heading = '$category_heading', 
                    category_short_description = '$category_short_description', 
                    category_descriptions = '$category_descriptions', 
                    category_slug = '$category_slug', 
                    category_parent = '$category_parent' 
                    WHERE category_id = '$category_id'");
                }
                if(!$updated) $errors [] = "Error: Somthing wrong happen!";
            }
        }
    endif;
    if(isset($category_id)){
        $data = fetch_array("SELECT * FROM categories WHERE category_id = '$category_id'");
        if(empty($data)){
            query("INSERT INTO `categories` (category_id) VALUES ('$category_id')");
            $data = fetch_array("SELECT * FROM categories WHERE category_id = '$category_id' AND deleted = 0 ");
        }
        extract($data); 
    }else{
        redirect('admin/categories');
    }
    include VIEW_DIR."/admin/categories/update.php";
}

function categoryFetch($slug = ''){

    $category_id = get_category_id_from_slug($slug) ?? '';
    
    $data = fetch_array("SELECT * FROM categories WHERE category_id = '$category_id'");
    
    if(empty($data)){ redirect('404'); }
    
    include VIEW_DIR."/public/pages/category.php";

    // if(category_has_child($category_id)){
    // }
    // else{
    //     include VIEW_DIR."/public/pages/under_category.php";  
    // }


} 
function tagFetch($slug = ''){
    $formations = [];
    $tag = $slug;
    if(strpos($slug, '/') === false){
        $formations = fetch_all("SELECT * FROM formations, tags WHERE keyword = '$tag' AND id_formation = formation_id AND deleted = 0 order by date_creation desc");
    }else{
        $tags = explode('/', $slug);
        $subqueries = [];

        foreach ($tags as $tag) {
            $subqueries[] = "SELECT id_formation FROM tags WHERE keyword = '$tag'";
        }

        $sql = "
            SELECT *
            FROM formations
            WHERE " . implode(' AND ', array_map(function ($subquery) {
                return "formation_id IN ($subquery)";
            }, $subqueries)) . "
            GROUP BY formation_id";
        $formations = fetch_all($sql);
        
    }

    // dd($formations);

    if(empty($formations)){ redirect('404'); }
    
    include VIEW_DIR."/public/pages/tag.php";  

}
