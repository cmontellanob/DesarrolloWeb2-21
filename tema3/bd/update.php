<?php
include("conexion.php");
$id=$_POST['id'];

$nombre=$_POST['nombre'];
$ciudad=$_POST['idciudad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];

$nombre_fotografia=$_FILES['fotografia']['name'];
$nombre_fotografia_temporal=$_FILES['fotografia']['tmp_name'];

copy($nombre_fotografia_temporal,"images/".$nombre_fotografia);


$sql="UPDATE lugares SET fotografia='$nombre_fotografia', nombre='$nombre',idciudad=$ciudad,telefono=$telefono,direccion='$direccion',correoelectronico='$correo' WHERE id=".$id;

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se edito con éxito</div>
<meta http-equiv="refresh" content="3; url=read.php">