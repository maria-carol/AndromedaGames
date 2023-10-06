<!DOCTYPE html>
<html>
<head>
    <title>Menu do Usuário</title>
    
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="http://localhost/AndromedaGames/css/estilos.css">
</head>
<body>
    <div class="menu">
        <div class="user-info dropdown">
            <div class="user-photo">
                <img src="imagens\usuario.png" alt="Foto do Usuário">
            </div>
            <div class="user-name"><?php echo "Olá, ".$_SESSION["nome_usuario"]."!"; ?></div>
            <div class="dropdown-content">
                <!-- Conteúdo do dropdown -->
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="#">Configurações</a>
                <a class="dropdown-item" href="#" onclick="logout()">Sair</a>
            </div>
        </div>
        <button class="logout-button" onclick="logout()">Sair</button>
    </div>
    <script>
        function logout() {
        // Aqui você pode adicionar lógica para encerrar a sessão, por exemplo:
        // session_start();
        <?php session_destroy(); ?>

        // Redireciona para a página de login
        window.location.href = 'visao/login.php';
    }
    </script>
</body>
</html>