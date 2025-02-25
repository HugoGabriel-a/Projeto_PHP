<?php
    include_once('database.php');

    if(isset($_POST['update'])){

        $id_curso=$_POST['id_curso'];
        $nome=$_POST['nome'];
        $carga_hr=$_POST['carga_hr'];
        
        $sqlupdate="UPDATE curso SET nome='$nome', carga_hr=$carga_hr WHERE id_curso=$id_curso";
        $result= $conexao->query($sqlupdate);

    }
    header('location:curso.php');
?>