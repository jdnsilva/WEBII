<?php
    // Inicia a sessão 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // Obtém o total para o menu (Ex. 2)
    $total_tarefas = count($_SESSION['tarefas'] ?? []);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand">Tarefas</span>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="tarefa_mostra_hoje.php">Hoje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tarefa_recebe.php">Nova</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tarefa_mostra_todas.php">Todas</a>
                </li>
            </ul>
        </div>
        <span class="navbar-text text-white me-3">
            Total: <?php echo $total_tarefas; ?>
        </span>
        <a href="apaga.php" class="btn btn-outline-light">Apagar Sessão</a>
    </div>
</nav>
<div class="container mt-4">