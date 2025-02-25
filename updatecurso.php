<?php
    
    
    if(!empty($_GET['id_curso'])){
        include_once('database.php');
        $id_curso=$_GET['id_curso'];
        $sqlSelect="SELECT * FROM curso WHERE id_curso=$id_curso";

        $result=$conexao->query($sqlSelect);
        if($result->rowCount()>0){
            while($curso=$result->fetch(PDO::FETCH_ASSOC)){
                $id_curso=$curso['id_curso'];
                $nome=$curso['nome'];
                $carga_hr=$curso['carga_hr'];
                }
        }else{
            // header('location:curso.php');
            echo 'não deu certo';
        }
        
        
    }else{
        echo 'nem entrou';
        // header('location:curso.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_aluno.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Gerenciador de Matriculas</a>
        <div class="d-flex">
            <a href="curso.php">
                <button>lista de cursos</button>
            </a>
        </div>
    </nav>
</div>
    <div class="box">
        <form action="saveEditcurso.php" method="POST">
            <fieldset>
                <legend><b>Editar curso</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome do curso</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="carga_hr" id="carga_hr" class="inputUser" value="<?php echo $carga_hr ?>" required>
                    <label for="email" class="labelInput">Carga Horaria</label>
                </div>
                <br><br>

                <input type="hidden" name="id_curso" value="<?php  echo $id_curso?>">
                <input type="submit" name="update" id="update" >
            </fieldset>
        </form>
    </div>
    
</body>
</html>