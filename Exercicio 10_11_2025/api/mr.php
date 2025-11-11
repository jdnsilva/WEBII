<?php
require 'conexao.php';
header('Content-Type: application/json');

$sql = "SELECT conteudo FROM memoria_calculadora WHERE id = " . MEMORIA_ID;
$resultado = $conn->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    $linha = $resultado->fetch_assoc();
    echo json_encode(['memoria' => (float) $linha['conteudo']]);
} else {
    // Se não encontrar, retorna 0 (ou pode retornar um erro)
    echo json_encode(['memoria' => 0.0]);
}
?>