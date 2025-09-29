<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas as Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'tarefa_menu.php'; ?>

    <h2>Todas as Tarefas</h2>
    <?php
        if (isset($_SESSION['tarefas']) && !empty($_SESSION['tarefas'])) {
            echo "<ul class='list-group'>";
            // Percorre o array usando a chave/índice para criar o link de exclusão
            foreach ($_SESSION['tarefas'] as $chave => $tarefa) {
                echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                echo "<div>";
                echo "<strong>" . $tarefa['nome'] . "</strong> <span class='badge bg-secondary'>" . $tarefa['data'] . "</span>";
                echo "</div>";
                echo "<a href='tarefa_apaga.php?id={$chave}' class='btn btn-danger btn-sm'>Apagar</a>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<div class='alert alert-info'>Nenhuma tarefa cadastrada.</div>";
        }
    ?>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>