
<?php
// Função para gerar vetor de números aleatórios
function gerarVetor($tamanho, $min, $max) {
    $vetor = [];
    for ($i = 0; $i < $tamanho; $i++) {
        $vetor[] = rand($min, $max);
    }
    return $vetor;
}

$tamanho = 10; // Tamanho dos vetores
$min = 1; // Valor mínimo dos números aleatórios
$max = 20; // Valor máximo dos números aleatórios

$vetor1 = gerarVetor($tamanho, $min, $max);
$vetor2 = gerarVetor($tamanho, $min, $max);

echo "Vetor 1: " . implode(", ", $vetor1) . "\n";
echo "Vetor 2: " . implode(", ", $vetor2) . "\n";

$naoComuns = array_merge(array_diff($vetor1, $vetor2), array_diff($vetor2, $vetor1));


$naoComuns = array_unique($naoComuns);


echo "Números não comuns aos dois vetores: " . implode(", ", $naoComuns) . "\n";
?>
