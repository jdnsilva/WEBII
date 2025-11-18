<?php
// navbar.php já faz session_start e já verifica login
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastrar Novo Produto</h4>
        </div>

        <div class="card-body">

            <form action="salva_produto.php" method="post" class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Nome:</label>
                    <input type="text" name="nome" required class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Data de Validade:</label>
                    <input type="date" name="data_validade" class="form-control">
                </div>

                <div class="col-12">
                    <label class="form-label">Descrição:</label>
                    <textarea name="descricao" class="form-control" rows="3"></textarea>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Quantidade em Estoque:</label>
                    <input type="number" name="quantidade" required class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Estoque Mínimo:</label>
                    <input type="number" name="estoque_minimo" required class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Último Preço:</label>
                    <input type="number" step="0.01" name="ultimo_preco" required class="form-control">
                </div>

                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-success">Salvar Produto</button>
                </div>
            </form>

        </div>
    </div>

    <div class="text-center mt-4">
        <a href="ola.php" class="btn btn-secondary">Voltar ao menu</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

