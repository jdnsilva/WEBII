<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Minhas Submissões</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include 'menu.php';
include 'conexao.php';
//session_start();

$consulta = $conexao->query("SELECT * FROM submissoes WHERE usuario_id = {$_SESSION['id']}");

echo "<h2>Minhas Submissões</h2>";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<p><b>{$linha['titulo']}</b> - <a href='visualiza_submissao.php?id={$linha['id']}'>Ver detalhes</a></p>";
}
?>
</body>
</html>
