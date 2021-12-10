<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/designFormPages.css">
    <title>Destinatario</title>
</head>
<body>
    <header>
        <h1>Cadastrar Destinatário</h1>
    </header>
    <section>
        <form action="php_process_e_connection/processaDestin.php" method="POST">
            <div class="dado nome">
                <label for="nomeDestin">Nome: </label>
                <input type="text" name="nomeDestin" placeholder="Máximo 50 caracteres" maxlength="50" required>
            </div>
            <div class="dado cpf">
                <label for="cpfDestin">CPF:</label>
                <input type="number" name="cpfDestin" placeholder="Somente Números" maxlength="11" required>
            </div>
            <div class="dado telefone">
                <label for="telefoneDestin">Telefone Celular:</label>
                <input type="number" name="telefoneDestin" placeholder="Somente Números" maxlength="11" required>
            </div>
            <div class="dado cep">
                <label for="cepDestin">CEP:</label>
                <input type="number" name="cepDestin" placeholder="Somente Números" maxlength="8" required>
            </div>
            <div class="dado endereco">
                <label for="enderecoDestin">Endereço: </label>
                <input type="text" name="enderecoDestin" placeholder="Máximo 40 caracteres" maxlength="40" required>
            </div>
            <div class="btnCadastrar">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </section>
</body>
</html>