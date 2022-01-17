<?php include 'conexion.php';
$sql = "SELECT imagen,titulo,autor,anio FROM libros";
if (isset($_GET['orden'])) {
    $sql .= " ORDER BY " . $_GET['orden'];
}
$resultado = mysqli_query($conn, $sql);
?>
<table border="1">
    <tr>
        <th>Imagen </th>
        <th><a href="javascript:ordenar('titulo')">Titulo</a> </th>
        <th><a href="javascript:ordenar('autor')">Autor</a> </th>
        <th><a href="javascript:ordenar('anio')">Año</a> </th>
        <th>Operaciones</th>

    </tr>
    <?php while ($fila = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><img src="images/<?php echo $fila['imagen']; ?>" alt="" width="100px"></td>
            <td><?php echo $fila['titulo']; ?></td>
            <td><?php echo $fila['autor']; ?></td>
            <td><?php echo $fila['anio']; ?></td>
            <td>
                <a href="javascript:eliminar(<?php echo $fila['id']; ?>)">Eliminar</a>
            </td>

        </tr>
    <?php } ?>