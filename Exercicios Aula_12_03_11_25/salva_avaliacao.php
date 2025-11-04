<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Salvando Avaliação</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include 'menu.php';
include 'conexao.php';
//session_start();

$comandoSQL = "INSERT INTO avaliacoes (submissao_id, usuario_id, aprovado, comentario, data_avaliacao)
VALUES ({$_POST['submissao_id']}, {$_SESSION['id']}, {$_POST['aprovado']}, '{$_POST['comentario']}', NOW())";

$resultado = $conexao->query($comandoSQL);

if ($resultado) {
    echo "Avaliação salva!";
} else {
    echo "Erro ao salvar avaliação!";
}
?>
</body>
</html>
