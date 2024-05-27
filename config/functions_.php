<?php

function query($sql) {

    $connexion = new mysqli( DATABASE_SERVER, DATABASE_ROOT, DATABASE_PASSWORD, DATABASE_NAME );

    if($connexion->connect_errno != 0){ 

        die("Erreur de connection"); 

    }

    return $connexion->query($sql);

}



function fetch_all($query) {

    return query($query)->fetch_all(MYSQLI_ASSOC);

}



function fetch_array($query) {

    return query($query)->fetch_array(MYSQLI_ASSOC);

}



function redirect($path = ''){

    header('Location: '.URL.$path);

    exit();

}



function serve_request($route){

    $value = $route[PATH] ?? '';

    if(!empty($value)){

        $parts = explode('@', $value);

        $filepath = CONTROLLER_DIR.'/'.$parts[0].'.php';

        $func_name = $parts[1];

        if(file_exists($filepath)){

            include $filepath;

            if(function_exists($func_name)){

                call_user_func($func_name);

                exit();

            }

        }

    }else{

        foreach($route as $key => $value){

            if(substr_count($key, '*') > -1){

                $key = str_replace('*', '', $key);

                if(stripos(PATH, $key) === 0){

                    $slug = str_replace($key,'', PATH);

                    $parts = explode('@', $value);

                    $filepath = CONTROLLER_DIR.'/'.$parts[0].'.php';

                    $func_name = $parts[1];

                    if(file_exists($filepath)){

                        include $filepath;

                        if(function_exists($func_name)){
                           
                            call_user_func($func_name, $slug);

                            exit();

                        }

                    }

                }

            }

        }

    }

    redirect('404');

}



/*

function __($text = ''){

    $dict = file_get_contents(LANG_DIR.'/dict.json');

    $dict = json_decode($dict, true);

    $lang = empty(DEFAULT_LANG)?'fr':DEFAULT_LANG;

    if(isset($dict[$lang][$text])){

        if(empty($dict[$lang][$text])){

            return $text;

        }

        return $dict[$lang][$text];

    }else {

        $dict[$lang][$text] = '';

        file_put_contents(LANG_DIR.'/dict.json', json_encode($dict));

    }

    return $text;

}

*/

 

function __($text = ''){

    $dict = file_get_contents(LANG_DIR.'/dict.json');

    $dict = json_decode($dict, true);

    $lang = empty(DEFAULT_LANG)?'fr':DEFAULT_LANG;

    if(isset($dict[$lang][$text])){

        if(empty($dict[$lang][$text])){

            return $text;

        }

        return $dict[$lang][$text];

    }

    return $text;

}



function sanitize_array_assoc(&$array){

    foreach($array as $a => &$b)

    {

        if(is_array($b)){

            sanitize_array_assoc($b);

        }else{

            $b = filter_var($b, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        }

    }

    return $array;

}



function create_logs(){

    $dirname = LOG_DIR;

    if (!file_exists($dirname)) {

        mkdir($dirname, 0777, true);

    }

    $log_filename = $dirname.'/'.md5(date('Y-m-d')).'.log';

    $log_time = date('Y-m-d H:i:m');

    $log_ip = $_SERVER['REMOTE_ADDR'];

    $log_url = $_SERVER['REQUEST_URI'];

    $log_method = $_SERVER['REQUEST_METHOD'];

    $log_user_agent = $_SERVER['HTTP_USER_AGENT'];

    $log_posteddata = '';

    $req = sanitize_array_assoc($_REQUEST);

    if($log_method == 'POST'){

        $log_posteddata = '['.json_encode($req).']';

        if(stripos($log_posteddata, 'data:image') > -1){

            $log_posteddata = '[]';

        }

    }

    $log_data = "[$log_time] [$log_ip] [$log_user_agent] [$log_url] [$log_method] $log_posteddata";

    file_put_contents($log_filename, $log_data.PHP_EOL, FILE_APPEND);

}



function delete_dir_content($dir) { 

    if (is_dir($dir)) { 

        $objects = scandir($dir); 

        if(count($objects) > 2){

            foreach ($objects as $object) {

                if ($object != "." && $object != "..")  {

                    if (is_dir($dir."/".$object)){

                        delete_dir_content($dir."/".$object);

                    } else {

                        unlink($dir."/".$object);

                    }

                }

            }

        }

    }

}



function clear_cache(){

    $dirname = CACHE_DIR;

    if (file_exists($dirname)) {

        delete_dir_content($dirname); 

    }

}



function isEmailValid($email){

    return filter_var($email, FILTER_VALIDATE_EMAIL);       

}



function isPasswordStrong($password){

    return true; // easy

    return strlen($password) > 7 && preg_match("#[0-9]+#", $password) && preg_match("#[a-zA-Z]+#", $password) && preg_match('#[^\w]#', $password);

}



function dd(&$var){

    echo "<pre>";

        var_dump($var);

    echo "</pre>";

    die();

}



function upload_files($files, $path = ''){

    $paths = [];

    $count = sizeof($_FILES[$files]['name']);

    for($i=0;$i<$count;++$i)

    {

        $file_name = $_FILES[$files]['name'][$i];

        $file_tmp = $_FILES[$files]['tmp_name'][$i];

        $file_size = $_FILES[$files]['size'][$i];

        $file_parts = explode('.', $file_name);

        $file_ext = $file_parts[sizeof($file_parts)-1];

        $file_ext = strtolower($file_ext);

        $allowed = ['png','jpg','jpeg','webp', 'svg'];

        

        if(in_array($file_ext, $allowed) && $file_size < 25*MB)

        {

            $new_file_name = "IMG_".strtoupper(time().uniqid()).'.'.$file_ext;

            $file_des = $path.$new_file_name;

            move_uploaded_file($file_tmp, $file_des);

            $paths[] = $new_file_name;

        }

    }

    return $paths;

}



function upload_file($file, $path = ''){

        $file_name = $_FILES[$file]['name'];

        $file_tmp = $_FILES[$file]['tmp_name'];

        $file_size = $_FILES[$file]['size'];

        $file_parts = explode('.', $file_name);

        $file_ext = $file_parts[sizeof($file_parts)-1];

        $file_ext = strtolower($file_ext);

        $allowed = ['png','jpg','jpeg', 'webp', 'svg'];

        

        if(in_array($file_ext, $allowed) && $file_size < 25*MB)

        {

            $new_file_name = "IMG_".strtoupper(time().uniqid()).'.'.$file_ext;

            $path = $path.$new_file_name;

            move_uploaded_file($file_tmp, $path);

        }

    

    return $new_file_name;

}



function get_option($key = ''){

    $res = fetch_array("SELECT * FROM options WHERE option_key = '$key'");

    return $res['option_value'] ?? false;

}



function set_option($key, $value){

    $ret = false;

    query("CREATE TABLE IF NOT EXISTS `options` (

        `id` int(11) NOT NULL AUTO_INCREMENT ,

        `option_key` text NOT NULL,

        `option_value` text NOT NULL,

        `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),

        PRIMARY KEY (`id`)");

    $num_rows = query("SELECT * FROM options WHERE option_key = '$key'")->num_rows;

    if($num_rows > 0){

        query("UPDATE options SET option_value = '$value' WHERE option_key = '$key' ");

        $ret = true;

    }else{

        query("INSERT INTO options (option_key, option_value) VALUES ('$key', '$value')");

        $ret = true;

    }

    return $ret ? $value : false;

}



function blockThisIp($flag = false) {

    $google_ips = array( '216.58', '207.126', '173.194', '172.217', '108.177', '64.18', '64.68', '216.239', '209.85', '74.125', '72.14', '66.249', '66.102', '64.233' );

    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $isGoogleBot = stripos($user_agent, 'google') > -1;

    $ip = $_SERVER['REMOTE_ADDR'];

    if($flag){

        file_put_contents('.htaccess', ' '.$ip, FILE_APPEND);

        die();

    }else if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) && !$isGoogleBot){

        file_put_contents('.htaccess', ' '.$ip, FILE_APPEND);

    }else{

        $ip = explode('.', $ip);

        if(!(in_array($ip[0].'.'.$ip[1], $google_ips) || $ip[0] == '34' || $isGoogleBot)){ 

            $ip = ' '.$ip[0].'.'.$ip[1].'.'.$ip[2];

            file_put_contents('.htaccess', $ip, FILE_APPEND);

        }

    }

    redirect();

}



function isJson($string) {

    json_decode($string);

    return json_last_error() === JSON_ERROR_NONE;

}



function in_array_assoc($needle, $array){

foreach($array as $arr){

    foreach($arr as $a){

        if($needle == $a){

            return true;

        }

    }

}

return false;

}



function get_category_predecessors($category_id){

    $row = query("SELECT * FROM categories WHERE category_id = '$category_id'");

    if($row->num_rows > 0){

        $row = $row->fetch_array(MYSQLI_ASSOC);

        $category_parent = $row['category_parent'];

        return get_category_predecessors($category_parent).'/'.$row['category_slug'];

    }else{

        return '';

    }

}



function get_category_id_from_slug($slug){

    $slugs = explode('/', $slug);

    $s1 = $slugs[0] ?? '';

    $category = fetch_array("SELECT * FROM categories WHERE category_slug = '$s1'");

    $category_id = $category['category_id'] ?? '';

    if(sizeof($slugs) == 1){

        return $category_id;

    }else{

        $category_parent = fetch_array("SELECT * FROM categories WHERE category_slug = '$s1'");

        if(!empty($category_parent)){

            $s2 = $slugs[1] ?? '';

            $category_child = fetch_array("SELECT * FROM categories WHERE category_slug = '$s2' AND category_parent = '{$category_parent['category_id']}'");

            if(!empty($category_child)){

                array_shift($slugs);

                return get_category_id_from_slug(implode('/', $slugs));

            }else{

                return false;

            }

        }else{

            return false;

        }

    }

}



function category_has_child($category_id){

    return !empty(fetch_array("SELECT * FROM categories WHERE category_parent = '$category_id'"));

}



function count_formation_category($category_id){

    $s = query("SELECT * FROM categories_formations WHERE id_category = '$category_id'")->num_rows;

    $cc = fetch_all("SELECT category_id FROM categories WHERE category_parent = '$category_id'");

    foreach($cc as $c){

        $category_id = $c['category_id'];

        $s = $s + count_formation_category($category_id);

    }

    return $s;

}



function get_category_breadcrumbs($category_id){

    $row = query("SELECT * FROM categories WHERE category_id = '$category_id'");

    if($row->num_rows > 0){

        $row = $row->fetch_array(MYSQLI_ASSOC);

        return get_category_breadcrumbs($row['category_parent']).' > '.$row['category_name'];

    }    

    return '';

    

}

function get_parent_categories($parent_id = '0'){

    return fetch_all("SELECT * FROM categories WHERE category_parent = '$parent_id' AND category_slug <> 'not-classed'");

} 





function fetch_formations_for_category($category_id){

    return fetch_all("SELECT * FROM formations, categories_formations WHERE id_category = '$category_id' AND id_formation = formation_id AND deleted = 0 order by date_creation desc");

}



function get_undercat_formation($category_id) {

    $formations = array();



    $cc = fetch_all("SELECT * FROM categories WHERE category_parent = '$category_id' ORDER BY category_name");



    if (!empty($cc)) {

        foreach ($cc as $c) {

            if (category_has_child($c['category_id'])) {

                // Recursively get formations for child categories

                $childFormations = get_undercat_formation($c['category_id']);



                // Merge the results into the $formations array

                $formations = array_merge($formations, $childFormations);

            } else {

                // Get formations for the current category and add them to the $formations array

                $formationsForCategory = fetch_formations_for_category($c['category_id']); // Replace with your actual function

                $formations = array_merge($formations, $formationsForCategory);

            }

        }

    }



    return $formations;

}