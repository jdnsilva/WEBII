<?php
include("conexao.php");
session_start();

if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_reclamante = $_SESSION["id_usuario"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];

    $foto_nome = "";
    if (!empty($_FILES["foto"]["name"])) {
        $foto_nome = "uploads/" . basename($_FILES["foto"]["name"]);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_nome);
    }

    $sql = "INSERT INTO reclamacao (id_reclamante, titulo, descricao, foto, estado)
            VALUES ('$id_reclamante', '$titulo', '$descricao', '$foto_nome', 'Enviada')";

    if (mysqli_query($conexao, $sql)) {
        echo "Reclamação enviada com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Reclamação</title>
</head>
<body>
    <h2>Nova Reclamação</h2>
    <form method="POST" enctype="multipart/form-data">
        Título: <input type="text" name="titulo" required><br><br>
        Descrição:<br>
        <textarea name="descricao" required></textarea><br><br>
        Foto: <input type="file" name="foto"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <a href="minhas_reclamacoes.php">Minhas Reclamações</a> |
    <a href="sair.php">Sair</a>
</body>
</html>
