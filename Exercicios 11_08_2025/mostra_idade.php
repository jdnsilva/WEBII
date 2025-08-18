<?php
require_once 'aluno.php';
session_start();
$aluno = null;
if (isset($_SESSION['aluno'])) {
    $aluno = unserialize($_SESSION['aluno']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container mt-4">
        <h1>Idade do Aluno</h1>
        <?php if ($aluno): ?>
            <p><?php echo htmlspecialchars($aluno->nome) . ", " . $aluno->idade() . " anos."; ?></p>
        <?php else: ?>
            <p>Nenhum aluno encontrado na sessão.</p>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>