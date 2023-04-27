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
        <h1>Bienvenido</h1>
        <ul>
            <li>1. Ingresar datos usuarios</li>
            <li>2. Suma</li>
            <li>3. Resta</li>
            <li>4. Multiplicación</li>
            <li>5. Division</li>
        </ul>
    </div>
    <form method="post" action="">
        <p>Ingresa la opcion a procesar</p>
        <input type="number" name="opcion" id="opcion">
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
<?php
$opcion = $_POST['opcion'];
switch ($opcion) {
    case 1:
        header('Location: formulario.php');
    break;
    case 2:
        header('Location: suma.php');
    break;
    case 3:
        header('Location: resta.php');
    break;
    case 4:
        header('Location: multiplicacion.php');
    break;
    case 5:
        header('Location: division.php');
    break;
    default:
        echo "Ingresa opcion valida";
    break;
}
?>
