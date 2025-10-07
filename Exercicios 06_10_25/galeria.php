<?php
// Conexão com o banco
$conn = new mysqli("localhost", "root", "", "galeria");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Atualiza curtida, se houver
if (isset($_GET['curtir'])) {
    $id = (int) $_GET['curtir'];
    $conn->query("UPDATE imagens SET curtidas = curtidas + 1 WHERE id = $id");
    header("Location: galeria.php");
    exit();
}

// Busca as imagens mais curtidas primeiro
$resultado = $conn->query("SELECT * FROM imagens ORDER BY curtidas DESC");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Galeria de Imagens</title>
</head>
<body>
    <h2>Galeria de Imagens</h2>
    <p><a href="upload.php">Enviar nova imagem</a></p>
    <hr>

    <?php while ($img = $resultado->fetch_assoc()): ?>
        <div style="margin-bottom: 20px;">
            <img src="<?= $img['caminho'] ?>" width="200px"><br>
            <strong>Curtidas:</strong> <?= $img['curtidas'] ?>
            <form method="get" style="display:inline;">
                <input type="hidden" name="curtir" value="<?= $img['id'] ?>">
                <input type="submit" value="Curtir">
            </form>
        </div>
        <hr>
    <?php endwhile; ?>

</body>
</html>
