<?php 
include 'conexao.php';

$numero1 = 15;
$numero2 = 10; 
$numero3 = 5; 

$resultado = $numero1 + $numero2 + $numero3; 

$sql = "INSERT INTO soma (numero1, numero2, numero3, resultado)
VALUES ($numero1, $numero2, $numero3, $resultado)";

if ($conexao->query($sql)) {
    echo "Dados salvos com sucesso!";
}else {
    echo "Erro ao salvar os dados: "; 
};
if ($conexao->query($sql)) {
    echo "<br> Os dados da soma dos três números foram salvos com sucesso!";
}else {
    echo "<br> Erro ao salvar os dados! "; 
}

?>