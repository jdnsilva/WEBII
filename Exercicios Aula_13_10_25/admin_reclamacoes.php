<?php
include("conexao.php");
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $estado = $_POST["estado"];
    $sql = "UPDATE reclamacao SET estado='$estado' WHERE id='$id'";
    mysqli_query($conexao, $sql);
}

$sql = "SELECT r.*, u.nome FROM reclamacao r JOIN usuarios u ON r.id_reclamante=u.id";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Administração de Reclamações</title>
</head>
<body>
    <h2>Painel do Administrador</h2>
    <a href="sair.php">Sair</a>
    <hr>

    <?php
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<h3>".$linha["titulo"]." (".$linha["nome"].")</h3>";
        echo "<p>".$linha["descricao"]."</p>";
        echo "<b>Estado atual:</b> ".$linha["estado"]."<br>";

        echo "<form method='POST'>
                <input type='hidden' name='id' value='".$linha["id"]."'>
                <select name='estado'>
                    <option>Enviada</option>
                    <option>Atribuída</option>
                    <option>Em andamento</option>
                    <option>Resolvida</option>
                </select>
                <input type='submit' value='Atualizar'>
              </form><hr>";
    }
    ?>
</body>
</html>
