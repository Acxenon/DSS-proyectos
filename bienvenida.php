<?php
require "conexion.php";
include "header.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];

// Verifica si ya votó
$sql = "SELECT * FROM votos WHERE usuario_id = :id";
$stmt = $conexion->prepare($sql);
$stmt->execute([":id" => $usuario_id]);

$voto = $stmt->fetch();
?>

<div class="card shadow p-4">

<h2>Bienvenido, <?php echo $_SESSION['nombre']; ?></h2>

<?php if($voto): ?>
    <div class="alert alert-info mt-3">
        Ya votaste: <strong><?php echo $voto['opcion']; ?></strong><br>
        Fecha: <?php echo $voto['fecha']; ?>
    </div>
<?php else: ?>

<h4 class="mt-3">Encuesta de satisfacción</h4>

<form method="POST" action="votar.php">
    <select class="form-select mb-3" name="opcion" required>
        <option value="">Seleccione una opción</option>
        <option value="Excelente">Excelente</option>
        <option value="Bueno">Bueno</option>
        <option value="Regular">Regular</option>
        <option value="Malo">Malo</option>
    </select>
    <button class="btn btn-primary">Votar</button>
</form>

<?php endif; ?>

<hr>

<a href="resultados.php" class="btn btn-outline-dark">Ver resultados</a>
<a href="logout.php" class="btn btn-danger">Cerrar sesión</a>

</div>

<?php include "footer.php"; ?>
