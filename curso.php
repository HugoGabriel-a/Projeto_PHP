<?php
    include_once("database.php");
    $sql="SELECT * FROM curso ORDER BY id_curso DESC";

    $result=$conexao->prepare($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cusros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    <link rel="stylesheet" href="style_aluno.css">
    
</head>
<body>
    <div>
    <nav class="navbar navbar-dark bg-primary">

        <a class="navbar-brand" href="#">Gerenciador de Matriculas</a>
        <div class="voltar">
            <a href="sistema.php">
                <button>Voltar</button>
            </a>
        </div>
        <div class="direita">
            <a href="createcurso.php">
                <button>Inserir Cusro </button>
            </a>
        </div>
        <div class="d-flex">
            <div>
                <a href="sair.php" class="btn btn-danger me-5">sair</a>
            </div>
        </div>
        
    </nav>
    </div>
    <br>
    <h1><u>Cursos reconhecidos no nosso sistema</u></h1>
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
                    $result->execute();
                    while($curso=$result->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>";
                            echo "<td>".$curso['nome']."</td>";
                            echo "<td>".$curso['carga_hr']."hrs </td>";
                            echo "<td>".$curso['id_curso']."</td>";
                            echo "<td>
                                    <a class='btn btn-sm btn-primary' href='updatecurso.php?id_curso=$curso[id_curso]'> 
                                    <svg xmlns=1http://www.w3.org/2000/svg1 width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                                        </svg>
                                        </a>
                                </td>";
                                    
                            echo "<td>
                                    <a class='btn btn-sm btn-danger'  href='deletecurso.php?id_curso=$curso[id_curso]'>
                                        <svg xmlns= http://www.w3.org/2000/svg   width= 16   height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                        <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
                                        </svg>
                                    </a>
                             </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>