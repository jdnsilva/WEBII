<?php
session_start();
header("Content-Type: application/json");

if(!isset($_SESSION['id'])) {
    echo json_encode(["erro" => "Usuário não autenticado"]);
    exit;
}

include '../conexao.php';

$sql = "SELECT id, nome, quantidade, estoque_minimo, data_validade FROM produtos";
$stmt = $conexao->query($sql);

echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
