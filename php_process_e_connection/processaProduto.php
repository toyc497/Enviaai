<?php
    session_start();
    $idSessao = $_SESSION['idLoginVend'];
    include_once("dbConnection.php");

    $nomeProd = $_POST['nomeProd'];
    $pesoProd = $_POST['pesoProd'];
    $alturaProd = $_POST['alturaProd'];
    $larguraProd = $_POST['larguraProd'];
    $profProd = $_POST['profProd'];

    $sql = "INSERT INTO produto (nomeProd,peso,altura,largura,profundidade,codVend)
                VALUES ('$nomeProd',
                        $pesoProd,
                        $alturaProd,
                        $larguraProd,
                        $profProd,
                        $idSessao
                )";
    
    if(mysqli_query($connection,$sql)){
        echo "Produto $nomeProd cadastrado com Sucesso";
    }else{
        echo mysqli_connect_error();
    }
    mysqli_close($connection);
?>