<?php
$servidor = "localhost";
$usuario = "root"; // Substitua pelo seu usuário do MySQL
$senha = "";       // Substitua pela sua senha do MySQL
$banco = "db_calculadora";

// Conexão com o banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    // Retorna um erro JSON se a conexão falhar
    header('Content-Type: application/json');
    http_response_code(500);
    die(json_encode(['erro' => 'Falha na conexão com o banco de dados: ' . $conn->connect_error]));
}

// Configura para usar UTF-8
$conn->set_charset("utf8");

// Constante para o ID da memória (usaremos 1)
define('MEMORIA_ID', 1);

// Função para fechar a conexão no final
function fecharConexao() {
    global $conn;
    $conn->close();
}

// Garante que a conexão seja fechada ao terminar o script
register_shutdown_function('fecharConexao');

?>