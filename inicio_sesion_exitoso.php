<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Inicio de Sesión Exitoso</title>
</head>
<body>
    <div class="container">
        <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h2>
        <p>Has iniciado sesión con éxito.</p>
        <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
    </div>
</body>
</html>
