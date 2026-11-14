<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="post" action="verificar_login.php">
        <label>Correo electrónico:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Contraseña:</label><br>
        <input type="password" name="contrasena" required><br><br>
        
        <button type="submit">Ingresar</button>
    </form>
    <p>¿No tienes cuenta? <a href="registrarse.html">Regístrate aquí</a></p>
</body>
</html>