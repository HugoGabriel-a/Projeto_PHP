<?php 

use Pdo\Pgsql;
include '.env';

 try {
    $conexao=new PDO(dsn: "$DSN:host=127.0.0.1;port=$PORT;dbname=$DBNAME", username: $USER, password: $PASSWORD);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($conexao){
        $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // print_r('deu certo');
    }
}catch (PDOException $erro) {
    echo "deu errado " + $erro;

}

if(isset($_POST['submit']) && !empty( $_POST['email']) && !empty($_POST['password'])){
    
    $email= $_POST['email'];
    $password= $_POST["password"];

    $sql= "SELECT * FROM usuario WHERE email = '$email' and password = '$password'";

    $result = $conexao->query($sql);
    
    // print_r($result);
    if(Pgsql_num_rows($result)> 0){
        print_r('existe');
    }else{
        print_r('não existe');
    }
}else{
    header('Location: tela_login.php');
}

?>

