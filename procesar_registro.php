<?php
require "conexion.php";

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre_completo, usuario, password)
        VALUES (:nombre, :usuario, :password)";

$stmt = $conexion->prepare($sql);
$stmt->execute([
    ":nombre" => $nombre,
    ":usuario" => $usuario,
    ":password" => $password
]);

header("Location: login.php");
?>
