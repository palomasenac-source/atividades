<?php
$aprovados = 0; 
$candidatos = [
  (object)  ["joao", "nota" => 80],
  (object)  ["Rafael", "nota" => 50], 
  (object)  ["Daniel", "nota" => 100],
  (object)  ["Lucas", "nota" => 70]
];  

foreach ($candidatos as $candidatos) {
    if ($candidatos -> nota >=70) {
      
     $aprovados++; 
    }

}
echo "Total de aprovados: $aprovados"; 

?>