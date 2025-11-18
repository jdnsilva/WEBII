<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Produto</title>
</head>
<body>
<?php include 'navbar.php'; ?>
<?php
include 'conexao.php';
$sql = "SELECT id, nome FROM produtos";
$resultado = $conexao->query($sql);
?>

<div class="container">
    <h2 class="mb-4">Selecionar Produto</h2>

    <form action="movimenta_produto.php" method="get" class="row g-3">

        <div class="col-md-6">
            <label class="form-label">Produto:</label>
            <select name="id_produto" class="form-select" required>
                <?php while($p = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?= $p['id']; ?>"><?= $p['nome']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col-md-6 align-self-end">
            <button class="btn btn-primary">Selecionar</button>
        </div>

    </form>
</div>

</body>
</html>
