<?php
header('Content-Type: application/json');

$x = isset($_GET['x']) ? (float) $_GET['x'] : 0.0;
$y = isset($_GET['y']) ? (float) $_GET['y'] : 0.0;

$resultado = $x * $y;

echo json_encode(['resultado' => $resultado]);
?>