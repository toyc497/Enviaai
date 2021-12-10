<?php
    include_once("dbConnection.php");

    $codEnvio = $_POST['idEnvio'];

    $sql = "SELECT statusEnvio FROM envio where idEnvio=$codEnvio";

    $result = mysqli_query($connection, $sql);
    
    $res = mysqli_fetch_assoc($result);

    switch($res[statusEnvio]){
        case 1:
            echo "Buscar produto no remetente<br>";
            break;
        case 2:
            echo "Saindo da transportadora<br>";
            break;
        case 3:
            echo "Produto em transporte<br>";
            break;
        case 4:
            echo "Entregue a distribuidora<br>";
            break;
        case 5:
            echo "Saindo para entrega<br>";
            break;
        case 6:
            echo "Produto entregue<br>";
            break;
        default:
            echo "Valor nao encontrado!";
            break;
    }

    mysqli_close($connection);
?>