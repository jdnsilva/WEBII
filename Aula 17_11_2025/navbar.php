<?php
session_start();
if(!isset($_SESSION['id'])) {
    header("Location: login_usuario.php");
    exit;
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="ola.php">Sistema de Estoque</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="novo_produto.php">Novo Produto</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="listar_estoque.php">Estoque</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="selecionar_produto.php">Movimentações</a>
        </li>

      </ul>

      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <span class="nav-link text-light">
            <?= $_SESSION['email']; ?>
          </span>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="sair.php">Sair</a>
        </li>

      </ul>

    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
