<?php
session_start();
$id_produto = $_GET['id_produto'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Comentar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container mt-4" style="max-width: 500px;">
<h2>Novo Comentário</h2>

<form action="salva_comentario.php" class="mt-3">

    <input type="hidden" name="id_produto" value="<?= $id_produto ?>">

    <label class="form-label">Comentário:</label>
    <textarea name="comentario" class="form-control" rows="5"></textarea>

    <button class="btn btn-success mt-3">Salvar Comentário</button>
</form>

</div>
</body>
</html>
