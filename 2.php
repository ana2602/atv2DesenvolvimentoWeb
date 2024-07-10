<?php
// Lê as quatro notas do aluno
echo "Digite a primeira nota: ";
$nota1 = trim(fgets(STDIN));

echo "Digite a segunda nota: ";
$nota2 = trim(fgets(STDIN));

echo "Digite a terceira nota: ";
$nota3 = trim(fgets(STDIN));

echo "Digite a quarta nota: ";
$nota4 = trim(fgets(STDIN));

// Converte as notas para float e calcula a media
$media = ((float)$nota1 + (float)$nota2 + (float)$nota3 + (float)$nota4) / 4;

// Exibe a media
echo "A média das quatro notas é: $media\n";
?>
