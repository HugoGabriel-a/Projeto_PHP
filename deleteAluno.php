<?php
    
    
    if(!empty($_GET['id_aluno'])){
        include_once('database.php');
        $id_aluno=$_GET['id_aluno'];
        $sqlSelect="SELECT * FROM aluno WHERE id_aluno=$id_aluno";

        $result=$conexao->query($sqlSelect);
        if($result->rowCount()>0){
            $sqlDelete="DELETE FROM aluno WHERE id_aluno=$id_aluno";
            $resultDEL=$conexao->query($sqlDelete);
            header('location:aluno.php');
        }else{
            header('location:aluno.php');
        }
        
        
    }else{
        
        header('location:aluno.php');
    }

?>