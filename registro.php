<?php include "header.php"; ?>

<div class="card shadow p-4">
<h3 class="mb-3">Registro</h3>

<form method="POST" action="procesar_registro.php">
    <input class="form-control mb-3" type="text" name="nombre" placeholder="Nombre completo" required>
    <input class="form-control mb-3" type="text" name="usuario" placeholder="Usuario o correo" required>
    <input class="form-control mb-3" type="password" name="password" placeholder="Contraseña" required>
    <button class="btn btn-primary w-100">Registrarse</button>
</form>

<a href="login.php" class="btn btn-link mt-2">Ir a login</a>
</div>

<?php include "footer.php"; ?>
