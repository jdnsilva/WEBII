<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa Salva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'tarefa_menu.php'; ?>
    
    <?php
        $nome = $_GET['nome'];
        $data = $_GET['data'];
        
        // Inicializa o vetor de tarefas na sessão se ele ainda não existir.
        if (!isset($_SESSION['tarefas']) || !is_array($_SESSION['tarefas'])) {
            $_SESSION['tarefas'] = array();
        }

        // Cria o array da nova tarefa
        $nova_tarefa = array(
            'nome' => $nome,
            'data' => $data
        );

        // Adiciona a nova tarefa (Ex. 1.1)
        array_push($_SESSION['tarefas'], $nova_tarefa);

        echo "<div class='alert alert-success'>";
        echo "Tarefa <b>'$nome'</b> para <b>$data</b> salva com sucesso!";
        echo "</div>";
    ?>
    
    <a href="tarefa_recebe.php" class="btn btn-secondary">Cadastrar Outra Tarefa</a>
    <a href="tarefa_mostra_todas.php" class="btn btn-info">Ver Todas</a>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>