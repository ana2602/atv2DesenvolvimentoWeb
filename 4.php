<?php
// Lê o primeiro valor
echo "Digite o primeiro valor: ";
$valor1 = trim(fgets(STDIN));

// Lê o segundo valor
echo "Digite o segundo valor: ";
$valor2 = trim(fgets(STDIN));

// Converte as entradas para float e calcula a diferença
$diferenca = abs((float)$valor1 - (float)$valor2);

// Exibe a diferença entre os valores
echo "A diferença entre os dois valores é: $diferenca\n";
?>
