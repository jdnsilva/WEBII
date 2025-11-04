<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Submissões</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<body>
<?php
include 'menu.php';
include 'conexao.php';

$consulta = $conexao->query("SELECT s.id, s.titulo, u.usuario, s.data_submissao FROM submissoes s JOIN usuarios u ON s.usuario_id = u.id");

echo "<h2>Submissões enviadas</h2>";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<p><b>{$linha['titulo']}</b> - por {$linha['usuario']} em {$linha['data_submissao']} ";
    echo "<a href='avalia_submissao.php?id={$linha['id']}'>Avaliar</a></p>";
}
?>
</body>
</html>
