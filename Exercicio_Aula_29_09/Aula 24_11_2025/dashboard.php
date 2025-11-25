<?php include "menu.php"; ?>
<?php require "conn.php";

if(!isset($_SESSION["id"])){
    echo "<div class='alert alert-warning'>Faça login primeiro.</div>";
    include "footer.php";
    exit;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $historico = $_POST["historico"];
    $linhas = explode("\n", $historico);

    foreach($linhas as $linha){
        $linha = trim($linha);
        if(empty($linha)) continue;

        $cols = preg_split('/\s+/', $linha);
        if(count($cols) < 9) continue;

        $ano_letivo_semestre = $cols[0];
        $periodo_curso = intval($cols[1]);
        $diario = $cols[2];
        $codigo = $cols[3];
        $descricao = implode(' ', array_slice($cols,4,count($cols)-8));
        $ch = intval($cols[count($cols)-5]);
        $nota = floatval(str_replace(',', '.', $cols[count($cols)-4]));
        $freq_percent = floatval(str_replace(',', '.', $cols[count($cols)-3]));
        $situacao = $cols[count($cols)-1];

        $sql = $pdo->prepare("INSERT INTO disciplinas 
        (usuario_id, ano_letivo_semestre, periodo_curso, diario, codigo, descricao, ch, nota, freq_percent, situacao)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->execute([$_SESSION['id'], $ano_letivo_semestre, $periodo_curso, $diario, $codigo, $descricao, $ch, $nota, $freq_percent, $situacao]);
    }
    echo "<div class='alert alert-success'>Histórico salvo com sucesso!</div>";
}
?>

<h2>Enviar Histórico</h2>
<form method="POST" class="mt-3">
<div class="mb-3">
<label>Copie e cole seu histórico do SUAP:</label>
<textarea name="historico" rows="12" class="form-control" required></textarea>
</div>
<button class="btn btn-primary">Salvar</button>
</form>

<?php include "footer.php"; ?>
