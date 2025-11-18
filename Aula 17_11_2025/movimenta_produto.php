<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimentar Produto</title>
</head>
<body>

<?php include 'navbar.php'; ?>
<?php
$id_produto = $_GET['id_produto'];
include 'conexao.php';

$sql = "SELECT * FROM produtos WHERE id = $id_produto";
$produto = $conexao->query($sql)->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
    <h2 class="mb-4">Movimentar: <?= $produto['nome']; ?></h2>

    <form action="salva_movimentacao.php" method="post" class="row g-3">
        <input type="hidden" name="id_produto" value="<?= $produto['id']; ?>">

        <div class="col-md-4">
            <label class="form-label">Aumentar:</label>
            <input type="number" name="aumentar" value="0" class="form-control">
        </div>

        <div class="col-md-4">
            <label class="form-label">Diminuir:</label>
            <input type="number" name="diminuir" value="0" class="form-control">
        </div>

        <div class="col-md-4">
            <label class="form-label">Novo Preço:</label>
            <input type="number" step="0.01" name="novo_preco"
                value="<?= $produto['ultimo_preco']; ?>" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Nova Validade:</label>
            <input type="date" name="nova_validade"
                value="<?= $produto['data_validade']; ?>" class="form-control">
        </div>

        <div class="col-md-12">
            <button class="btn btn-success">Salvar</button>
        </div>

    </form>
</div>

</body>
</html>
