<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$idciudad=$_POST['idciudad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];

$sql="INSERT INTO lugares(nombre,idciudad,telefono,direccion,correoelectronico)
values ('$nombre',$idciudad,$telefono,'$direccion','$correo') ";

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se inserto con éxito</div>
<meta http-equiv="refresh" content="3; url=read.php">