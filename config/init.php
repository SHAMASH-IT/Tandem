<?php
include './config/header.php';
include './config/env.php';
include './config/functions.php';
include './config/security.php';

ini_set('display_errors', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);

error_reporting(E_ALL);

if(!isset($_COOKIE["token"])){
    setcookie("token", TOKEN, time()+(3600*24*365),'/', '', true, true);
}

if(CACHE == false){ 
    clear_cache(); 
}

if(LOG == true){  
    create_logs();
}