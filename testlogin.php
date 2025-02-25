<?php

session_start();
    print_r($_REQUEST); 

    if(isset($_POST['submit']) && !empty( $_POST['email_usuario']) && !empty($_POST['password'])){
        
        include_once('database.php');
        $email_usuario= $_POST['email_usuario'];
        $password= $_POST["password"];

        
        $result=$conexao->query("SELECT * FROM usuario WHERE email_usuario = '$email_usuario' and password = '$password'");
        print_r($result);
        if($result->rowCount()>0){
            $_SESSION['email_usuario']=$email_usuario;
            $_SESSION['password']=$password;
            header('location: sistema.php');
            // print_r('existe');
        }else{
            unset($_SESSION['email_usuario']);
            unset($_SESSION['password']);
            header('Location:login.php');
        }
    }else{
        header('Location: login.php');
        // print_r($result);
    }
?>