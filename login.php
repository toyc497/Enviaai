<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/designLogin.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="php_process_e_connection/processaLogin.php" method="POST">
            <div class="loginContainer">
                <div class="tituloCont">
                    <h1>Login</h1>
                </div>
                <div class="camposDados">
                    <input type="number" class="camposInput" name="idVend" placeholder="ID" maxlength="5" required>
                </div>
                <div class="camposDados">
                    <input type="password" class="camposInput" name="senha" placeholder="Senha" maxlength="8" required>
                </div>
                <div class="buttonCont">
                    <input type="submit" value="Login" class="buttonLogin">
                </div>
                <div class="msgCadastrar">
                    <h2>Não tem uma conta? <a href="cadastrarUser.php">Cadastre-se</a></h2>
                </div>
            </div>
        </form>
    </div>
</body>
</html>