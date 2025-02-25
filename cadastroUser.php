<?php
    if(isset($_POST['submit'])){
        include_once('database.php');

        $email_usuario=$_POST['email_usuario'];
        $password=$_POST['password'];
        $sql="INSERT INTO usuario(email_usuario,password) VALUES ('$email_usuario','$password')";
        $result=$conexao->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="style_cadastroUser.css">
</head>
<body>
    <div class="box">
        <form action="cadastroUser.php" method="POST" id="form">
            <fieldset>
                <legend><b>Cadastro de Usuarios</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="email_usuario" id="email_usuario" class="inputUser" required>
                    <label for="email_usuario" class="labelInput">email_usuario</label>
                </div>
                <br><br>
                <div class="inputBox">
                <input type="password" name="password" id="password" class="inputUser" required>
                <label for="password" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" class="input_button">
                <br><br>
            </fieldset>
        </form>
        <a href="login.php">
            <button class="login_button">login</button>
        </a>
    </div>
</body>
<script>
    <?php
    if($result){
        echo "alert(\"usuario cadastrado com sucesso\")";
    }
    ?>
</script>
</html>