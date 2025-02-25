<?php
    include_once('database.php');

    if(isset($_POST['submit'])){
        
        $nome=$_POST['nome'];
        $carga_hr=$_POST['carga_hr'];
        // $id_curso=$_POST['id_curso'];
    
        $sql_create="INSERT INTO curso(carga_hr,nome)  VALUES ($carga_hr , '$nome' )";
        $result_create=$conexao->query($sql_create);   
        
        header('redirect:curso.php');
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
        <!-- Navbar content -->
        <a class="navbar-brand" href="#">Gerenciador de Matriculas</a>
        <div class="d-flex">
            <a href="curso.php">
                <button>lista de cursos</button>
            </a>
        </div>
        <!-- <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">sair</a>
        </div> -->
    </nav>
    </div>
<div class="box">
        <form action="createcurso.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Alunos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">nome do cruso</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="carga_hr" id="carga_hr" class="inputUser" required>
                    <label for="email" class="labelInput">carga horaria</label>
                </div>
                <br><br>
                <!-- <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div> -->
                <!-- <div class="esquerda">
                    <label for="genero">Sexo:</label>
                    <br>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">F</label>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">M</label>
                    <br>
                </div>
                <div class="esquerda">
                <label for="data_nascimento"><b>Data de nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                </div>
                <div class="inputBox">
                    <input type="text" name="email_user" id="email_user" class="inputUser" required>
                    <label for="email_user" class="labelInput">Email do Responsavel</label>
                    <br><br>
                </div> -->
                <input type="submit" name="submit" id="submit" >
            </fieldset>
        </form>
    </div>
    
</body>
</html>