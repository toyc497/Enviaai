<?php
    session_start();
    $idSessao = $_SESSION['idLoginVend'];
    include_once("php_process_e_connection/dbConnection.php");

    $sqlEnvio = "SELECT * FROM envio WHERE codVend=$idSessao";
    $sqlProdutos = "SELECT * FROM produto WHERE codVend=$idSessao";
    $sqlDestin = "SELECT * FROM destinatario WHERE codVend=$idSessao";

    $resEnvio = $connection->query($sqlEnvio);
    $resProd = $connection->query($sqlProdutos);
    $resDestin = $connection->query($sqlDestin);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/designPainel.css">
    <title>Painel de Controle</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="titleHead"><h1>Painel de Controle</h1></div>
            <div class="btnContainer">
                <ul>
                    <li><a href="enviarProd.php" class="btnAction">Enviar Produto</a></li>
                    <li><a href="cadastrarProduto.php" class="btnAction">Cadastrar Produto</a></li>
                    <li><a href="cadastrarDestin.php" class="btnAction">Cadastrar Destinatário</a></li>
                    <li><a href="index.php">Sair</a></li>
                </ul>
            </div>
        </header>
        <section>
            <!--.......ENVIOS.......-->
            <div class="titleEnvio"><h2>ENVIOS REALIZADOS</h2></div>
            <div class="tableCont">
                <table>
                    <tr>
                        <th>ID ENVIO</th>
                        <th>ID PRODUTO</th>
                        <th>ID DESTINATÁRIO</th>
                        <th>ID VENDEDOR</th>
                        <th>STATUS ENVIO</th>
                    </tr>
                    <?php
                        while($user_data = mysqli_fetch_assoc($resEnvio)){
                            echo "<tr>";
                            echo "<td>".$user_data[idEnvio]."</td>";
                            echo "<td>".$user_data[codProd]."</td>";
                            echo "<td>".$user_data[codDestin]."</td>";
                            echo "<td>".$user_data[codVend]."</td>";
                            echo "<td>".$user_data[statusEnvio]."</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div> 
            <!--.......PRODUTOS CADASTRADOS.......-->
            <div class="titleEnvio"><h2>PRODUTOS CADASTRADOS</h2></div>
            <div class="tableCont">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>PESO(kg)</th>
                        <th>ALTURA(cm)</th>
                        <th>LARGURA(cm)</th>
                        <th>PROFUNDIDADE(cm)</th>
                        <th>ID VENDEDOR</th>
                    </tr>
                    <?php
                        while($prod_data = mysqli_fetch_assoc($resProd)){
                            echo "<tr>";
                            echo "<td>".$prod_data[idProduto]."</td>";
                            echo "<td>".$prod_data[nomeProd]."</td>";
                            echo "<td>".$prod_data[peso]."</td>";
                            echo "<td>".$prod_data[altura]."</td>";
                            echo "<td>".$prod_data[largura]."</td>";
                            echo "<td>".$prod_data[profundidade]."</td>";
                            echo "<td>".$prod_data[codVend]."</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div> 
            <!--.......CLIENTES CADASTRADOS.......-->
            <div class="titleEnvio"><h2>DESTINATÁRIOS CADASTRADOS</h2></div>
            <div class="tableCont">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>CPF</th>
                        <th>TELEFONE</th>
                        <th>CEP</th>
                        <th>ID VENDEDOR</th>
                    </tr>
                    <?php
                        while($destin_data = mysqli_fetch_assoc($resDestin)){
                            echo "<tr>";
                            echo "<td>".$destin_data[idDestin]."</td>";
                            echo "<td>".$destin_data[nomeDestin]."</td>";
                            echo "<td>".$destin_data[cpfDestin]."</td>";
                            echo "<td>".$destin_data[telefoneDestin]."</td>";
                            echo "<td>".$destin_data[cepDestin]."</td>";
                            echo "<td>".$destin_data[codVend]."</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>          
        </section>
    </div>
</body>
</html>