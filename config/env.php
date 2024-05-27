<?php



if($_SERVER['SERVER_ADDR'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost'){



    define('DATABASE_SERVER','localhost');

    define('DATABASE_ROOT','root');

    define('DATABASE_PASSWORD','');

    define('DATABASE_NAME','tandem');



    define("_BASE_","/tandem/"); 



    define("PROTOCOL","http://");



    define('PATH', trim(str_replace(_BASE_,"", $_SERVER['REDIRECT_URL'] ?? ""), '/'));



    define("LOG", false);



    define('MAILER', false);



}else{



    define("DATABASE_SERVER","tandemdtandem.mysql.db");

    

    define("DATABASE_ROOT","tandemdtandem");

    

    define("DATABASE_PASSWORD","Tandem123");

    

    define("DATABASE_NAME","tandemdtandem");

    

    define("_BASE_","/");

    

    define("PROTOCOL","https://");

    

    define('PATH', trim($_SERVER['REDIRECT_URL'], '/'));



    define("LOG", false);

    

    define('MAILER', true);



}



define('SITE_NAME', 'Tandem Training Center');



define("CACHE", false);



define("DOMAIN", $_SERVER['SERVER_NAME']);



define("REQUEST_URI", filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));



define("REDIRECT_URL", filter_var($_SERVER['REDIRECT_URL'] ?? "", FILTER_SANITIZE_FULL_SPECIAL_CHARS));



define("USER_AGENT", filter_var($_SERVER['HTTP_USER_AGENT'] ?? "", FILTER_SANITIZE_FULL_SPECIAL_CHARS));





define('LANGUAGES', array('en', 'fr'));

$DEFAULT_LANG = '';

$DEFAULT_LANG_SLASH = '';

if(strlen(PATH)>1){

    $pre_lang = PATH[0].PATH[1];

    if(in_array($pre_lang, LANGUAGES) && (!isset(PATH[2]) || PATH[2] == '/')){

        $DEFAULT_LANG = $pre_lang;

        $DEFAULT_LANG_SLASH = $pre_lang.'/';

    }

}

define('DEFAULT_LANG', $DEFAULT_LANG);

define('DEFAULT_LANG_SLASH', $DEFAULT_LANG_SLASH);





define("URL",PROTOCOL.DOMAIN._BASE_.DEFAULT_LANG_SLASH);

define("URL_LINK",PROTOCOL.DOMAIN._BASE_);



define('KB', 1024);



define('MB', KB * KB);



define('GB', MB * KB);



define("TOKEN", $_COOKIE["token"] ?? md5(time()));



define('ADMIN_EMAIL', 'hatembenammar007@gmail.com');



define('CANONICAL',URL.PATH);







define('ASSETS_DIR', 'public/assets/');



define('IMG_DIR', 'public/assets/uploads/');



define('CACHE_DIR', 'public/cache/');



define('LANG_DIR', 'public/lang');



define('LOG_DIR', 'public/log');







define('VIEW_DIR', 'src/view');



define('CONTROLLER_DIR', 'src/controller');



define('ASSETS_ADMIN_DIR', 'assets/');



define('ROUTER', 'src/route.php');



