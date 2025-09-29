<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Novo Usuário</h2>
    <form action="insere.php" method="post">
        <label for="usuario">Usuário (Login):</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="nascimento">Data de Nascimento:</label><br>
        <input type="date" id="nascimento" name="nascimento" required><br><br>

        <label for="cep">CEP:</label><br>
        <input type="text" id="cep" name="cep"><br><br>

        <label for="numero">Número da Casa:</label><br>
        <input type="text" id="numero" name="numero"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>