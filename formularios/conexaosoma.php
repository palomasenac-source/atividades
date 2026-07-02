<?php 
$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "db_php";
$porta = "3307";

$conexao = new mysli(
    $host,
    $usuario,
    $senha,
    $banco, 
    $porta
); 

if ($conexao->connect_error) {
    die("Erro ao conectar com o banco de dados: " . $conexao->connect_error); 
}

echo "Conexão com o banco de dados estabelecida com sucesso!"; 
?>