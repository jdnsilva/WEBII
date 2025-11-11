<?php
require 'conexao.php';
header('Content-Type: application/json');

$valor = isset($_GET['valor']) ? (float) $_GET['valor'] : 0.0;

// Atualiza a memória subtraindo o novo valor
$sql = "UPDATE memoria_calculadora SET conteudo = conteudo - ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("di", $valor, $id_memoria);
$id_memoria = MEMORIA_ID;

if ($stmt->execute()) {
    // Após a atualização, lê o novo valor da memória
    $sql_leitura = "SELECT conteudo FROM memoria_calculadora WHERE id = " . MEMORIA_ID;
    $resultado = $conn->query($sql_leitura)->fetch_assoc();
    $nova_memoria = (float) $resultado['conteudo'];
    
    echo json_encode(['sucesso' => true, 'nova_memoria' => $nova_memoria]);
} else {
    http_response_code(500);
    echo json_encode(['sucesso' => false, 'erro' => 'Erro ao subtrair da memória: ' . $stmt->error]);
}
$stmt->close();
?>