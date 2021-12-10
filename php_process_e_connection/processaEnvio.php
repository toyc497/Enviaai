<?php
    session_start();
    $idSessao = $_SESSION['idLoginVend'];
    include_once("dbConnection.php");

    $idProd = $_POST['idProd'];
    $idDestin = $_POST['idDestin'];
    $statusEnv = 1;

    $sql = "INSERT INTO envio (codProd,codDestin,codVend,statusEnvio)
                VALUES ($idProd,
                        $idDestin,
                        $idSessao,
                        $statusEnv
                )";
    
    if(mysqli_query($connection,$sql)){
        echo "Envio cadastrado com Sucesso";
    }else{
        echo mysqli_connect_error();
    }
    mysqli_close($connection);
?>