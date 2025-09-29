<?php
session_start();
require_once 'conexao.php';

if (!isset($_SESSION['id'])) {
    header("Location: login_form.php");
    exit();
}

$id_usuario = $_SESSION['id'];
$data_hoje = date('Y-m-d');

$comando = "SELECT nome_tarefa, data_limite FROM tarefas WHERE id_usuario = ? AND data_limite <= ? ORDER BY data_limite ASC";

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tarefas com Data Limite até Hoje</h2>
        <p class="lead">Bem-vindo(a), <?php echo $_SESSION['nome']; ?>!</p>

        <?php if (count($tarefas) > 0): ?>
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Tarefa</th>
                        <th>Data Limite</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tarefas as $tarefa): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($tarefa['nome_tarefa']); ?></td>
                            <td><?php echo htmlspecialchars(date('d/m/Y', strtotime($tarefa['data_limite']))); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-info" role="alert">
                Nenhuma tarefa encontrada com data limite até hoje.
            </div>
        <?php endif; ?>
        
        <a href="logout.php" class="btn btn-danger mt-3">Sair (Logout)</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>