<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prj_ldi/css/estilos.css">
    <title>Andrômeda Cup - Eventos</title>
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
    <div class="title"><h1>Programação: </h1></div>
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
            eventos  (Cod_evento, Nome_evento, Cod_esporte, Cod_ginasio, Cpf_atleta)
                VALUES ('EV01', 'Final basquete masculino','BASQ', 'GVLC', 65895436502),
                ('EV02', 'Final basquete feminino','BASQ', 'GVLC', 85496245632),
                ('EV03', 'Final vôlei masculino', 'VOLB', 'ECHL', 85462595103),
                ('EV04', 'Final vôlei feminino','VOLB', 'ECHL', 852634962156),
                ('EV05', 'Final futebol masculino', 'FUTB', 'GONG', 63587425869),
                ('EV06', 'Final futebol feminino', 'FUTB', 'GONG', 45396758426),
                ('EV07', 'Final natação masculino','NADO', 'ECOR', 58632462701),
                ('EV08', 'Final natação feminino','NADO', 'ECOR', 96423585375),
                ('EV09', 'Final Nado Misto', 'NADO', 'ECOR', 59876543212)
                ;");
            }
           /*  if ($result == true) {
                  # inserção ok
                  echo "<br>" . "Registro de eventos incluido com sucesso!";
            } else {
                # inserção nok
                $msg = mysqli_error($c);
                echo "<br>" . "Registro de eventos não incluido com sucesso! " . $msg;
            } */

            $sql = "UPDATE eventos SET Nome_evento='Semi-final basquete feminino' WHERE Cod_evento='EV02';";
            $result = mysqli_query($c, $sql);
            /* if ($result == true) {
                # Alteração bem sucedida
                echo "Alteração ok"."<br>";
            } else {
                echo "Alteração nok"."<br>";
            } */

            #Excluir dados
            $sql = "DELETE FROM eventos WHERE Cod_evento='EV09';";
            $result = mysqli_query($c, $sql);
            /* if ($result == true) {
                # Alteração bem sucedida
                echo "Deletado "."<br>";
            } else {
                echo "Não Deletado"."<br>";
            } */

            $sql = "SELECT Nome_evento, Cod_esporte, Cod_ginasio  FROM eventos WHERE Cod_evento='EV02';";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"."Evento com ingressos esgotados:"."</span>"."<br>"
                    . "<br>"  . " Nome do evento = " . $linha['Nome_evento']
                    . "<br>"  . " Código do esporte = " . $linha['Cod_esporte']
                    . "<br>"  . " Código do ginásio = " . $linha['Cod_ginasio']
                    . "<br>". "<br>"."</div>" ;
                } else {
                    # não existe registro
                    echo "<br>" . "Exibição não concluída";
                }
            }

            $sql = "SELECT Nome_evento, Cod_esporte, Cod_ginasio FROM eventos WHERE Cpf_atleta=85462595103 and Cod_ginasio='ECHL';";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"." Evento com show :"."</span>"."<br>"
                    . "<br>"  . " Nome do evento = " . $linha['Nome_evento']
                    . "<br>"  . " Código do esporte = " . $linha['Cod_esporte']
                    . "<br>"  . " Código do ginásio = " . $linha['Cod_ginasio']
                    . "<br>". "<br>"."</div>" ;
                } else {
                    # não existe registro
                    echo "<br>" . "Exibição não concluída";
                }
            }

            #Exibir resultados da tabela
            $sql = "SELECT * FROM eventos ;";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"."Evento : ". $i + 1 ."</span>"."<br>"
                    . " Código do evento = " . $linha['Cod_evento']
                    . "<br>"  . " Nome do evento = " . $linha['Nome_evento']
                    . "<br>"  . " Código do esporte = " . $linha['Cod_esporte']
                    . "<br>"  . " Código do ginásio = " . $linha['Cod_ginasio']
                    . "<br>"  . " Cpf do atleta-estrela = " . $linha['Cpf_atleta']
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