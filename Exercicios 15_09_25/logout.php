<?php
session_start();

// Destrói todas as variáveis de sessão
$_SESSION = array();

// Se for preciso destruir completamente a sessão, também apaga o cookie de sessão.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destrói a sessão
session_destroy();

echo "Você saiu do sistema com sucesso!";
echo "<p><a href='login_form.php'>Fazer Login Novamente</a></p>";
?>