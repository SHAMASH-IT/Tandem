<?php

function contactShowAll(){
    
    include VIEW_DIR."/admin/contacts/index.php";

}

function contactDelete(){
    
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($id) && is_numeric($id)){

        // $deleted = query("DELETE FROM contacts WHERE id = '$id'");
    
        $deleted = query("UPDATE contacts SET deleted = 1 WHERE id = '$id'");
    
        redirect('admin/contacts');
    
    }

}

function contactMerci(){
    include VIEW_DIR."/public/pages/thanks_contact.php"; 
}

function contactSend(){
    $alert = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        extract(sanitize_array_assoc($_REQUEST));
        
        if( !empty($fullname)&& !empty($phone) && !empty($email) && !empty($subject) && !empty($message)){

            $data = "<pre>Nom et Prenom:                   ".$fullname."\n Email:                 ".$email."\n Telephone:             ".$phone."\n Sujet:             ".$subject."\n Message:             \n".$message." </pre>";


            $id = "ID: ".uniqid();



            $headers = "From: " . strip_tags($email) . "\r\n";



            $headers .= "Reply-To: ". strip_tags($email) . "\r\n";



            $headers .= "MIME-Version: 1.0\r\n";



            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            $objet = "Sujet: $subject | ".$id;

            $sql = "INSERT INTO contacts (fullname, email, phone, subject, message) VALUES ('$fullname', '$email', '$phone', '$subject', '$message')";

            if(MAILER == true){
                mail(ADMIN_EMAIL,$subject,$data,$headers);

            }
            
            if(query($sql)){ 
                redirect('contact/merci'); 
            } else{ 
                $alert = false; 
            }


        }else{

            $alert = false;

        }

    }
    include VIEW_DIR."/public/pages/contact.php"; 
} 
function inscription(){
    $alert = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        extract(sanitize_array_assoc($_REQUEST));
        
        if( !empty($fullname)&& !empty($phone) && !empty($email) && !empty($formation) && !empty($message)){

            $data = "<pre>Nom et Prenom:                   ".$fullname."\n Email:                 ".$email."\n Telephone:             ".$phone."\n Formation:             ".$formation."\n Message:             \n".$message." </pre>";


            $id = "ID: ".uniqid();



            $headers = "From: " . strip_tags($email) . "\r\n";



            $headers .= "Reply-To: ". strip_tags($email) . "\r\n";



            $headers .= "MIME-Version: 1.0\r\n";



            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            $objet = "Sujet: $subject | ".$id;

            $sql = "INSERT INTO inscription (fullname, email, phone, formation, message) VALUES ('$fullname', '$email', '$phone', '$formation', '$message')";

            if(MAILER == true){
                mail(ADMIN_EMAIL,$formation,$data,$headers);

            }
            
            if(query($sql)){ 
                redirect('contact/merci'); 
            } else{ 
                $alert = false; 
            }



        }else{

            $alert = false;

        }

    }
    include VIEW_DIR."/public/pages/inscription.php"; 
} 