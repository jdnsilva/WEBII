<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Atividades</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include 'menu.php';
include 'conexao.php';

$consulta = $conexao->query("SELECT a.id, a.titulo, u.usuario, a.data_criacao FROM atividades a JOIN usuarios u ON a.usuario_id = u.id");

echo "<h2>Atividades</h2>";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<p><b>{$linha['titulo']}</b> - por {$linha['usuario']} ";
    echo "<a href='participa_atividade.php?id={$linha['id']}'>Participar</a></p>";
}
?>
</body>
</html>
