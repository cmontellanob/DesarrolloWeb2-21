<?php
include("conexion.php");
$id=$_GET['id'];


$sql="DELETE  from libros WHERE id=".$id;

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se Elimino con éxito</div>
