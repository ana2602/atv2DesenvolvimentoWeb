<?php
// Preço por quilo da refeição
$preco_por_quilo = 45.00;

// Lê o peso do prato montado pelo cliente em quilos
echo "Digite o peso do prato montado pelo cliente (em quilos): ";
$peso_prato = trim(fgets(STDIN));

// Calcula o valor a pagar
$valor_pagar = (float)$peso_prato * $preco_por_quilo;

// Exibe o valor a ser pago
echo "O valor a pagar pelo prato montado é: R$ " . number_format($valor_pagar, 2, ',', '.') . "\n";
?>
