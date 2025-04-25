<?php
echo "<h1>ARRAYS PARA PHP</h1>";

$frutas = ['maçã', 'banana', 'laranja'];
echo $frutas[1];


// banana
echo "<hr>";
echo "<h1>DATE PARA PHP</h1>";

echo date("Y-m-d");       // Saída: 2025-04-23
echo date("d/m/Y");       // Saída: 23/04/2025
echo date("H:i:s");       // Saída: 08:32:10
echo date("l");           // Saída: Wednesday (nome do dia da semana)
echo date("d/m/Y H:i");   // Saída: 23/04/2025 08:32

date_default_timezone_set('America/Sao_Paulo');