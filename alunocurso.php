<?php
    include_once('database.php');

    // pegar o id_aluno
    if (!empty($_GET['id_aluno'])) { 
        $id_aluno=$_GET['id_aluno'];
    }else{
        echo 'id aluno não encontrado';
    }

    // reconhecer o aluno
    $sqlSelectaluno="SELECT * FROM aluno WHERE id_aluno=$id_aluno"; 
    $result=$conexao->query($sqlSelectaluno);
    if($result->rowCount()>0){
        while($aluno=$result->fetch(PDO::FETCH_ASSOC)){
            $id_aluno=$aluno['id_aluno'];
            $nome=$aluno['nome'];
            $email_aluno=$aluno['email_aluno'];
            $sexo=$aluno['sexo'];
            $data=$aluno['data_nasc'];
            $email_usuario=$aluno['email_usuario'];


            $sqlAlunoCurso = "SELECT curso.nome, curso.carga_hr FROM alunocurso INNER JOIN curso ON alunocurso.id_curso = curso.id_curso WHERE alunocurso.id_aluno = $id_aluno";
            $resultcurso = $conexao->prepare($sqlAlunoCurso);

            $resultcurso->execute();
            }
        }else{
            echo 'menor que 0';
        }
    // buscar curso


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
    <h1>cursos  <?php 
        if($sexo=='feminino'){
            echo 'da aluna ' ,$nome;
        }else{
            echo 'do aluno ' ,$nome;
        }
        ?></h1>
    <div >
        <table class="tabela text-white" border="1">
            <thead>
                <tr>
                    <th scope="col">nome</th>
                    <th scope="col">carga horaria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($curso=$resultcurso->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>";
                            echo "<td>".$curso['nome']."</td>";
                            echo "<td>".$curso['carga_hr']."hrs </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

        
</body>
</html>