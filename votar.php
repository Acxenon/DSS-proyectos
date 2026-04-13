<?php
session_start();
require "conexion.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$opcion = $_POST['opcion'];

// Evita doble voto
$sql = "SELECT id FROM votos WHERE usuario_id = :id";
$stmt = $conexion->prepare($sql);
$stmt->execute([":id" => $usuario_id]);

if ($stmt->fetch()) {
    header("Location: bienvenida.php");
    exit();
}

// Inserta voto
$sql = "INSERT INTO votos (usuario_id, opcion)
        VALUES (:usuario_id, :opcion)";

$stmt = $conexion->prepare($sql);
$stmt->execute([
    ":usuario_id" => $usuario_id,
    ":opcion" => $opcion
]);

header("Location: resultados.php");
?>
