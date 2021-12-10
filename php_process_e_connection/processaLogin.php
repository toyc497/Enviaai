<?php
    session_start();
    include_once("dbConnection.php");

    $idVendedor = $_POST['idVend'];
    $passVend = $_POST["senha"];

    $_SESSION['idLoginVend'] = $idVendedor;

    $loginVal = "SELECT senhaVend FROM vendedor WHERE idVend=$idVendedor";

    $result = mysqli_query($connection, $loginVal);
    
    $res = mysqli_fetch_assoc($result);

    if($res[senhaVend] == $passVend){
        header('Location:../painelControle.php'); 
    }else{
        ?>
        <script>
            alert('Senha Inválida');
        </script>
        <?php
    }
 
    mysqli_close($connection);
?>