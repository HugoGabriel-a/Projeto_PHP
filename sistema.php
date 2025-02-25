<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION["email_usuario"])==true) and (!isset($_SESSION["password"])==true)){
        unset($_SESSION['email_usuario']);
        unset($_SESSION['password']);
        header('location:login.php') ;
    }
    $logado=$_SESSION['email_usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="style_sistema.css">
</head>
<body>
    <div>
    <nav class="navbar navbar-dark bg-primary">
        <!-- Navbar content -->
        <a class="navbar-brand" href="#">Gerenciador de Matriculas</a>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">sair</a>
        </div>
    </nav>
    </div>
    <br>
    <?php
        echo "<h1>Bem vindo ao gerenciador de alunos <u>$logado</u> </h1>"
    ?>

    <a href="aluno.php">
        <button class="alunoButton">GERENCIAR ALUNOS</button>
    </a>
    <a href="curso.php">
        <button class="cursoButton">GERENCIAR CURSOS</button>
    </a>
</body>
</html>