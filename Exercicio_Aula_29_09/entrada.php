<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5" style="max-width: 500px;">
    <h2>Login</h2>

    <form action="recebe_entrada.php" class="mt-3">
        <label class="form-label">E-mail:</label>
        <input type="email" name="email" class="form-control">

        <label class="form-label mt-3">Senha:</label>
        <input type="password" name="senha" class="form-control">

        <button class="btn btn-primary mt-3">Entrar</button>
        <a href="recebe_usuario.php" class="btn btn-secondary mt-3">Cadastrar Usuário</a>
    </form>
</div>

</body>
</html>
