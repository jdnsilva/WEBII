<?php
session_start();
require_once 'conexao.php';

// 1. Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    echo "Você precisa estar logado para ver suas tarefas.";
    echo "<p><a href='login_form.php'>Fazer Login</a></p>";
    exit();
}

$id_usuario = $_SESSION['id'];
// Obtém a data de hoje no formato YYYY-MM-DD
$data_hoje = date('Y-m-d'); 

// Comando SQL com PLACEHOLDERS para buscar tarefas do usuário atual com data limite <= hoje
$comando = "SELECT nome_tarefa, data_limite FROM tarefas WHERE id_usuario = ? AND data_limite <= ?";

$sth = $conexao->prepare($comando);
$sth->execute([$id_usuario, $data_hoje]);

$tarefas = $sth->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Tarefas</title>
</head>
<body>
    <h2>Tarefas com Data Limite até Hoje (<?php echo $_SESSION['nome']; ?>)</h2>
    <?php if (count($tarefas) > 0): ?>
        <table border="1">
            <tr>
                <th>Tarefa</th>
                <th>Data Limite</th>
            </tr>
            <?php foreach($tarefas as $tarefa): ?>
                <tr>
                    <td><?php echo htmlspecialchars($tarefa['nome_tarefa']); ?></td>
                    <td><?php echo htmlspecialchars(date('d/m/Y', strtotime($tarefa['data_limite']))); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhuma tarefa encontrada com data limite até hoje.</p>
    <?php endif; ?>
    <hr>
    <p><a href="logout.php">Sair (Logout)</a></p>
</body>
</html>