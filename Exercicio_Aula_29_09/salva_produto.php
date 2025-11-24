<?php
session_start();
if (!isset($_SESSION['id'])) {
    die("Acesso negado.");
}

$nome = $_GET['nome'];
$id_criador = $_SESSION['id'];

$servername = 'localhost';
$banco = 'opina';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);

$comando = "INSERT INTO `produtos` (`id`, `nome`, `id_criador`)
VALUES (NULL, '$nome', '$id_criador')";

$sth = $conexao->prepare($comando);
$resultado = $sth->execute();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Salvar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container mt-4">

<?php
if ($resultado) {
    echo "<div class='alert alert-success'>Produto cadastrado com sucesso!</div>";
} else {
    echo "<div class='alert alert-danger'>Erro ao cadastrar produto.</div>";
}
?>

</div>
</body>
</html>
