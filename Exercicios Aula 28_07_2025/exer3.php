<?php
// Recebe o nome enviado pelo formulário
$raio = $_POST['raio'];
$area = pi() * pow($raio, 2);

echo "<h1>Raio: $area!</h1>";
?>  