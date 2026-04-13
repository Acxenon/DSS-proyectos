<?php
session_start();
require "conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
$stmt = $conexion->prepare($sql);
$stmt->execute([":usuario" => $usuario]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['usuario_id'] = $user['id'];
    $_SESSION['nombre'] = $user['nombre_completo'];

    header("Location: bienvenida.php");
} else {
    header("Location: login.php?error=1");
}
?>
