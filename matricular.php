<?php
    include_once('database.php');

    // pegar o id_aluno
    if (!empty($_GET['id_aluno'])) { 
        $id_aluno=$_GET['id_aluno'];
        // echo $id_aluno;
    }
    // reconhecer o aluno
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
        }

    $sqlcursos = "SELECT * FROM curso WHERE id_curso NOT IN (SELECT id_curso FROM alunocurso WHERE id_aluno = $id_aluno
    )";

    $resultcursos = $conexao->prepare($sqlcursos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_aluno.css">
</head>
<body>
    <h1>lista de cursos que <?php echo $nome?> pode fazer</h1>
    <div>
        <table class="tabela text-white" border="1">
            <thead>
                <tr>
                    <th scope="col">nome</th>
                    <th scope="col">carga horaria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $resultcursos->execute();
                    while($curso=$resultcursos->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>";
                            echo "<td>".$curso['nome']."</td>";
                            echo "<td>".$curso['carga_hr']."hrs </td>";
                            echo "<td>";
                                echo "<form method='POST' action='savematricula.php'>";
                                    echo "<input type='hidden' name='id_aluno' value='" . $id_aluno . "'>";
                                    echo "<input type='hidden' name='id_curso' value='" . $curso['id_curso'] . "'>";
                                    echo "<input type='submit' value='Entrar'>";
                                echo "</form>";
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>