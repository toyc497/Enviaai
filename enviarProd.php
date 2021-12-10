<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/designFormPages.css">
    <title>Enviar Produto</title>
</head>
<body>
    <header>
        <h1>Enviar Produto</h1>
    </header>
    <section>
        <form action="php_process_e_connection/processaEnvio.php" method="POST">
            <div class="dado idProd">
                <label for="idProd">ID PRODUTO:</label>
                <input type="number" name="idProd" placeholder="Somente Números" maxlength="5" required>
            </div>
            <div class="dado idDestin">
                <label for="idDestin">ID DESTINATÁRIO:</label>
                <input type="number" name="idDestin" placeholder="Somente Números" maxlength="5" required>
            </div>
            <div class="btnCadastrar">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </section>
</body>
</html>