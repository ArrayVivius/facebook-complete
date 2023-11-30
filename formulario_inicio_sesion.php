<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inicio_sesion"])) {
    $email_login = $_POST["email_login"];
    $password_login = $_POST["password_login"];

    $_SESSION['usuario'] = $email_login;

    header('Location: inicio_sesion_exitoso.php');
    exit();
}
?>

<form action="index.php" method="post">
    <input type="hidden" name="inicio_sesion" value="1">
    <label for="email_login">Correo electrónico:</label>
    <input type="email" id="email_login" name="email_login" required>

    <label for="password_login">Contraseña:</label>
    <input type="password" id="password_login" name="password_login" required>

    <input type="submit" value="Iniciar Sesión">
</form>
