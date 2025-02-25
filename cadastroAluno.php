<?php
    include_once('database.php');

    if(isset($_POST['submit'])){
        
        $nome=$_POST['nome'];
        $email_aluno=$_POST['email'];
        $sexo=$_POST['genero'];
        $data=''.$_POST['data_nascimento'];
        $email_usuario=$_POST['email_user'];
        
        
        $sql_create="INSERT INTO aluno(email_aluno, nome, sexo, data_nasc, email_usuario)  VALUES ('$email_aluno', '$nome', '$sexo', '$data', '$email_usuario') RETURNING id_aluno";
        $result_create=$conexao->query($sql_create);   
        if ($result_create) {
            $row = $result_create->fetch(PDO::FETCH_ASSOC);
            $id_aluno = $row['id_aluno'];


            header("location:matricular.php?id_aluno=$id_aluno");
        } else {
            header('location:aluno.php');
        }
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
            <a href="aluno.php">
                <button>lista de alunos</button>
            </a>
        </div>
    </nav>
    </div>
<div class="box">
        <form action="cadastroAluno.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Alunos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="esquerda">
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
                </div>
                <input type="submit" name="submit" id="submit" href="alunocurso" >
            </fieldset>
        </form>
    </div>
</body>
</html>