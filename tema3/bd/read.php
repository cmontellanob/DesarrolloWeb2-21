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
    $sql = "SELECT * FROM lugares";
    $resultado = mysqli_query($conn, $sql);
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
            
        </tr>
        <?php while($fila = mysqli_fetch_array($resultado)){ ?>
            <tr>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['idciudad']; ?></td>
            <td><?php echo $fila['direccion']; ?></td>
            <td><?php echo $fila['telefono']; ?></td>
            <td><?php echo $fila['correoelectronico']; ?></td>

            </tr>
        <?php } ?>
</body>
</html>