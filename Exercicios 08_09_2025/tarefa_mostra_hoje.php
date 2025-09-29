<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas de Hoje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'tarefa_menu.php'; ?>

    <h2>Tarefas Para Hoje (<?php echo date('Y-m-d'); ?>)</h2>
    <?php
        $data_hoje = date('Y-m-d');
        $encontradas = 0;

        if (isset($_SESSION['tarefas']) && !empty($_SESSION['tarefas'])) {
            echo "<ul class='list-group'>";
            foreach ($_SESSION['tarefas'] as $chave => $tarefa) {
                if ($tarefa['data'] == $data_hoje) {
                    echo "<li class='list-group-item d-flex justify-content-between align-items-center list-group-item-success'>";
                    echo "<strong>" . $tarefa['nome'] . "</strong>";
                    echo "<a href='tarefa_apaga.php?id={$chave}' class='btn btn-danger btn-sm'>Apagar</a>";
                    echo "</li>";
                    $encontradas++;
                }
            }
            echo "</ul>";
        }
        
        if ($encontradas == 0) {
            echo "<div class='alert alert-warning mt-3'>Nenhuma tarefa agendada para hoje.</div>";
        }
    ?>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>