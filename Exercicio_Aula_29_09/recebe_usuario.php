<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container mt-4" style="max-width: 500px;">
    <h2>Cadastrar Usuário</h2>

    <form action="salva_usuario.php" class="mt-3">
        <label class="form-label">Nome:</label>
        <input type="text" name="nome" class="form-control">

        <label class="form-label mt-3">E-mail:</label>
        <input type="email" name="email" class="form-control">

        <label class="form-label mt-3">Senha:</label>
        <input type="password" name="senha" class="form-control">

        <button class="btn btn-success mt-3">Cadastrar</button>
    </form>
</div>

</body>
</html>
