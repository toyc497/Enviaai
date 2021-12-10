<?php
    include_once("dbConnection.php");

    $nomeVendedor = $_POST['nomeVendedor'];
    $emailVendedor = $_POST['emailVendedor'];
    $telefoneVendedor = $_POST['telefoneVendedor'];
    $cnpjVendedor = $_POST['cnpjVendedor'];
    $estadoVendedor = $_POST['estadoVendedor'];
    $cepVendedor = $_POST['cepVendedor'];
    $enderecoVendedor = $_POST['enderecoVendedor'];
    $senhaVendedor = $_POST['senhaVendedor'];

    $sql = "INSERT INTO vendedor (nomeVend,emailVend,telefoneVend,cnpjVend,estadoVend,cepVend,enderecoVend,senhaVend)
                VALUES ('$nomeVendedor',
                        '$emailVendedor',
                        $telefoneVendedor,
                        $cnpjVendedor,
                        '$estadoVendedor',
                        $cepVendedor,
                        '$enderecoVendedor',
                        '$senhaVendedor'
                )";
    
    if(mysqli_query($connection,$sql)){
        echo "Vendedor $nomeVendedor cadastrado com Sucesso";
    }else{
        echo mysqli_connect_error();
    }
    mysqli_close($connection);
    
?>