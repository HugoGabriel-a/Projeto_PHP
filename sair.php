<?php
    session_start();
    unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:login.php') ;

?>