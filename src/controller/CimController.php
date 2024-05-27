
<?php

function index(){
    $formations = fetch_all("SELECT * FROM formations, info WHERE formation_slug like '%arabe%' AND formation_published = 1 AND id_formation = formation_id AND deleted = 0 ");

    include VIEW_DIR."/public/pages/certificat-langue-arabe-cim.php";  
}