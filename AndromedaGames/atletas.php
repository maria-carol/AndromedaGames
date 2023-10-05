<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prj_ldi/css/estilos.css">
    <title>Andrômeda Cup - Atletas</title>
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
    <div class="title"><h1>Atletas participantes: </h1></div>
    <div id="principal">
        <br>
        <?php
            $c = mysqli_connect("localhost", "root", "", "andromeda_cup");
            if(mysqli_connect_errno () <> 0){
                $msg = mysqli_connect_error();
                // echo "Erro na conexão SQL!"."<br>";
                // echo "O MySQL retornou a seguinte mensagem: ".$msg."<br>"; #Exibe o erro da conexão
            } else{
            //     echo "Conexão Ok, podemos continuar!"."<br>";

            $result = mysqli_query($c, "INSERT INTO 
            atleta  (Cpf, Nome_atleta, Idade, Cod_esporte)
                VALUES (65895436502, 'João Almeida', 25, 'BASQ'),
                (85496245632, 'Larrisa Melo', 27, 'BASQ'), 
                (85462595103, 'Lucas Alves', 30, 'VOLB'), 
                (852634962156, 'Carolina Soares', 21, 'VOLB'),
                (63587425869, 'Richar Lisson', 32, 'FUTB'),
                (45396758426, 'Marta Pina', 38, 'FUTB'),
                (58632462701, 'Felps Filva', 35, 'NADO'),
                (96423585375, 'Mirah Rubro', 20, 'NADO'),
                (59876543212, 'Katherine Johnson', 45, 'NADO'),
                (00000000000, 'Exclua Me da Silva', 15, 'FUTB');");
            }
            /* if ($result == true) {
                  # inserção ok
                  echo "<br>" . "Registro de atletas incluido com sucesso!";
            } else {
                # inserção nok
                $msg = mysqli_error($c);
                echo "<br>" . "Registro de atletas não incluido com sucesso! " . $msg;
            } */

            $sql = "UPDATE atleta SET Nome_atleta='Claudio Herman' WHERE Cpf=65895436502;";
            $result = mysqli_query($c, $sql);
            /* if ($result == true) {
                # Alteração bem sucedida
                echo "Alteração ok"."<br>";
            } else {
                echo "Alteração nok"."<br>";
            } */

            #Excluir dados
            $sql = "DELETE FROM atleta WHERE Cpf=00000000000;";
            $result = mysqli_query($c, $sql);
            /* if ($result == true) {
                # Alteração bem sucedida
                echo "Deletado "."<br>";
            } else {
                echo "Não Deletado"."<br>";
            } */

            $sql = "SELECT Nome_atleta, Idade FROM atleta WHERE Cpf=59876543212;";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"."Atleta mais experiente:"."</span>"."<br>"
                    . "<br>"  . "   Nome do atleta = " . $linha['Nome_atleta']
                    . "<br>"  . "   Idade = " . $linha['Idade']
                    . "<br>". "<br>"."</div>" ;
                } else {
                    # não existe registro
                    echo "<br>" . "Exibição não concluída";
                }
            }


            $sql = "SELECT Nome_atleta, Idade FROM atleta WHERE Cod_esporte='NADO' and Idade <= 30;";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>". "<span class='negrito'>"."Atletas de natação com menos de 30 anos:"."</span>"."<br>"
                    . "<br>"  . "   Nome do atleta = " . $linha['Nome_atleta']
                    . "<br>"  . "   Idade = " . $linha['Idade']
                    . "<br>". "<br>"."</div>" ;
                } else {
                    # não existe registro
                    echo "<br>" . "Exibição não concluída";
                }
            }

            #Exibir resultados da tabela
            $sql = "SELECT * FROM atleta ;";
            $consulta = mysqli_query($c, $sql);
            for ($i=0; $i < mysqli_num_rows($consulta); $i++) {
                if (mysqli_num_rows($consulta) <> 0) {
                    # insere o resultado do select
                    $linha = mysqli_fetch_assoc($consulta);
                    echo "<div class = 'valores'>". "<br>"."<span class='negrito'>"."Atleta: ".$i + 1 ."</span>"."<br>"
                    . "<br>"  . " Cpf do atleta = " . $linha['Cpf']
                    . "<br>"  . "   Nome do atleta = " . $linha['Nome_atleta']
                    . "<br>"  . "   Idade = " . $linha['Idade']
                    . "<br>"  . "   Código do esporte = " . $linha['Cod_esporte']
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