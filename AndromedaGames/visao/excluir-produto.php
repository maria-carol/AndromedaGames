<?php

session_start();
 ?>


<!doctype html>


<?php
// Verifica se os dados foram recebidos via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtém os dados enviados
  $usuario = $_POST['usuario'];
  $nomeusuario = $_POST['nomeusuario'];


  // Faz alguma coisa com os dados recebidos, se necessário
  // ...


  // Configura as variáveis de sessão, se necessário
  $_SESSION['usuario'] = $usuario;
  $_SESSION['nomeusuario'] = $nomeusuario;


} else {
  header("Location: login.php");
  exit;
}
include '..\visao\menu.php';
include '..\config\conexao.php';
include '..\modelo\produto.php';
include '..\repositorio\ProdutoRepositorio.php';

$produtosRepositorio = new ProdutoRepositorio($conn);
$excluiProduto = $produtosRepositorio->excluirProdutoPorId($_POST['id']);
 if(isset($_SESSION["nomeusuario"])) {
    $_SESSION["nomeusuario"];
} else {
    $_SESSION['nomeusuario'] = '';
}

 if(isset($_SESSION["usuario"])) {
    $_SESSION["usuario"];
} else {
    $_SESSION['usuario'] = '';
}
?>
<html lang="pt-br">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="../img/icone-serenatto.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>IFSP - Excluir Produto</title>
</head>

<body>
    <header>
        <div id="logo_div">
            <img src="http://localhost/AndromedaGames/imagens/logo.png"></img>
        </div>
        <div id="link_div">
            <a href="http://localhost/AndromedaGames/index.php">Início</a>
            <a href="http://localhost/AndromedaGames/index.php#central1">Destaques</a>
            <a href="http://localhost/AndromedaGames/index.php#central2">Jogos</a>
            <a href="http://localhost/AndromedaGames/index.php#central3">Categorias</a>
            <a href="http://localhost/AndromedaGames/visao/login.php">Login</a>
        </div>
  </header>
  <div id="principal_sobre">
    <div class="title">
    <h1 style="text-decoration: underline;">Excluir Produto</h1>
  </div>
    <main id="principal_exc">
        <section class="central4">
            <?php
            if ($excluiProduto) {


            ?>
            <label><h1>Produto excluído com sucesso</h1></label>
        </section>
        <section class="form_div">
            <form action="admin.php" method="post">
                <input type="submit" name="voltar" class="botao_cadastrar" value="Voltar" />
                <input type='hidden' name='nomeusuario' value="<?= $_SESSION['nomeusuario']; ?>">
                <input type='hidden' name='usuario' value="<?= $_SESSION['usuario']; ?>">


            </form>
        <?php } else {
                echo "erro ao excluir produto";
            } ?>



        </section>
    </main>
</body>


</html>
