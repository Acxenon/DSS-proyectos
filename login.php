<?php include "header.php"; ?>

<div class="card shadow p-4">
<h3>Login</h3>

<?php if(isset($_GET['error'])): ?>
<div class="alert alert-danger">Credenciales incorrectas</div>
<?php endif; ?>

<form method="POST" action="procesar_login.php">
    <input class="form-control mb-3" type="text" name="usuario" placeholder="Usuario" required>
    <input class="form-control mb-3" type="password" name="password" placeholder="Contraseña" required>
    <button class="btn btn-success w-100">Ingresar</button>
</form>

<a href="registro.php" class="btn btn-link mt-2">Crear cuenta</a>
</div>

<?php include "footer.php"; ?>
