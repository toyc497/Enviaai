<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/designRastrear.css">
    <title>Rastrear</title>
</head>
<body>
    <div class="container">
        <nav>
            <h1>Rastrear Envio</h1>
        </nav>
        <main>
            <form action="php_process_e_connection/processaRastreio.php" method="POST">
                <input type="number" name="idEnvio" class="idEnvio" maxlength="5" placeholder="ID do Envio">
                <input type="submit" class="botaoRastrear" value="Rastrear">
            </form>
        </main>
    </div>
</body>
</html>