<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Minhas Atividades</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include 'menu.php';
include 'conexao.php';
//session_start();

$atividades = $conexao->query("SELECT * FROM atividades WHERE usuario_id = {$_SESSION['id']}");

echo "<h2>Minhas Atividades</h2>";
while ($a = $atividades->fetch(PDO::FETCH_ASSOC)) {
    echo "<h3>{$a['titulo']}</h3><p>{$a['comentario']}</p>";
    echo "<h4>Comentários:</h4>";

    $comentarios = $conexao->query("SELECT p.comentario, u.usuario FROM participacoes p JOIN usuarios u ON p.usuario_id = u.id WHERE p.atividade_id = {$a['id']}");
    while ($c = $comentarios->fetch(PDO::FETCH_ASSOC)) {
        echo "<p><b>{$c['usuario']}:</b> {$c['comentario']}</p>";
    }
}
?>
</body>
</html>
