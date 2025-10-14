<?php
include("conexao.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Verifica usuário comum
    $sql_usuario = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $res_usuario = mysqli_query($conexao, $sql_usuario);

    // Verifica administrador
    $sql_admin = "SELECT * FROM admin WHERE usuario='$email' AND senha='$senha'";
    $res_admin = mysqli_query($conexao, $sql_admin);

    if (mysqli_num_rows($res_usuario) == 1) {
        $usuario = mysqli_fetch_assoc($res_usuario);
        $_SESSION["id_usuario"] = $usuario["id"];
        $_SESSION["nome"] = $usuario["nome"];
        $_SESSION["tipo"] = "usuario";
        header("Location: minhas_reclamacoes.php");
        exit;
    } elseif (mysqli_num_rows($res_admin) == 1) {
        $admin = mysqli_fetch_assoc($res_admin);
        $_SESSION["admin"] = $admin["usuario"];
        $_SESSION["tipo"] = "admin";
        header("Location: admin_reclamacoes.php");
        exit;
    } else {
        echo "<p style='color:red'>Usuário ou senha incorretos!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        E-mail (usuário) ou Usuário (admin): <input type="text" name="email" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        <input type="submit" value="Entrar">
    </form>
    <p><a href="cadastro_usuario.php">Cadastrar novo usuário</a></p>
</body>
</html>
