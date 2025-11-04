<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Enviar Submissão</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include 'menu.php';
?>
<form action="salva_submissao.php" method="post" enctype="multipart/form-data">
    <label>Título do trabalho:</label><br>
    <input type="text" name="titulo"><br>
    <label>Observações:</label><br>
    <textarea name="obs"></textarea><br>
    <label>Arquivo (PDF ou TXT):</label><br>
    <input type="file" name="arquivo"><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
