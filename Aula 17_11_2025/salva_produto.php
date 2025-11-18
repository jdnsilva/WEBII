<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Produto</title>
</head>
<body>
<?php include 'navbar.php'; ?>
<?php
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data_validade = $_POST['data_validade'];
$quantidade = $_POST['quantidade'];
$estoque_minimo = $_POST['estoque_minimo'];
$ultimo_preco = $_POST['ultimo_preco'];

include 'conexao.php';

$sql = "INSERT INTO produtos 
        (nome, descricao, data_validade, quantidade, estoque_minimo, ultimo_preco)
        VALUES 
        ('$nome', '$descricao', '$data_validade', '$quantidade', '$estoque_minimo', '$ultimo_preco')";

if($conexao->query($sql)) {
    echo "<div class='container'><div class='alert alert-success'>Produto cadastrado!</div>";
} else {
    echo "<div class='container'><div class='alert alert-danger'>Erro ao cadastrar!</div>";
}

echo "<a class='btn btn-primary mt-3' href='novo_produto.php'>Cadastrar outro</a><br>";
echo "<a class='btn btn-secondary mt-3' href='ola.php'>Menu</a></div>";
?>

</body>
</html>
