<?php
// Conexão com o banco
$conn = new mysqli("localhost", "root", "", "galeria");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verifica se um arquivo foi enviado
if (isset($_FILES['figura']) && $_FILES['figura']['error'] === 0) {
    $nome_arquivo = $_FILES['figura']['name'];
    $temporario = $_FILES['figura']['tmp_name'];

    // Pasta onde as imagens serão salvas
    $pasta = "imagens/";

    // Cria a pasta se não existir
    if (!is_dir($pasta)) {
        mkdir($pasta, 0777, true);
    }

    // Caminho final
    $caminho = $pasta . basename($nome_arquivo);

    // Move o arquivo
    if (move_uploaded_file($temporario, $caminho)) {
        // Insere no banco
        $stmt = $conn->prepare("INSERT INTO imagens (nome_arquivo, caminho) VALUES (?, ?)");
        $stmt->bind_param("ss", $nome_arquivo, $caminho);
        $stmt->execute();
        echo "<p>Imagem enviada com sucesso!</p>";
        echo "<img src='$caminho' width='150px'>";
        echo "<p><a href='galeria.php'>Ver galeria</a></p>";
    } else {
        echo "Erro ao mover o arquivo.";
    }
} else {
    echo "Nenhuma imagem foi enviada.";
}

$conn->close();
?>
