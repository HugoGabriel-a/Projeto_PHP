<?php
    include_once("database.php");
    $sql="SELECT * FROM aluno ORDER BY id_aluno DESC";

    $result=$conexao->prepare($sql);


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
    <div>
    <nav class="navbar navbar-dark bg-primary">

        <a class="navbar-brand" href="#">Gerenciador de Matriculas</a>
        <div class="voltar">
            <a href="sistema.php">
                <button>Voltar</button>
            </a>
        </div>
        <div class="direita">
            <a href="cadastroAluno.php">
                <button>Cadastrar Aluno</button>
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
    <h1><u>Lista de Alunos reconhecidos no nosso sistema</u></h1>
    <div >
        <h1></h1>
        <table class="tabela text-white" border="1">
            <thead>
                <tr>
                    <th scope="col">nome</th>
                    <th scope="col">email</th>
                    <th scope="col">sexo</th>
                    <th scope="col">data de nascimento</th>
                    <th scope="col">responsavel</th>
                    <th scope="col">matricula</th>
                    <th scope="col">cursos</th>
                    <th scope="col">  </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result->execute();
                    while($aluno=$result->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>";
                            echo "<td>".$aluno['nome']."</td>";
                            echo "<td>".$aluno['email_aluno']."</td>";
                            echo "<td>".$aluno['sexo']."</td>";
                            echo "<td>".$aluno['data_nasc']."</td>";
                            echo "<td>".$aluno['email_usuario']."</td>";
                            echo "<td>".$aluno['id_aluno']."</td>";
                            echo "<td>
                                <a class='btn btn-sm btn-primary' href='alunocurso.php?id_aluno=$aluno[id_aluno]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-book-half' viewBox='0 0 16 16'>
                                    <path d='M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783'/>
                                    </svg>
                                </a>
                            </td>";
                            echo "<td>
                                    <a class='btn btn-sm btn-primary' href='updateAluno.php?id_aluno=$aluno[id_aluno]'> 
                                    <svg xmlns=1http://www.w3.org/2000/svg1 width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                                        </svg>
                                        </a>
                                </td>";
                                    
                            echo "<td>
                                    <a class='btn btn-sm btn-danger'  href='deleteAluno.php?id_aluno=$aluno[id_aluno]'>
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