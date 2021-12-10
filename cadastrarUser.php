<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/designCadastrarUser.css">
    <title>Cadastrar</title>
</head>
<body>
    <div class="container">
        <form action="php_process_e_connection/processaUser.php" method="POST">
            <div class="tituloPagina"><h1>Cadastrar na Enviaaí</h1></div>
            <div class="inputsCont nome">
                <input type="text" name="nomeVendedor" placeholder="Nome Completo" maxlength="50" required>
            </div>
            <div class="inputsCont email">
                <input type="email" name="emailVendedor" placeholder="Email" maxlength="50" required>
            </div>
            <div class="inputsCont telefone">
                <input type="number" name="telefoneVendedor" placeholder="Telefone somente números" maxlength="11" required>
            </div>
            <div class="inputsCont cnpj">
                <input type="number" name="cnpjVendedor" placeholder="CNPJ somente números" maxlength="14" required>
            </div>
            <div class="inputsCont estado">
                <input type="text" name="estadoVendedor" placeholder="Unidade Federativa (Ex: DF)" maxlength="2" required>
            </div>
            <div class="inputsCont cep">
                <input type="number" name="cepVendedor" placeholder="CEP somente números" maxlength="8" required>
            </div>
            <div class="inputsCont endereco">
                <input type="text" name="enderecoVendedor" placeholder="Endereço" maxlength="40" required>
            </div>
            <div class="inputsCont senha">
                <input type="password" name="senhaVendedor" placeholder="Senha somente núm. 8 caracteres" maxlength="8" required>
            </div>
            <div class="inputsCont repeteSenha">
                <input type="password" name="repeteSenhaVendedor" placeholder="Confirme a Senha" maxlength="8" required>
            </div>
            <div class="inputsCont buttonCadastrar">
                <input type="submit" id="botaoCadastrar" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>