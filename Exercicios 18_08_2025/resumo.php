<?php
session_start();

function exibir_opcoes(array $opcoes) {
    if (empty($opcoes)) {
        return "Nenhum selecionado.";
    }
    return implode(', ', $opcoes);
}

if (isset($_SESSION['pao'])) {
    
    $local      = $_SESSION['local'];
    $pao        = $_SESSION['pao'];
    $proteina   = $_SESSION['proteina'];
    $queijo     = $_SESSION['queijo'];
    $pagamento  = $_SESSION['pagamento'];
    $vegetais   = $_SESSION['vegetais'];
    $molhos     = $_SESSION['molhos'];

} else {
    $erro = "Seu carrinho está vazio. Faça um pedido!";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container mt-4">
        <h2>Resumo do seu Pedido</h2>
        
        <?php if (isset($erro)): ?>
            <div class="alert alert-warning" role="alert">
                <?= $erro ?>
            </div>
            <p><a href="pedido.php" class="btn btn-primary">Fazer Pedido</a></p>
        <?php else: ?>
            
            <ul class="list-group">
                <li class="list-group-item"><strong>Forma de consumo:</strong> <?= $local ?></li>
                <li class="list-group-item"><strong>Tipo de Pão:</strong> <?= $pao ?></li>
                <li class="list-group-item"><strong>Proteína:</strong> <?= $proteina ?></li>
                <li class="list-group-item"><strong>Queijo:</strong> <?= $queijo ?></li>
                <li class="list-group-item"><strong>Vegetais:</strong> <?= exibir_opcoes($vegetais) ?></li>
                <li class="list-group-item"><strong>Molhos:</strong> <?= exibir_opcoes($molhos) ?></li>
                <li class="list-group-item"><strong>Método de Pagamento:</strong> <?= $pagamento ?></li>
            </ul>

            <hr>
            <p class="mt-3">Obrigado pelo seu pedido!</p>
            <p><a href="pedido.php" class="btn btn-secondary">Fazer Novo Pedido</a></p>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>