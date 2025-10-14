<?php
include("conexao.php");
session_start();

if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit;
}

$id_reclamacao = $_GET["id"];
$sql = "SELECT * FROM reclamacao WHERE id='$id_reclamacao'";
$resultado = mysqli_query($conexao, $sql);
$reclamacao = mysqli_fetch_assoc($resultado);

if ($_SERVER["REQUEST_METHOD"] == "POST" && $reclamacao["estado"] == "Resolvida") {
    $aprovacao = $_POST["aprovacao"];
    $comentario = $_POST["comentario"];

    $sql_update = "UPDATE reclamacao SET aprovacao='$aprovacao', comentario='$comentario' WHERE id='$id_reclamacao'";
    mysqli_query($conexao, $sql_update);
    echo "Obrigado pelo feedback!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Reclamação</title>
</head>
<body>
    <h2><?php echo $reclamacao["titulo"]; ?></h2>
    <p><?php echo $reclamacao["descricao"]; ?></p>
    <p><b>Estado:</b> <?php echo $reclamacao["estado"]; ?></p>
    <?php if ($reclamacao["foto"]) echo "<img src='".$reclamacao["foto"]."' width='200'><br>"; ?>

    <?php if ($reclamacao["estado"] == "Resolvida") { ?>
    <form method="POST">
        Aprovação: 
        <select name="aprovacao" required>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
        </select><br><br>
        Comentário:<br>
        <textarea name="comentario" required></textarea><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php } ?>

    <br>
    <a href="minhas_reclamacoes.php">Voltar</a>
</body>
</html>
