<form method="POST">
    <input type="number" step="any" name="base" placeholder="Base (Ej: 5.5)" required>
    <input type="number" name="exponente" placeholder="Exponente (Entero)" required>
    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = $_POST['base'];
    $exp = (int)$_POST['exponente'];
    $resultado = 1;

    // Lógica para potencias (incluyendo exponente 0 y negativos básicos)
    for ($i = 0; $i < abs($exp); $i++) {
        $resultado *= $base;
    }

    if ($exp < 0) $resultado = 1 / $resultado;

    echo "<h3>Resultado: $base <sup>$exp</sup> = $resultado</h3>";
}
?>