<?php
header('Content-Type: application/json');

$valor = isset($_GET['valor']) ? (float) $_GET['valor'] : 0.0;

if ($valor < 0) {
    http_response_code(400); // Bad Request
    echo json_encode(['erro' => 'Raiz quadrada de número negativo!']);
} else {
    $resultado = sqrt($valor);
    echo json_encode(['resultado' => $resultado]);
}
?>