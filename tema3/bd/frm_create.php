<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'conexion.php';
    $sql = "SELECT id,ciudad  FROM ciudades";
    $resultado = mysqli_query($conn, $sql);
    ?>

    <form action="create.php" method="POST">
        <label for="nobre">Nombre</label>
        <input type="text" name="nombre"> <br>
        <label for="ciudad">Ciudad</label>
        <select name="idciudad">
            <?php while ($ciudad = mysqli_fetch_assoc($resultado)) { ?>
                <option value="<?php echo $ciudad['id'] ?>"><?php echo $ciudad['ciudad'] ?></option>
            <?php } ?>

        </select>
        <br>
        <label>Dirección</label>
        <input type="text" name="direccion"> <br>
        <label for="">Telefono</label>
        <input type="number" name="telefono"> <br>
        <label for="correo">Correo Electronico</label>
        <input type="email" name="correo">
        <input type="submit" value="Registrar">
    </form>
</body>

</html>