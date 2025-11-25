<?php include "menu.php"; ?>
<?php require "conn.php"; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $sql->execute([$email]);

    if ($sql->rowCount() == 0) {
        echo "<div class='alert alert-danger'>Usuário não encontrado!</div>";
    } else {
        $user = $sql->fetch(PDO::FETCH_ASSOC);

        if (!password_verify($senha, $user["senha"])) {
            echo "<div class='alert alert-danger'>Senha incorreta!</div>";
        } else {
            $_SESSION["id"] = $user["id"];
            $_SESSION["email"] = $user["email"];
            header("Location: dashboard.php");
            exit;
        }
    }
}
?>

<h2>Login</h2>

<form method="POST" class="col-md-6 mx-auto mt-4">
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <button class="btn btn-success">Entrar</button>
</form>

<?php include "footer.php"; ?>
