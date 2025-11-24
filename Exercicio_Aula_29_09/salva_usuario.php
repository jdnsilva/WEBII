<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Salvar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container mt-4">

<?php
$servername = 'localhost';
$banco = 'opina';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

$comando = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`)
VALUES (NULL, '$nome', '$email', '$senha')";

$sth = $conexao->prepare($comando);
$resultado = $sth->execute();

if ($resultado) {
    echo "<div class='alert alert-success'>Usuário ($nome) cadastrado!</div>";
} else {
    echo "<div class='alert alert-danger'>Erro ao cadastrar usuário.</div>";
}
?>
</div>
</body>
</html>


