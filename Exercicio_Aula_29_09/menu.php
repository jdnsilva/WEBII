<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="mostra.php">Opina+</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" aria-controls="navbarNav" 
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="cadastro_produto.php">Cadastrar Produto</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="mostra.php">Listar Produtos</a>
        </li>

        <?php if (isset($_SESSION['id'])) { ?>
        <li class="nav-item">
          <a class="nav-link text-warning">
            Olá, <?= $_SESSION['nome'] ?>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-danger" href="sair.php">Sair</a>
        </li>
        <?php } ?>

      </ul>
    </div>
  </div>
</nav>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

