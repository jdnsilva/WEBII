<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senha_cripto = hash('sha256', $senha);

    $comandoSQL = "SELECT `id`, `email` FROM `usuarios` WHERE `email` = '$email' AND `senha` = '$senha_cripto'";

    include 'conexao.php';

    $sth = $conexao->prepare($comandoSQL);
    $sth->execute();

    $resultado = $sth->fetch(PDO::FETCH_ASSOC);

    if( $resultado ) {
        echo "Seja bem vindo!";
        echo $resultado['email'];
        // ajustar a $_SESSION
        session_start();
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['email'] = $resultado['email'];
    } else {
        echo "Usuário não encontrado!";
    }
    ?>
</body>
</html>