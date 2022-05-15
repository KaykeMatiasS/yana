<?php
    session_start();
    if(!$_SESSION['email']) {
        header('Location: index_login.php');
        exit();
    }
?>