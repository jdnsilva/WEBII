<?php
session_start();

$email = $_GET['email'];
$senha = $_GET['senha'];

$servername = 'localhost';
$banco = 'opina';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);

$comando = "SELECT `id`, `nome`
            FROM `usuarios`
            WHERE `email` = '$email' AND `senha` = '$senha'";

$resultado = $conexao->query($comando);
$linha = $resultado->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verificação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container mt-4">

<?php
if ($linha) {
    $_SESSION['id'] = $linha['id'];
    $_SESSION['nome'] = $linha['nome'];
    echo "<div class='alert alert-success'>Bem vindo, {$linha['nome']}!</div>";
} else {
    echo "<div class='alert alert-danger'>Usuário ou senha incorretos.</div>";
}
?>

</div>
</body>
</html>

