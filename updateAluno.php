<?php
    
    if(!empty($_GET['id_aluno'])){
        include_once('database.php');
        $id_aluno=$_GET['id_aluno'];
        $sqlSelect="SELECT * FROM aluno WHERE id_aluno=$id_aluno";

        $result=$conexao->query($sqlSelect);
        if($result->rowCount()>0){
            while($aluno=$result->fetch(PDO::FETCH_ASSOC)){
                $id_aluno=$aluno['id_aluno'];
                $nome=$aluno['nome'];
                $email_aluno=$aluno['email_aluno'];
                $sexo=$aluno['sexo'];
                $data=$aluno['data_nasc'];
                $email_usuario=$aluno['email_usuario'];

                }
        }else{
            header('location:aluno.php');
        }
        
        
    }else{
        
        header('location:aluno.php');
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
            <a href="aluno.php">
                <button>lista de alunos</button>
            </a>
        </div>
    </nav>
</div>
<div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Aluno</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email_aluno ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <!-- <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div> -->
                <div class="esquerda">
                    <label for="genero">Sexo:</label>
                    <br>
                    <input type="radio" id="feminino" name="genero" value="feminino" <?php echo $sexo == 'feminino' ? 'checked' : '' ?> required>
                    <label for="feminino">F</label>
                    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo $sexo =='masculino' ? 'checked' : '' ?> required>
                    <label for="masculino">M</label>
                    <br>
                </div>
                <div class="esquerda">
                <label for="data_nascimento"><b>Data de nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data ?>" required>
                <br><br>
                </div>
                <div class="inputBox">
                    <input type="text" name="email_user" id="email_user" class="inputUser" value="<?php echo $email_usuario ?>" required>
                    <label for="email_user" class="labelInput">Email do Responsavel</label>
                    <br><br>
                </div>
                <input type="hidden" name="id_aluno" value="<?php  echo $id_aluno?>">
                <input type="submit" name="update" id="update" >
            </fieldset>
        </form>
    </div>
    
</body>
</html>