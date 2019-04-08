<?php
 
    require_once 'data.php';
 
    if (is_user_logged_in()) {
        redirect('register/index.php');
    }
 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            user_login();
        } else {
            die("All fields required to be filled!");
        }
    }
 
?>