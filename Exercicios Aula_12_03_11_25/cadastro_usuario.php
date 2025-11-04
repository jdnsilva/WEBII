<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'menu.php';
    ?>
    <form action="salva_usuario.php">
        <label for="">Nome completo:</label>
        <input type="text" name='nome'><br>
        <label for="">Usuário:</label>
        <input type="text" name='usuario'><br>
        <label for="">E-mail:</label>
        <input type="email" name='email'><br>
        <label for="">Data de nascimento:</label>
        <input type="date" name='nasc'><br>
        <label for="">CPF:</label>
        <input type="text" name='cpf'><br>
        <label for="">Senha:</label>
        <input type="password" name='senha'><br>
        <input type="submit">
    </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>