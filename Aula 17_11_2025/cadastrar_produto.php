<?php include 'navbar.php'; ?>

<div class="container">
    <h2 class="mb-4">Cadastrar Novo Produto</h2>

    <form action="salva_produto.php" method="post" class="row g-3">

        <div class="col-md-6">
            <label class="form-label">Nome:</label>
            <input type="text" name="nome" required class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Validade:</label>
            <input type="date" name="data_validade" class="form-control">
        </div>

        <div class="col-12">
            <label class="form-label">Descrição:</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="col-md-4">
            <label class="form-label">Quantidade:</label>
            <input type="number" name="quantidade" required class="form-control">
        </div>

        <div class="col-md-4">
            <label class="form-label">Estoque mínimo:</label>
            <input type="number" name="estoque_minimo" required class="form-control">
        </div>

        <div class="col-md-4">
            <label class="form-label">Preço:</label>
            <input type="number" step="0.01" name="ultimo_preco" required class="form-control">
        </div>

        <div class="col-12">
            <button class="btn btn-success">Salvar</button>
        </div>

    </form>
</div>
