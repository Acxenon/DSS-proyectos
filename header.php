<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Encuesta de Satisfacción</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <span class="navbar-brand">Encuesta de Satisfacción</span>
    <?php if(isset($_SESSION['nombre'])): ?>
      <span class="text-white">👤 <?php echo $_SESSION['nombre']; ?></span>
    <?php endif; ?>
  </div>
</nav>

<div class="container mt-5">
