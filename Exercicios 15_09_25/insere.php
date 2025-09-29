<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <?php
        require_once 'conexao.php';

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $nascimento = $_POST['nascimento'];
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];

        $comando = "INSERT INTO `usuarios` (`usuario`, `senha`, `nome`, `nascimento`, `cep`, `numero`)
                    VALUES (?, ?, ?, ?, ?, ?)";

        $sth = $conexao->prepare($comando);

        $resultado = $sth->execute([
            $usuario,
            $senha,
            $nome,
            $nascimento,
            $cep,
            $numero
        ]);

        if($resultado) {
            echo '<div class="alert alert-success" role="alert">';
            echo "Usuário '$usuario' cadastrado com sucesso!";
            echo '</div>';
            echo '<p><a href="login_form.php" class="btn btn-success">Fazer Login</a></p>';
        } else {
            echo '<div class="alert alert-danger" role="alert">';
            echo "Erro ao salvar o dado!";
            echo '</div>';
            echo '<p><a href="form.php" class="btn btn-secondary">Tentar Novamente</a></p>';
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>