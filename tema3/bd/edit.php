<?php
include("conexion.php");
$id=$_POST['id'];

$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];

$sql="UPDATE lugares SET nombre='$nombre',idciudad=$ciudad,telefono=$telefono,direccion='$direccion',correoelectronico='$correo' WHERE id=".$id;

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se edito con éxito</div>
<meta http-equiv="refresh" content="3; url=read.php">