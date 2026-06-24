<?php 
$aprovados = 0; 
$alunos = [
    (object) ["Luiza", "nota" => 90],
    (object) ["Marcela", "nota" => 50],
    (object) ["Beana", "nota" => 80], 
    (object) ["Laura", "nota" =>100]
]; 

foreach ($alunos as $alunos) {
    if ($alunos -> nota >=80) {
        
    $aprovados++;
    }

}
echo "Total de aprovados: $aprovados"; 
?>