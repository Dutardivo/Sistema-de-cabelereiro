<?php
if (isset($_POST['submit'])) {
    /*
    print_r($_POST['Nome']);
    print_r($_POST['CPF']);             testandp se os valores estão sendo entregues do formulario
    print_r($_POST['telefone']);
    print_r($_POST['date']);
    print_r($_POST['hora']);
 */
    include_once ('config.php');
    $nome = $_POST['Nome'];
    $CPF= $_POST['CPF'];
    $telefone= $_POST['telefone'];
    $date= $_POST['date'];
    $hora= $_POST['hora'];

$result = mysqli_query($conexao,"INSERT INTO clientes(nome,cpf,celular,data,hora) VALUES ('$nome','$CPF','$telefone', '$date','$hora')");
//aqui podemps ver o envio dos formularios ao banco de dados inserindo nome cpf, telefone, gora e data 
//não coloquei o serviço mas seria uma proxima atualizção de funcionalidade
//assim como cpf e os ultimos digitos do celular fossem o login e senha para se ter um melhor controle
//aqui em baixo apenas o formulario
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabeleleila Leila's</title>
    <link rel="stylesheet" href="style/style.css"/>
</head>
<body> 
    <div class="container">
        <section class="header">
        <img src="imagem/leila.jpg" alt="Descrição da imagem">

           
        </section>
        <form action="index.php" method="post">
            <div id="form" class="form">                
                <div class="form-content">  
                    <label for="Nome">Nome do cliente</label>
                    <input type="text" name="Nome" placeholder="Digite seu nome aqui"/>
                    <label for="CPF">Digite o seu CPF</label>
                    <input type="text" name="CPF" placeholder="Digite seu CPF aqui"/>
                    <label for="celular">Digite o seu celular</label>
                    <input type="tel" name="telefone" placeholder="Digite seu numero de celular com ddd"/>
                    <label for="Data">Agende a data</label>
                    <input type="date" name="date"/>
                </div>
                <br>
                <label for="hora">Hora:</label>
                <select name="hora">
                    <option value="09">09:00</option>
                    <option value="10">10:00</option>
                    <option value="11">11:00</option>
                    <option value="12">12:00</option>
                    <option value="13">13:00</option>
                    <option value="14">14:00</option>
                    <option value="15">15:00</option>
                    <option value="16">16:00</option>
                    <option value="17">17:00</option>
                    <option value="18">18:00</option>
                </select>
                <br><br>
                <label for="servicos">Serviços</label><br><br>
                <input type="checkbox" name="servicos[]" value="Cabelo"> Cabelo<br><br>
                <input type="checkbox" name="servicos[]" value="Barba"> Barba<br><br>
                <input type="checkbox" name="servicos[]" value="Sobrancelha"> Sobrancelha<br><br> 
                <input type="checkbox" name="servicos[]" value="Depilação"> Depilação<br><br>
                <input type="checkbox" name="servicos[]" value="Unhas"> Unhas<br><br>
                <div class="form-content">  
                    <input type="submit" name="submit" value="ENVIAR"/>
                </div>
            </div>
        </form>
    </div>
    <footer>
        <a href="login.php">
        <button class="Gerenciamento">Gerenciamento</button>
        </a>
    </footer>
</body>
</html>
