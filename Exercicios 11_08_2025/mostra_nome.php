<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Nome</title>
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
    <h1>Nome Salvo</h1>
    <?php
    if (isset($_SESSION['nome'])) {
        echo "<p>O nome salvo na sessão é: <strong>" . htmlspecialchars($_SESSION['nome']) . "</strong></p>";
    } else {
        echo "<p>Nenhum nome encontrado na sessão.</p>";
    }
    ?>
    <a href="encerra_sessao.php" class="btn btn-danger">Encerrar Sessão</a>
</div>
</body>
</html>