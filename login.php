<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="testlogin.php" method="POST">
            <input type="email_usuario" name="email_usuario" placeholder="email">
            <br><br>
            <input type="password" name="password" id="password" placeholder="Senha">
            <br><br>
            <input class="input_button" type="submit" name="submit" id="submit">
            <br><br><br>
            <a href="cadastroUser.php">criar conta</a>
        </form>
    </div>
</body>
</html>