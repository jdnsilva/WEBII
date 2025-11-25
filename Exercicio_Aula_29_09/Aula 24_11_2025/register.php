<?php include "menu.php"; ?>
<?php require "conn.php"; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
    $sql->execute([$email]);

    if ($sql->rowCount() > 0) {
        echo "<div class='alert alert-danger'>E-mail já cadastrado!</div>";
    } else {
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = $pdo->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
        $sql->execute([$email, $hash]);

        echo "<div class='alert alert-success'>Cadastro realizado!</div>";
    }
}
?>

<h2>Cadastro</h2>

<form method="POST" class="col-md-6 mx-auto mt-4">
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control" required>
    </div>

    <button class="btn btn-primary">Cadastrar</button>
</form>

<?php include "footer.php"; ?>
