<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Suma</h1>
    <div>
        <form action="" method="post">
            <p>Ingresa el primer numero</p>
            <input type="number" name="numero1" id="numero1" placeholder="Ingrese el primer numero">
            <p>Ingresa el segundo numero</p>
            <input type="number" name="numero2" id="numero2" placeholder="Ingrese el segundo numero">
        <button type="submit">Sumar</button>
    </form>
    <?php
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];
        $resultado = $n1 + $n2;
        echo "El resultado de la suma es " . $resultado;
    ?>
    </div>
</body>
</html>


