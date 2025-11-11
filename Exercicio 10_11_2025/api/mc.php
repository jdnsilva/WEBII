<?php
require 'conexao.php';
header('Content-Type: application/json');

$sql = "UPDATE memoria_calculadora SET conteudo = 0.0 WHERE id = " . MEMORIA_ID;

if ($conn->query($sql) === TRUE) {
    echo json_encode(['sucesso' => true, 'nova_memoria' => 0.0]);
} else {
    http_response_code(500);
    echo json_encode(['sucesso' => false, 'erro' => 'Erro ao limpar a memória: ' . $conn->error]);
}
?>