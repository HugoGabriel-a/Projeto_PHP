<?php
    include_once('database.php');
    session_start();
    
    if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['password'])==true)){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location: tela_login.php');
    }
    $logado=$_SESSION['email'];

    // $sql= "SELECT * FROM aluno ORDER BY id DESC";

    // $result = $conexao->query($sql); 

    // print_r($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
    <link rel="stylesheet" href="login_tel.css">
</head>
<body>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>"
    ?>
    
</body>
</html>