<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    <link rel="stylesheet" href="login_tel.css">
</head>
<body>
    <div>
        <h1>Bem vindo ao gerenciador de alunos</h1>
        <form action="database.php" method="POST">
            <label for="text" name="email" id="email">EMAIL</label>
            <br>
            <input type="text" name="email">
            <br>
            <label for="password">SENHA</label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="LOGAR" name="submit">
            <a href=""><small> criar conta</small></a>
        </form>
    </div>
</body>
</html>