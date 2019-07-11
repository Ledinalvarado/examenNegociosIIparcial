<?php

require_once 'Cliente.php';
require_once 'Conexion.php';

if (!empty($_POST)) {
    $datos = [];
    $datos[] = $_POST['nombre-completo'] ?? '';
    $datos[] = $_POST['email'] ?? '';
    $cl = new Cliente();
    $cl::llenar($datos);

}
?>


<html>

<form action="index.php" method="post">
    First name:<br>
    <input type="text" value="" placeholder="Nombre" name="nombre"><br>
    Correo:<br>
    <input type="email" name="correo" value="" placeholder="Correo"><br><br>
    <input type="submit" value="Enviar">
</form>

</html>
