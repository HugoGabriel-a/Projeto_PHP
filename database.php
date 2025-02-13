<?php 

    use Pdo\Pgsql;
    include '.env.php';

    try {
        $conexao=new PDO(dsn: "$DSN:host=127.0.0.1;port=$PORT;dbname=$DBNAME", username: $USER, password: $PASSWORD);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($conexao){
            $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // print_r("deu certo");
        }
    }catch (PDOException $erro) {
        echo "deu errado " + $erro;

    }

    session_start();
    if(isset($_POST['submit']) && !empty( $_POST['email']) && !empty($_POST['password'])){
        
        $email= $_POST['email'];
        $password= $_POST["password"];

        $sql= "SELECT * FROM usuario WHERE email = '$email' and password = '$password'";

        $result = $conexao->query($sql);
        
        if($result->rowCount()<1){
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('location: tela_login.php');
            print_r($result);
        }else{
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            header('location: sistema.php');
        }
    }else{
        header('Location: tela_login.php');
        print_r($result);
    }

?>

