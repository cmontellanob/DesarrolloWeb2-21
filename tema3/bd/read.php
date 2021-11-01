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
    $sql = "SELECT fotografia,nombre,lugares.id,ciudad,direccion,telefono,correoelectronico FROM lugares 
    left join ciudades on lugares.idciudad=ciudades.id";
    if (isset($_GET['buscar'])) {
        $buscar = $_GET['buscar'];
        $sql .= " WHERE nombre LIKE '%$buscar%'";
    }
    if (isset($_GET['orden'])) {
        $sql .= " ORDER BY " . $_GET['orden'];
    }


    $resultado = mysqli_query($conn, $sql);
    ?>
    <form action="read.php" method="GET">
        <label for="buscar">nombre a buscar</label>
        <input type="text" name="buscar" value="<?php echo isset($buscar) ? $buscar : ''; ?>">
        <input type="submit" value="buscar">
    </form>
    <table border="1">
        <tr>
            <th>Fotografia </th>
            <th><a href="read.php?orden=nombre">Nombre</a> </th>
            <th><a href="read.php?orden=ciudad">Ciudad</a> </th>
            <th><a href="read.php?orden=direccion">Dirección</a> </th>
            <th><a href="read.php?orden=telefono">Teléfono</a> </th>
            <th><a href="read.php?orden=correoelectronico">Correo Electrónico</a> </th>
            <th>Operaciones</th>

        </tr>
        <?php while ($fila = mysqli_fetch_array($resultado)) { ?>
            <tr>
            <td><img src="images/<?php echo $fila['fotografia']; ?>" alt="" width="100px"></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['ciudad']; ?></td>
                <td><?php echo $fila['direccion']; ?></td>
                <td><?php echo $fila['telefono']; ?></td>
                <td><?php echo $fila['correoelectronico']; ?></td>
                <td><a href="frm_update.php?id=<?php echo $fila['id']; ?>">Editar</a>
                    <a href="delete.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
                </td>

            </tr>
        <?php } ?>
        <a href="frm_create.php">Crear</a>
</body>

</html>