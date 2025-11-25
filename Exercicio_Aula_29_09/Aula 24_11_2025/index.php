<?php include "menu.php"; ?>

<div class="text-center mt-5">
    <h1 class="display-5">Sistema de Notas</h1>
    <p class="lead">Gerencie seu histórico e acompanhe seu progresso acadêmico.</p>

    <?php if (!isset($_SESSION["id"])): ?>
        <a href="login.php" class="btn btn-primary btn-lg">Entrar</a>
        <a href="register.php" class="btn btn-outline-light btn-lg">Cadastrar</a>
    <?php else: ?>
        <a href="dashboard.php" class="btn btn-success btn-lg">Ir para Dashboard</a>
    <?php endif; ?>
</div>

<?php include "footer.php"; ?>
