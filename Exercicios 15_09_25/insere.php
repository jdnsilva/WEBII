<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo dados</title>
</head>
<body>
    <?php
    // Inclui o arquivo de conexão
    require_once 'conexao.php';

    // Recebe os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];

    // Comando SQL com PLACEHOLDERS (?)
    $comando = "INSERT INTO `usuarios` (`usuario`, `senha`, `nome`, `nascimento`, `cep`, `numero`)
                VALUES (?, ?, ?, ?, ?, ?)";

    // Prepara a declaração (Prepared Statement)
    $sth = $conexao->prepare($comando);

    // Executa a declaração, passando os valores em um array na ordem dos '?'
    $resultado = $sth->execute([
        $usuario,
        $senha,
        $nome,
        $nascimento,
        $cep,
        $numero
    ]);

    if($resultado) {
        echo "Usuário '$usuario' cadastrado com sucesso!";
        echo "<p><a href='login_form.php'>Fazer Login</a></p>";
    } else {
        echo "Erro ao salvar o dado!";
    }
    ?>
</body>
</html>