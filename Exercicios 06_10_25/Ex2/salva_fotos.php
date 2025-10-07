<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Envio</title>
</head>
<body>
    <?php
    if (isset($_FILES['figura']) && $_FILES['figura']['error'] == 0) {
        $nome_arquivo = $_FILES['figura']['name'];
        $temporario = $_FILES['figura']['tmp_name'];
        $pasta_destino = 'fotos/';

        // Cria a pasta 'fotos' se não existir
        if (!is_dir($pasta_destino)) {
            mkdir($pasta_destino, 0777, true);
        }

        $caminho_final = $pasta_destino . basename($nome_arquivo);

        if (move_uploaded_file($temporario, $caminho_final)) {
            echo "<p><strong>Arquivo enviado com sucesso!</strong></p>";
            echo "<p>Nome do arquivo: <code>$nome_arquivo</code></p>";
            echo "<p>Imagem enviada:</p>";
            echo "<img src='$caminho_final' alt='Imagem enviada' style='max-width: 400px; border: 1px solid #ccc;'>";
        } else {
            echo "<p style='color: red;'>Erro ao mover o arquivo para a pasta destino.</p>";
        }
    } else {
        echo "<p style='color: red;'>Nenhum arquivo foi enviado ou ocorreu um erro.</p>";
    }
    ?>
</body>
</html>

