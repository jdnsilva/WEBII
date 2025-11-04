<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Visualizar Submissão</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<body>
<?php
include 'menu.php';
include 'conexao.php';

$id = $_GET['id'];
$consulta = $conexao->query("SELECT * FROM submissoes WHERE id = $id");
$sub = $consulta->fetch(PDO::FETCH_ASSOC);

echo "<h2>{$sub['titulo']}</h2>";
echo "<p>{$sub['observacoes']}</p>";
echo "<a href='{$sub['arquivo']}' target='_blank'>Ver arquivo</a>";

echo "<h3>Avaliações</h3>";
$aval = $conexao->query("SELECT a.comentario, a.aprovado, u.usuario FROM avaliacoes a JOIN usuarios u ON a.usuario_id = u.id WHERE a.submissao_id = $id");

while ($linha = $aval->fetch(PDO::FETCH_ASSOC)) {
    $situacao = $linha['aprovado'] ? "Aprovado" : "Reprovado";
    echo "<p><b>{$linha['usuario']}:</b> $situacao<br>{$linha['comentario']}</p>";
}
?>
</body>
</html>
