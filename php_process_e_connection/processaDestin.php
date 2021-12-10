<?php
    session_start();
    $idSessao = $_SESSION['idLoginVend'];
    include_once("dbConnection.php");

    $nomeDestin = $_POST['nomeDestin'];
    $cpfDestin = $_POST['cpfDestin'];
    $telefoneDestin = $_POST['telefoneDestin'];
    $cepDestin = $_POST['cepDestin'];
    $enderecoDestin = $_POST['enderecoDestin'];

    $sql = "INSERT INTO destinatario (nomeDestin,cpfDestin,telefoneDestin,cepDestin,enderecoDestin,codVend)
                VALUES ('$nomeDestin',
                        $cpfDestin,
                        $telefoneDestin,
                        $cepDestin,
                        '$enderecoDestin',
                        $idSessao
                )";
    
    if(mysqli_query($connection,$sql)){
        echo "Destinatário $nomeDestin cadastrado com Sucesso";
    }else{
        echo mysqli_connect_error();
    }
    mysqli_close($connection);
?>