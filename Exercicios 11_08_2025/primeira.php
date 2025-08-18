<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Página</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sessão</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <?php if (isset($_SESSION['nome'])): ?>
                        <a class="nav-link"><?php echo "Olá, " . htmlspecialchars($_SESSION['nome']); ?></a>
                    <?php else: ?>
                        <a class="nav-link" href="primeira.php">Entrar</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h1>Bem-vindo!</h1>
    <form action="salva_nome.php" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Digite seu nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Nome</button>
    </form>
</div>
</body>
</html>