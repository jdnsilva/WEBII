<?php
// Recebe o nome enviado pelo formulário
$cap = $_GET['cap'];
$tx = $_GET['tx'];
$tp = $_GET['tp'];
$juros = $cap * $tx * $tp;

echo "<h1>Resultado: $juros!</h1>";
?>  