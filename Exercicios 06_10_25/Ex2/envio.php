<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Imagem</title>
</head>
<body>
    <h1>Envio de Imagem</h1>
    <form action="salva_fotos.php" method="post" enctype="multipart/form-data">
        <label for="figura">Escolha a imagem:</label>
        <input type="file" name="figura" id="figura" required><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
