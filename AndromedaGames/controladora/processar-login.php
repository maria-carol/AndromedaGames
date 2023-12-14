<?php
include "../config/conexao.php";
include "../modelo/autenticacao.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $login = new autenticacao($conn);
    $usuario = $login->verificarUsuario($email, $senha);
    if ($usuario){
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nomeusuario"] = $usuario['nome'];

        header ("Location: ../index.php");
        exit;
    }
    else{
        header ("Location: ../visao/login.php?erro=1");
    }
}
?>

