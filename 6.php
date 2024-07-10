<?php
// Lê o peso da pessoa em quilos
echo "Digite o peso da pessoa em quilos: ";
$peso_quilos = trim(fgets(STDIN));

// Converte o peso para gramas (1 quilo = 1000 gramas)
$peso_gramas = (float)$peso_quilos * 1000;

// Exibe o peso em gramas
echo "O peso da pessoa em gramas é: $peso_gramas gramas\n";
?>
