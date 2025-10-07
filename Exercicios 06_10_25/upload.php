<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Envio de Imagem</title>
</head>
<body>
    <h2>Enviar imagem</h2>
    <form action="salva_imagem.php" method="post" enctype="multipart/form-data">
        <input type="file" name="figura" required><br><br>
        <input type="submit" value="Enviar">
    </form>
    <p><a href="galeria.php">Ver galeria</a></p>
</body>
</html>
