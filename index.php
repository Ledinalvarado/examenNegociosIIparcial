<?php
require_once 'Cliente.php';

if (!empty($_POST)){
    //Cliente::llenar($_POST['nombre']);
    $datos = [];
    $datos = $_POST['nombre'] ?? '';
    $datos = $_POST['correo'] ?? '';
    $objcliente = new Cliente();
    $objcliente::llenar($datos);
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
