<?php
require_once 'session.php';

function logout(){

        if($_SESSION) {
            session_destroy();
            header("Location: /PHP_HW7/form.php");
        }
}

logout();

