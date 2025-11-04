<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Participar da Atividade</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include 'menu.php';
include 'conexao.php';

$id = $_GET['id'];
$consulta = $conexao->query("SELECT * FROM atividades WHERE id = $id");
$atividade = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<h2><?php echo $atividade['titulo']; ?></h2>
<p><?php echo $atividade['comentario']; ?></p>

<form action="salva_participacao.php" method="post">
    <input type="hidden" name="atividade_id" value="<?php echo $id; ?>">
    <label>Comentário:</label><br>
    <textarea name="comentario"></textarea><br>
    <input type="submit" value="Enviar Comentário">
</form>
</body>
</html>
