<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $cpf = $_POST["cpf"];
    $nascimento = $_POST["nascimento"];
    $tipo = "usuario";

    $sql = "INSERT INTO usuarios (nome, email, senha, cpf, nascimento, tipo)
            VALUES ('$nome', '$email', '$senha', '$cpf', '$nascimento', '$tipo')";

    if (mysqli_query($conexao, $sql)) {
        echo "Usuário cadastrado com sucesso! <a href='login.php'>Ir para login</a>";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form method="POST" action="">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        CPF: <input type="text" name="cpf" required><br><br>
        Nascimento: <input type="date" name="nascimento" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
