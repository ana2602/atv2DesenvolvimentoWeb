<?php
// Função para calcular o diâmetro da circunferência
function calcularDiametro($raio) {
    return 2 * $raio;
}

// Função para calcular o comprimento da circunferência (perímetro)
function calcularComprimento($raio) {
    return 2 * M_PI * $raio;
}

// Função para calcular a área da circunferência
function calcularArea($raio) {
    return M_PI * pow($raio, 2);
}

// Função para exibir as informações da circunferência
function exibirInformacoesCircunferencia($raio) {
    $diametro = calcularDiametro($raio);
    $comprimento = calcularComprimento($raio);
    $area = calcularArea($raio);

    echo "Para um raio de $raio:\n";
    echo "Diâmetro da circunferência: $diametro\n";
    echo "Comprimento da circunferência: " . number_format($comprimento, 2) . "\n";
    echo "Área da circunferência: " . number_format($area, 2) . "\n";
}

// Exemplo de uso: raio da circunferência
$raio = 5;
exibirInformacoesCircunferencia($raio);
?>
