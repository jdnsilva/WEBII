<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvando usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'menu.php';
    include 'conexao.php';

    $comandoSQL = "INSERT INTO `usuarios` (`id`, `nome_completo`, `usuario`, `email`, `data_nascimento`, `cpf`, `senha`) VALUES (NULL, '{$_GET['nome']}', '{$_GET['usuario']}', '{$_GET['email']}', '{$_GET['nasc']}', '{$_GET['cpf']}', '{$_GET['senha']}')";

    $resultado = $conexao->query($comandoSQL);

    if($resultado) {
        echo "Usuário {$_GET['nome']} cadastrado!";
    } else {
        echo "Erro ao cadastrar o usuário!";
    }
    ?>
</body>
</html>