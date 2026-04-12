<style>
    .tabla-multi { border-collapse: collapse; width: 200px; margin-top: 20px; font-family: Arial; }
    .tabla-multi td { border: 1px solid #ddd; padding: 8px; text-align: center; }
    .tabla-multi tr:nth-child(even){ background-color: #f2f2f2; }
    .header { background-color: #4CAF50; color: white; font-weight: bold; }
</style>

<form method="POST">
    <label>Ingrese un número (1-10):</label>
    <input type="number" name="numero" min="1" max="10" required>
    <button type="submit">Generar Tabla</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['numero'];
    echo "<table class='tabla-multi'>
            <tr class='header'><td colspan='3'>Tabla del $n</td></tr>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$n x $i</td><td>=</td><td>" . ($n * $i) . "</td></tr>";
    }
    echo "</table>";
}
?>