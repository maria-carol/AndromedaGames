<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prj_ldi/css/estilos.css">
    <title>Andrômeda Cup - Ginásios</title>
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
    <div class="title"><h1>Ginásios e estádios: </h1></div>
    <div id="principal">
        <?php
            $c = mysqli_connect("localhost", "root", "", "andromeda_cup");
            if(mysqli_connect_errno () <> 0){
                $msg = mysqli_connect_error();
                // echo "Erro na conexão SQL!"."<br>";
                // echo "O MySQL retornou a seguinte mensagem: ".$msg."<br>"; #Exibe o erro da conexão
            } else{
                // echo "Conexão Ok, podemos continuar!"."<br>" 
            };

            #Inserindo dados
            $result = mysqli_query($c, "INSERT INTO 
            local  (Cod_ginasio, Nome_ginasio, Endereco, Capacidade)
                VALUES ('GVLC', 'Ginásio Via Lactea' , 'Rua das Rosas' , 10000),
                ('ECHL', 'Estádio Cometa Halley' , 'Avenida das Estrelas' , 20000),
                ('GONG', 'Ginásio Olho Negro' , 'Avenida das Estrelas' , 15000),
                ('ECOR', 'Estádio Constelação Órion' , 'Rua Lunar' , 8000),
                ('ENBL', 'Estádio Nebuloso' , 'Rua Galileu Galilei' , 2000);");
            /* if ($result <> true) {
                  # inserção nok
                $msg = mysqli_error($c);
                echo "<br>" . "Registro de locais não incluido com sucesso! " . $msg;
            } else {
                # inserção ok
                echo "<br>" . "Registro de locais incluido com sucesso!" . "<br>";
            } */

            $sql = "UPDATE local SET Endereco='Rua James Webb' WHERE Cod_ginasio='GVLC';";
            $result = mysqli_query($c, $sql);
            /* if ($result == true) {
                # Alteração bem sucedida
                echo "Alteração ok"."<br>";
            } else {
                echo "Alteração nok"."<br>";
            } */

            #Excluir dados
            $sql = "DELETE FROM local WHERE Cod_ginasio='ENBL';";
            $result = mysqli_query($c, $sql);

            $sql = "SELECT Nome_ginasio, Endereco, Capacidade FROM local WHERE Cod_ginasio='GVLC';";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"."Ginásio mais frequentado:"."</span>"."<br>"
                    . "<br>"  . "   Nome do ginásio = " . $linha['Nome_ginasio']
                    . "<br>"  . "   Endereço = " . $linha['Endereco']
                    . "<br>"  . "   Capacidade = " . $linha['Capacidade']
                    . "<br>". "<br>"."</div>" ;
                } else {
                    # não existe registro
                    echo "<br>" . "Exibição não concluída";
                }
            }

            $sql = "SELECT Nome_ginasio, Endereco, Capacidade FROM local WHERE Endereco='Avenida das Estrelas' and Capacidade >= 16000;";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"."Ginásio com maior capacidade :"."</span>"."<br>"
                    . "<br>"  . " Nome do ginasio = " . $linha['Nome_ginasio']
                    . "<br>"  . " Endereço = " . $linha['Endereco']
                    . "<br>"  . " Capacidade = " . $linha['Capacidade']
                    . "<br>". "<br>"."</div>" ;
                } else {
                    # não existe registro
                    echo "<br>" . "Exibição não concluída";
                }
            }

            #Exibir resultados da tabela
            $sql = "SELECT * FROM local ;";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"."Ginásio : ". $i + 1 ."</span>"."<br>"
                    . " Código do ginasio = " . $linha['Cod_ginasio']
                    . "<br>"  . " Nome do ginasio = " . $linha['Nome_ginasio']
                    . "<br>"  . " Endereço = " . $linha['Endereco']
                    . "<br>"  . " Capacidade = " . $linha['Capacidade']
                    . "<br>". "<br>". "</div>" ;
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