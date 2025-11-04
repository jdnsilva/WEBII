<?php 
    session_start();
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Clube do livro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="entrada.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro_usuario.php">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="atividades.php">Atividades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="envia_atividade.php">Envio Atividade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="minhas_atividades.php">Minhas Atividades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="minhas_submissoes.php">Minhas Submissões</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="submissoes.php">Avalia Submissões</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="envia_submissao.php">Envia Submissão</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sair.php">Sair</a>
        </li>
      </ul>
      <?php
        if(isset($_SESSION['usuario'])) {
            echo $_SESSION['usuario'];
        }
      ?>
    </div>
  </div>
</nav>