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

    $comandoSQL = "INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES (NULL, '$email', '$senha_cripto')";

    include 'conexao.php';
    
    $resultado = $conexao->query($comandoSQL);

    if( $resultado ) {
        echo "Usuário cadastrado!";
    } else {
        echo "Erro no cadastro!";
    }
    ?>
</body>
</html>