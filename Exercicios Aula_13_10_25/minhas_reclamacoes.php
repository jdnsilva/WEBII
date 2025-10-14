<?php
include("conexao.php");
session_start();

if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION["id_usuario"];
$sql = "SELECT * FROM reclamacao WHERE id_reclamante='$id'";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minhas Reclamações</title>
</head>
<body>
    <h2>Minhas Reclamações</h2>
    <a href="cadastro_reclamacao.php">Nova Reclamação</a> |
    <a href="sair.php">Sair</a>
    <hr>

    <?php
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<h3>" . $linha["titulo"] . "</h3>";
        echo "<p>" . $linha["descricao"] . "</p>";
        echo "<p><b>Estado:</b> " . $linha["estado"] . "</p>";
        if ($linha["foto"]) {
            echo "<img src='" . $linha["foto"] . "' width='150'><br>";
        }
        echo "<a href='visualizar_reclamacao.php?id=" . $linha["id"] . "'>Ver Detalhes</a><hr>";
    }
    ?>
</body>
</html>
