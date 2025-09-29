<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <h2 class="card-title text-center">Cadastro de Novo Usuário</h2>
            <form action="insere.php" method="post">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuário (Login):</label>
                    <input type="text" id="usuario" name="usuario" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" id="senha" name="senha" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nascimento" class="form-label">Data de Nascimento:</label>
                    <input type="date" id="nascimento" name="nascimento" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="cep" class="form-label">CEP:</label>
                    <input type="text" id="cep" name="cep" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="numero" class="form-label">Número da Casa:</label>
                    <input type="text" id="numero" name="numero" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>