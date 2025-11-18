<?php include 'navbar.php'; ?>
<?php
$id_produto = $_POST['id_produto'];
$aumentar = $_POST['aumentar'];
$diminuir = $_POST['diminuir'];
$novo_preco = $_POST['novo_preco'];
$nova_validade = $_POST['nova_validade'];

$id_usuario = $_SESSION['id'];

include 'conexao.php';

$sql = "SELECT * FROM produtos WHERE id = $id_produto";
$produto = $conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

$quantidade_nova = $produto['quantidade'] + $aumentar - $diminuir;

$alteracoes = "";

if($aumentar > 0)
    $alteracoes .= "Aumentou $aumentar unidades. ";

if($diminuir > 0)
    $alteracoes .= "Diminuiu $diminuir unidades. ";

if($novo_preco != $produto['ultimo_preco'])
    $alteracoes .= "Preço alterado de {$produto['ultimo_preco']} para $novo_preco. ";

if($nova_validade != $produto['data_validade'])
    $alteracoes .= "Validade alterada de {$produto['data_validade']} para $nova_validade. ";

$sqlUpdate = "UPDATE produtos SET 
    quantidade = $quantidade_nova,
    ultimo_preco = '$novo_preco',
    data_validade = '$nova_validade'
    WHERE id = $id_produto";
$conexao->query($sqlUpdate);

$sqlLog = "INSERT INTO alteracoes (id_produto, id_usuario, alteracoes)
           VALUES ($id_produto, $id_usuario, '$alteracoes')";
$conexao->query($sqlLog);

echo "<div class='container'>
        <div class='alert alert-success'>Movimentação registrada!</div>
        <a class='btn btn-primary' href='selecionar_produto.php'>Outra movimentação</a>
        <a class='btn btn-secondary ms-3' href='ola.php'>Menu</a>
      </div>";
?>
