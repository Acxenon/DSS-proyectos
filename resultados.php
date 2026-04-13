<?php
require "conexion.php";
include "header.php";

// Total votos
$total = $conexion->query("SELECT COUNT(*) FROM votos")->fetchColumn();

// Resultados
$sql = "SELECT opcion, COUNT(*) as total FROM votos GROUP BY opcion";
$stmt = $conexion->query($sql);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="card shadow p-4">

<h3>Resultados de la encuesta</h3>

<p><strong>Total de votos:</strong> <?php echo $total; ?></p>

<?php foreach($resultados as $fila): 
    $porcentaje = ($total > 0) ? ($fila['total'] / $total) * 100 : 0;
?>

<div class="mb-4">
    <div class="d-flex justify-content-between">
        <strong><?php echo $fila['opcion']; ?></strong>
        <span>
            <?php echo $fila['total']; ?> votos (<?php echo round($porcentaje,2); ?>%)
        </span>
    </div>

    <div class="progress">
        <div class="progress-bar" style="width: <?php echo $porcentaje; ?>%">
        </div>
    </div>
</div>

<?php endforeach; ?>

<a href="bienvenida.php" class="btn btn-secondary mt-3">Volver</a>

</div>

<?php include "footer.php"; ?>
