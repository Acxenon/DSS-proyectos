<?php
$notas = array(
    "Luis Armas" => array("Tarea" => 9.0, "Investigación" => 8.5, "Parcial" => 7.0),
    "Maria Lopez" => array("Tarea" => 4.8, "Investigación" => 9.0, "Parcial" => 8.5),
    "Juan Perez" => array("Tarea" => 6.0, "Investigación" => 7.0, "Parcial" => 5.5)
);
?>

<style>
    .estudiantes { width: 80%; border-collapse: collapse; margin: 20px auto; font-family: sans-serif; }
    .estudiantes th, .estudiantes td { border: 1px solid #444; padding: 10px; text-align: center; }
    .estudiantes th { background-color: #333; color: white; }
    .promedio-celda { font-weight: bold; background-color: #e8f5e9; font-size: 1.1em; }
</style>

<table class="estudiantes">
    <thead>
        <tr>
            <th>Nombre del Alumno</th>
            <th>Tarea (50%)</th>
            <th>Investigación (30%)</th>
            <th>Parcial (20%)</th>
            <th>Promedio Final</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($notas as $nombre => $actividades): 
            $promedio = ($actividades['Tarea'] * 0.50) + 
                        ($actividades['Investigación'] * 0.30) + 
                        ($actividades['Parcial'] * 0.20);
        ?>
        <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $actividades['Tarea']; ?></td>
            <td><?php echo $actividades['Investigación']; ?></td>
            <td><?php echo $actividades['Parcial']; ?></td>
            <td class="promedio-celda"><?php echo number_format($promedio, 2); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>