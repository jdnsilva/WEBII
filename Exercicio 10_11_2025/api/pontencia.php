<!DOCTYPE html>
<html lang="pt - BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencia</title>
</head>
<body>
    <?php
// Define o cabeçalho para garantir que a resposta será tratada como JSON
header('Content-Type: application/json');

// Recebe a base da URL (ex: ?base=2)
// O (int) é usado para garantir que o valor seja tratado como número inteiro
$base = (int)$_GET['base'];

// Recebe o expoente da URL (ex: &expoente=3)
$expoente = (int)$_GET['expoente'];

// Calcula a potência: base elevado ao expoente (ex: 2^3 = 8)
// A função pow() do PHP realiza este cálculo
$potencia = pow($base, $expoente);

// Cria um array associativo com a chave 'potencia' e o resultado
$resposta = ['potencia' => $potencia];

// Converte o array PHP em uma string JSON e a imprime (retorna)
echo json_encode($resposta);
?>
</body>
</html>