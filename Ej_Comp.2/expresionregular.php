<?php
$resultado = "";
$clase_css = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['caracter'] ?? '';
    $char = mb_substr($input, 0, 1);

    if ($char === "") {
        $resultado = "Por favor, ingrese un carácter.";
    } else {
        // Vocales (Mayúsculas, minúsculas y acentuadas)
        if (preg_match('/^[aeiouáéíóúüAEIOUÁÉÍÓÚÜ]$/u', $char)) {
            $resultado = "El carácter '$char' es una **VOCAL**.";
        } 
        // Consonantes (Letras A-Z exceptuando las vocales y tildes anteriores)
        elseif (preg_match('/^[a-zA-ZñÑ]$/u', $char)) {
            $resultado = "El carácter '$char' es una **CONSONANTE**.";
        } 
        // Números (0-9)
        elseif (preg_match('/^[0-9]$/', $char)) {
            $resultado = "El carácter '$char' es un **NÚMERO**.";
        } 
        // Símbolos
        elseif (preg_match('/^[.,;:()""\'\'!¡¿?#$%&]$/', $char)) {
            $resultado = "El carácter '$char' es un **SÍMBOLO**.";
        } 
        // No procesable
        else {
            $resultado = "El carácter ingresado no se puede procesar.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clasificador de Caracteres</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        .mensaje { padding: 15px; border: 1px solid #ccc; background: #f9f9f9; width: fit-content; }
    </style>
</head>
<body>
    <h2>Analizador de Caracteres</h2>
    <form method="post">
        <label>Ingresa un solo carácter:</label>
        <input type="text" name="caracter" maxlength="1" size="3" required autofocus>
        <button type="submit">Analizar</button>
    </form>

    <?php if ($resultado): ?>
        <div class="mensaje">
            <p><?php echo $resultado; ?></p>
        </div>
    <?php endif; ?>
</body>
</html>