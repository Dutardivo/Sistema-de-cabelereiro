<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Agendamentos</title>
    <link rel="stylesheet" href="style/style.css"/>

</head>
<body>
    <div class="container1">
    <section class="header3">
        <h1>Agendamentos</h1>

           
        </section>

        <form action="consulta_agendamentos.php" method="get">
          <br><br>  <label for="data">  Selecione a data:</label><br><br>
            <input type="date" id="data" name="data">
            <input type="submit" value="Consultar"> <br><br>
        </form>

        <?php

        //incluindo informações de ligacao da pg config.php
        include_once("config.php");
    
         $pesquisar = $_GET['data'];
        
        //  variável $pesquisar consulta o banco de dados data
        
        $sql = "SELECT * FROM clientes WHERE data = '$pesquisar'";
        $result = mysqli_query($conexao, $sql);

            // while garante que todas as informções sejam processadas
            while ($row = mysqli_fetch_assoc($result)) {
                echo"<br>";
                echo "  Nome: " . $row['nome'] . "<br>";
                echo "  CPF: " . $row['cpf'] . "<br>";
                echo "  horario :". $row['hora'].":00 <br>";
                echo "  Celular :". $row['celular'].":00 <br><br>";
              
            }
       
        ?>
    </div>

    <footer>
        <a href="index.PHP">
            <button class="Gerenciamento">Voltar</button>
        </a>
    </footer>
</body>
</html>
