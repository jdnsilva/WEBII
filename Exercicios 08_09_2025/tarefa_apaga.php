<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'tarefa_menu.php'; ?>

    <?php
        $id_para_apagar = $_GET['id'] ?? null;
        $mensagem_tipo = 'danger';
        $mensagem = 'Nenhuma tarefa para apagar ou ID não fornecido.';

        if (isset($_SESSION['tarefas']) && $id_para_apagar !== null) {
            if (isset($_SESSION['tarefas'][$id_para_apagar])) {
                $nome_tarefa = $_SESSION['tarefas'][$id_para_apagar]['nome'];
                
                // Remove o elemento do array
                unset($_SESSION['tarefas'][$id_para_apagar]);
                
                // Reorganiza os índices (para garantir que a contagem e os IDs futuros funcionem)
                $_SESSION['tarefas'] = array_values($_SESSION['tarefas']);
                
                $mensagem = "Tarefa <b>'$nome_tarefa'</b> apagada com sucesso!";
                $mensagem_tipo = 'success';
            } else {
                $mensagem = "ID de tarefa inválido ou inexistente.";
            }
        }
        
        echo "<div class='alert alert-$mensagem_tipo'>$mensagem</div>";
    ?>
    
    <a href="tarefa_mostra_todas.php" class="btn btn-secondary">Voltar para a lista</a>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>