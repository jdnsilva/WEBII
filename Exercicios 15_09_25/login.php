<?php
session_start();
require_once 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$comando = "SELECT id, nome, senha FROM usuarios WHERE usuario = ?";

$sth = $conexao->prepare($comando);
$sth->execute([$usuario]);

$usuario_encontrado = $sth->fetch();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <?php
        if ($usuario_encontrado && $usuario_encontrado['senha'] === $senha) {
            $_SESSION['id'] = $usuario_encontrado['id'];
            $_SESSION['nome'] = $usuario_encontrado['nome'];
            echo '<div class="alert alert-success" role="alert">';
            echo "Login realizado com sucesso! Bem-vindo(a), " . $_SESSION['nome'] . ".";
            echo '</div>';
            echo '<p><a href="mostra_tarefas.php" class="btn btn-primary">Ver minhas Tarefas</a></p>';
        } else {
            echo '<div class="alert alert-danger" role="alert">';
            echo "Usuário ou senha inválidos.";
            echo '</div>';
            echo '<p><a href="login_form.php" class="btn btn-warning">Tentar Novamente</a></p>';
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>