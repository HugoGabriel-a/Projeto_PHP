<?php 

    include '.env';

    try {
        $conexao=new PDO(dsn: "$DSN:host=127.0.0.1;port=$PORT;dbname=$DBNAME", username: $USER, password: $PASSWORD);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // if($conexao){
        //     $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        //     // print_r("deu certo");
        // }
    }catch (PDOException $erro) {
        // echo "deu errado ", $erro;

    }

?>
