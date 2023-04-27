<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
            <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
            <input type="text" name="telefono" id="telefono" placeholder="Ingrese su telefono">
            <input type="email" name="email" id="email" placeholder="Ingrese su email">
            <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion">
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];

echo "<table> 
<tr>
<td>Nombre</td>
<td>Apellido</td>
<td>Telefono</td>
<td>Email</td>
<td>Direccion</td>
<tr>
<tr>
<td>" .$nombre. "</td>
<td>" .$apellido. "</td>
<td>" .$telefono. "</td>
<td>" .$email. "</td>
<td>" .$direccion. "</td>
</tr>
</table>";