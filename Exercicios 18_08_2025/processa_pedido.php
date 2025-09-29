<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $_SESSION['local']     = isset($_POST['local']) ? $_POST['local'] : 'Não Definido';
    $_SESSION['pao']       = isset($_POST['pao']) ? $_POST['pao'] : 'Não Definido';
    $_SESSION['proteina']  = isset($_POST['proteina']) ? $_POST['proteina'] : 'Não Definida';
    $_SESSION['queijo']    = isset($_POST['queijo']) ? $_POST['queijo'] : 'Não Definido';
    $_SESSION['pagamento'] = isset($_POST['pagamento']) ? $_POST['pagamento'] : 'Não Definido';

    $_SESSION['vegetais'] = isset($_POST['vegetais']) && is_array($_POST['vegetais']) ? $_POST['vegetais'] : [];
    $_SESSION['molhos']   = isset($_POST['molhos']) && is_array($_POST['molhos']) ? $_POST['molhos'] : [];

    header('Location: resumo.php');
    exit();

} else {
    echo "Acesse a página de pedido para montar seu sanduíche!";
    echo "<br><a href='pedido.php'>Ir para Pedido</a>";
}
?>