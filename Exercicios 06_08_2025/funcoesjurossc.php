<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function calcularJurosSimples($capital, $taxaJuros, $tempo) {
    // A fórmula para juros simples é J = C * i * t
    $juros = $capital * $taxaJuros * $tempo;
    return $juros;
}

function calcularJurosCompostos($capital, $taxaJuros, $tempo) {
    // A fórmula para o juros é J = C * ((1 + i)^t - 1)
    $montante = $capital * pow((1 + $taxaJuros), $tempo);
    $juros = $montante - $capital;
    return $juros;
}

?>
</body>
</html>