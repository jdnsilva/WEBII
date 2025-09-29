<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Acesso ao Sistema</h2>
    <form action="login.php" method="post">
        <label for="usuario">Usuário (Login):</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Entrar">
    </form>
    <hr>
    <p>Ainda não tem conta? <a href="form.php">Cadastre-se aqui</a></p>
</body>
</html>