<?php
// Função para trocar os valores das variáveis
function trocarValores(&$a, &$b) {
    // Armazena os valores antigos
    $tempA = $a;
    $tempB = $b;

    // Troca os valores das variáveis
    $a = $tempB;
    $b = $tempA;

    // Exibe os valores antigos e novos
    echo "Valor antigo de A: $tempA, novo valor: $a\n";
    echo "Valor antigo de B: $tempB, novo valor: $b\n";
}

// Exemplo de uso: valores iniciais das variáveis
$valorA = 10;
$valorB = 20;

// Exibe os valores iniciais
echo "Valores iniciais:\n";
echo "A: $valorA\n";
echo "B: $valorB\n";

// Chama a função para trocar os valores
trocarValores($valorA, $valorB);

// Exibe os valores após a troca
echo "\nValores após a troca:\n";
echo "A: $valorA\n";
echo "B: $valorB\n";
?>
