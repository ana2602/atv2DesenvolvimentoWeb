<?php
// Lê o comprimento do retângulo
echo "Digite o comprimento do retângulo em metros: ";
$comprimento = trim(fgets(STDIN));

// Lê a largura do retângulo
echo "Digite a largura do retângulo em metros: ";
$largura = trim(fgets(STDIN));

// Converte as entradas para float e calcula a área
$area = (float)$comprimento * (float)$largura;

// Exibe a área do retângulo
echo "A área do retângulo é: $area metros quadrados\n";
?>
