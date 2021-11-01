<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$idciudad=$_POST['idciudad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];


$nombre_fotografia=$_FILES['fotografia']['name'];
$nombre_fotografia_temporal=$_FILES['fotografia']['tmp_name'];

copy($nombre_fotografia_temporal,"images/".$nombre_fotografia);

$sql="INSERT INTO lugares(fotografia,nombre,idciudad,telefono,direccion,correoelectronico)
values ('$nombre_fotografia','$nombre',$idciudad,$telefono,'$direccion','$correo') ";

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se inserto con éxito</div>
<meta http-equiv="refresh" content="3; url=read.php">