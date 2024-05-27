<?php

function formationAvailable($formation_id){
    return query("SELECT * FROM formations WHERE formation_id = '$formation_id'")->num_rows > 0;
}

function getFormationPrice($formation_id){
    $res = fetch_array("SELECT * FROM formations WHERE formation_id = '$formation_id'");
    if($res){
        return round((float) $res['formation_price'], 2);
    }
    return 0;
}

function orderShowAll(){   
    include VIEW_DIR."/admin/orders/index.php";
}

function orderDelete(){
    
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($id) && is_numeric($id)){
        // $deleted = query("DELETE FROM orders WHERE id = '$id'");
        $deleted = query("UPDATE orders SET deleted = 1 WHERE id = '$id'");
        redirect('admin/orders');
    }

}

function orderUpdate(){
    
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($id)){

        $order = fetch_array("SELECT * FROM orders WHERE id = '$id' and deleted = 0");

        if(!empty($order)){

            $client_id = $order['client_id'];

            $cart_items = json_decode($order['cart']);

            $client = fetch_array("SELECT * FROM clients WHERE client_id = '$client_id'");

        }else{

            redirect('admin/orders');

        } 

    }else{

        redirect('admin/orders');

    }
    include VIEW_DIR."/admin/orders/update.php";

}

function orderCheckout(){

    $errors = [];
    
    if($_SERVER['REQUEST_METHOD'] == "POST"):
        extract(sanitize_array_assoc($_REQUEST));
    
        if(isset($checkout_submit) && $token == TOKEN){
    
            if(empty($fullname)) $errors [] = "Name input field is empty!";
    
            if(empty($email)) $errors [] = "Email input field is empty!";
    
            if(!isEmailValid($email)) $errors [] = "Your Email not valid";
    
            if(empty($city)) $errors [] = "City input field is empty!";
    
            if(empty($zip)) $errors [] = "Zip code is empty!";
    
            if(empty($phone)) $errors [] = "Phone number is empty!";
    
            if(empty($address)) $errors [] = "Address is empty!";
    
            $created_client = false;
    
            $client_id = uniqid('client_');
    
            if(empty($errors)){
    
                $sql = "INSERT INTO clients (client_id, fullname, email, city, zip, phone, address) VALUES ('$client_id', '$fullname', '$email', '$city', '$zip', '$phone', '$address')";
    
                $created_client = query($sql);
    
                if(!$created_client) $errors [] = "Error: Somthing wrong happen!;";
    
            }
    
            $created_order = false;
    
            if($created_client){
    
                if(isset($cart)){

                    $cart = json_decode(html_entity_decode($cart), true);
    
                    // dd($cart);
    
                    $new_cart = [];
    
                    $total = 0;


                    foreach($cart as $item){
    
                        $errors = [];
    
                        $formation_id = filter_var($item['formation_id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    
                        $formation_price = 0;
    
                        $formation_quantity = 0;
    
                        if(formationAvailable($formation_id)){
    
                            $formation_price = getFormationPrice($formation_id);
    
                        }else {$errors[] = 'Formation order has not available id';}
    
                        
    
                        if(is_numeric($item['formation_quantity'])){
    
                            $formation_quantity = $item['formation_quantity'];
    
                        }else {$errors[] = 'Formation order has wrong quantity';}
    
                        
    
                        // $formation_image = imagecreatefromstring(base64_decode());
    
                        $output_file = ASSETS_DIR.'uploads/orders/IMG_CUSTOM_'.uniqid().'.png';
    
                        if(empty($item['formation_image'])){
    
                            $errors[] = 'Wrong screenshot';
    
                        }else{
    
                            $image = explode(',', $item['formation_image']);
    
                            file_put_contents($output_file, base64_decode($image[1]));
    
                        }
    
    
    
                        // we need a security condition for formation options
    
                        if(empty($errors)){

                            if(!isJson($item['formation_options'])){
                                $item['formation_options'] = str_replace('\\"','"', $item['formation_options']);
                            }

                            $formation_options = json_decode($item['formation_options'], true);
                           
                            $new_cart [] = array(
    
                                'formation_id'=>$formation_id, 
    
                                'formation_quantity'=>$formation_quantity, 
    
                                'title_text'=> $formation_options['title_text'], 
    
                                'title_color'=> $formation_options['title_color'], 
    
                                'bonde_ext_color'=> $formation_options['outer_color'], 
    
                                'bonde_int_color'=> $formation_options['inner_color'], 
    
                                'image'=> $output_file, 
    
                                'bonde_type'=> $formation_type ?? 'double'
    
                            );
    
                        }
    
    
    
                        $total += $formation_price * $formation_quantity;
    
                    }
    
                    $cart = json_encode($new_cart);
                    $sql = "INSERT INTO orders (client_id, cart, total) VALUES ('$client_id', '$cart', '$total')";
    
                    $created_order = query($sql);
    
                    if(!$created_order) $errors [] = "Error: Somthing wrong happen!";
    
                    else{
                        
                        $order = query('SELECT MAX(id) as id FROM orders')->fetch_array(MYSQLI_ASSOC);
                        $mail = query('SELECT id FROM mail_templates WHERE mode = 1 limit 1')->fetch_array(MYSQLI_ASSOC);
                        
                        if(!empty($order) && !empty($mail)){
                            include CONTROLLER_DIR.'/mailTemplateController.php';
                            $test = mailSendAutomatically($order['id'], $mail['id']);
                        }
                        dd($test);
                        redirect('shop/checkout/merci');
    
                    }
    
                }
    
    
    
            }
    
        }
    
    endif;
    include VIEW_DIR."/public/pages/checkout.php";   
}

function orderCheckoutMerci(){
    include VIEW_DIR."/public/pages/thanks.php"; 
}

function orderStatus(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($id) && isset($status)){
        $ok = query("UPDATE orders SET `status` = '$status' WHERE id = '$id'");
        if($ok){
            $json = array('status'=> true); 
            echo json_encode($json);
        }
    }else{
        $json = array('status'=> false); 
        echo json_encode($json);
    }
}

function orderTransaction(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($id) && isset($transaction)){
        $ok = query("UPDATE orders SET `transaction` = '$transaction' WHERE id = '$id'");
        if($ok){
            $json = array('status'=> true); 
            echo json_encode($json);
        }
    }else{
        $json = array('status'=> false); 
        echo json_encode($json);
    }
}

function orderNoteAdd(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($order_id) && isset($note)){
        $ok = query("INSERT INTO notes (order_id, note) VALUES ('$order_id', '$note')");
        if($ok){
            $orders = fetch_all("SELECT id, note FROM notes WHERE order_id = '$order_id' ");
            $json = array('status'=> true, 'notes'=> $orders); 
            echo json_encode($json);
        }
    }else{
        $json = array('status'=> false); 
        echo json_encode($json);
    }
}

function orderNoteDelete(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($id)){
        $ok = query("DELETE FROM notes WHERE id = '$id'");
        if($ok){
            $json = array('status'=> true); 
            echo json_encode($json);
        }
    }else{
        $json = array('status'=> false); 
        echo json_encode($json);
    }
}