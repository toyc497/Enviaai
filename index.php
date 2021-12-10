<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/designHome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <nav>
            <div class="infoContainer">
                <ul>
                    <li><a href="#" id="grupoLink" class="infoOpt" onclick="grupo()">Grupo</a></li>
                    <li><a href="#" id="parceirosLink" class="infoOpt" onclick="parceiros()">Parceiros</a></li>
                    <li><a href="#" id="contatosLink" class="infoOpt" onclick="contatos()">Contatos</a></li>
                    <li><a href="index.php" class="infoOpt">Sobre</a></li>
                </ul>
            </div>
            <div class="buttonsContainer">
                <ul>
                    <li><a href="rastrear.php" class="butOpt">Rastrear</a></li>
                    <li><a href="login.php" class="butOpt">Login</a></li>
                    <li><a href="cadastrarUser.php" class="butOpt">Cadastrar</a></li>
                </ul>
            </div>
        </nav>
        <main>
            <div class="textoHome">
                <div class="titulo_princ">
                    <h1 id="tituloPrincHome"> A maior distribuidora <br>de Encomendas do Brasil</h1>
                </div>
                <div class="paragrafo">
                    <p id="paragHome">A Enviaai é a maior distribuidora de Encomendas do Brasil,
                        nela você pode cadastrar o seu Negócio Digital e enviar
                        os produtos aos clientes através da plataforma, nós buscamos a
                        encomenda em sua casa e enviamos ao seu cliente, cadastre-se e
                        começe já!</p>
                </div>  
            </div>
            <div class="imgHome">
                <img src="images/globo.webp" alt="globo">
            </div>
        </main>
        <footer>
            <h2>Enviaai &copy; por Matheus Fillipe</h2>
        </footer>
    </div>
    <script src="./js/eventosHome.js"></script>
</body>
</html>