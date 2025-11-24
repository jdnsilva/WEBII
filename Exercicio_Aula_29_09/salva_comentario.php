<?php
session_start();

$id_produto = $_GET['id_produto'];
$comentario = $_GET['comentario'];
$id_comentador = $_SESSION['id'];

$servername = 'localhost';
$banco = 'opina';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);

$comando = "INSERT INTO comentarios (`comentario`, `id_produto`, `id_comentador`)
VALUES ('$comentario', '$id_produto', '$id_comentador')";

$sth = $conexao->prepare($comando);
$resultado = $sth->execute();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Comentário Salvo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container mt-4">

<?php
if ($resultado) {
    echo "<div class='alert alert-success'>Comentário salvo!</div>";
} else {
    echo "<div class='alert alert-danger'>Erro ao salvar comentário.</div>";
}
?>

</div>
</body>
</html>
