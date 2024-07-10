<?php
// Função para converter Fahrenheit para Celsius
function fahrenheitToCelsius($fahrenheit) {
    return ($fahrenheit - 32) / 1.8;
}

// Função para exibir a temperatura em ambos os formatos
function exibirTemperatura($fahrenheit) {
    $celsius = fahrenheitToCelsius($fahrenheit);
    echo "Temperatura em Fahrenheit: $fahrenheit °F\n";
    echo "Temperatura em Celsius: " . number_format($celsius, 2) . " °C\n";
}

// Exemplo de uso: temperatura em Fahrenheit
$temperatura_fahrenheit = 75;
exibirTemperatura($temperatura_fahrenheit);
?>
