<?php
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Sistema de Notas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
<div class="container">
<a class="navbar-brand" href="index.php">Notas</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">
<?php if(!isset($_SESSION["id"])): ?>
<li class="nav-item"><a class="nav-link" href="register.php">Cadastro</a></li>
<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
<?php else: ?>
<li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
<li class="nav-item"><a class="nav-link" href="progresso.php">Progresso</a></li>
<li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
<?php endif; ?>
</ul>
</div>
</div>
</nav>

<div class="container">

