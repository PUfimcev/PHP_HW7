<?php
// require_once './session.php';

print_r($_COOKIE['username']);
// print_r($_SESSION['username']);
function d(){
    $username = $_COOKIE['username'];
    if(isset($_COOKIE['username'])) setcookie('username', $username, time()-10);
        unset($_SESSION['username']);
        session_unset();
        session_destroy();
        header("Location: /PHP_HW7/form.php");
}

d();

// if($_SESSION) {
//     session_destroy();
//     header("Location: ./form.php");
// }
