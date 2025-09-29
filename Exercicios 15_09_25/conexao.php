<?php
// Parâmetros de conexão
$servername = 'localhost';
$banco = 'ctsite'; // Banco de dados solicitado
$username = 'root';
$password = '';

try {
    // Cria o objeto PDO com a string DSN
    $conexao = new PDO("mysql:host=$servername;dbname=$banco;charset=utf8", $username, $password);

    // Define o modo de erro do PDO para lançar exceções
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Define o modo de busca padrão para array associativo (PDO::FETCH_ASSOC)
    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    // Em caso de erro na conexão, exibe a mensagem
    echo "Erro na conexão: " . $e->getMessage();
    die();
}
?>