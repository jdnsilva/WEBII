<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .baixo {
            background-color: red !important;
            color: white !important;
            font-weight: bold !important;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>
<?php
include 'conexao.php';

$sql = "SELECT nome, quantidade, estoque_minimo, data_validade FROM produtos";
$resultado = $conexao->query($sql);
?>

<div class="container mt-4">

    <h2 class="mb-4 text-center">📦 Estoque Atual</h2>

    <table class="table table-bordered table-striped text-center shadow-sm">
        <thead class="table-primary">
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Validade</th>
            </tr>
        </thead>

        <tbody>
            <?php while($p = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?= $p['nome']; ?></td>

                <td class="<?= ($p['quantidade'] < $p['estoque_minimo']) ? 'baixo' : '' ?>">
                    <?= $p['quantidade']; ?>
                </td>

                <td><?= $p['data_validade']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="ola.php" class="btn btn-secondary">Voltar ao menu</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
