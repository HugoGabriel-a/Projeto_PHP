<?php
    include_once('database.php');

    if(isset($_POST['update'])){

        $id_aluno=$_POST['id_aluno'];
        $nome=$_POST['nome'];
        $email_aluno=$_POST['email'];
        $sexo=$_POST['genero'];
        $data=$_POST['data_nascimento'];
        $email_usuario=$_POST['email_user'];
        
        $sqlupdate="UPDATE aluno SET email_aluno='$email_aluno',nome='$nome',sexo='$sexo',data_nasc='$data',email_usuario='$email_usuario' WHERE id_aluno=$id_aluno";
        $result= $conexao->query($sqlupdate);

    }
    header('location:aluno.php');
?>