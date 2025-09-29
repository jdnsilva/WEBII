<?php
session_start();
require_once 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Comando SQL com PLACEHOLDER (?) para buscar o usuário
$comando = "SELECT id, nome, senha FROM usuarios WHERE usuario = ?";

$sth = $conexao->prepare($comando);
$sth->execute([$usuario]);

// Pega a primeira linha do resultado
$usuario_encontrado = $sth->fetch();

if ($usuario_encontrado && $usuario_encontrado['senha'] === $senha) {
    // Se o usuário foi encontrado e a senha confere
    $_SESSION['id'] = $usuario_encontrado['id'];
    $_SESSION['nome'] = $usuario_encontrado['nome'];
    echo "Login realizado com sucesso! Bem-vindo(a), " . $_SESSION['nome'] . ".";
    echo "<p><a href='mostra_tarefas.php'>Ver minhas Tarefas</a></p>";
} else {
    // Usuário não encontrado ou senha incorreta
    echo "Usuário ou senha inválidos.";
    echo "<p><a href='login_form.php'>Tentar Novamente</a></p>";
}
?>