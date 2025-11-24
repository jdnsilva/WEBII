<?php
session_start();

$servername = 'localhost';
$banco = 'opina';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);

$comando = "SELECT * FROM produtos";
$resultado = $conexao->query($comando);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container mt-4">
<h2>Produtos Cadastrados</h2>

<table class="table table-striped mt-3">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Ação</th>
</tr>

<?php while($linha = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
    <td><?= $linha['id'] ?></td>
    <td><?= $linha['nome'] ?></td>
    <td>
        <form action="cadastro_comentario.php">
            <input type="hidden" value="<?= $linha['id'] ?>" name="id_produto">
            <button class="btn btn-warning btn-sm">Comentar</button>
        </form>
    </td>
</tr>
<?php } ?>

</table>

</div>
</body>
</html>
