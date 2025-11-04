<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Avaliar Submissão</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include 'menu.php';
include 'conexao.php';

$id = $_GET['id'];
$consulta = $conexao->query("SELECT * FROM submissoes WHERE id = $id");
$dados = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<h2><?php echo $dados['titulo']; ?></h2>
<p><?php echo $dados['observacoes']; ?></p>
<p><a href="<?php echo $dados['arquivo']; ?>" target="_blank">Ver arquivo</a></p>

<form action="salva_avaliacao.php" method="post">
    <input type="hidden" name="submissao_id" value="<?php echo $id; ?>">
    <label>Aprovar?</label>
    <select name="aprovado">
        <option value="1">Sim</option>
        <option value="0">Não</option>
    </select><br>
    <label>Comentário:</label><br>
    <textarea name="comentario"></textarea><br>
    <input type="submit" value="Salvar Avaliação">
</form>
</body>
</html>
