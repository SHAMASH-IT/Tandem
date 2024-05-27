<?php

function isEmailExist($email)
{        
    return query("SELECT * FROM users WHERE email = '$email'")->num_rows > 0;  
}

function isLoginCorrect($email,$password)
{        
    return query("SELECT * from users WHERE (username = '$email' OR email = '$email') AND `password`='$password'")->num_rows > 0;
}

function isUserExist($username, $id = null)
{   
    $ext = $id == null ? '': "AND id <> '$id'";
    return query("SELECT * from users WHERE (username = '$username' OR email = '$username') $ext")->num_rows > 0;  
}

function isUserActive($username)
{   
    return query("SELECT * from users WHERE ( username = '$username' OR email = '$username' ) AND active = 1")->num_rows > 0;  
}

function selectUserDataByToken($session_token)
{        
    return query("SELECT * FROM users WHERE session_token = '$session_token'")->fetch_array(MYSQLI_ASSOC);   
}

function selectUserData($username)
{        
    return query("SELECT * FROM users WHERE username = '$username' OR email = '$username'")->fetch_array(MYSQLI_ASSOC);   
}

function logout(){
    if(isset($_SESSION['user_id'])) {
        if(isset($_COOKIE['session_token'])) {
            setcookie('session_token', null, -1, '/'); 
            query("UPDATE users SET session_token = NULL WHERE user_id = '{$_SESSION['user_id']}'");
        }   
        session_unset(); 
        session_destroy(); 
    }
    redirect("login"); 
}

function login(){
    extract(sanitize_array_assoc($_REQUEST));
    session_start();
    if(isset($_SESSION['username'])){
        redirect('admin/dashboard');
    }else
    if(isset($_COOKIE['session_token']) && !empty($_COOKIE['session_token'])){
        $data = selectUserDataByToken($_COOKIE['session_token']);
        if(!empty($data)){
            $_SESSION['username'] = $data["username"];
            $_SESSION['user_id'] = $data["user_id"];
            $_SESSION['user_active'] = $data["active"];
            $_SESSION['id'] = $data["id"];
            $_SESSION['role'] = $data["role"];
            query("UPDATE users SET connected = 1, last_connexion =  CURRENT_TIMESTAMP WHERE user_id = '{$data['user_id']}'");
            redirect('admin/dashboard');
        }else{
            setcookie('session_token', null, -1, '/', '', true, true); 
            redirect('login');
        }
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'):
            if(isLoginCorrect($username, md5($password))){
                if(isUserActive($username)){
                    $data = selectUserData($username);
                    $_SESSION['username'] = $data["username"];
                    $_SESSION['role'] = $data["role"];
                    $_SESSION['user_active'] = $data["active"];
                    $_SESSION['user_id'] = $data["user_id"];
                    query("UPDATE users SET connected = 1, last_connexion =  CURRENT_TIMESTAMP WHERE user_id = '{$data['user_id']}'");
                    if(isset($rememberme)){
                        $session_token = md5(uniqid());
                        query("UPDATE users SET session_token = '$session_token'  WHERE user_id = '{$data["user_id"]}' ");
                        setcookie("session_token", $session_token, time()+(3600*24*365),'/', '', true, true);
                    } 
                    redirect('admin/dashboard');
                } else {
                    $data = selectUserData($username);
                    $token = md5(uniqid());
                    query("INSERT INTO token (user_id, token) VALUES ('{$data['user_id']}', '$token')");
                    $link = URL."verify?token=$token";
                    $error = "confirmation <a href='$link' style='display:inline'>link</a> has been sent, please verify your email!";
                }

            }else {
                $_SESSION['login_try'] = isset($_SESSION['login_try']) ? ++$_SESSION['login_try'] : 1;
                $error = "username or password are wrong! ({$_SESSION['login_try']} / 5)";
                if($_SESSION['login_try'] >= 5) {blockThisIp(true); $_SESSION['login_try'] = 0;};
            }
        
    endif;
    include VIEW_DIR."/auth/signin.php";
    exit();
}