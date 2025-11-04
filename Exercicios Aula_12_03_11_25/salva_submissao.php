<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Salvando Submissão</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include 'menu.php';
include 'conexao.php';
//session_start();
$date = new DateTimeImmutable();
$segundos = $date->getTimestamp();
$nomeArquivo = $_FILES['arquivo']['tmp_name'];
$caminho = $segundos . $_FILES['arquivo']['name'];

$path_parts = pathinfo($caminho);
$extensao = $path_parts['extension'];

move_uploaded_file($nomeArquivo, $caminho);

$comandoSQL = "INSERT INTO submissoes (usuario_id, titulo, observacoes, arquivo, data_submissao)
VALUES ({$_SESSION['id']}, '{$_POST['titulo']}', '{$_POST['obs']}', '$caminho', NOW())";

$resultado = $conexao->query($comandoSQL);

if ($resultado) {
    echo "Submissão enviada com sucesso!";
} else {
    echo "Erro ao enviar submissão!";
}
?>
</body>
</html>
