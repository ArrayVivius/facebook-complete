<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["registro"])) {
        include 'registro.php';
    } elseif (isset($_POST["inicio_sesion"])) {
        include 'inicio_sesion.php';
    }
}

// Redirección si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    header('Location: inicio_sesion_exitoso.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro e Inicio de Sesión</title>
</head>
<body>
    <div class="container">
        <form action="index.php" method="post">
            <input type="submit" name="mostrar_registro" value="Registrarse">
            <input type="submit" name="mostrar_inicio_sesion" value="Iniciar Sesión">
        </form>

        <?php
        if (isset($_POST["mostrar_registro"])) {
            include 'formulario_registro.php';
        } elseif (isset($_POST["mostrar_inicio_sesion"])) {
            include 'formulario_inicio_sesion.php';
        }
        ?>
    </div>
</body>
</html>
