<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nome'])) {
    $_SESSION['nome'] = $_POST['nome'];
    header('Location: mostra_nome.php');
    exit();
} else {
    header('Location: primeira.php');
    exit();
}
?>