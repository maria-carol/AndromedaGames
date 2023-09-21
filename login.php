<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prj_ldi/css/estilos.css">
    <title>Andrômeda Cup - Sobre nós</title>
</head>

<body>
<header>
        <div id="logo_div">
            <img src="http://localhost/prj_ldi/imagens/logo.png"></img>
        </div>
        <div id="link_div">
            <a href="http://localhost/prj_ldi/sobre.php">Sobre</a>
            <a href="http://localhost/prj_ldi/ginasios.php">Ginásios</a>
            <a href="http://localhost/prj_ldi/esportes.php">Esportes</a>
            <a href="http://localhost/prj_ldi/atletas.php">Atletas</a>
            <a href="http://localhost/prj_ldi/login.php">Login</a>
        </div>
    </header>
    <div id="principal_sobre">
        <div class="title">
            <h1 style="text-decoration: underline;">Login Andrômeda</h1>
            <br>
            <h5>Realize seu login e aproveite nossos produtos!</h5>
        </div>
        <!--<section class="container-form">-->
        <div class="form_container">
        <form method="post" action="processar-login.php">
            <div class="form_div">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="row" name="email" placeholder="Digite o seu e-mail" required>
                <br>
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="row"  placeholder="Digite a sua senha" required>
                <input type="submit" class="botao_cadastrar" name="entrar" value="Entrar" />
                <?php
                if(isset($_GET["erro"])){{ ?><label>Usuario ou senha invalidos</label><?php }}
                ?>
            </div>
        </form>
        </div>
        <form action="cadastrar-usuario.php" method="post">
            <input type="submit" name="cadastro" class="botao_cadastrar" value="Cadastre-se" />
        </form>

        </div>

</body>

</html>