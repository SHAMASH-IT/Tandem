<?php
function eventsShowAll(){
    query("DELETE FROM events WHERE label = '' AND description = '' AND datetime = '' AND place = ''");
    $events = fetch_all("SELECT * FROM events");
    include VIEW_DIR."/admin/events/index.php";
}
function eventsDelete(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($event_id)){
        $deleted = query("DELETE FROM events WHERE event_id = '$event_id'");
        redirect('admin/events');
    }
    
}
function eventsUpdate(){
    $errors = [];
    $updated = false;
    extract(sanitize_array_assoc($_REQUEST));
    if($_SERVER['REQUEST_METHOD'] == "POST"):
        if(isset($update_event) && isset($event_id) && !empty($event_id)){
            if(empty($label)) $errors [] = "Label is empty!";
            if(empty($description)) $errors [] = "Description is empty!";
            if(empty($datetime)) $errors [] = "Date time is empty!";
            if(empty($place)) $errors [] = "Place is empty!";

            $id_formation = $id_formation ?? '';
            $place = $place ?? '';

            if(empty($errors)){
                $updated = query("UPDATE events SET label = '$label', description = '$description', datetime = '$datetime', id_formation = '$id_formation', place = '$place' WHERE event_id = '$event_id'");
                if(!$updated) $errors [] = "Update Table Meta Error: Somthing wrong happen!";
                else redirect('admin/events');
            }
        }
    endif; 
    if(isset($event_id)){
        $data = fetch_array("SELECT * FROM events WHERE event_id = '$event_id' ");
        if(empty($data)){
            query("INSERT INTO `events` (event_id) VALUES ('$event_id')");
            $data = fetch_array("SELECT * FROM events WHERE event_id = '$event_id'");
        } 
        extract($data);
    }else{
        redirect('admin/events');
    }

    $page_title = 'events';
    $formations = fetch_all("SELECT * FROM formations WHERE deleted = 0 order by formation_title");
    $event_id = $event_id ?? strtoupper(uniqid('E'));

    include VIEW_DIR."/admin/events/update.php";
}
