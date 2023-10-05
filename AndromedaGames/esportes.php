<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prj_ldi/css/estilos.css">
    <title>Andrômeda Cup - Esportes</title>
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
            <a href="http://localhost/prj_ldi/eventos.php">Eventos</a>
        </div>
    </header>
    <div class="title"><h1>Esportes: </h1></div>
    <div id="principal">
        <?php
            $c = mysqli_connect("localhost", "root", "", "andromeda_cup");
            if(mysqli_connect_errno () <> 0){
                $msg = mysqli_connect_error();
                // echo "Erro na conexão SQL!"."<br>";
                // echo "O MySQL retornou a seguinte mensagem: ".$msg."<br>"; #Exibe o erro da conexão
            } else{
                // echo "Conexão Ok, podemos continuar!"."<br>";

            $result = mysqli_query($c, "INSERT INTO 
            esporte  (Cod_esporte, Nome_esporte)
                VALUES ('FUTB', 'Futebol'), 
                ('VOLB', 'Vôleibol'), 
                ('BASQ', 'Basquete'), 
                ('NADO', 'Nado sincronizado'),
                ('SKAT', 'Skate Street');");
            }
            /* if ($result == true) {
                  # inserção ok
                  echo "<br>" . "Registro de esportes incluido com sucesso!";
            } else {
                # inserção nok
                $msg = mysqli_error($c);
                echo "<br>" . "Registro de esportes não incluido com sucesso! " . $msg;
            } */

            $sql = "UPDATE esporte SET Nome_esporte='Natação' WHERE Cod_esporte='NADO';";
            $result = mysqli_query($c, $sql);
            /* if ($result == true) {
                # Alteração bem sucedida
                echo "Alteração ok"."<br>";
            } else {
                echo "Alteração nok"."<br>";
            } */

            #Excluir dados
            $sql = "DELETE FROM esporte WHERE Cod_esporte='SKAT';";
            $result = mysqli_query($c, $sql);
            /* if ($result == true) {
                # Alteração bem sucedida
                echo "Deletado "."<br>";
            } else {
                echo "Não Deletado"."<br>";
            } */

            $sql = "SELECT Nome_esporte FROM esporte WHERE Cod_esporte='NADO';";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"."Esporte em destaque:"."</span>"."<br>"
                    . "<br>"  . "   Nome do esporte = " . $linha['Nome_esporte']
                    . "<br>". "<br>"."</div>" ;
                } else {
                    # não existe registro
                    echo "<br>" . "Exibição não concluída";
                }
            }

            $sql = "SELECT Nome_esporte FROM esporte WHERE Nome_esporte='Basquete' and Cod_esporte='BASQ';";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"."Esporte preferido do público:"."</span>"."<br>"
                    . "<br>"  . "   Nome do esporte = " . $linha['Nome_esporte']
                    . "<br>". "<br>"."</div>" ;
                } else {
                    # não existe registro
                    echo "<br>" . "Exibição não concluída";
                }
            }

            #Exibir resultados da tabela
            $sql = "SELECT * FROM esporte ;";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"."Esporte: ". $i + 1 ."</span>"."<br>"  
                    . " Código do esporte = " . $linha['Cod_esporte']
                    . "<br>"  . "   Nome do esporte = " . $linha['Nome_esporte']
                    . "<br>". "<br>"."</div>" ;
                } else {
                    # não existe registro
                    echo "<br>" . "Exibição não concluída";
                }
            }

            
        ?>
    </div>
    <footer></footer>
</body>
</html>