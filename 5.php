<?php
// Lê o primeiro valor
echo "Digite o primeiro valor: ";
$valor1 = trim(fgets(STDIN));

// Lê o segundo valor
echo "Digite o segundo valor: ";
$valor2 = trim(fgets(STDIN));

// Verifica se o segundo valor é diferente de zero para evitar divisão por zero
if ((float)$valor2 == 0) {
    echo "Erro: Divisão por zero não é permitida.\n";
} else {
    // Converte as entradas para float e calcula a divisão
    $divisao = (float)$valor1 / (float)$valor2;
    
    // Exibe o resultado da divisão
    echo "O resultado da divisão do primeiro valor pelo segundo é: $divisao\n";
}
?>
