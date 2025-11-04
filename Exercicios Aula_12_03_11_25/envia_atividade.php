<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Enviar Atividade</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include 'menu.php';
?>
<form action="salva_atividade.php" method="post">
    <label>Título:</label><br>
    <input type="text" name="titulo"><br>
    <label>Comentário:</label><br>
    <textarea name="comentario"></textarea><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
