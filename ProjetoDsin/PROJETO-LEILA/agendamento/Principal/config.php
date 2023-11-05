<?php
$servidor = "localhost"; //valores padrãpo de entrada
$usuario = "root";
$senha = "";
$banco = "cabelereira"; // banco feito no phpmyadmin


$conexao = new mysqli($servidor, $usuario, $senha, $banco, 3312); // 3312 é a porta pois ocorreu muitos erros com os bancos e acabei configurando assim
//esse comando força ele a entrar nessa porta, caso necessario pode mudar
// Verifique a conexão
//if ($conexao->connect_error) {

//    die("Conexão falhou: " . $conexao->connect_error);
//}

// Define caracteres para UTF-8 - pois tambem estava dando erro 
//$conexao->set_charset("utf8");
//echo "Conectado com sucesso";
//comando para ver se a conexão esta perfeita :)


?>

