<?php
    
    
    if(!empty($_GET['id_curso'])){
        include_once('database.php');
        $id_curso=$_GET['id_curso'];
        $sqlSelect="SELECT * FROM curso WHERE id_curso=$id_curso";

        $result=$conexao->query($sqlSelect);
        if($result->rowCount()>0){
            $sqlDelete="DELETE FROM curso WHERE id_curso=$id_curso";
            $resultDEL=$conexao->query($sqlDelete);
            header('location:curso.php');
        }else{
            header('location:curso.php');
        }
        
        
    }else{
        
        header('location:curso.php');
    }

?>