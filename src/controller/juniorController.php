<?php

function LanguageVillage(){
    include VIEW_DIR."/public/pages/language-village.php";  
}

function annualSessionsTeen(){
    $formations = fetch_all("SELECT * FROM `formations`, info WHERE formation_slug like  '%extensif%' AND formation_type='junior' AND formation_published = 1 AND id_formation = formation_id AND deleted = 0;");

    include VIEW_DIR."/public/pages/junior-sessions-annuelles.php";  
}