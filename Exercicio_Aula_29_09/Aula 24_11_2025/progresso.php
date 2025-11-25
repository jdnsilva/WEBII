<?php include "menu.php"; ?>
<?php require "conn.php";

if(!isset($_SESSION["id"])){
    echo "<div class='alert alert-warning'>Faça login primeiro.</div>";
    include "footer.php";
    exit;
}

$semestre = $_GET['semestre'] ?? '';

$sql = $pdo->prepare("SELECT DISTINCT ano_letivo_semestre FROM disciplinas WHERE usuario_id = ?");
$sql->execute([$_SESSION['id']]);
$semestres = $sql->fetchAll(PDO::FETCH_COLUMN);
?>

<h2>Progresso</h2>

<form method="GET" class="mb-3">
<label>Filtrar por semestre:</label>
<select name="semestre" class="form-select w-25">
<option value="">Todos</option>
<?php foreach($semestres as $s): 
$selected = ($semestre==$s)?"selected":"";
?>
<option value="<?= $s ?>" <?= $selected ?>><?= $s ?></option>
<?php endforeach; ?>
</select>
<button class="btn btn-primary btn-sm mt-2">Filtrar</button>
</form>

<?php
$sqlStr = "SELECT * FROM disciplinas WHERE usuario_id = ?";
$params = [$_SESSION['id']];
if($semestre != ''){
    $sqlStr .= " AND ano_letivo_semestre = ?";
    $params[] = $semestre;
}
$sql = $pdo->prepare($sqlStr);
$sql->execute($params);
$disciplinas = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="table table-bordered">
<thead class="table-dark">
<tr>
<th>Código</th>
<th>Disciplina</th>
<th>C.H.</th>
<th>Nota</th>
<th>% Freq.</th>
<th>Situação</th>
</tr>
</thead>
<tbody>
<?php foreach($disciplinas as $d): ?>
<tr class="<?= ($d['situacao'] != 'Aprovado')?'table-danger':'table-success' ?>">
<td><?= htmlspecialchars($d['codigo']) ?></td>
<td><?= htmlspecialchars($d['descricao']) ?></td>
<td><?= $d['ch'] ?></td>
<td><?= $d['nota'] ?></td>
<td><?= $d['freq_percent'] ?>%</td>
<td><?= htmlspecialchars($d['situacao']) ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

<?php
$total = count($disciplinas);
$aprovadas = count(array_filter($disciplinas, fn($d)=>$d['situacao']=='Aprovado'));
$reprovadas = $total-$aprovadas;
echo "<p>Total: $total | Aprovadas: $aprovadas | Reprovadas: $reprovadas</p>";
?>

<?php include "footer.php"; ?>

