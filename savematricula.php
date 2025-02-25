<?php
    include_once('database.php');

    if (isset($_POST['id_aluno']) && isset($_POST['id_curso'])) {
        $id_aluno = $_POST['id_aluno'];
        $id_curso = $_POST['id_curso'];

        $sqlalunocurso = "INSERT INTO alunocurso (id_aluno, id_curso) VALUES (:id_aluno, :id_curso)";
        $resultalunocurso = $conexao->prepare($sqlalunocurso);
        
        $resultalunocurso->bindParam(':id_aluno', $id_aluno, PDO::PARAM_INT);
        $resultalunocurso->bindParam(':id_curso', $id_curso, PDO::PARAM_INT);
        
        $resultalunocurso->execute();

        header("Location: aluno.php");
    }
?>