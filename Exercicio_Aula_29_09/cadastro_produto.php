<?php
session_start();
if (!isset($_SESSION['id'])) {
    die("Acesso negado.");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container mt-4" style="max-width: 500px;">
    <h2>Cadastrar Produto</h2>

    <form action="salva_produto.php" class="mt-3">
        <label class="form-label">Nome do produto:</label>
        <input type="text" name="nome" class="form-control">

        <button class="btn btn-primary mt-3">Salvar</button>
    </form>
</div>

</body>
</html>

