<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="">
</head>
<body>

<h1>Resultado da Soma</h1>
<p>
    <?php 
    //incluindo a conexão no meu arquivo
    include "formconexaophp";

    //logica de calculo dos números
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $soma = $num1 + $num2;

    //sql
    $sql = "INSERT INTO soma (numero1, numero2, resultado)
    VALUES ($num1, $num2, $soma)";

    //consulta ou guardar no banco de dados
    $conexao->query($sql);

    //imprimindo os números na pagina
    echo "A soma do $num1 + $num2 = $soma"; 
    

    ?>
</p>
    
</body>
</html>