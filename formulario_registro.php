<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registro"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sexo = $_POST["sexo"];

    echo "<h2>Registro Exitoso</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Contraseña: (se muestra por simplicidad)</p>";
    echo "<p>Sexo: $sexo</p>";
}
?>

<form action="index.php" method="post">
    <input type="hidden" name="registro" value="1">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo" required>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
    </select>

    <input type="submit" value="Registrarse">
</form>
