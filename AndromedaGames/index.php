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
    <script src="http://localhost/AndromedaGames/js/carrossel.js" defer></script>
    <title>Andrômeda Games - Início</title>
</head>
<body>
    <header id="index">
        <div id="logo_div">
            <img src="http://localhost/AndromedaGames/imagens/logo.png"></img>
        </div>
        <div id="link_div">
            <a href="http://localhost/AndromedaGames/index.php">Início</a>
            <a href="http://localhost/AndromedaGames/index.php#central1">Destaques</a>
            <a href="http://localhost/AndromedaGames/index.php#central2">Jogos</a>
            <a href="http://localhost/AndromedaGames/atletas.php">Atletas</a>
            <a href="http://localhost/AndromedaGames/visao/login.php">Login</a>
        </div>
    </header>
    <div class="principal_sobre">
        <div class="banner"></div>
        <div id="central1">
            <h1>Destaques da semana!</h1>
            <br>
            <div class="container-slider">
                <button id="prev-button"><img src="http://localhost/AndromedaGames/imagens/arrow.png" alt="prev-button"></button>
                <div class="container-images" id="img">
                    <img src="http://localhost/AndromedaGames/imagens/jogo1.png" alt="jogo" class="slider on">
                    <img src="http://localhost/AndromedaGames/imagens/jogo2.png" alt="jogo" class="slider">
                    <img src="http://localhost/AndromedaGames/imagens/jogo3.png" alt="jogo" class="slider">
                    <img src="http://localhost/AndromedaGames/imagens/jogo4.png" alt="jogo" class="slider">
                    <img src="http://localhost/AndromedaGames/imagens/jogo5.png" alt="jogo" class="slider">
                    <img src="http://localhost/AndromedaGames/imagens/jogo6.png" alt="jogo" class="slider">
                    <img src="http://localhost/AndromedaGames/imagens/jogo7.png" alt="jogo" class="slider">
                    <img src="http://localhost/AndromedaGames/imagens/jogo8.png" alt="jogo" class="slider">
                    <img src="http://localhost/AndromedaGames/imagens/jogo9.png" alt="jogo" class="slider">
                    <img src="http://localhost/AndromedaGames/imagens/jogo10.png" alt="jogo" class="slider">
                </div>
                <button id="next-button"><img src="http://localhost/AndromedaGames/imagens/arrow.png" alt="next-button"></button>
            </div>
        </div>
        <div class="prod-title"><h1>Veja nossos principais produtos:</h1></div>
        <div id="central2">
            <br>
            <div class="container-produto">
                    <div class="container-foto">
                        <img src="imagens/prod1.png">
                    </div>
                    <p>Fortnite</p>
                    <p>R$ 39.90</p>
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="imagens/prod2.png">
                    </div>
                    <p>Resident Evil 4</p>
                    <p>R$ 119.90</p>
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="imagens/prod3.png">
                    </div>
                    <p>GTA V</p>
                    <p>R$ 59.90</p>
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="imagens/prod4.png">
                    </div>
                    <p>Undertale</p>
                    <p>R$ 39.90</p>
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="imagens/prod5.png">
                    </div>
                    <p>The Sims 4</p>
                    <p>R$ 49.90</p>
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="imagens/prod6.png">
                    </div>
                    <p>Grounded</p>
                    <p>R$ 109.90</p>
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="imagens/prod7.png">
                    </div>
                    <p>Poly Bridge</p>
                    <p>R$ 49.90</p>
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="imagens/prod8.png">
                    </div>
                    <p>Simcity</p>
                    <p>R$ 74.90</p>
                </div>
        </div>
        <div class="central3">
            <div clas="categoria">
                <h2>Simulação</h2>
            </div>
            <div clas="categoria">
                <h2>Player vs Player</h2>
            </div>
            <div clas="categoria">
                <h2>Battle Royale</h2>
            </div>
            <div clas="categoria">
                <h2>Quebra-cabeça</h2>
            </div>
        </div>
    </div>
    <footer></footer>
</body>
</html>