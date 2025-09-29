<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'tarefa_menu.php'; ?>
    
    <h2>Nova Tarefa</h2>
    <form action="tarefa_salva.php" class="row g-3">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome da Tarefa:</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="col-md-6">
            <label for="data" class="form-label">Data da Tarefa:</label>
            <input type="date" class="form-control" name="data" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar Tarefa</button>
        </div>
    </form>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>