<?php 
require_once  'sessions/session.php';

function verifyPass()
{

    $username = $_REQUEST['username'] ?? null;
    $pass = $_REQUEST['password'] ?? null;
    $config = parse_ini_file('./config/config.ini');

    if(!empty($username) && !empty($pass) && password_verify($username, $config['login']) && password_verify($pass, $config['password'])){


        if(!empty($_COOKIE['name_inval'])) setcookie('name_inval', $username, time()-10);
        if(!empty($_COOKIE['error'])) setcookie('error', 'Invalid username or password', time()-10);
        setcookie('username', $username);
        return true;
        
    } else {
        if(!empty($_COOKIE['username'])) setcookie('username', $username, time()-10);
        setcookie('name_inval', $username);
        setcookie('error', 'Invalid username or password');
        return false;
    }
    
    
    
}

if(verifyPass()){
    $username = $_REQUEST['username'] ?? null;
    if(!empty($username)) $_SESSION['username'] = $username;
    header("Location: ./index.php");
} else {
    header("Location: ./form.php");
    
};




?>





<?php
