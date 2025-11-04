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

    if(str_contains($_GET['usuario'], '@')) {
        $comandoSQL = "SELECT `id`, `usuario` FROM `usuarios` WHERE `email` = '{$_GET['usuario']}' AND `senha` = '{$_GET['senha']}'";
    } else {
        // usuário fornecido
        $comandoSQL = "SELECT `id`, `usuario` FROM `usuarios` WHERE `usuario` = '{$_GET['usuario']}' AND `senha` = '{$_GET['senha']}'";
    }

    $preparado = $conexao->prepare($comandoSQL);
    $preparado->execute();

    $vetor_resultado = $preparado->fetch(PDO::FETCH_ASSOC);

    if($vetor_resultado) {
       // session_start();
        $_SESSION['id'] = $vetor_resultado['id'];
        $_SESSION['usuario'] = $vetor_resultado['usuario'];
        echo "Bem vindo, {$vetor_resultado['usuario']}!";
    } else {
        echo "Usuário ou senha inválidos!";
    }
    
    ?>
</body>
</html>