<?php
    session_start();
    if (!isset($_SESSION["usuario"])){
        header("Location: visao/login.php");
        exit;
    }

    include 'menu.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/AndromedaGames/css/estilos.css">
    <script src="carrossel.js" defer></script>
    <title>Andrômeda Cup - Sobre nós</title>
</head>
<body>
    <header id="index">
        <div id="logo_div">
            <img src="http://localhost/AndromedaGames/imagens/logo.png"></img>
        </div>
        <div id="link_div">
            <a href="http://localhost/AndromedaGames/visao/index.php">Início</a>
            <a href="http://localhost/AndromedaGames/ginasios.php">Ginásios</a>
            <a href="http://localhost/AndromedaGames/esportes.php">Esportes</a>
            <a href="http://localhost/AndromedaGames/atletas.php">Atletas</a>
            <a href="http://localhost/AndromedaGames/visao/login.php">Login</a>
        </div>
    </header>
    <div class="principal_sobre">
        <div class="banner"></div>
        <div class="central">
            <div class="carrossel">
                <div class="container" id="img">
                    <img src="http://localhost/AndromedaGames/imagens/jogo1.png" alt="">
                    <img src="http://localhost/AndromedaGames/imagens/jogo2.png" alt="">
                    <img src="http://localhost/AndromedaGames/imagens/jogo3.png" alt="">
                    <img src="http://localhost/AndromedaGames/imagens/jogo4.png" alt="">
                    <img src="http://localhost/AndromedaGames/imagens/jogo5.png" alt="">
                    <img src="http://localhost/AndromedaGames/imagens/jogo6.png" alt="">
                    <img src="http://localhost/AndromedaGames/imagens/jogo7.png" alt="">
                    <img src="http://localhost/AndromedaGames/imagens/jogo8.png" alt="">
                    <img src="http://localhost/AndromedaGames/imagens/jogo9.png" alt="">
                    <img src="http://localhost/AndromedaGames/imagens/jogo10.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <footer></footer>
</body>
</html>