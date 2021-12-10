<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/designFormPages.css">
    <title>Produto</title>
</head>
<body>
    <header>
        <h1>Cadastrar Produto</h1>
    </header>
    <section>
        <form action="php_process_e_connection/processaProduto.php" method="POST">
            <div class="dado nome">
                <label for="nomeProd">Nome: </label>
                <input type="text" name="nomeProd" placeholder="Máximo 30 caracteres" maxlength="30" required>
            </div>
            <div class="dado peso">
                <label for="pesoProd">Peso em Kg:</label>
                <input type="number" name="pesoProd" placeholder="Ex: 4.33" required step=".01">
            </div>
            <div class="dado altura">
                <label for="alturaProd">Altura em cm:</label>
                <input type="number" name="alturaProd" placeholder="Relação ao Pacote" maxlength="3" required>
            </div>
            <div class="dado largura">
                <label for="larguraProd">Largura em cm:</label>
                <input type="number" name="larguraProd" placeholder="Relação ao Pacote" maxlength="3" required>
            </div>
            <div class="dado profundidade">
                <label for="profProd">Profundidade em cm:</label>
                <input type="number" name="profProd" placeholder="Relação ao Pacote" maxlength="3" required>
            </div>
            <div class="btnCadastrar">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </section>
</body>
</html>