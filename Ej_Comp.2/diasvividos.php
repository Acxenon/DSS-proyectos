<?php
$dias_vividos = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_input = $_POST['fecha_nacimiento'];

    if (!empty($fecha_input)) {
        try {
            $nacimiento = new DateTime($fecha_input);
            $hoy = new DateTime(); // Fecha actual

            if ($nacimiento > $hoy) {
                $error = "Elige una fecha antigua.";
            } else {
                $diferencia = $nacimiento->diff($hoy);
                $dias_vividos = $diferencia->format('%a');
            }
        } catch (Exception $e) {
            $error = "Formato de fecha no válido.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Vida</title>
</head>
<body>
    <h2>¿Cuántos días has vivido?</h2>
    
    <form method="post">
        <label for="fecha">Introduce tu fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha" required>
        <button type="submit">Calcular</button>
    </form>

    <hr>

    <?php if ($dias_vividos !== null): ?>
        <h3>Has vivido **<?php echo number_format($dias_vividos); ?>** días hasta hoy.</h3>
    <?php elseif ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>