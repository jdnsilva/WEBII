<?php
session_start();
if(!isset($_SESSION['id'])) {
    header("Location: login_usuario.php");
    exit;
}

include 'conexao.php';

$sql = "SELECT nome, quantidade, estoque_minimo, data_validade FROM produtos";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <style>
        .baixo {
            background-color: red;
            color: white;
            font-weight: bold;
        }
        table {
            border-collapse: collapse;
        }
        td, th {
            padding: 8px;
            border: 1px solid #444;
        }
    </style>
</head>
<body>

<h2>Estoque Atual</h2>

<table>
    <tr>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Validade</th>
    </tr>

    <?php while($p = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $p['nome']; ?></td>

            <!-- SE QUANTIDADE < ESTOQUE MÍNIMO, MOSTRA EM VERMELHO -->
            <td class="<?= ($p['quantidade'] < $p['estoque_minimo']) ? 'baixo' : '' ?>">
                <?= $p['quantidade']; ?>
            </td>

            <td><?= $p['data_validade']; ?></td>
        </tr>
    <?php } ?>
</table>

<br><a href="ola.php">Voltar ao menu</a>

</body>
</html>

